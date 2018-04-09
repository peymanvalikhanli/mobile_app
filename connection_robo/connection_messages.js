
         var grid_messages;
         var messages_connection = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        
        messages_connection.get_call_back = function (data){
            //TODO: set code after the server response
            if(messages_connection.debug_mode){
                console.log(data);
            }
        };
        messages_connection.get = function (){
            var param = {"act": "messages_get"};
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_call_back , "POST");
        };
            //_____________ delete function
            messages_connection.delete_call_back = function (data){
            //TODO: set code after the server response
            if(messages_connection.debug_mode){
                console.log(data);
            }
            };

         messages_connection.delete = function (ID){
            var param = {act: "messages_delete",
            ID: ID};
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.delete_call_back , "POST");
        };
            //_____________ set function
            messages_connection.set_call_back = function (data){
            //TODO: set code after the server response
            if(messages_connection.debug_mode){
                console.log(data);
            }
            };

         messages_connection.set = function (user_id,title,text,replay,replay_date,created_by){
            var param = {act: "messages_set",
            user_id:user_id ,title:title ,text:text ,replay:replay ,replay_date:replay_date ,created_by:created_by};
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.set_call_back , "POST");
        };
            //_____________ grid function
            messages_connection.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(messages_connection.debug_mode){
            console.log(data);
            }

            grid_messages = new PSCO_grid('grid_messages');

            grid_messages.cols = [
            {name: 'ID', hidden: false, type: 'text'},{name: 'user_id', hidden: false, type: 'text'},{name: 'title', hidden: false, type: 'text'},{name: 'text', hidden: false, type: 'text'},{name: 'replay', hidden: false, type: 'text'},{name: 'replay_date', hidden: false, type: 'text'},{name: 'created_by', hidden: false, type: 'text'},{name: 'creationDate', hidden: false, type: 'text'}];

        grid_messages.RightToLeft = false;

       // grid_messages.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

        grid_messages.data = data;

        grid_messages.render();

        };
        messages_connection.get_grid = function (){
            var param = {"act": "messages_get"};
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        //________________get functions
        messages_connection.get_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_ID = function (ID){
                var param = {"act": "messages_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_ID_call_back , "POST");
        };

        messages_connection.get_by_ID_grid = function (ID){
                var param = {"act": "messages_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_user_id_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_user_id = function (user_id){
                var param = {"act": "messages_get_by_user_id",
            user_id : user_id
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_user_id_call_back , "POST");
        };

        messages_connection.get_by_user_id_grid = function (user_id){
                var param = {"act": "messages_get_by_user_id",
            user_id : user_id
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_title_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_title = function (title){
                var param = {"act": "messages_get_by_title",
            title : title
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_title_call_back , "POST");
        };

        messages_connection.get_by_title_grid = function (title){
                var param = {"act": "messages_get_by_title",
            title : title
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_text_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_text = function (text){
                var param = {"act": "messages_get_by_text",
            text : text
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_text_call_back , "POST");
        };

        messages_connection.get_by_text_grid = function (text){
                var param = {"act": "messages_get_by_text",
            text : text
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_replay_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_replay = function (replay){
                var param = {"act": "messages_get_by_replay",
            replay : replay
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_replay_call_back , "POST");
        };

        messages_connection.get_by_replay_grid = function (replay){
                var param = {"act": "messages_get_by_replay",
            replay : replay
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_replay_date_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_replay_date = function (replay_date){
                var param = {"act": "messages_get_by_replay_date",
            replay_date : replay_date
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_replay_date_call_back , "POST");
        };

        messages_connection.get_by_replay_date_grid = function (replay_date){
                var param = {"act": "messages_get_by_replay_date",
            replay_date : replay_date
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_created_by = function (created_by){
                var param = {"act": "messages_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_created_by_call_back , "POST");
        };

        messages_connection.get_by_created_by_grid = function (created_by){
                var param = {"act": "messages_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        messages_connection.get_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.get_by_creationDate = function (creationDate){
                var param = {"act": "messages_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_by_creationDate_call_back , "POST");
        };

        messages_connection.get_by_creationDate_grid = function (creationDate){
                var param = {"act": "messages_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.get_grid_call_back , "POST");
        };
        
        //________________edit functions
        messages_connection.edit_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_ID = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_ID",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_ID_call_back , "POST");
        };messages_connection.edit_ID_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_ID_by_ID = function (ID, ID){
                var param = {"act": "messages_edit_ID_by_ID",
            ID : ID,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_ID_by_ID_call_back , "POST");
        };messages_connection.edit_by_user_id_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_user_id = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_user_id",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_user_id_call_back , "POST");
        };messages_connection.edit_user_id_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_user_id_by_ID = function (ID, user_id){
                var param = {"act": "messages_edit_user_id_by_ID",
            user_id : user_id,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_user_id_by_ID_call_back , "POST");
        };messages_connection.edit_by_title_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_title = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_title",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_title_call_back , "POST");
        };messages_connection.edit_title_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_title_by_ID = function (ID, title){
                var param = {"act": "messages_edit_title_by_ID",
            title : title,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_title_by_ID_call_back , "POST");
        };messages_connection.edit_by_text_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_text = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_text",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_text_call_back , "POST");
        };messages_connection.edit_text_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_text_by_ID = function (ID, text){
                var param = {"act": "messages_edit_text_by_ID",
            text : text,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_text_by_ID_call_back , "POST");
        };messages_connection.edit_by_replay_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_replay = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_replay",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_replay_call_back , "POST");
        };messages_connection.edit_replay_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_replay_by_ID = function (ID, replay){
                var param = {"act": "messages_edit_replay_by_ID",
            replay : replay,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_replay_by_ID_call_back , "POST");
        };messages_connection.edit_by_replay_date_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_replay_date = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_replay_date",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_replay_date_call_back , "POST");
        };messages_connection.edit_replay_date_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_replay_date_by_ID = function (ID, replay_date){
                var param = {"act": "messages_edit_replay_date_by_ID",
            replay_date : replay_date,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_replay_date_by_ID_call_back , "POST");
        };messages_connection.edit_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_created_by = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_created_by",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_created_by_call_back , "POST");
        };messages_connection.edit_created_by_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_created_by_by_ID = function (ID, created_by){
                var param = {"act": "messages_edit_created_by_by_ID",
            created_by : created_by,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_created_by_by_ID_call_back , "POST");
        };messages_connection.edit_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_by_creationDate = function (ID,user_id,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "messages_edit_by_creationDate",
            ID : ID ,user_id : user_id ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_by_creationDate_call_back , "POST");
        };messages_connection.edit_creationDate_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(messages_connection.debug_mode){
                    console.log(data);
                }
            };
        messages_connection.edit_creationDate_by_ID = function (ID, creationDate){
                var param = {"act": "messages_edit_creationDate_by_ID",
            creationDate : creationDate,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(messages_connection.controller_url , param , messages_connection.edit_creationDate_by_ID_call_back , "POST");
        };