<?php
            require_once '../model/database/data.php';
            class access_messages {

            //=========== get messages 


            public static function get_messages() {

            $data = data::selects("`messages`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_messages_by_ID($ID) {

            $data = data::selects("`messages`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_user_id($user_id) {

            $data = data::selects("`messages`", "`user_id` = '$user_id'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_title($title) {

            $data = data::selects("`messages`", "`title` = '$title'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_text($text) {

            $data = data::selects("`messages`", "`text` = '$text'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_replay($replay) {

            $data = data::selects("`messages`", "`replay` = '$replay'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_replay_date($replay_date) {

            $data = data::selects("`messages`", "`replay_date` = '$replay_date'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_created_by($created_by) {

            $data = data::selects("`messages`", "`created_by` = '$created_by'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_messages_by_creationDate($creationDate) {

            $data = data::selects("`messages`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit messages 


        public static function edit_messages($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

                 return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }

            public static function edit_messages_by_ID($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }public static function edit_messages_by_user_id($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`user_id` = $user_id");
                }public static function edit_messages_by_title($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`title` = $title");
                }public static function edit_messages_by_text($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`text` = $text");
                }public static function edit_messages_by_replay($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`replay` = $replay");
                }public static function edit_messages_by_replay_date($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`replay_date` = $replay_date");
                }public static function edit_messages_by_created_by($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
                }public static function edit_messages_by_creationDate($ID , $user_id , $title , $text , $replay , $replay_date , $created_by , $creationDate) {

         return data::update("`messages`", "`ID`= '$ID', `user_id`= '$user_id', `title`= '$title', `text`= '$text', `replay`= '$replay', `replay_date`= '$replay_date', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_messages_ID_by_ID($ID, $ID) {

         return data::update("`messages`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_messages_user_id_by_ID($ID, $user_id) {

         return data::update("`messages`", "`user_id`= '$user_id'", "`ID` = $ID");
                }public static function edit_messages_title_by_ID($ID, $title) {

         return data::update("`messages`", "`title`= '$title'", "`ID` = $ID");
                }public static function edit_messages_text_by_ID($ID, $text) {

         return data::update("`messages`", "`text`= '$text'", "`ID` = $ID");
                }public static function edit_messages_replay_by_ID($ID, $replay) {

         return data::update("`messages`", "`replay`= '$replay'", "`ID` = $ID");
                }public static function edit_messages_replay_date_by_ID($ID, $replay_date) {

         return data::update("`messages`", "`replay_date`= '$replay_date'", "`ID` = $ID");
                }public static function edit_messages_created_by_by_ID($ID, $created_by) {

         return data::update("`messages`", "`created_by`= '$created_by'", "`ID` = $ID");
                }public static function edit_messages_creationDate_by_ID($ID, $creationDate) {

         return data::update("`messages`", "`creationDate`= '$creationDate'", "`ID` = $ID");
                }
        //=========== delete messages 


        public static function delete_messages_by_ID ($ID) {

                 return data::delete("`messages`", "`ID` = $ID");
                }

            
        //=========== set messages 


        public static function set_messages ($user_id , $title , $text , $replay , $replay_date , $created_by) {

                 return data::insertinto("`messages`","user_id, title, text, replay, created_by" , "'$user_id', '$title', '$text', '$replay', '$created_by'");
                }

            
        }