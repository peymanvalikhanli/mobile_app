<?php

/**
 * Created by PhpStorm.
 * User: peymanvalikhanli
 * Date: 6/16/17 AD
 * Time: 15:52
 */
//require_once '../model/data_access/access_userAccessName.php';

class controller_main_function
{

    /**
     * @param $field
     * @return mixed
     */
    public static function check_validation($field)
    {
        $result['is_valid'] = true;
        for ($i = 0; count($field) > $i; $i++) {
            if (isset($_REQUEST[$field[$i]])) {
                $result[$field[$i]] = $_REQUEST[$field[$i]];
            } else {
                $result[$field[$i]] = false;
                $result['is_valid'] = false;
            }
        }
        return $result;
    }

    public static function telegram_send($text){
        $ch = curl_init('https://api.telegram.org/bot406484128:AAEykZDJaC88Ly5bAQ1bpNIKGpt_8vR-9ko/sendMessage?chat_id=@peymanvalikhanlichaneltest&text='.$text);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // RETURN THE CONTENTS OF THE CALL
        $resp = curl_exec($ch);
    }

    public static function sendsms($too,$text)
    {
        $post = array(
            'action' => 'SMS_SEND',
            'username' => 'Fonoontadbir',
            'password'   => '1234sibka4321',
            'api'=>1,
            'from'=>'1000',
            'to'=>$too,
            'FLASH'=>0,
            'text'=>$text
        );
        $ch = curl_init('http://iraniansms.net/API/');
        curl_setopt($ch, CURLOPT_POST, 1);
        //curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id=@peymanvalikhanlichaneltest&text='.$Mobile");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // RETURN THE CONTENTS OF THE CALL
        $resp = curl_exec($ch);
        return $resp;
    }

    /**
     * @param $msg
     * @param $title
     * @param string $type
     * @param string $btn
     */
    public static function send_msg($msg, $title, $type = "error", $status = 400, $btn = "")
    {
        self::send_result(array("errors" => array('msg' => $msg), 'msg' => $msg, "status" => $status, 'title' => $title, 'type' => $type, 'btn' => $btn, 'act' => 'message'));
        exit;
    }

    /**
     * @param $res
     */
    public static function send_result($res)
    {
        echo json_encode($res);
        exit;

    }

    public static function get_access($userID)
    {
        $result = null;//access_userAccessName::get_userAccessName_by_userID($userID);
        $access = array();
        for ($i = 0; $i < count($result); $i++) {
            $access[$result[$i]["access"]] = true;
        }
        return $result;
    }

}