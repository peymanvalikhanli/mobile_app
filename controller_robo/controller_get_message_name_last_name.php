<?php

        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Credentials: true");
        header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
        header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
        header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
        header("Content-Type: application/json; charset=utf-8");

        require_once '../model/data_access/access_get_message_name_last_name.php';
        require_once '../model/data_access/lang.php';
        require_once 'controller_main_function.php';

        ob_start();
        session_cache_expire();
        session_start();


        
        $userAccess =null; //controller_main_function::get_access($_SESSION["user"]["ID"]);
        $debugMode =true;

        $request_body = file_get_contents('php://input');
        $request =(array) json_decode($request_body, TRUE);
        if(isset($request["act"])) {
            $_REQUEST=$request;
        }

        if (isset($_REQUEST['act']) && $_REQUEST['act'] != '' && $_REQUEST['act'] != null) {

    switch ($_REQUEST['act']) {

        //______________ get act

        case 'get_message_name_last_name_get':
            if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
            $result = access_get_message_name_last_name::get_get_message_name_last_name();
            controller_main_function::send_result($result);
        break;


            case 'get_message_name_last_name_get_by_ID':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_ID($_REQUEST["ID"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_tel':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("tel"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_tel($_REQUEST["tel"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_name':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("name"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_name($_REQUEST["name"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_last_name':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("last_name"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_last_name($_REQUEST["last_name"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_title':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("title"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_title($_REQUEST["title"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_text':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("text"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_text($_REQUEST["text"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_replay':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("replay"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_replay($_REQUEST["replay"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_replay_date':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("replay_date"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_replay_date($_REQUEST["replay_date"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_created_by':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("created_by"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_created_by($_REQUEST["created_by"]);
                controller_main_function::send_result($result);
            break;
            
            case 'get_message_name_last_name_get_by_creationDate':
                if(!isset($userAccess["get_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::get_get_message_name_last_name_by_creationDate($_REQUEST["creationDate"]);
                controller_main_function::send_result($result);
            break;
            //_____________update act

            case 'get_message_name_last_name_edit':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode ){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_ID($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_tel':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_tel($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_name':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_name($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_last_name':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_last_name($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_title':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_title($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_text':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_text($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_replay':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_replay($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_replay_date':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_replay_date($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_created_by':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_created_by($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_by_creationDate':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID" ,"tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by" ,"creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_by_creationDate($_REQUEST["ID"],$_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_ID_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","ID"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_ID_by_ID($_REQUEST["ID"],$_REQUEST["ID"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_tel_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","tel"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_tel_by_ID($_REQUEST["ID"],$_REQUEST["tel"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_name_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","name"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_name_by_ID($_REQUEST["ID"],$_REQUEST["name"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_last_name_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","last_name"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_last_name_by_ID($_REQUEST["ID"],$_REQUEST["last_name"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_title_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","title"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_title_by_ID($_REQUEST["ID"],$_REQUEST["title"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_text_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","text"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_text_by_ID($_REQUEST["ID"],$_REQUEST["text"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_replay_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","replay"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_replay_by_ID($_REQUEST["ID"],$_REQUEST["replay"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_replay_date_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","replay_date"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_replay_date_by_ID($_REQUEST["ID"],$_REQUEST["replay_date"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_created_by_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","created_by"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_created_by_by_ID($_REQUEST["ID"],$_REQUEST["created_by"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_edit_creationDate_by_ID':
            if(!isset($userAccess["edit_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID","creationDate"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::edit_get_message_name_last_name_creationDate_by_ID($_REQUEST["ID"],$_REQUEST["creationDate"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_delete':
            if(!isset($userAccess["delete_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("ID"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::delete_get_message_name_last_name_by_ID($_REQUEST["ID"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
            case 'get_message_name_last_name_set':
            if(!isset($userAccess["set_get_message_name_last_name"]) && !$debugMode){
                    controller_main_function::send_msg(lang::$not_access, lang::$error);
                    }
                $valid_data = controller_main_function::check_validation(array("tel" ,"name" ,"last_name" ,"title" ,"text" ,"replay" ,"replay_date" ,"created_by"));
                if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                    controller_main_function::send_msg(lang::$invalid_data, lang::$error);
                }
                $result = access_get_message_name_last_name::set_get_message_name_last_name($_REQUEST["tel"],$_REQUEST["name"],$_REQUEST["last_name"],$_REQUEST["title"],$_REQUEST["text"],$_REQUEST["replay"],$_REQUEST["replay_date"],$_REQUEST["created_by"]);
                //controller_main_function::send_result($result);
                //$result = array('data'=> true);
                //controller_main_function::send_result($result);
                controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
            
               }
        }else {
        //TODO: set page url when not set act
         controller_main_function::send_msg("please enter the action", "Error");
    }