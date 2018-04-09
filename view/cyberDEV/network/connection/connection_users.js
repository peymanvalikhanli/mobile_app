
         var grid_users;
         var users_connection = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        
        users_connection.get_call_back = function (data){
            //TODO: set code after the server response
            if(users_connection.debug_mode){
                console.log(data);
            }
        };
        users_connection.get = function (){
            var param = {"act": "users_get"};
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_call_back , "POST");
        };
            //_____________ delete function
            users_connection.delete_call_back = function (data){
            //TODO: set code after the server response
            if(users_connection.debug_mode){
                console.log(data);
            }
            };

         users_connection.delete = function (ID){
            var param = {act: "users_delete",
            ID: ID};
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.delete_call_back , "POST");
        };
            //_____________ set function
            users_connection.set_call_back = function (data){
            //TODO: set code after the server response
            if(users_connection.debug_mode){
                console.log(data);
            }
            };

         users_connection.set = function (username,pass){
            var param = {act: "users_set",
            username:username ,pass:pass};
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.set_call_back , "POST");
        };
            //_____________ grid function
            users_connection.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(users_connection.debug_mode){
            console.log(data);
            }

            grid_users = new PSCO_grid('grid_users');

            grid_users.cols = [
            {name: 'ID', hidden: false, type: 'text'},{name: 'username', hidden: false, type: 'text'},{name: 'pass', hidden: false, type: 'text'},{name: 'creationDate', hidden: false, type: 'text'}];

        grid_users.RightToLeft = false;

       // grid_users.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

        grid_users.data = data;

        grid_users.render();

        };
        users_connection.get_grid = function (){
            var param = {"act": "users_get"};
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_grid_call_back , "POST");
        };
        //________________get functions
        users_connection.get_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.get_by_ID = function (ID){
                var param = {"act": "users_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_by_ID_call_back , "POST");
        };

        users_connection.get_by_ID_grid = function (ID){
                var param = {"act": "users_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_grid_call_back , "POST");
        };
        users_connection.get_by_username_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.get_by_username = function (username){
                var param = {"act": "users_get_by_username",
            username : username
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_by_username_call_back , "POST");
        };

        users_connection.get_by_username_grid = function (username){
                var param = {"act": "users_get_by_username",
            username : username
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_grid_call_back , "POST");
        };
        users_connection.get_by_pass_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.get_by_pass = function (pass){
                var param = {"act": "users_get_by_pass",
            pass : pass
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_by_pass_call_back , "POST");
        };

        users_connection.get_by_pass_grid = function (pass){
                var param = {"act": "users_get_by_pass",
            pass : pass
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_grid_call_back , "POST");
        };
        users_connection.get_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.get_by_creationDate = function (creationDate){
                var param = {"act": "users_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_by_creationDate_call_back , "POST");
        };

        users_connection.get_by_creationDate_grid = function (creationDate){
                var param = {"act": "users_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.get_grid_call_back , "POST");
        };
        
        //________________edit functions
        users_connection.edit_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_by_ID = function (ID,username,pass,creationDate){
                var param = {"act": "users_edit_by_ID",
            ID : ID ,username : username ,pass : pass ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_by_ID_call_back , "POST");
        };users_connection.edit_ID_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_ID_by_ID = function (ID, ID){
                var param = {"act": "users_edit_ID_by_ID",
            ID : ID,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_ID_by_ID_call_back , "POST");
        };users_connection.edit_by_username_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_by_username = function (ID,username,pass,creationDate){
                var param = {"act": "users_edit_by_username",
            ID : ID ,username : username ,pass : pass ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_by_username_call_back , "POST");
        };users_connection.edit_username_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_username_by_ID = function (ID, username){
                var param = {"act": "users_edit_username_by_ID",
            username : username,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_username_by_ID_call_back , "POST");
        };users_connection.edit_by_pass_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_by_pass = function (ID,username,pass,creationDate){
                var param = {"act": "users_edit_by_pass",
            ID : ID ,username : username ,pass : pass ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_by_pass_call_back , "POST");
        };users_connection.edit_pass_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_pass_by_ID = function (ID, pass){
                var param = {"act": "users_edit_pass_by_ID",
            pass : pass,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_pass_by_ID_call_back , "POST");
        };users_connection.edit_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_by_creationDate = function (ID,username,pass,creationDate){
                var param = {"act": "users_edit_by_creationDate",
            ID : ID ,username : username ,pass : pass ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_by_creationDate_call_back , "POST");
        };users_connection.edit_creationDate_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(users_connection.debug_mode){
                    console.log(data);
                }
            };
        users_connection.edit_creationDate_by_ID = function (ID, creationDate){
                var param = {"act": "users_edit_creationDate_by_ID",
            creationDate : creationDate,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(users_connection.controller_url , param , users_connection.edit_creationDate_by_ID_call_back , "POST");
        };