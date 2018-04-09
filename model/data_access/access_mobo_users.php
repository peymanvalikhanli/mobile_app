<?php
require_once '../model/database/data.php';

class access_mobo_users
{

    //=========== get mobo_users


    public static function get_mobo_users()
    {

        $data = data::selects("`mobo_users`", "");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_ID($ID)
    {

        $data = data::selects("`mobo_users`", "`ID` = '$ID'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_tel($tel)
    {

        $data = data::selects("`mobo_users`", "`tel` = '$tel'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_name($name)
    {

        $data = data::selects("`mobo_users`", "`name` = '$name'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_last_name($last_name)
    {

        $data = data::selects("`mobo_users`", "`last_name` = '$last_name'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_national_cart($national_cart)
    {

        $data = data::selects("`mobo_users`", "`national_cart` = '$national_cart'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_Birth_certificate($Birth_certificate)
    {

        $data = data::selects("`mobo_users`", "`Birth_certificate` = '$Birth_certificate'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_token($token)
    {

        $data = data::selects("`mobo_users`", "`token` = '$token'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_created_by($created_by)
    {

        $data = data::selects("`mobo_users`", "`created_by` = '$created_by'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    public static function get_mobo_users_by_creationDate($creationDate)
    {

        $data = data::selects("`mobo_users`", "`creationDate` = '$creationDate'");
        if (count($data[0]) != 0) {
            return $data;
        } else {
            return false;
        }
    }

    //=========== edit mobo_users


    public static function edit_mobo_users($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
    }

    public static function edit_mobo_users_by_ID($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
    }

    public static function edit_mobo_users_by_tel($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`tel` = $tel");
    }

    public static function edit_mobo_users_by_name($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`name` = $name");
    }

    public static function edit_mobo_users_by_last_name($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`last_name` = $last_name");
    }

    public static function edit_mobo_users_by_national_cart($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`national_cart` = $national_cart");
    }

    public static function edit_mobo_users_by_Birth_certificate($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`Birth_certificate` = $Birth_certificate");
    }

    public static function edit_mobo_users_by_token($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`token` = $token");
    }

    public static function edit_mobo_users_by_created_by($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
    }

    public static function edit_mobo_users_by_creationDate($ID, $tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by, $creationDate)
    {

        return data::update("`mobo_users`", "`ID`= '$ID', `tel`= '$tel', `name`= '$name', `last_name`= '$last_name', `national_cart`= '$national_cart', `Birth_certificate`= '$Birth_certificate', `token`= '$token', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
    }

    public static function edit_mobo_users_ID_by_ID($ID, $ID)
    {

        return data::update("`mobo_users`", "`ID`= '$ID'", "`ID` = $ID");
    }

    public static function edit_mobo_users_tel_by_ID($ID, $tel)
    {

        return data::update("`mobo_users`", "`tel`= '$tel'", "`ID` = $ID");
    }

    public static function edit_mobo_users_name_by_ID($ID, $name)
    {

        return data::update("`mobo_users`", "`name`= '$name'", "`ID` = $ID");
    }

    public static function edit_mobo_users_last_name_by_ID($ID, $last_name)
    {

        return data::update("`mobo_users`", "`last_name`= '$last_name'", "`ID` = $ID");
    }

    public static function edit_mobo_users_national_cart_by_ID($ID, $national_cart)
    {

        return data::update("`mobo_users`", "`national_cart`= '$national_cart'", "`ID` = $ID");
    }

    public static function edit_mobo_users_Birth_certificate_by_ID($ID, $Birth_certificate)
    {

        return data::update("`mobo_users`", "`Birth_certificate`= '$Birth_certificate'", "`ID` = $ID");
    }

    public static function edit_mobo_users_token_by_ID($ID, $token)
    {

        return data::update("`mobo_users`", "`token`= '$token'", "`ID` = $ID");
    }
    public static function edit_mobo_users_token_by_tel($tel, $token)
    {

        return data::update("`mobo_users`", "`token`= '$token'", "`tel` = $tel");
    }

    public static function edit_mobo_users_created_by_by_ID($ID, $created_by)
    {

        return data::update("`mobo_users`", "`created_by`= '$created_by'", "`ID` = $ID");
    }

    public static function edit_mobo_users_creationDate_by_ID($ID, $creationDate)
    {

        return data::update("`mobo_users`", "`creationDate`= '$creationDate'", "`ID` = $ID");
    }

    //=========== delete mobo_users


    public static function delete_mobo_users_by_ID($ID)
    {

        return data::delete("`mobo_users`", "`ID` = $ID");
    }


    //=========== set mobo_users


    public static function set_mobo_users($tel, $name, $last_name, $national_cart, $Birth_certificate, $token, $created_by)
    {

        return data::insertinto("`mobo_users`", "tel, name, last_name, national_cart, Birth_certificate, token, created_by", "'$tel', '$name', '$last_name', '$national_cart', '$Birth_certificate', '$token', '$created_by'");
    }


}