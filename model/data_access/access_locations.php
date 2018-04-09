<?php
            require_once '../model/database/data.php';
            class access_locations {

            //=========== get locations 


            public static function get_locations() {

            $data = data::selects("`locations`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_locations_by_ID($ID) {

            $data = data::selects("`locations`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_locations_by_title($title) {

            $data = data::selects("`locations`", "`title` = '$title'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_locations_by_Lat($Lat) {

            $data = data::selects("`locations`", "`Lat` = '$Lat'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_locations_by_Lng($Lng) {

            $data = data::selects("`locations`", "`Lng` = '$Lng'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_locations_by_created_by($created_by) {

            $data = data::selects("`locations`", "`created_by` = '$created_by'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_locations_by_creationDate($creationDate) {

            $data = data::selects("`locations`", "`creationDate` = '$creationDate'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit locations 


        public static function edit_locations($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

                 return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }

            public static function edit_locations_by_ID($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`ID` = $ID");
                }public static function edit_locations_by_title($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`title` = $title");
                }public static function edit_locations_by_Lat($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`Lat` = $Lat");
                }public static function edit_locations_by_Lng($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`Lng` = $Lng");
                }public static function edit_locations_by_created_by($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`created_by` = $created_by");
                }public static function edit_locations_by_creationDate($ID , $title , $Lat , $Lng , $created_by , $creationDate) {

         return data::update("`locations`", "`ID`= '$ID', `title`= '$title', `Lat`= '$Lat', `Lng`= '$Lng', `created_by`= '$created_by', `creationDate`= '$creationDate'", "`creationDate` = $creationDate");
                }public static function edit_locations_ID_by_ID($ID, $ID) {

         return data::update("`locations`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_locations_title_by_ID($ID, $title) {

         return data::update("`locations`", "`title`= '$title'", "`ID` = $ID");
                }public static function edit_locations_Lat_by_ID($ID, $Lat) {

         return data::update("`locations`", "`Lat`= '$Lat'", "`ID` = $ID");
                }public static function edit_locations_Lng_by_ID($ID, $Lng) {

         return data::update("`locations`", "`Lng`= '$Lng'", "`ID` = $ID");
                }public static function edit_locations_created_by_by_ID($ID, $created_by) {

         return data::update("`locations`", "`created_by`= '$created_by'", "`ID` = $ID");
                }public static function edit_locations_creationDate_by_ID($ID, $creationDate) {

         return data::update("`locations`", "`creationDate`= '$creationDate'", "`ID` = $ID");
                }
        //=========== delete locations 


        public static function delete_locations_by_ID ($ID) {

                 return data::delete("`locations`", "`ID` = $ID");
                }

            
        //=========== set locations 


        public static function set_locations ($title , $Lat , $Lng , $created_by) {

                 return data::insertinto("`locations`","title, Lat, Lng, created_by" , "'$title', '$Lat', '$Lng', '$created_by'");
                }

            
        }