<?php
            require_once '../model/database/data.php';
            class access_user_location {

            //=========== get user_location 


            public static function get_user_location() {

            $data = data::selects("`user_location`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_user_location_by_ID($ID) {

            $data = data::selects("`user_location`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_user_location_by_user_id($user_id) {

            $data = data::selects("`user_location`", "`user_id` = '$user_id'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_user_location_by_Lat($Lat) {

            $data = data::selects("`user_location`", "`Lat` = '$Lat'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_user_location_by_Lng($Lng) {

            $data = data::selects("`user_location`", "`Lng` = '$Lng'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_user_location_by_created_by($created_by) {

            $data = data::selects("`user_location`", "`created_by` = '$created_by'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_user_location_by_creationDate($creationDate) {

            $data = data::selects("`user_location`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit user_location 


        public static function edit_user_location($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

                 return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }

            public static function edit_user_location_by_ID($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }public static function edit_user_location_by_user_id($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`user_id` = $user_id");
                }public static function edit_user_location_by_Lat($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`Lat` = $Lat");
                }public static function edit_user_location_by_Lng($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`Lng` = $Lng");
                }public static function edit_user_location_by_created_by($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
                }public static function edit_user_location_by_creationDate($ID , $user_id , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`user_location`", "`ID`= '$ID', `user_id`= '$user_id', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_user_location_ID_by_ID($ID, $ID) {

         return data::update("`user_location`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_user_location_user_id_by_ID($ID, $user_id) {

         return data::update("`user_location`", "`user_id`= '$user_id'", "`ID` = $ID");
                }public static function edit_user_location_Lat_by_ID($ID, $Lat) {

         return data::update("`user_location`", "`Lat`= '$Lat'", "`ID` = $ID");
                }public static function edit_user_location_Lng_by_ID($ID, $Lng) {

         return data::update("`user_location`", "`Lng`= '$Lng'", "`ID` = $ID");
                }public static function edit_user_location_created_by_by_ID($ID, $created_by) {

         return data::update("`user_location`", "`created_by`= '$created_by'", "`ID` = $ID");
                }public static function edit_user_location_creationDate_by_ID($ID, $creationDate) {

         return data::update("`user_location`", "`creationDate`= '$creationDate'", "`ID` = $ID");
                }
        //=========== delete user_location 


        public static function delete_user_location_by_ID ($ID) {

                 return data::delete("`user_location`", "`ID` = $ID");
                }

            
        //=========== set user_location 


        public static function set_user_location ($user_id , $Lat , $Lng , $created_by) {

                 return data::insertinto("`user_location`","user_id, Lat, Lng, created_by" , "'$user_id', '$Lat', '$Lng', '$created_by'");
                }

            
        }