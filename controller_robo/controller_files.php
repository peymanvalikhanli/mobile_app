<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
header("Content-Type: application/json; charset=utf-8");

require_once '../model/data_access/access_files.php';
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

        case 'files_get':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $result = access_files::get_files();
            controller_main_function::send_result($result);
            break;


        case 'files_get_by_ID':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_ID($_REQUEST["ID"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_user_id':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("user_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_user_id($_REQUEST["user_id"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_type':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("type"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_type($_REQUEST["type"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_title':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("title"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_title($_REQUEST["title"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_comment':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("comment"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_comment($_REQUEST["comment"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_date':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("date"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_date($_REQUEST["date"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_created_by':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("created_by"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_created_by($_REQUEST["created_by"]);
            controller_main_function::send_result($result);
            break;

        case 'files_get_by_creationDate':
            if (!isset($userAccess["get_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::get_files_by_creationDate($_REQUEST["creationDate"]);
            controller_main_function::send_result($result);
            break;
        //_____________update act

        case 'files_edit':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_ID($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_user_id':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_user_id($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_type':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_type($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_title':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_title($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_comment':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_comment($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_date':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_date($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_created_by':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_created_by($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_by_creationDate':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id", "type", "title", "comment", "date", "created_by", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_by_creationDate($_REQUEST["ID"], $_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_ID_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "ID"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_ID_by_ID($_REQUEST["ID"], $_REQUEST["ID"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_user_id_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "user_id"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_user_id_by_ID($_REQUEST["ID"], $_REQUEST["user_id"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_type_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "type"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_type_by_ID($_REQUEST["ID"], $_REQUEST["type"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_title_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "title"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_title_by_ID($_REQUEST["ID"], $_REQUEST["title"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_comment_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "comment"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_comment_by_ID($_REQUEST["ID"], $_REQUEST["comment"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_date_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "date"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_date_by_ID($_REQUEST["ID"], $_REQUEST["date"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_created_by_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "created_by"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_created_by_by_ID($_REQUEST["ID"], $_REQUEST["created_by"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_edit_creationDate_by_ID':
            if (!isset($userAccess["edit_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID", "creationDate"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::edit_files_creationDate_by_ID($_REQUEST["ID"], $_REQUEST["creationDate"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_delete':
            if (!isset($userAccess["delete_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("ID"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::delete_files_by_ID($_REQUEST["ID"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;

        case 'files_set':
            if (!isset($userAccess["set_files"]) && !$debugMode) {
                controller_main_function::send_msg(lang::$not_access, lang::$error);
            }
            $valid_data = controller_main_function::check_validation(array("user_id", "type", "title", "comment"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(lang::$invalid_data, lang::$error);
            }
            $result = access_files::set_files($_REQUEST["user_id"], $_REQUEST["type"], $_REQUEST["title"], $_REQUEST["comment"], $_REQUEST["date"], $_REQUEST["created_by"]);
            //controller_main_function::send_result($result);
            //$result = array('data'=> true);
            //controller_main_function::send_result($result);
           // controller_main_function::send_msg($result, lang::$message, "success");
            controller_main_function::send_msg(lang::$success, lang::$message, "success");
            break;
    }
} else {
    //TODO: set page url when not set act
    controller_main_function::send_msg("please enter the action", "Error");
}