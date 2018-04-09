<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
header("Content-Type: application/json; charset=utf-8");

require_once '../model/data_access/access_user.php';
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
if (isset($_REQUEST['act']) && $_REQUEST['act'] != '' && $_REQUEST['act'] != null) {

    switch ($_REQUEST['act']) {

        //______________ get act

        case 'user_get':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $result = access_user::get_user();
            controller_main_function::send_result($result);
            break;


        case 'user_get_by_id':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_id($_REQUEST["id"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_awareness_type_id':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("awareness_type_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_awareness_type_id($_REQUEST["awareness_type_id"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_profile_type_id_suggest':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("profile_type_id_suggest"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_profile_type_id_suggest($_REQUEST["profile_type_id_suggest"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_profile_type_id_choice':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("profile_type_id_choice"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_profile_type_id_choice($_REQUEST["profile_type_id_choice"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_user_role_id':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("user_role_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_user_role_id($_REQUEST["user_role_id"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_company_id':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("company_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_company_id($_REQUEST["company_id"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_first_name':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("first_name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_first_name($_REQUEST["first_name"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_last_name':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("last_name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_last_name($_REQUEST["last_name"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_email':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("email"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_email($_REQUEST["email"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_password':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("password"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_password($_REQUEST["password"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_set_password_token':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("set_password_token"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_set_password_token($_REQUEST["set_password_token"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_roles':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("roles"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_roles($_REQUEST["roles"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_awareness_types_info':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("awareness_types_info"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_awareness_types_info($_REQUEST["awareness_types_info"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_phone':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("phone"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_phone($_REQUEST["phone"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_birthday':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("birthday"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_birthday($_REQUEST["birthday"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_social_security_number':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("social_security_number"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_social_security_number($_REQUEST["social_security_number"]);
            controller_main_function::send_result($result);
            break;

        case 'user_get_by_profile_completed':
            if (!isset($userAccess["get_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::get_user_by_profile_completed($_REQUEST["profile_completed"]);
            controller_main_function::send_result($result);
            break;
        //_____________update act

        case 'user_edit':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_id($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_awareness_type_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_awareness_type_id($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_profile_type_id_suggest':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_profile_type_id_suggest($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_profile_type_id_choice':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_profile_type_id_choice($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_user_role_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_user_role_id($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_company_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_company_id($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_first_name':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_first_name($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_last_name':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_last_name($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_email':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_email($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_password':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_password($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_set_password_token':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_set_password_token($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_roles':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_roles($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_awareness_types_info':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_awareness_types_info($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_phone':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_phone($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_birthday':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_birthday($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_social_security_number':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_social_security_number($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_by_profile_completed':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_by_profile_completed($_REQUEST["id"], $_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_id_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_id_by_id($_REQUEST["id"], $_REQUEST["id"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_awareness_type_id_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_type_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_awareness_type_id_by_id($_REQUEST["id"], $_REQUEST["awareness_type_id"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_profile_type_id_suggest_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "profile_type_id_suggest"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_profile_type_id_suggest_by_id($_REQUEST["id"], $_REQUEST["profile_type_id_suggest"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_profile_type_id_choice_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "profile_type_id_choice"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_profile_type_id_choice_by_id($_REQUEST["id"], $_REQUEST["profile_type_id_choice"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_user_role_id_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "user_role_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_user_role_id_by_id($_REQUEST["id"], $_REQUEST["user_role_id"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_company_id_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "company_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_company_id_by_id($_REQUEST["id"], $_REQUEST["company_id"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_first_name_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "first_name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_first_name_by_id($_REQUEST["id"], $_REQUEST["first_name"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_last_name_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "last_name"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_last_name_by_id($_REQUEST["id"], $_REQUEST["last_name"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_email_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "email"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_email_by_id($_REQUEST["id"], $_REQUEST["email"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_password_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "password"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_password_by_id($_REQUEST["id"], $_REQUEST["password"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_set_password_token_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "set_password_token"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_set_password_token_by_id($_REQUEST["id"], $_REQUEST["set_password_token"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_roles_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "roles"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_roles_by_id($_REQUEST["id"], $_REQUEST["roles"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_awareness_types_info_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "awareness_types_info"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_awareness_types_info_by_id($_REQUEST["id"], $_REQUEST["awareness_types_info"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_phone_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "phone"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_phone_by_id($_REQUEST["id"], $_REQUEST["phone"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_birthday_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "birthday"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_birthday_by_id($_REQUEST["id"], $_REQUEST["birthday"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_social_security_number_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "social_security_number"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_social_security_number_by_id($_REQUEST["id"], $_REQUEST["social_security_number"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_edit_profile_completed_by_id':
            if (!isset($userAccess["edit_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id", "profile_completed"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::edit_user_profile_completed_by_id($_REQUEST["id"], $_REQUEST["profile_completed"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_delete':
            if (!isset($userAccess["delete_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::delete_user_by_id($_REQUEST["id"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'user_set':
            if (!isset($userAccess["set_user"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("awareness_type_id", "profile_type_id_suggest", "profile_type_id_choice", "user_role_id", "company_id", "first_name", "last_name", "email", "password", "set_password_token", "roles", "awareness_types_info", "phone", "birthday", "social_security_number"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_user::set_user($_REQUEST["awareness_type_id"], $_REQUEST["profile_type_id_suggest"], $_REQUEST["profile_type_id_choice"], $_REQUEST["user_role_id"], $_REQUEST["company_id"], $_REQUEST["first_name"], $_REQUEST["last_name"], $_REQUEST["email"], $_REQUEST["password"], $_REQUEST["set_password_token"], $_REQUEST["roles"], $_REQUEST["awareness_types_info"], $_REQUEST["phone"], $_REQUEST["birthday"], $_REQUEST["social_security_number"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

    }
} else {
    //TODO: set page url when not set act
    controller_main_function::send_msg("please enter the action", "Error");
}