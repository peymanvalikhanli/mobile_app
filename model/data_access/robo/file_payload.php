<?php

/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 7/26/17 AD
 * Time: 11:02
 */
class file_payload
{

    private static $public_function = "public static function ";

    public static function lang_file($classname, $table)
    {
        $file = "";
        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $Comment = $table[$index_table]['Comment'];
            $Field = $table[$index_table]['Field'];

            $file .= '"' . $Field . '" : "' . $Comment . '",
            ';
        }

        return $file;
    }

    public static function access_file($classname, $table)
    {
        $file = "<?php
            require_once '../model/database/data.php';
            class access_$classname {

            //=========== get $classname \n

            " . self::$public_function . "get_$classname() {

            " . '$data = data::selects("`' . $classname . '`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }' . "

            ";
        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= self::$public_function . "get_" . $classname . "_by_" . $field . "(\$" . $field . ") {

            " . '$data = data::selects("`' . $classname . '`", "`' . $field . '` = \'$' . $field . '\'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }';
        }

        $where_field = $table[0]['Field'];

        $arg = '$' . $table[0]['Field'];
        $arg_set = "`" . $table[0]['Field'] . "`= '$" . $table[0]['Field'] . "'";

        for ($i = 1; $i < count($table); $i++) {
            $arg .= ' , $' . $table[$i]['Field'];
            $arg_set .= ", `" . $table[$i]['Field'] . "`= '$" . $table[$i]['Field'] . "'";
        }

        $file .= "
        //=========== edit $classname \n

        " . self::$public_function . "edit_$classname($arg) {

        " . '         return data::update("`' . $classname . '`", "' . $arg_set . '", "`' . $where_field . '` = $' . $where_field . '");
                }' . "

            ";
        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= self::$public_function . "edit_" . $classname . "_by_" . $field . "($arg) {

        " . ' return data::update("`' . $classname . '`", "' . $arg_set . '", "`' . $field . '` = $' . $field . '");
                }';
        }

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= self::$public_function . "edit_" . "$classname" . "_" . $field . "_by_" . $where_field . "(" . '$' . $where_field . ', $' . $field . ") {

        " . ' return data::update("`' . $classname . '`", "`' . $field . '`= \'$' . $field . '\'", "`' . $where_field . '` = $' . $where_field . '");
                }';
        }

        $file .= "
        //=========== delete $classname \n

        " . self::$public_function . "delete_$classname" . '_by_' . "$where_field (\$$where_field) {

        " . '         return data::delete("`' . $classname . '`", "`' . $where_field . '` = $' . $where_field . '");
                }' . "

            ";

        $arg = '$' . $table[1]['Field'];
        $arg_set = "'$" . $table[1]['Field'] . "'";
        $col = $table[1]['Field'];

        for ($i = 2; $i < (count($table) - 1); $i++) {
            $col .= ', ' . $table[$i]['Field'];
            $arg .= ' , $' . $table[$i]['Field'];
            $arg_set .= ", '$" . $table[$i]['Field'] . "'";
        }

        $file .= "
        //=========== set $classname \n

        " . self::$public_function . "set_$classname ($arg) {

        " . '         return data::insertinto("`' . $classname . '`","' . $col . '" , "' . $arg_set . '");
                }' . "

            ";

        $file .= "
        }";


        return $file;
    }

    public static function access_file_view($classname, $table)
    {
        $file = "<?php
            require_once '../model/database/data.php';
            class access_$classname {

            //=========== get $classname \n

            " . self::$public_function . "get_$classname() {

            " . '$data = data::selects("`' . $classname . '`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }' . "

            ";

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= self::$public_function . "get_" . $classname . "_by_" . $field . "(\$" . $field . ") {

            " . '$data = data::selects("`' . $classname . '`", "`' . $field . '` = \'$' . $field . '\'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }';
        }
        $file .= '
        }';
        return $file;
    }


    public static function controller_file($Entity, $table)
    {

        $file = "<?php

        ".'header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
        '."header('P3P: CP=".'"CAO PSA OUR"'."'); // Makes IE to support cookies
        ".'header("Content-Type: application/json; charset=utf-8");
'."
        require_once '../model/data_access/access_$Entity.php';
        require_once '../model/data_access/lang.php';
        require_once 'controller_main_function.php';

        ob_start();
        session_cache_expire();
        session_start();


        " . '
        $userAccess =null; //controller_main_function::get_access($_SESSION["user"]["ID"]);
        $debugMode =true;

        $request_body = file_get_contents('."'php://input'".');
        $request =(array) json_decode($request_body, TRUE);
        if(isset($request["act"])) {
            $_REQUEST=$request;
        }

        if (isset($_REQUEST[\'act\']) && $_REQUEST[\'act\'] != \'\' && $_REQUEST[\'act\'] != null) {

    switch ($_REQUEST[\'act\']) {

        //______________ get act

        case \'' . $Entity . '_get\':
            if(!isset($userAccess["get_' . $Entity . '"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
            $result = access_' . $Entity . '::get_' . $Entity . '();
            controller_main_function::send_result($result);
        break;

';

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '
            case \'' . $Entity . '_get_by_' . $field . '\':
                if(!isset($userAccess["get_' . $Entity . '"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::get_' . $Entity . '_by_' . $field . '($_REQUEST["' . $field . '"]);
                controller_main_function::send_result($result);
            break;
            ';
        }

        $where_field = $table[0]['Field'];

        $arg = '"' . $table[0]['Field'] . '"';
        $arg_set = '$_REQUEST["' . $table[0]['Field'] . '"]';;

        for ($i = 1; $i < count($table); $i++) {
            $arg .= ' ,"' . $table[$i]['Field'] . '"';
            $arg_set .= ',$_REQUEST["' . $table[$i]['Field'] . '"]';
        }

        $file .= '//_____________update act

            case \'' . $Entity . '_edit\':
            if(!isset($userAccess["edit_' . $Entity . '"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array(' . $arg . '));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::edit_' . $Entity . '(' . $arg_set . ');
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';


        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];

            $file .= '
            case \'' . $Entity . '_edit_by_' . $field . '\':
            if(!isset($userAccess["edit_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array(' . $arg . '));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::edit_' . $Entity . '_by_' . $field . '(' . $arg_set . ');
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';

        }

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '
            case \'' . $Entity . '_edit_' . $field . '_by_' . $where_field . '\':
            if(!isset($userAccess["edit_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $where_field . '","' . $field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::edit_' . $Entity . '_' . $field . '_by_' . $where_field . '($_REQUEST["' . $where_field . '"],$_REQUEST["' . $field . '"]);
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';
        }

        $file .= '
            case \'' . $Entity . '_delete\':
            if(!isset($userAccess["delete_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $where_field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::delete_' . $Entity . '_by_' . $where_field . '($_REQUEST["' . $where_field . '"]);
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';

        $arg = '"' . $table[1]['Field'] . '"';
        $arg_set = '$_REQUEST["' . $table[1]['Field'] . '"]';;

        for ($i = 2; $i < (count($table) - 1); $i++) {
            $arg .= ' ,"' . $table[$i]['Field'] . '"';
            $arg_set .= ',$_REQUEST["' . $table[$i]['Field'] . '"]';
        }

        $file .= '
            case \'' . $Entity . '_set\':
            if(!isset($userAccess["set_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array(' . $arg . '));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::set_' . $Entity . '(' . $arg_set . ');
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';

        // get_$classname()


        $file .= '
               }
        }else {
        //TODO: set page url when not set act
         controller_main_function::send_msg("please enter the action", "Error");
    }';

        return $file;
    }


    public static function controller_file_DD($Entity, $table)
    {

        $file =
         $Entity . '_get()';

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .=  $Entity . '_get_by_' . $field . '("' . $field . '")

            ';
        }

        $where_field = $table[0]['Field'];

        $arg = '"' . $table[0]['Field'] . '"';
        $arg_set = '$_REQUEST["' . $table[0]['Field'] . '"]';;

        for ($i = 1; $i < count($table); $i++) {
            $arg .= ' ,"' . $table[$i]['Field'] . '"';
            $arg_set .= ',$_REQUEST["' . $table[$i]['Field'] . '"]';
        }

        $file .= '//_____________update act

            ' . $Entity . '_edit(' . $arg . ')

            ';


        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];

            $file .= '
            ' . $Entity . '_edit_by_' . $field . '(' . $arg . ')

            ';

        }

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '
            ' . $Entity . '_edit_' . $field . '_by_' . $where_field . '("' . $where_field . '","' . $field . '")

            ';
        }

        $file .= '
            ' . $Entity . '_delete\'("' . $where_field . '")

            ';

        $arg = '"' . $table[1]['Field'] . '"';
        $arg_set = '$_REQUEST["' . $table[1]['Field'] . '"]';;

        for ($i = 2; $i < (count($table) - 1); $i++) {
            $arg .= ' ,"' . $table[$i]['Field'] . '"';
            $arg_set .= ',$_REQUEST["' . $table[$i]['Field'] . '"]';
        }

        $file .= '
            ' . $Entity . '_set\'(' . $arg . ')

            ';



        return $file;
    }

    public static function data_validation_file($Entity, $table)
    {

        $file ='{ "":"" ';


        for ($index_table = 0; $index_table < count($table); $index_table++) {




            $field = $table[$index_table]['Field'];
            $Type = $table[$index_table]['Type'];
            $Null = $table[$index_table]['Null'];
            $Key = $table[$index_table]['Key'];
            $Default = $table[$index_table]['Default'];
            $Extra = $table[$index_table]['Extra'];

            $file .= ',"'.$field .'" : { "Type" : "'.$Type .'" , "isNull" : "'.$Null.'" , "Key" : "'.$Key.'" , "Default" : "'.$Default.'" , "Extre" : "'.$Extra .'"}
            ';


        }


        $file .= '}';



        return $file;
    }


    public static function API_file($Entity, $table)
    {

        $file = "<?php
        require_once 'url_connection.php';

        ".'$ = new url_connection("http://w3pa.com/users/controller_robo/");'."

        require_once '../model/data_access/access_$Entity.php';
        require_once '../model/data_access/lang.php';
        require_once 'controller_main_function.php';

        ob_start();
        session_cache_expire();
        session_start();


        " . '
        $userAccess = controller_main_function::get_access($_SESSION["user"]["ID"]);
        $debugMode =true;

        if (isset($_REQUEST[\'act\']) && $_REQUEST[\'act\'] != \'\' && $_REQUEST[\'act\'] != null) {

    switch ($_REQUEST[\'act\']) {

        //______________ get act

        case \'' . $Entity . '_get\':
            if(!isset($userAccess["get_' . $Entity . '"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
            $result = access_' . $Entity . '::get_' . $Entity . '();
            controller_main_function::send_result($result);
        break;

';

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '
            case \'' . $Entity . '_get_by_' . $field . '\':
                if(!isset($userAccess["get_' . $Entity . '"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::get_' . $Entity . '_by_' . $field . '($_REQUEST["' . $field . '"]);
                controller_main_function::send_result($result);
            break;
            ';
        }

        $where_field = $table[0]['Field'];

        $arg = '"' . $table[0]['Field'] . '"';
        $arg_set = '$_REQUEST["' . $table[0]['Field'] . '"]';;

        for ($i = 1; $i < count($table); $i++) {
            $arg .= ' ,"' . $table[$i]['Field'] . '"';
            $arg_set .= ',$_REQUEST["' . $table[$i]['Field'] . '"]';
        }

        $file .= '//_____________update act

            case \'' . $Entity . '_edit\':
            if(!isset($userAccess["edit_' . $Entity . '"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array(' . $arg . '));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::edit_' . $Entity . '(' . $arg_set . ');
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';


        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];

            $file .= '
            case \'' . $Entity . '_edit_by_' . $field . '\':
            if(!isset($userAccess["edit_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array(' . $arg . '));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::edit_' . $Entity . '_by_' . $field . '(' . $arg_set . ');
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';

        }

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '
            case \'' . $Entity . '_edit_' . $field . '_by_' . $where_field . '\':
            if(!isset($userAccess["edit_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $where_field . '","' . $field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::edit_' . $Entity . '_' . $field . '_by_' . $where_field . '($_REQUEST["' . $where_field . '"],$_REQUEST["' . $field . '"]);
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';
        }

        $file .= '
            case \'' . $Entity . '_delete\':
            if(!isset($userAccess["delete_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $where_field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::delete_' . $Entity . '_by_' . $where_field . '($_REQUEST["' . $where_field . '"]);
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';

        $arg = '"' . $table[1]['Field'] . '"';
        $arg_set = '$_REQUEST["' . $table[1]['Field'] . '"]';;

        for ($i = 2; $i < (count($table) - 1); $i++) {
            $arg .= ' ,"' . $table[$i]['Field'] . '"';
            $arg_set .= ',$_REQUEST["' . $table[$i]['Field'] . '"]';
        }

        $file .= '
            case \'' . $Entity . '_set\':
            if(!isset($userAccess["set_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array(' . $arg . '));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::set_' . $Entity . '(' . $arg_set . ');
                //controller_main_function::send_result($result);
                //$result = array(\'data\'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            ';

        // get_$classname()


        $file .= '
               }
        }else {
        //TODO: set page url when not set act
        header(\'Location: url\');
    }';

        return $file;
    }


    public static function controller_file_view($Entity, $table)
    {
        $file = "<?php

        //if you have rol policy set \$_session[rols] else not set session

        require_once '../model/data_access/access_$Entity.php';
        require_once '../model/data_access/lang.php';
        require_once 'controller_main_function.php';

        ob_start();
        session_cache_expire();
        session_start();

        " . '
         $userAccess = controller_main_function::get_access($_SESSION["user"]["ID"]);
         $debugMode =true;

        if (isset($_REQUEST[\'act\']) && $_REQUEST[\'act\'] != \'\' && $_REQUEST[\'act\'] != null) {

    switch ($_REQUEST[\'act\']) {

        //______________ get act

        case \'' . $Entity . '_get\':
        if(!isset($userAccess["get_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
            $result = access_' . $Entity . '::get_' . $Entity . '();
            controller_main_function::send_result($result);
        break;

';

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '
            case \'' . $Entity . '_get_by_' . $field . '\':
            if(!isset($userAccess["get_' . $Entity . '"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("' . $field . '"));
                if (!isset($valid_data[\'is_valid\']) || $valid_data[\'is_valid\'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_' . $Entity . '::get_' . $Entity . '_by_' . $field . '($_REQUEST["' . $field . '"]);
                controller_main_function::send_result($result);
            break;
            ';
        }
        $file .= '
        }
        }';

        return $file;
    }

    public static function js_connectin_file($Entity, $table)
    {
        $class_name = $Entity . "_connection";
        $where_field = $table[0]['Field'];


        $arg = $table[1]['Field'] . ':' . $table[1]['Field'];
        $arg_set = $table[1]['Field'];

        for ($i = 2; $i < (count($table) - 1); $i++) {
            $arg .= ' ,' . $table[$i]['Field'] . ':' . $table[$i]['Field'];
            $arg_set .= ',' . $table[$i]['Field'];
        }

        $file = "
         var grid_$Entity;
         var $class_name = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        " . '
        ' . $class_name . '.get_call_back = function (data){
            //TODO: set code after the server response
            if(' . $class_name . '.debug_mode){
                console.log(data);
            }
        };
        ' . $class_name . '.get = function (){
            var param = {"act": "' . $Entity . '_get"};
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_call_back , "POST");
        };'
            . '
            //_____________ delete function
            '
            . $class_name . '.delete_call_back = function (data){
            //TODO: set code after the server response
            if(' . $class_name . '.debug_mode){
                console.log(data);
            }
            };

         ' . $class_name . '.delete = function (' . $where_field . '){
            var param = {act: "' . $Entity . '_delete",
            ' . $where_field . ': ' . $where_field . '};
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.delete_call_back , "POST");
        };'
            . '
            //_____________ set function
            '
            . $class_name . '.set_call_back = function (data){
            //TODO: set code after the server response
            if(' . $class_name . '.debug_mode){
                console.log(data);
            }
            };

         ' . $class_name . '.set = function (' . $arg_set . '){
            var param = {act: "' . $Entity . '_set",
            ' . $arg . '};
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.set_call_back , "POST");
        };'
            . '
            //_____________ grid function
            '
            . $class_name . '.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(' . $class_name . '.debug_mode){
            console.log(data);
            }

            grid_' . $Entity . ' = new PSCO_grid(\'grid_' . $Entity . '\');

            grid_' . $Entity . '.cols = [
            ';

        for ($i = 0; $i < count($table); $i++) {

            $file .= '{name: \'' . $table[$i]['Field'] . '\', hidden: false, type: \'text\'}';
            if ($i < (count($table) - 1)) {
                $file .= ',';
            }
        }

        $file .= '];

        grid_' . $Entity . '.RightToLeft = false;

       // grid_' . $Entity . '.actions = [{name: \'delete\', ClassName: \'glyphicon glyphicon-remove\', attribute: {onclick: \'deleteIt()\'}}];

        grid_' . $Entity . '.data = data;

        grid_' . $Entity . '.render();

        };
        ' . $class_name . '.get_grid = function (){
            var param = {"act": "' . $Entity . '_get"};
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_grid_call_back , "POST");
        };';
        //________________ get function
        $file .= '
        //________________get functions
        ';
        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '' .

                $class_name . '.get_by_' . $field . '_call_back = function (data){
                //TODO: set code after the server response
                if(' . $class_name . '.debug_mode){
                    console.log(data);
                }
            };
        ' . $class_name . '.get_by_' . $field . ' = function (' . $field . '){
                var param = {"act": "' . $Entity . '_get_by_' . $field . '",
            ' . $field . ' : ' . $field . '
            };
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_by_' . $field . '_call_back , "POST");
        };

        ' . $class_name . '.get_by_' . $field . '_grid = function (' . $field . '){
                var param = {"act": "' . $Entity . '_get_by_' . $field . '",
            ' . $field . ' : ' . $field . '
            };
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_grid_call_back , "POST");
        };
        ';
        }
        //_______________________edit function
        $file .= '
        //________________edit functions
        ';
        $where_field = $table[0]['Field'];

        $arg = $table[0]['Field'] . ' : ' . $table[0]['Field'];
        $arg_set = $table[0]['Field'];

        for ($i = 1; $i < count($table); $i++) {
            $arg .= ' ,' . $table[$i]['Field'] . ' : ' . $table[$i]['Field'];
            $arg_set .= ',' . $table[$i]['Field'];
        }

        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '' .

                $class_name . '.edit_by_' . $field . '_call_back = function (data){
                //TODO: set code after the server response
                if(' . $class_name . '.debug_mode){
                    console.log(data);
                }
            };
        ' . $class_name . '.edit_by_' . $field . ' = function (' . $arg_set . '){
                var param = {"act": "' . $Entity . '_edit_by_' . $field . '",
            ' . $arg . '
            };
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.edit_by_' . $field . '_call_back , "POST");
        };' .
                $class_name . '.edit_' . $field . '_by_' . $where_field . '_call_back = function (data){
                //TODO: set code after the server response
                if(' . $class_name . '.debug_mode){
                    console.log(data);
                }
            };
        ' . $class_name . '.edit_' . $field . '_by_' . $where_field . ' = function (' . $where_field . ', ' . $field . '){
                var param = {"act": "' . $Entity . '_edit_' . $field . '_by_' . $where_field . '",
            ' . $field . ' : ' . $field . ',
            ' . $where_field . ' : ' . $where_field . '
            };
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.edit_' . $field . '_by_' . $where_field . '_call_back , "POST");
        };';
        }


        return $file;
    }


    public static function js_connectin_file_view($Entity, $table)
    {
        $class_name = $Entity . "_connection";
        $where_field = $table[0]['Field'];


        $arg = $table[1]['Field'] . ':' . $table[1]['Field'];
        $arg_set = $table[1]['Field'];

        for ($i = 2; $i < (count($table) - 1); $i++) {
            $arg .= ' ,' . $table[$i]['Field'] . ':' . $table[$i]['Field'];
            $arg_set .= ',' . $table[$i]['Field'];
        }

        $file = "
         var grid_$Entity;
         var $class_name = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        " . '
        ' . $class_name . '.get_call_back = function (data){
            //TODO: set code after the server response
            if(' . $class_name . '.debug_mode){
                console.log(data);
            }
        };
        ' . $class_name . '.get = function (){
            var param = {"act": "' . $Entity . '_get"};
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_call_back , "POST");
        };'
            . '
            //_____________ grid function
            '
            . $class_name . '.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(' . $class_name . '.debug_mode){
            console.log(data);
            }

            grid_' . $Entity . ' = new PSCO_grid(\'grid_' . $Entity . '\');

            grid_' . $Entity . '.cols = [
            ';

        for ($i = 0; $i < count($table); $i++) {

            $file .= '{name: \'' . $table[$i]['Field'] . '\', hidden: false, type: \'text\'}';
            if ($i < (count($table) - 1)) {
                $file .= ',';
            }
        }

        $file .= '];

        grid_' . $Entity . '.RightToLeft = false;

       // grid_' . $Entity . '.actions = [{name: \'delete\', ClassName: \'glyphicon glyphicon-remove\', attribute: {onclick: \'deleteIt()\'}}];

        grid_' . $Entity . '.data = data;

        grid_' . $Entity . '.render();

        };
        ' . $class_name . '.get_grid = function (){
            var param = {"act": "' . $Entity . '_get"};
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_grid_call_back , "POST");
        };';
        //________________ get function
        $file .= '
        //________________get functions
        ';
        for ($index_table = 0; $index_table < count($table); $index_table++) {
            $field = $table[$index_table]['Field'];
            $file .= '' .

                $class_name . '.get_by_' . $field . '_call_back = function (data){
                //TODO: set code after the server response
                if(' . $class_name . '.debug_mode){
                    console.log(data);
                }
            };
        ' . $class_name . '.get_by_' . $field . ' = function (' . $field . '){
                var param = {"act": "' . $Entity . '_get_by_' . $field . '",
            ' . $field . ' : ' . $field . '
            };
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_by_' . $field . '_call_back , "POST");
        };

        ' . $class_name . '.get_by_' . $field . '_grid = function (' . $field . '){
                var param = {"act": "' . $Entity . '_get_by_' . $field . '",
            ' . $field . ' : ' . $field . '
            };
            ajax.sender_data_json_by_url_callback(' . $class_name . '.controller_url , param , ' . $class_name . '.get_grid_call_back , "POST");
        };
        ';
        }

        return $file;
    }

}