var grid_user_location;
var user_location_connection = {
    controller_url: '../controller_robo/controller_user_location.php'
    , debug_mode: false
    , data: null
};

user_location_connection.get_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
    user_location_connection.data = data;
};
user_location_connection.get_call_back_sync = function (data,o) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
    user_location_connection.data = data;
    if (void 0!=o && o!= undefined)
        o(data);
};
user_location_connection.get = function () {
    var param = {"act": "user_location_get"};
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_call_back, "POST");
};

user_location_connection.get_sync = function (call_back) {
    var param = {"act": "user_location_get"};
    ajax.sender_data_json_by_url_callback_sync(user_location_connection.controller_url, param, user_location_connection.get_call_back_sync, "POST",call_back);
};
//_____________ delete function
user_location_connection.delete_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};

user_location_connection.delete = function (ID) {
    var param = {
        act: "user_location_delete",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.delete_call_back, "POST");
};
//_____________ set function
user_location_connection.set_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};

user_location_connection.set = function (user_id, Lat, Lng, created_by) {
    var param = {
        act: "user_location_set",
        user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.set_call_back, "POST");
};
//_____________ grid function
user_location_connection.get_grid_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }

    grid_user_location = new PSCO_grid('grid_user_location');

    grid_user_location.cols = [
        {name: 'ID', hidden: false, type: 'text'}, {name: 'user_id', hidden: false, type: 'text'}, {
            name: 'Lat',
            hidden: false,
            type: 'text'
        }, {name: 'Lng', hidden: false, type: 'text'}, {
            name: 'created_by',
            hidden: false,
            type: 'text'
        }, {name: 'creationDate', hidden: false, type: 'text'}];

    grid_user_location.RightToLeft = false;

    // grid_user_location.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

    grid_user_location.data = data;

    grid_user_location.render();

};
user_location_connection.get_grid = function () {
    var param = {"act": "user_location_get"};
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};
//________________get functions
user_location_connection.get_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.get_by_ID = function (ID) {
    var param = {
        "act": "user_location_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_by_ID_call_back, "POST");
};

user_location_connection.get_by_ID_grid = function (ID) {
    var param = {
        "act": "user_location_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};
user_location_connection.get_by_user_id_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.get_by_user_id = function (user_id) {
    var param = {
        "act": "user_location_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_by_user_id_call_back, "POST");
};

user_location_connection.get_by_user_id_grid = function (user_id) {
    var param = {
        "act": "user_location_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};
user_location_connection.get_by_Lat_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.get_by_Lat = function (Lat) {
    var param = {
        "act": "user_location_get_by_Lat",
        Lat: Lat
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_by_Lat_call_back, "POST");
};

user_location_connection.get_by_Lat_grid = function (Lat) {
    var param = {
        "act": "user_location_get_by_Lat",
        Lat: Lat
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};
user_location_connection.get_by_Lng_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.get_by_Lng = function (Lng) {
    var param = {
        "act": "user_location_get_by_Lng",
        Lng: Lng
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_by_Lng_call_back, "POST");
};

user_location_connection.get_by_Lng_grid = function (Lng) {
    var param = {
        "act": "user_location_get_by_Lng",
        Lng: Lng
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};
user_location_connection.get_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.get_by_created_by = function (created_by) {
    var param = {
        "act": "user_location_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_by_created_by_call_back, "POST");
};

user_location_connection.get_by_created_by_grid = function (created_by) {
    var param = {
        "act": "user_location_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};
user_location_connection.get_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.get_by_creationDate = function (creationDate) {
    var param = {
        "act": "user_location_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_by_creationDate_call_back, "POST");
};

user_location_connection.get_by_creationDate_grid = function (creationDate) {
    var param = {
        "act": "user_location_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.get_grid_call_back, "POST");
};

//________________edit functions
user_location_connection.edit_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_by_ID = function (ID, user_id, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "user_location_edit_by_ID",
        ID: ID, user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_by_ID_call_back, "POST");
};
user_location_connection.edit_ID_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_ID_by_ID = function (ID, ID) {
    var param = {
        "act": "user_location_edit_ID_by_ID",
        ID: ID,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_ID_by_ID_call_back, "POST");
};
user_location_connection.edit_by_user_id_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_by_user_id = function (ID, user_id, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "user_location_edit_by_user_id",
        ID: ID, user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_by_user_id_call_back, "POST");
};
user_location_connection.edit_user_id_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_user_id_by_ID = function (ID, user_id) {
    var param = {
        "act": "user_location_edit_user_id_by_ID",
        user_id: user_id,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_user_id_by_ID_call_back, "POST");
};
user_location_connection.edit_by_Lat_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_by_Lat = function (ID, user_id, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "user_location_edit_by_Lat",
        ID: ID, user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_by_Lat_call_back, "POST");
};
user_location_connection.edit_Lat_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_Lat_by_ID = function (ID, Lat) {
    var param = {
        "act": "user_location_edit_Lat_by_ID",
        Lat: Lat,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_Lat_by_ID_call_back, "POST");
};
user_location_connection.edit_by_Lng_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_by_Lng = function (ID, user_id, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "user_location_edit_by_Lng",
        ID: ID, user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_by_Lng_call_back, "POST");
};
user_location_connection.edit_Lng_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_Lng_by_ID = function (ID, Lng) {
    var param = {
        "act": "user_location_edit_Lng_by_ID",
        Lng: Lng,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_Lng_by_ID_call_back, "POST");
};
user_location_connection.edit_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_by_created_by = function (ID, user_id, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "user_location_edit_by_created_by",
        ID: ID, user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_by_created_by_call_back, "POST");
};
user_location_connection.edit_created_by_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_created_by_by_ID = function (ID, created_by) {
    var param = {
        "act": "user_location_edit_created_by_by_ID",
        created_by: created_by,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_created_by_by_ID_call_back, "POST");
};
user_location_connection.edit_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_by_creationDate = function (ID, user_id, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "user_location_edit_by_creationDate",
        ID: ID, user_id: user_id, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_by_creationDate_call_back, "POST");
};
user_location_connection.edit_creationDate_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (user_location_connection.debug_mode) {
        console.log(data);
    }
};
user_location_connection.edit_creationDate_by_ID = function (ID, creationDate) {
    var param = {
        "act": "user_location_edit_creationDate_by_ID",
        creationDate: creationDate,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(user_location_connection.controller_url, param, user_location_connection.edit_creationDate_by_ID_call_back, "POST");
};