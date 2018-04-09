<?php
            require_once '../model/database/data.php';
            class access_setting {

            //=========== get setting 


            public static function get_setting() {

            $data = data::selects("`setting`", "");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }

            public static function get_setting_by_ID($ID) {

            $data = data::selects("`setting`", "`ID` = '$ID'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }public static function get_setting_by_test($test) {

            $data = data::selects("`setting`", "`test` = '$test'");
                    if (count($data[0]) != 0) {
                        return $data;
                    } else {
                        return false;
                    }
                }
        //=========== edit setting 


        public static function edit_setting($ID , $test) {

                 return data::update("`setting`", "`ID`= '$ID', `test`= '$test'", "`ID` = $ID");
                }

            public static function edit_setting_by_ID($ID , $test) {

         return data::update("`setting`", "`ID`= '$ID', `test`= '$test'", "`ID` = $ID");
                }public static function edit_setting_by_test($ID , $test) {

         return data::update("`setting`", "`ID`= '$ID', `test`= '$test'", "`test` = $test");
                }public static function edit_setting_ID_by_ID($ID, $ID) {

         return data::update("`setting`", "`ID`= '$ID'", "`ID` = $ID");
                }public static function edit_setting_test_by_ID($ID, $test) {

         return data::update("`setting`", "`test`= '$test'", "`ID` = $ID");
                }
        //=========== delete setting 


        public static function delete_setting_by_ID ($ID) {

                 return data::delete("`setting`", "`ID` = $ID");
                }

            
        //=========== set setting 


        public static function set_setting ($test) {

                 return data::insertinto("`setting`","test" , "'$test'");
                }

            
        }