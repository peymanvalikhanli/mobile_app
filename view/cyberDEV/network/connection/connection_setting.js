
         var grid_setting;
         var setting_connection = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        
        setting_connection.get_call_back = function (data){
            //TODO: set code after the server response
            if(setting_connection.debug_mode){
                console.log(data);
            }
        };
        setting_connection.get = function (){
            var param = {"act": "setting_get"};
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.get_call_back , "POST");
        };
            //_____________ delete function
            setting_connection.delete_call_back = function (data){
            //TODO: set code after the server response
            if(setting_connection.debug_mode){
                console.log(data);
            }
            };

         setting_connection.delete = function (ID){
            var param = {act: "setting_delete",
            ID: ID};
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.delete_call_back , "POST");
        };
            //_____________ set function
            setting_connection.set_call_back = function (data){
            //TODO: set code after the server response
            if(setting_connection.debug_mode){
                console.log(data);
            }
            };

         setting_connection.set = function (test){
            var param = {act: "setting_set",
            test:test};
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.set_call_back , "POST");
        };
            //_____________ grid function
            setting_connection.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(setting_connection.debug_mode){
            console.log(data);
            }

            grid_setting = new PSCO_grid('grid_setting');

            grid_setting.cols = [
            {name: 'ID', hidden: false, type: 'text'},{name: 'test', hidden: false, type: 'text'}];

        grid_setting.RightToLeft = false;

       // grid_setting.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

        grid_setting.data = data;

        grid_setting.render();

        };
        setting_connection.get_grid = function (){
            var param = {"act": "setting_get"};
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.get_grid_call_back , "POST");
        };
        //________________get functions
        setting_connection.get_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(setting_connection.debug_mode){
                    console.log(data);
                }
            };
        setting_connection.get_by_ID = function (ID){
                var param = {"act": "setting_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.get_by_ID_call_back , "POST");
        };

        setting_connection.get_by_ID_grid = function (ID){
                var param = {"act": "setting_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.get_grid_call_back , "POST");
        };
        setting_connection.get_by_test_call_back = function (data){
                //TODO: set code after the server response
                if(setting_connection.debug_mode){
                    console.log(data);
                }
            };
        setting_connection.get_by_test = function (test){
                var param = {"act": "setting_get_by_test",
            test : test
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.get_by_test_call_back , "POST");
        };

        setting_connection.get_by_test_grid = function (test){
                var param = {"act": "setting_get_by_test",
            test : test
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.get_grid_call_back , "POST");
        };
        
        //________________edit functions
        setting_connection.edit_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(setting_connection.debug_mode){
                    console.log(data);
                }
            };
        setting_connection.edit_by_ID = function (ID,test){
                var param = {"act": "setting_edit_by_ID",
            ID : ID ,test : test
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.edit_by_ID_call_back , "POST");
        };setting_connection.edit_ID_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(setting_connection.debug_mode){
                    console.log(data);
                }
            };
        setting_connection.edit_ID_by_ID = function (ID, ID){
                var param = {"act": "setting_edit_ID_by_ID",
            ID : ID,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.edit_ID_by_ID_call_back , "POST");
        };setting_connection.edit_by_test_call_back = function (data){
                //TODO: set code after the server response
                if(setting_connection.debug_mode){
                    console.log(data);
                }
            };
        setting_connection.edit_by_test = function (ID,test){
                var param = {"act": "setting_edit_by_test",
            ID : ID ,test : test
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.edit_by_test_call_back , "POST");
        };setting_connection.edit_test_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(setting_connection.debug_mode){
                    console.log(data);
                }
            };
        setting_connection.edit_test_by_ID = function (ID, test){
                var param = {"act": "setting_edit_test_by_ID",
            test : test,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(setting_connection.controller_url , param , setting_connection.edit_test_by_ID_call_back , "POST");
        };