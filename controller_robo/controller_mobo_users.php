<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
header("Content-Type: application/json; charset=utf-8");

require_once '../model/data_access/access_mobo_users.php';
require_once '../model/data_access/lang.php';
require_once 'controller_main_function.php';

ob_start();
session_cache_expire();
session_start();


$userAccess = null; //controller_main_function::get_access($_SESSION["user"]["ID"]);
$debugMode = true;

$request_body = file_get_contents('php://input');
$request = (array)json_decode($request_body, TRUE);
if (isset($request["act"])) {
    $_REQUEST = $request;
}

//print_r($_REQUEST);exit;

if (isset($_REQUEST['act']) && $_REQUEST['act'] != '' && $_REQUEST['act'] != null) {

    switch ($_REQUEST['act']) {

        //______________ get act

        case 'mobo_users_get':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users();
            controller_main_function::send_result($result);
            break;


        case 'mobo_users_get_by_ID':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_ID($_REQUEST["ID"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_tel':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("tel"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_tel($_REQUEST["tel"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_name':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_name($_REQUEST["name"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_last_name':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("last_name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_last_name($_REQUEST["last_name"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_national_cart':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("national_cart"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_national_cart($_REQUEST["national_cart"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_Birth_certificate':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("Birth_certificate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_Birth_certificate($_REQUEST["Birth_certificate"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_token':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("token"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_token($_REQUEST["token"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_created_by':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("created_by"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_created_by($_REQUEST["created_by"]);
            controller_main_function::send_result($result);
            break;

        case 'mobo_users_get_by_creationDate':
            if (!isset($userAccess["get_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::get_mobo_users_by_creationDate($_REQUEST["creationDate"]);
            controller_main_function::send_result($result);
            break;
        //_____________update act

        case 'mobo_users_edit':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_ID($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_tel':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_tel($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_name':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_name($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_last_name':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_last_name($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_national_cart':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_national_cart($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_Birth_certificate':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_Birth_certificate($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_token':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_token($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_created_by':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_created_by($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_by_creationDate':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel", "name", "last_name", "national_cart", "Birth_certificate", "token", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_by_creationDate($_REQUEST["ID"], $_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_ID_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "ID"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_ID_by_ID($_REQUEST["ID"], $_REQUEST["ID"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_tel_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "tel"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_tel_by_ID($_REQUEST["ID"], $_REQUEST["tel"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_name_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_name_by_ID($_REQUEST["ID"], $_REQUEST["name"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_last_name_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "last_name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_last_name_by_ID($_REQUEST["ID"], $_REQUEST["last_name"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_national_cart_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "national_cart"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_national_cart_by_ID($_REQUEST["ID"], $_REQUEST["national_cart"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_Birth_certificate_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "Birth_certificate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_Birth_certificate_by_ID($_REQUEST["ID"], $_REQUEST["Birth_certificate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_token_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "token"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_token_by_ID($_REQUEST["ID"], $_REQUEST["token"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_created_by_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "created_by"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_created_by_by_ID($_REQUEST["ID"], $_REQUEST["created_by"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_edit_creationDate_by_ID':
            if (!isset($userAccess["edit_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::edit_mobo_users_creationDate_by_ID($_REQUEST["ID"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_delete':
            if (!isset($userAccess["delete_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_mobo_users::delete_mobo_users_by_ID($_REQUEST["ID"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'mobo_users_set':

            if (!isset($userAccess["set_mobo_users"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }

            $valid_data = controller_main_function::check_validation(array("tel"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }

            $result = access_mobo_users::set_mobo_users($_REQUEST["tel"], $_REQUEST["name"], $_REQUEST["last_name"], $_REQUEST["national_cart"], $_REQUEST["Birth_certificate"], $_REQUEST["token"], 1);
            //controller_main_function::send_result($result);

            //________________________________
            //http://iraniansms.net/API/?action=SMS_SEND&username=Fonoontadbir&password=1234sibka4321%2F&api=1&from=1000&to=".$Mobile."&FLASH=0&text=1234
            $token= rand(1000,9999);
            $text_token = 'با سپاس از اعتماد شمااز کد زیر برای فعال سازی نرم افزار بیمه گرام استفاده کنید.'." ";
            $r = controller_main_function::sendsms($_REQUEST["tel"],$text_token.$token);
            access_mobo_users::edit_mobo_users_token_by_tel($_REQUEST["tel"],$token);
            $r=controller_main_function::telegram_send("".$_REQUEST["tel"]);
            $result = array('data' => "1");
            controller_main_function::send_result($result);
            //controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

    }
} else {
    //TODO: set page url when not set act
    controller_main_function::send_msg("please enter the action", "Error");
}