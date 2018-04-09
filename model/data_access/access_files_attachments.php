<?php
            require_once '../model/database/data.php';
            class access_files_attachments {

            //=========== get files_attachments 


            public static function get_files_attachments() {

            $data = data::selects("`files_attachments`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_files_attachments_by_file_id($file_id) {

            $data = data::selects("`files_attachments`", "`file_id` = '$file_id'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_attachments_by_attachment_id($attachment_id) {

            $data = data::selects("`files_attachments`", "`attachment_id` = '$attachment_id'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_attachments_by_created_by($created_by) {

            $data = data::selects("`files_attachments`", "`created_by` = '$created_by'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_files_attachments_by_creationDate($creationDate) {

            $data = data::selects("`files_attachments`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit files_attachments 


        public static function edit_files_attachments($file_id , $attachment_id , $created_by , $creationDate) {

                 return data::update("`files_attachments`", "`file_id`= '$file_id', `attachment_id`= '$attachment_id', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`file_id` = $file_id");
                }

            public static function edit_files_attachments_by_file_id($file_id , $attachment_id , $created_by , $creationDate) {

         return data::update("`files_attachments`", "`file_id`= '$file_id', `attachment_id`= '$attachment_id', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`file_id` = $file_id");
                }public static function edit_files_attachments_by_attachment_id($file_id , $attachment_id , $created_by , $creationDate) {

         return data::update("`files_attachments`", "`file_id`= '$file_id', `attachment_id`= '$attachment_id', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`attachment_id` = $attachment_id");
                }public static function edit_files_attachments_by_created_by($file_id , $attachment_id , $created_by , $creationDate) {

         return data::update("`files_attachments`", "`file_id`= '$file_id', `attachment_id`= '$attachment_id', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
                }public static function edit_files_attachments_by_creationDate($file_id , $attachment_id , $created_by , $creationDate) {

         return data::update("`files_attachments`", "`file_id`= '$file_id', `attachment_id`= '$attachment_id', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_files_attachments_file_id_by_file_id($file_id, $file_id) {

         return data::update("`files_attachments`", "`file_id`= '$file_id'", "`file_id` = $file_id");
                }public static function edit_files_attachments_attachment_id_by_file_id($file_id, $attachment_id) {

         return data::update("`files_attachments`", "`attachment_id`= '$attachment_id'", "`file_id` = $file_id");
                }public static function edit_files_attachments_created_by_by_file_id($file_id, $created_by) {

         return data::update("`files_attachments`", "`created_by`= '$created_by'", "`file_id` = $file_id");
                }public static function edit_files_attachments_creationDate_by_file_id($file_id, $creationDate) {

         return data::update("`files_attachments`", "`creationDate`= '$creationDate'", "`file_id` = $file_id");
                }
        //=========== delete files_attachments 


        public static function delete_files_attachments_by_file_id ($file_id) {

                 return data::delete("`files_attachments`", "`file_id` = $file_id");
                }

            
        //=========== set files_attachments 


        public static function set_files_attachments ($attachment_id , $created_by) {

                 return data::insertinto("`files_attachments`","attachment_id, created_by" , "'$attachment_id', '$created_by'");
                }

            
        }