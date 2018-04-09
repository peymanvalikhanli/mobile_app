<?php
/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 2/3/18 AD
 * Time: 23:09
 */


//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With, X-Custom-Header");
header('P3P: CP="CAO PSA OUR"'); // Makes IE to support cookies
header("Content-Type: application/json; charset=utf-8");

require_once '../model/data_access/access_user.php';
require_once '../model/data_access/access_startup.php';
require_once '../model/data_access/access_startup_user.php';
require_once '../model/data_access/lang.php';
require_once 'controller_main_function.php';


$userAccess = null; //controller_main_function::get_access($_SESSION["user"]["ID"]);
$debugMode = true;

$request_body = file_get_contents('php://input');
$request = (array)json_decode($request_body, TRUE);
if (isset($request["act"])) {
    $_REQUEST = $request;
}

//_____________ check Authorization
$tmp = array();
$tmp = getallheaders();
$user_token = array();
if (isset($tmp["Authorization"])) {
    require_once 'JWT.php';
    $token = str_replace("Bearer ", "", $tmp["Authorization"]);
    $user_token = JWT::decode($token, JWT::$publicKey, array('RS256'));
}
else{
    $result = array("login" => false);
    controller_main_function::send_result($result);
}
if(!isset($user_token->email)){
    $result = array("login" => false);
    controller_main_function::send_result($result);
}




if (isset($_REQUEST['act']) && $_REQUEST['act'] != '' && $_REQUEST['act'] != null) {

    switch ($_REQUEST['act']) {

        //______________ get act
//{act : 'lost_pass' , email : 'kossher'}
        case 'lost_pass':
            controller_main_function::send_msg("check your email", "success");
            break;

        case "set_pass":

            $result = array("result"=>true);
            controller_main_function::send_result($result);
            break;

        case 'check_login':
            try {
                if (isset($user_token->email)) {
                    if ($user_token->email != null && $user_token->email != '') {
                        $result = access_user::get_user_by_email($user_token->email);
                    } else {
                        $result = array("login" => false);
                    }
                } else {
                    $result = array("login" => false);
                }
                controller_main_function::send_result($result);
            }catch (Exception $e){
                $result = array("login" => false);
                controller_main_function::send_result($result);
            }

            break;

        case 'get_company_info':
            try {
//            if(!isset($user_token["email"])){
//                $user_token["email"]="team1@user.com";
//            }
                //print_r($user_token);
                $user = access_user::get_user_by_email($user_token->email);
                //print_r($user);
                $user_startup = access_startup_user::get_startup_user_by_user_id($user[0]["id"]);
                //print_r($user_startup);
                $startup = access_startup::get_startup_by_id($user_startup[0]["startup_id"]);
                controller_main_function::send_result($startup[0]);
            }catch (Exception $e){
                $result = array("login" => false);
                controller_main_function::send_result($result);
            }
                break;

        case 'set_focus_point':

            //___________ use lib
            require_once '../model/data_access/access_startup_focus_point.php';

            if(!isset($user_token->email)){
                $user_token["email"]="team1@user.com";
            }

            $valid_data = controller_main_function::check_validation(array("focus_point_id","point"));
            if (!isset($valid_data['is_valid']) || $valid_data['is_valid'] == false) {
                controller_main_function::send_msg(json_encode($valid_data), lang::$error);
            }
            $user = access_user::get_user_by_email($user_token->email);
            //print_r($user);
            $user_startup = access_startup_user::get_startup_user_by_user_id($user[0]["id"]);
            //print_r($user_startup);
            access_startup_focus_point::delete_startup_focus_point($_REQUEST["focus_point_id"], $user_startup[0]["startup_id"]);
            $result = access_startup_focus_point::set_startup_focus_point($_REQUEST["focus_point_id"], $user_startup[0]["startup_id"],$_REQUEST["point"]);
            $result = array("data" => true);
            controller_main_function::send_result($result);
            break;

        default:
            controller_main_function::send_msg("doesn't have this action", "Error");

    }
} else {
    //TODO: set page url when not set act
    controller_main_function::send_msg("please enter the action", "Error");
}

