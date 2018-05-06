var grid_locations;
var locations_connection = {
    controller_url: '../controller_robo/controller_locations.php'
    , debug_mode: false
    , data: null
};

locations_connection.get_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
    locations_connection.data = data;
};
locations_connection.get = function () {
    var param = {"act": "locations_get"};
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_call_back, "POST");
};
//_____________ delete function
locations_connection.delete_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};

locations_connection.delete = function (ID) {
    var param = {
        act: "locations_delete",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.delete_call_back, "POST");
};
//_____________ set function
locations_connection.set_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};

locations_connection.set = function (title, Lat, Lng, created_by) {
    var param = {
        act: "locations_set",
        title: title, Lat: Lat, Lng: Lng, created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.set_call_back, "POST");
};
//_____________ grid function
locations_connection.get_grid_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }

    grid_locations = new PSCO_grid('grid_locations');

    grid_locations.cols = [
        {name: 'ID', hidden: false, type: 'text'}, {name: 'title', hidden: false, type: 'text'}, {
            name: 'Lat',
            hidden: false,
            type: 'text'
        }, {name: 'Lng', hidden: false, type: 'text'}, {
            name: 'created_by',
            hidden: false,
            type: 'text'
        }, {name: 'creationDate', hidden: false, type: 'text'}];

    grid_locations.RightToLeft = false;

    // grid_locations.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

    grid_locations.data = data;

    grid_locations.render();

};
locations_connection.get_grid = function () {
    var param = {"act": "locations_get"};
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};
//________________get functions
locations_connection.get_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.get_by_ID = function (ID) {
    var param = {
        "act": "locations_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_by_ID_call_back, "POST");
};

locations_connection.get_by_ID_grid = function (ID) {
    var param = {
        "act": "locations_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};
locations_connection.get_by_title_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.get_by_title = function (title) {
    var param = {
        "act": "locations_get_by_title",
        title: title
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_by_title_call_back, "POST");
};

locations_connection.get_by_title_grid = function (title) {
    var param = {
        "act": "locations_get_by_title",
        title: title
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};
locations_connection.get_by_Lat_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.get_by_Lat = function (Lat) {
    var param = {
        "act": "locations_get_by_Lat",
        Lat: Lat
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_by_Lat_call_back, "POST");
};

locations_connection.get_by_Lat_grid = function (Lat) {
    var param = {
        "act": "locations_get_by_Lat",
        Lat: Lat
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};
locations_connection.get_by_Lng_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.get_by_Lng = function (Lng) {
    var param = {
        "act": "locations_get_by_Lng",
        Lng: Lng
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_by_Lng_call_back, "POST");
};

locations_connection.get_by_Lng_grid = function (Lng) {
    var param = {
        "act": "locations_get_by_Lng",
        Lng: Lng
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};
locations_connection.get_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.get_by_created_by = function (created_by) {
    var param = {
        "act": "locations_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_by_created_by_call_back, "POST");
};

locations_connection.get_by_created_by_grid = function (created_by) {
    var param = {
        "act": "locations_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};
locations_connection.get_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.get_by_creationDate = function (creationDate) {
    var param = {
        "act": "locations_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_by_creationDate_call_back, "POST");
};

locations_connection.get_by_creationDate_grid = function (creationDate) {
    var param = {
        "act": "locations_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.get_grid_call_back, "POST");
};

//________________edit functions
locations_connection.edit_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_by_ID = function (ID, title, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "locations_edit_by_ID",
        ID: ID, title: title, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_by_ID_call_back, "POST");
};
locations_connection.edit_ID_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_ID_by_ID = function (ID, ID) {
    var param = {
        "act": "locations_edit_ID_by_ID",
        ID: ID,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_ID_by_ID_call_back, "POST");
};
locations_connection.edit_by_title_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_by_title = function (ID, title, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "locations_edit_by_title",
        ID: ID, title: title, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_by_title_call_back, "POST");
};
locations_connection.edit_title_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_title_by_ID = function (ID, title) {
    var param = {
        "act": "locations_edit_title_by_ID",
        title: title,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_title_by_ID_call_back, "POST");
};
locations_connection.edit_by_Lat_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_by_Lat = function (ID, title, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "locations_edit_by_Lat",
        ID: ID, title: title, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_by_Lat_call_back, "POST");
};
locations_connection.edit_Lat_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_Lat_by_ID = function (ID, Lat) {
    var param = {
        "act": "locations_edit_Lat_by_ID",
        Lat: Lat,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_Lat_by_ID_call_back, "POST");
};
locations_connection.edit_by_Lng_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_by_Lng = function (ID, title, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "locations_edit_by_Lng",
        ID: ID, title: title, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_by_Lng_call_back, "POST");
};
locations_connection.edit_Lng_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_Lng_by_ID = function (ID, Lng) {
    var param = {
        "act": "locations_edit_Lng_by_ID",
        Lng: Lng,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_Lng_by_ID_call_back, "POST");
};
locations_connection.edit_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_by_created_by = function (ID, title, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "locations_edit_by_created_by",
        ID: ID, title: title, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_by_created_by_call_back, "POST");
};
locations_connection.edit_created_by_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_created_by_by_ID = function (ID, created_by) {
    var param = {
        "act": "locations_edit_created_by_by_ID",
        created_by: created_by,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_created_by_by_ID_call_back, "POST");
};
locations_connection.edit_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_by_creationDate = function (ID, title, Lat, Lng, created_by, creationDate) {
    var param = {
        "act": "locations_edit_by_creationDate",
        ID: ID, title: title, Lat: Lat, Lng: Lng, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_by_creationDate_call_back, "POST");
};
locations_connection.edit_creationDate_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (locations_connection.debug_mode) {
        console.log(data);
    }
};
locations_connection.edit_creationDate_by_ID = function (ID, creationDate) {
    var param = {
        "act": "locations_edit_creationDate_by_ID",
        creationDate: creationDate,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(locations_connection.controller_url, param, locations_connection.edit_creationDate_by_ID_call_back, "POST");
};