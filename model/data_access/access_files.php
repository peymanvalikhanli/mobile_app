<?php
            require_once '../model/database/data.php';
            class access_files {

            //=========== get files 


            public static function get_files() {

            $data = data::selects("`files`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_files_by_ID($ID) {

            $data = data::selects("`files`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_user_id($user_id) {

            $data = data::selects("`files`", "`user_id` = '$user_id'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_type($type) {

            $data = data::selects("`files`", "`type` = '$type'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_title($title) {

            $data = data::selects("`files`", "`title` = '$title'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_comment($comment) {

            $data = data::selects("`files`", "`comment` = '$comment'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_date($date) {

            $data = data::selects("`files`", "`date` = '$date'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_created_by($created_by) {

            $data = data::selects("`files`", "`created_by` = '$created_by'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_by_creationDate($creationDate) {

            $data = data::selects("`files`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit files 


        public static function edit_files($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

                 return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }

            public static function edit_files_by_ID($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }public static function edit_files_by_user_id($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`user_id` = $user_id");
                }public static function edit_files_by_type($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`type` = $type");
                }public static function edit_files_by_title($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`title` = $title");
                }public static function edit_files_by_comment($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`comment` = $comment");
                }public static function edit_files_by_date($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`date` = $date");
                }public static function edit_files_by_created_by($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
                }public static function edit_files_by_creationDate($ID , $user_id , $type , $title , $comment , $date , $created_by , $creationDate) {

         return data::update("`files`", "`ID`= '$ID', `user_id`= '$user_id', `type`= '$type', `title`= '$title', `comment`= '$comment', `date`= '$date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_files_ID_by_ID($ID, $ID) {

         return data::update("`files`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_files_user_id_by_ID($ID, $user_id) {

         return data::update("`files`", "`user_id`= '$user_id'", "`ID` = $ID");
                }public static function edit_files_type_by_ID($ID, $type) {

         return data::update("`files`", "`type`= '$type'", "`ID` = $ID");
                }public static function edit_files_title_by_ID($ID, $title) {

         return data::update("`files`", "`title`= '$title'", "`ID` = $ID");
                }public static function edit_files_comment_by_ID($ID, $comment) {

         return data::update("`files`", "`comment`= '$comment'", "`ID` = $ID");
                }public static function edit_files_date_by_ID($ID, $date) {

         return data::update("`files`", "`date`= '$date'", "`ID` = $ID");
                }public static function edit_files_created_by_by_ID($ID, $created_by) {

         return data::update("`files`", "`created_by`= '$created_by'", "`ID` = $ID");
                }public static function edit_files_creationDate_by_ID($ID, $creationDate) {

         return data::update("`files`", "`creationDate`= '$creationDate'", "`ID` = $ID");
                }
        //=========== delete files 


        public static function delete_files_by_ID ($ID) {

                 return data::delete("`files`", "`ID` = $ID");
                }

            
        //=========== set files 


        public static function set_files ($user_id , $type , $title , $comment , $date , $created_by) {

                 return data::insertinto("`files`","user_id, type, title, comment, created_by" , "'$user_id', '$type', '$title', '$comment', '$created_by'");
                }

            
        }