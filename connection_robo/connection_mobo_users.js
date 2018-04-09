
         var grid_mobo_users;
         var mobo_users_connection = {
            controller_url : '' //TODO: set controller url
            ,debug_mode : false
            //controller/controller_users.php
        };
        
        mobo_users_connection.get_call_back = function (data){
            //TODO: set code after the server response
            if(mobo_users_connection.debug_mode){
                console.log(data);
            }
        };
        mobo_users_connection.get = function (){
            var param = {"act": "mobo_users_get"};
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_call_back , "POST");
        };
            //_____________ delete function
            mobo_users_connection.delete_call_back = function (data){
            //TODO: set code after the server response
            if(mobo_users_connection.debug_mode){
                console.log(data);
            }
            };

         mobo_users_connection.delete = function (ID){
            var param = {act: "mobo_users_delete",
            ID: ID};
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.delete_call_back , "POST");
        };
            //_____________ set function
            mobo_users_connection.set_call_back = function (data){
            //TODO: set code after the server response
            if(mobo_users_connection.debug_mode){
                console.log(data);
            }
            };

         mobo_users_connection.set = function (tel,name,last_name,national_cart,Birth_certificate,token,created_by){
            var param = {act: "mobo_users_set",
            tel:tel ,name:name ,last_name:last_name ,national_cart:national_cart ,Birth_certificate:Birth_certificate ,token:token ,created_by:created_by};
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.set_call_back , "POST");
        };
            //_____________ grid function
            mobo_users_connection.get_grid_call_back = function (data){
            //TODO: set code after the server response
            if(mobo_users_connection.debug_mode){
            console.log(data);
            }

            grid_mobo_users = new PSCO_grid('grid_mobo_users');

            grid_mobo_users.cols = [
            {name: 'ID', hidden: false, type: 'text'},{name: 'tel', hidden: false, type: 'text'},{name: 'name', hidden: false, type: 'text'},{name: 'last_name', hidden: false, type: 'text'},{name: 'national_cart', hidden: false, type: 'text'},{name: 'Birth_certificate', hidden: false, type: 'text'},{name: 'token', hidden: false, type: 'text'},{name: 'created_by', hidden: false, type: 'text'},{name: 'creationDate', hidden: false, type: 'text'}];

        grid_mobo_users.RightToLeft = false;

       // grid_mobo_users.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

        grid_mobo_users.data = data;

        grid_mobo_users.render();

        };
        mobo_users_connection.get_grid = function (){
            var param = {"act": "mobo_users_get"};
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        //________________get functions
        mobo_users_connection.get_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_ID = function (ID){
                var param = {"act": "mobo_users_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_ID_call_back , "POST");
        };

        mobo_users_connection.get_by_ID_grid = function (ID){
                var param = {"act": "mobo_users_get_by_ID",
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_tel_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_tel = function (tel){
                var param = {"act": "mobo_users_get_by_tel",
            tel : tel
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_tel_call_back , "POST");
        };

        mobo_users_connection.get_by_tel_grid = function (tel){
                var param = {"act": "mobo_users_get_by_tel",
            tel : tel
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_name_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_name = function (name){
                var param = {"act": "mobo_users_get_by_name",
            name : name
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_name_call_back , "POST");
        };

        mobo_users_connection.get_by_name_grid = function (name){
                var param = {"act": "mobo_users_get_by_name",
            name : name
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_last_name_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_last_name = function (last_name){
                var param = {"act": "mobo_users_get_by_last_name",
            last_name : last_name
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_last_name_call_back , "POST");
        };

        mobo_users_connection.get_by_last_name_grid = function (last_name){
                var param = {"act": "mobo_users_get_by_last_name",
            last_name : last_name
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_national_cart_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_national_cart = function (national_cart){
                var param = {"act": "mobo_users_get_by_national_cart",
            national_cart : national_cart
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_national_cart_call_back , "POST");
        };

        mobo_users_connection.get_by_national_cart_grid = function (national_cart){
                var param = {"act": "mobo_users_get_by_national_cart",
            national_cart : national_cart
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_Birth_certificate_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_Birth_certificate = function (Birth_certificate){
                var param = {"act": "mobo_users_get_by_Birth_certificate",
            Birth_certificate : Birth_certificate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_Birth_certificate_call_back , "POST");
        };

        mobo_users_connection.get_by_Birth_certificate_grid = function (Birth_certificate){
                var param = {"act": "mobo_users_get_by_Birth_certificate",
            Birth_certificate : Birth_certificate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_token_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_token = function (token){
                var param = {"act": "mobo_users_get_by_token",
            token : token
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_token_call_back , "POST");
        };

        mobo_users_connection.get_by_token_grid = function (token){
                var param = {"act": "mobo_users_get_by_token",
            token : token
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_created_by = function (created_by){
                var param = {"act": "mobo_users_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_created_by_call_back , "POST");
        };

        mobo_users_connection.get_by_created_by_grid = function (created_by){
                var param = {"act": "mobo_users_get_by_created_by",
            created_by : created_by
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        mobo_users_connection.get_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.get_by_creationDate = function (creationDate){
                var param = {"act": "mobo_users_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_by_creationDate_call_back , "POST");
        };

        mobo_users_connection.get_by_creationDate_grid = function (creationDate){
                var param = {"act": "mobo_users_get_by_creationDate",
            creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.get_grid_call_back , "POST");
        };
        
        //________________edit functions
        mobo_users_connection.edit_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_ID = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_ID",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_ID_call_back , "POST");
        };mobo_users_connection.edit_ID_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_ID_by_ID = function (ID, ID){
                var param = {"act": "mobo_users_edit_ID_by_ID",
            ID : ID,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_ID_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_tel_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_tel = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_tel",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_tel_call_back , "POST");
        };mobo_users_connection.edit_tel_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_tel_by_ID = function (ID, tel){
                var param = {"act": "mobo_users_edit_tel_by_ID",
            tel : tel,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_tel_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_name_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_name = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_name",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_name_call_back , "POST");
        };mobo_users_connection.edit_name_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_name_by_ID = function (ID, name){
                var param = {"act": "mobo_users_edit_name_by_ID",
            name : name,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_name_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_last_name_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_last_name = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_last_name",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_last_name_call_back , "POST");
        };mobo_users_connection.edit_last_name_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_last_name_by_ID = function (ID, last_name){
                var param = {"act": "mobo_users_edit_last_name_by_ID",
            last_name : last_name,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_last_name_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_national_cart_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_national_cart = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_national_cart",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_national_cart_call_back , "POST");
        };mobo_users_connection.edit_national_cart_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_national_cart_by_ID = function (ID, national_cart){
                var param = {"act": "mobo_users_edit_national_cart_by_ID",
            national_cart : national_cart,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_national_cart_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_Birth_certificate_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_Birth_certificate = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_Birth_certificate",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_Birth_certificate_call_back , "POST");
        };mobo_users_connection.edit_Birth_certificate_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_Birth_certificate_by_ID = function (ID, Birth_certificate){
                var param = {"act": "mobo_users_edit_Birth_certificate_by_ID",
            Birth_certificate : Birth_certificate,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_Birth_certificate_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_token_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_token = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_token",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_token_call_back , "POST");
        };mobo_users_connection.edit_token_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_token_by_ID = function (ID, token){
                var param = {"act": "mobo_users_edit_token_by_ID",
            token : token,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_token_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_created_by_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_created_by = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_created_by",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_created_by_call_back , "POST");
        };mobo_users_connection.edit_created_by_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_created_by_by_ID = function (ID, created_by){
                var param = {"act": "mobo_users_edit_created_by_by_ID",
            created_by : created_by,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_created_by_by_ID_call_back , "POST");
        };mobo_users_connection.edit_by_creationDate_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_by_creationDate = function (ID,tel,name,last_name,national_cart,Birth_certificate,token,created_by,creationDate){
                var param = {"act": "mobo_users_edit_by_creationDate",
            ID : ID ,tel : tel ,name : name ,last_name : last_name ,national_cart : national_cart ,Birth_certificate : Birth_certificate ,token : token ,created_by : created_by ,creationDate : creationDate
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_by_creationDate_call_back , "POST");
        };mobo_users_connection.edit_creationDate_by_ID_call_back = function (data){
                //TODO: set code after the server response
                if(mobo_users_connection.debug_mode){
                    console.log(data);
                }
            };
        mobo_users_connection.edit_creationDate_by_ID = function (ID, creationDate){
                var param = {"act": "mobo_users_edit_creationDate_by_ID",
            creationDate : creationDate,
            ID : ID
            };
            ajax.sender_data_json_by_url_callback(mobo_users_connection.controller_url , param , mobo_users_connection.edit_creationDate_by_ID_call_back , "POST");
        };