
         var grid_get_message_name_last_name;
         var get_message_name_last_name_connection = {
            controller_url : '../controller_robo/controller_get_message_name_last_name.php' //TODO: set controller url
            ,debug_mode : false
            , data: null
            //controller/controller_users.php
        };
        
        get_message_name_last_name_connection.get_call_back = function (data){
            //TODO: set code after the server response
            if(get_message_name_last_name_connection.debug_mode){
                console.log(data);
            }
            get_message_name_last_name_connection.data = data;
        };
        get_message_name_last_name_connection.get = function (){
            var param = {"act": "get_message_name_last_name_get"};
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_call_back , "POST");
        };
            //_____________ delete function
            get_message_name_last_name_connection.delete_call_back = function (data){
            //TODO: set code after the server response
            if(get_message_name_last_name_connection.debug_mode){
                console.log(data);
            }
            };

         get_message_name_last_name_connection.delete = function (ID){
            var param = {act: "get_message_name_last_name_delete",
            ID: ID};
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.delete_call_back , "POST");
        };
            //_____________ set function
            get_message_name_last_name_connection.set_call_back = function (data){
            //TODO: set code after the server response
            if(get_message_name_last_name_connection.debug_mode){
                console.log(data);
            }
            };

         get_message_name_last_name_connection.set = function (tel,name,last_name,title,text,replay,replay_date,created_by){
            var param = {act: "get_message_name_last_name_set",
            tel:tel ,name:name ,last_name:last_name ,title:title ,text:text ,replay:replay ,replay_date:replay_date ,created_by:created_by};
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.set_call_back , "POST");
        };
            //_____________ grid function
            get_message_name_last_name_connection.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(get_message_name_last_name_connection.debug_mode){
            console.log(data);
            }

            grid_get_message_name_last_name = new PSCO_grid('grid_get_message_name_last_name');

            grid_get_message_name_last_name.cols = [
            {name: 'ID', hidden: false, type: 'text'},{name: 'tel', hidden: false, type: 'text'},{name: 'name', hidden: false, type: 'text'},{name: 'last_name', hidden: false, type: 'text'},{name: 'title', hidden: false, type: 'text'},{name: 'text', hidden: false, type: 'text'},{name: 'replay', hidden: false, type: 'text'},{name: 'replay_date', hidden: false, type: 'text'},{name: 'created_by', hidden: false, type: 'text'},{name: 'creationDate', hidden: false, type: 'text'}];

        grid_get_message_name_last_name.RightToLeft = false;

       // grid_get_message_name_last_name.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

        grid_get_message_name_last_name.data = data;

        grid_get_message_name_last_name.render();

        };
        get_message_name_last_name_connection.get_grid = function (){
            var param = {"act": "get_message_name_last_name_get"};
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        //________________get functions
        get_message_name_last_name_connection.get_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_ID = function (ID){
                var param = {"act": "get_message_name_last_name_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_ID_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_ID_grid = function (ID){
                var param = {"act": "get_message_name_last_name_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_tel_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            get_message_name_last_name_connection.data = data;
            };
        get_message_name_last_name_connection.get_by_tel = function (tel){
                var param = {"act": "get_message_name_last_name_get_by_tel",
            tel : tel
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_tel_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_tel_grid = function (tel){
                var param = {"act": "get_message_name_last_name_get_by_tel",
            tel : tel
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_name = function (name){
                var param = {"act": "get_message_name_last_name_get_by_name",
            name : name
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_name_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_name_grid = function (name){
                var param = {"act": "get_message_name_last_name_get_by_name",
            name : name
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_last_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_last_name = function (last_name){
                var param = {"act": "get_message_name_last_name_get_by_last_name",
            last_name : last_name
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_last_name_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_last_name_grid = function (last_name){
                var param = {"act": "get_message_name_last_name_get_by_last_name",
            last_name : last_name
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_title_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_title = function (title){
                var param = {"act": "get_message_name_last_name_get_by_title",
            title : title
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_title_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_title_grid = function (title){
                var param = {"act": "get_message_name_last_name_get_by_title",
            title : title
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_text_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_text = function (text){
                var param = {"act": "get_message_name_last_name_get_by_text",
            text : text
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_text_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_text_grid = function (text){
                var param = {"act": "get_message_name_last_name_get_by_text",
            text : text
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_replay_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            get_message_name_last_name_connection.data = data;
            };
        get_message_name_last_name_connection.get_by_replay = function (replay){
                var param = {"act": "get_message_name_last_name_get_by_replay",
            replay : replay
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_replay_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_replay_grid = function (replay){
                var param = {"act": "get_message_name_last_name_get_by_replay",
            replay : replay
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_replay_date_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_replay_date = function (replay_date){
                var param = {"act": "get_message_name_last_name_get_by_replay_date",
            replay_date : replay_date
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_replay_date_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_replay_date_grid = function (replay_date){
                var param = {"act": "get_message_name_last_name_get_by_replay_date",
            replay_date : replay_date
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_created_by = function (created_by){
                var param = {"act": "get_message_name_last_name_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_created_by_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_created_by_grid = function (created_by){
                var param = {"act": "get_message_name_last_name_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_message_name_last_name_connection.get_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.get_by_creationDate = function (creationDate){
                var param = {"act": "get_message_name_last_name_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_by_creationDate_call_back , "POST");
        };

        get_message_name_last_name_connection.get_by_creationDate_grid = function (creationDate){
                var param = {"act": "get_message_name_last_name_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.get_grid_call_back , "POST");
        };
        
        //________________edit functions
        get_message_name_last_name_connection.edit_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_ID = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_ID",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_ID_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_ID_by_ID = function (ID, ID){
                var param = {"act": "get_message_name_last_name_edit_ID_by_ID",
            ID : ID,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_ID_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_tel_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_tel = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_tel",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_tel_call_back , "POST");
        };get_message_name_last_name_connection.edit_tel_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_tel_by_ID = function (ID, tel){
                var param = {"act": "get_message_name_last_name_edit_tel_by_ID",
            tel : tel,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_tel_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_name = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_name",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_name_call_back , "POST");
        };get_message_name_last_name_connection.edit_name_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_name_by_ID = function (ID, name){
                var param = {"act": "get_message_name_last_name_edit_name_by_ID",
            name : name,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_name_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_last_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_last_name = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_last_name",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_last_name_call_back , "POST");
        };get_message_name_last_name_connection.edit_last_name_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_last_name_by_ID = function (ID, last_name){
                var param = {"act": "get_message_name_last_name_edit_last_name_by_ID",
            last_name : last_name,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_last_name_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_title_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_title = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_title",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_title_call_back , "POST");
        };get_message_name_last_name_connection.edit_title_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_title_by_ID = function (ID, title){
                var param = {"act": "get_message_name_last_name_edit_title_by_ID",
            title : title,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_title_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_text_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_text = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_text",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_text_call_back , "POST");
        };get_message_name_last_name_connection.edit_text_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_text_by_ID = function (ID, text){
                var param = {"act": "get_message_name_last_name_edit_text_by_ID",
            text : text,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_text_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_replay_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_replay = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_replay",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_replay_call_back , "POST");
        };get_message_name_last_name_connection.edit_replay_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_replay_by_ID = function (ID, replay){
                var param = {"act": "get_message_name_last_name_edit_replay_by_ID",
            replay : replay,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_replay_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_replay_date_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_replay_date = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_replay_date",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_replay_date_call_back , "POST");
        };get_message_name_last_name_connection.edit_replay_date_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_replay_date_by_ID = function (ID, replay_date){
                var param = {"act": "get_message_name_last_name_edit_replay_date_by_ID",
            replay_date : replay_date,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_replay_date_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_created_by = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_created_by",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_created_by_call_back , "POST");
        };get_message_name_last_name_connection.edit_created_by_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_created_by_by_ID = function (ID, created_by){
                var param = {"act": "get_message_name_last_name_edit_created_by_by_ID",
            created_by : created_by,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_created_by_by_ID_call_back , "POST");
        };get_message_name_last_name_connection.edit_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_by_creationDate = function (ID,tel,name,last_name,title,text,replay,replay_date,created_by,creationDate){
                var param = {"act": "get_message_name_last_name_edit_by_creationDate",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,title : title ,text : text ,replay : replay ,replay_date : replay_date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_by_creationDate_call_back , "POST");
        };get_message_name_last_name_connection.edit_creationDate_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_message_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_message_name_last_name_connection.edit_creationDate_by_ID = function (ID, creationDate){
                var param = {"act": "get_message_name_last_name_edit_creationDate_by_ID",
            creationDate : creationDate,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_message_name_last_name_connection.controller_url , param , get_message_name_last_name_connection.edit_creationDate_by_ID_call_back , "POST");
        };