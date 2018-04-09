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