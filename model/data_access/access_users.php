<?php
            require_once '../model/database/data.php';
            class access_users {

            //=========== get users 


            public static function get_users() {

            $data = data::selects("`users`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_users_by_ID($ID) {

            $data = data::selects("`users`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_users_by_username($username) {

            $data = data::selects("`users`", "`username` = '$username'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_users_by_pass($pass) {

            $data = data::selects("`users`", "`pass` = '$pass'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_users_by_creationDate($creationDate) {

            $data = data::selects("`users`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit users 


        public static function edit_users($ID , $username , $pass , $creationDate) {

                 return data::update("`users`", "`ID`= '$ID', `username`= '$username', `pass`= '$pass', `creationDate`= '$creationDate'", "`ID` = $ID");
                }

            public static function edit_users_by_ID($ID , $username , $pass , $creationDate) {

         return data::update("`users`", "`ID`= '$ID', `username`= '$username', `pass`= '$pass', `creationDate`= '$creationDate'", "`ID` = $ID");
                }public static function edit_users_by_username($ID , $username , $pass , $creationDate) {

         return data::update("`users`", "`ID`= '$ID', `username`= '$username', `pass`= '$pass', `creationDate`= '$creationDate'", "`username` = $username");
                }public static function edit_users_by_pass($ID , $username , $pass , $creationDate) {

         return data::update("`users`", "`ID`= '$ID', `username`= '$username', `pass`= '$pass', `creationDate`= '$creationDate'", "`pass` = $pass");
                }public static function edit_users_by_creationDate($ID , $username , $pass , $creationDate) {

         return data::update("`users`", "`ID`= '$ID', `username`= '$username', `pass`= '$pass', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_users_ID_by_ID($ID, $ID) {

         return data::update("`users`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_users_username_by_ID($ID, $username) {

         return data::update("`users`", "`username`= '$username'", "`ID` = $ID");
                }public static function edit_users_pass_by_ID($ID, $pass) {

         return data::update("`users`", "`pass`= '$pass'", "`ID` = $ID");
                }public static function edit_users_creationDate_by_ID($ID, $creationDate) {

         return data::update("`users`", "`creationDate`= '$creationDate'", "`ID` = $ID");
                }
        //=========== delete users 


        public static function delete_users_by_ID ($ID) {

                 return data::delete("`users`", "`ID` = $ID");
                }

            
        //=========== set users 


        public static function set_users ($username , $pass) {

                 return data::insertinto("`users`","username, pass" , "'$username', '$pass'");
                }

            
        }