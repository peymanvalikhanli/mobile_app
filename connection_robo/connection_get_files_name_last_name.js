
         var grid_get_files_name_last_name;
         var get_files_name_last_name_connection = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        
        get_files_name_last_name_connection.get_call_back = function (data){
            //TODO: set code after the server response
            if(get_files_name_last_name_connection.debug_mode){
                console.log(data);
            }
        };
        get_files_name_last_name_connection.get = function (){
            var param = {"act": "get_files_name_last_name_get"};
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_call_back , "POST");
        };
            //_____________ delete function
            get_files_name_last_name_connection.delete_call_back = function (data){
            //TODO: set code after the server response
            if(get_files_name_last_name_connection.debug_mode){
                console.log(data);
            }
            };

         get_files_name_last_name_connection.delete = function (ID){
            var param = {act: "get_files_name_last_name_delete",
            ID: ID};
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.delete_call_back , "POST");
        };
            //_____________ set function
            get_files_name_last_name_connection.set_call_back = function (data){
            //TODO: set code after the server response
            if(get_files_name_last_name_connection.debug_mode){
                console.log(data);
            }
            };

         get_files_name_last_name_connection.set = function (tel,name,last_name,type,title,comment,date,created_by){
            var param = {act: "get_files_name_last_name_set",
            tel:tel ,name:name ,last_name:last_name ,type:type ,title:title ,comment:comment ,date:date ,created_by:created_by};
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.set_call_back , "POST");
        };
            //_____________ grid function
            get_files_name_last_name_connection.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(get_files_name_last_name_connection.debug_mode){
            console.log(data);
            }

            grid_get_files_name_last_name = new PSCO_grid('grid_get_files_name_last_name');

            grid_get_files_name_last_name.cols = [
            {name: 'ID', hidden: false, type: 'text'},{name: 'tel', hidden: false, type: 'text'},{name: 'name', hidden: false, type: 'text'},{name: 'last_name', hidden: false, type: 'text'},{name: 'type', hidden: false, type: 'text'},{name: 'title', hidden: false, type: 'text'},{name: 'comment', hidden: false, type: 'text'},{name: 'date', hidden: false, type: 'text'},{name: 'created_by', hidden: false, type: 'text'},{name: 'creationDate', hidden: false, type: 'text'}];

        grid_get_files_name_last_name.RightToLeft = false;

       // grid_get_files_name_last_name.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

        grid_get_files_name_last_name.data = data;

        grid_get_files_name_last_name.render();

        };
        get_files_name_last_name_connection.get_grid = function (){
            var param = {"act": "get_files_name_last_name_get"};
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        //________________get functions
        get_files_name_last_name_connection.get_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_ID = function (ID){
                var param = {"act": "get_files_name_last_name_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_ID_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_ID_grid = function (ID){
                var param = {"act": "get_files_name_last_name_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_tel_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_tel = function (tel){
                var param = {"act": "get_files_name_last_name_get_by_tel",
            tel : tel
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_tel_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_tel_grid = function (tel){
                var param = {"act": "get_files_name_last_name_get_by_tel",
            tel : tel
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_name = function (name){
                var param = {"act": "get_files_name_last_name_get_by_name",
            name : name
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_name_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_name_grid = function (name){
                var param = {"act": "get_files_name_last_name_get_by_name",
            name : name
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_last_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_last_name = function (last_name){
                var param = {"act": "get_files_name_last_name_get_by_last_name",
            last_name : last_name
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_last_name_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_last_name_grid = function (last_name){
                var param = {"act": "get_files_name_last_name_get_by_last_name",
            last_name : last_name
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_type_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_type = function (type){
                var param = {"act": "get_files_name_last_name_get_by_type",
            type : type
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_type_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_type_grid = function (type){
                var param = {"act": "get_files_name_last_name_get_by_type",
            type : type
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_title_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_title = function (title){
                var param = {"act": "get_files_name_last_name_get_by_title",
            title : title
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_title_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_title_grid = function (title){
                var param = {"act": "get_files_name_last_name_get_by_title",
            title : title
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_comment_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_comment = function (comment){
                var param = {"act": "get_files_name_last_name_get_by_comment",
            comment : comment
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_comment_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_comment_grid = function (comment){
                var param = {"act": "get_files_name_last_name_get_by_comment",
            comment : comment
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_date_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_date = function (date){
                var param = {"act": "get_files_name_last_name_get_by_date",
            date : date
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_date_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_date_grid = function (date){
                var param = {"act": "get_files_name_last_name_get_by_date",
            date : date
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_created_by = function (created_by){
                var param = {"act": "get_files_name_last_name_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_created_by_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_created_by_grid = function (created_by){
                var param = {"act": "get_files_name_last_name_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        get_files_name_last_name_connection.get_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.get_by_creationDate = function (creationDate){
                var param = {"act": "get_files_name_last_name_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_by_creationDate_call_back , "POST");
        };

        get_files_name_last_name_connection.get_by_creationDate_grid = function (creationDate){
                var param = {"act": "get_files_name_last_name_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.get_grid_call_back , "POST");
        };
        
        //________________edit functions
        get_files_name_last_name_connection.edit_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_ID = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_ID",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_ID_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_ID_by_ID = function (ID, ID){
                var param = {"act": "get_files_name_last_name_edit_ID_by_ID",
            ID : ID,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_ID_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_tel_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_tel = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_tel",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_tel_call_back , "POST");
        };get_files_name_last_name_connection.edit_tel_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_tel_by_ID = function (ID, tel){
                var param = {"act": "get_files_name_last_name_edit_tel_by_ID",
            tel : tel,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_tel_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_name = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_name",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_name_call_back , "POST");
        };get_files_name_last_name_connection.edit_name_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_name_by_ID = function (ID, name){
                var param = {"act": "get_files_name_last_name_edit_name_by_ID",
            name : name,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_name_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_last_name_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_last_name = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_last_name",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_last_name_call_back , "POST");
        };get_files_name_last_name_connection.edit_last_name_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_last_name_by_ID = function (ID, last_name){
                var param = {"act": "get_files_name_last_name_edit_last_name_by_ID",
            last_name : last_name,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_last_name_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_type_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_type = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_type",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_type_call_back , "POST");
        };get_files_name_last_name_connection.edit_type_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_type_by_ID = function (ID, type){
                var param = {"act": "get_files_name_last_name_edit_type_by_ID",
            type : type,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_type_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_title_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_title = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_title",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_title_call_back , "POST");
        };get_files_name_last_name_connection.edit_title_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_title_by_ID = function (ID, title){
                var param = {"act": "get_files_name_last_name_edit_title_by_ID",
            title : title,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_title_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_comment_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_comment = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_comment",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_comment_call_back , "POST");
        };get_files_name_last_name_connection.edit_comment_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_comment_by_ID = function (ID, comment){
                var param = {"act": "get_files_name_last_name_edit_comment_by_ID",
            comment : comment,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_comment_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_date_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_date = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_date",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_date_call_back , "POST");
        };get_files_name_last_name_connection.edit_date_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_date_by_ID = function (ID, date){
                var param = {"act": "get_files_name_last_name_edit_date_by_ID",
            date : date,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_date_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_created_by = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_created_by",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_created_by_call_back , "POST");
        };get_files_name_last_name_connection.edit_created_by_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_created_by_by_ID = function (ID, created_by){
                var param = {"act": "get_files_name_last_name_edit_created_by_by_ID",
            created_by : created_by,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_created_by_by_ID_call_back , "POST");
        };get_files_name_last_name_connection.edit_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_by_creationDate = function (ID,tel,name,last_name,type,title,comment,date,created_by,creationDate){
                var param = {"act": "get_files_name_last_name_edit_by_creationDate",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,type : type ,title : title ,comment : comment ,date : date ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_by_creationDate_call_back , "POST");
        };get_files_name_last_name_connection.edit_creationDate_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(get_files_name_last_name_connection.debug_mode){
                    console.log(data);
                }
            };
        get_files_name_last_name_connection.edit_creationDate_by_ID = function (ID, creationDate){
                var param = {"act": "get_files_name_last_name_edit_creationDate_by_ID",
            creationDate : creationDate,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(get_files_name_last_name_connection.controller_url , param , get_files_name_last_name_connection.edit_creationDate_by_ID_call_back , "POST");
        };