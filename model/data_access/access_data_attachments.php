<?php
            require_once '../model/database/data.php';
            class access_data_attachments {

            //=========== get data_attachments 


            public static function get_data_attachments() {

            $data = data::selects("`data_attachments`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_data_attachments_by_ID($ID) {

            $data = data::selects("`data_attachments`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_data_attachments_by_user_id($user_id) {

            $data = data::selects("`data_attachments`", "`user_id` = '$user_id'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_data_attachments_by_name($name) {

            $data = data::selects("`data_attachments`", "`name` = '$name'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_data_attachments_by_url($url) {

            $data = data::selects("`data_attachments`", "`url` = '$url'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_data_attachments_by_created_by($created_by) {

            $data = data::selects("`data_attachments`", "`created_by` = '$created_by'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_data_attachments_by_creationDate($creationDate) {

            $data = data::selects("`data_attachments`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit data_attachments 


        public static function edit_data_attachments($ID , $user_id , $name , $url , $created_by , $creationDate) {

                 return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }

            public static function edit_data_attachments_by_ID($ID , $user_id , $name , $url , $created_by , $creationDate) {

         return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }public static function edit_data_attachments_by_user_id($ID , $user_id , $name , $url , $created_by , $creationDate) {

         return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`user_id` = $user_id");
                }public static function edit_data_attachments_by_name($ID , $user_id , $name , $url , $created_by , $creationDate) {

         return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`name` = $name");
                }public static function edit_data_attachments_by_url($ID , $user_id , $name , $url , $created_by , $creationDate) {

         return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`url` = $url");
                }public static function edit_data_attachments_by_created_by($ID , $user_id , $name , $url , $created_by , $creationDate) {

         return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
                }public static function edit_data_attachments_by_creationDate($ID , $user_id , $name , $url , $created_by , $creationDate) {

         return data::update("`data_attachments`", "`ID`= '$ID', `user_id`= '$user_id', `name`= '$name', `url`= '$url', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_data_attachments_ID_by_ID($ID, $ID) {

         return data::update("`data_attachments`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_data_attachments_user_id_by_ID($ID, $user_id) {

         return data::update("`data_attachments`", "`user_id`= '$user_id'", "`ID` = $ID");
                }public static function edit_data_attachments_name_by_ID($ID, $name) {

         return data::update("`data_attachments`", "`name`= '$name'", "`ID` = $ID");
                }public static function edit_data_attachments_url_by_ID($ID, $url) {

         return data::update("`data_attachments`", "`url`= '$url'", "`ID` = $ID");
                }public static function edit_data_attachments_created_by_by_ID($ID, $created_by) {

         return data::update("`data_attachments`", "`created_by`= '$created_by'", "`ID` = $ID");
                }public static function edit_data_attachments_creationDate_by_ID($ID, $creationDate) {

         return data::update("`data_attachments`", "`creationDate`= '$creationDate'", "`ID` = $ID");
                }
        //=========== delete data_attachments 


        public static function delete_data_attachments_by_ID ($ID) {

                 return data::delete("`data_attachments`", "`ID` = $ID");
                }

            
        //=========== set data_attachments 


        public static function set_data_attachments ($user_id , $name , $url , $created_by) {

                 return data::insertinto("`data_attachments`","user_id, name, url, created_by" , "'$user_id', '$name', '$url', '$created_by'");
                }

            
        }