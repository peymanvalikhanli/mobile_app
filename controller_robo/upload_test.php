<?php
/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 4/22/18 AD
 * Time: 02:19
 */
require_once '../model/data_access/access_attachments.php';
require_once '../model/data_access/lang.php';
require_once 'controller_main_function.php';

$request_body = file_get_contents('php://input');
$request = (array)json_decode($request_body, TRUE);
$_REQUEST=$request;

define('UPLOAD_DIR', 'images/');
$img = $_REQUEST["file"];
$img = str_replace('data:image/png;base64,', '', $img);
$img = str_replace(' ', '+', $img);
$data = base64_decode($img);
$file =  UPLOAD_DIR.uniqid() . '.png';
$success = file_put_contents($file, $data);
$result = access_attachments::set_attachments($_REQUEST["user_id"],$_REQUEST["type"],$file,$_REQUEST["user_id"]);
controller_main_function::telegram_send($_REQUEST["type"].": http://app.fonoontadbir.ir/controller_robo/" . $file);
echo json_encode($result);
