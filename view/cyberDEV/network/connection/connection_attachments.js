var grid_attachments;
var attachments_connection = {
    controller_url: '../controller_robo/controller_attachments.php'
    , debug_mode: false
    , data: ''
};

attachments_connection.get_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get = function () {
    var param = {"act": "attachments_get"};
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_call_back, "POST");
};
//_____________ delete function
attachments_connection.delete_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};

attachments_connection.delete = function (ID) {
    var param = {
        act: "attachments_delete",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.delete_call_back, "POST");
};
//_____________ set function
attachments_connection.set_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};

attachments_connection.set = function (user_id, name, url, created_by) {
    var param = {
        act: "attachments_set",
        user_id: user_id, name: name, url: url, created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.set_call_back, "POST");
};
//_____________ grid function
attachments_connection.get_grid_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }

    grid_attachments = new PSCO_grid('grid_attachments');

    grid_attachments.cols = [
        {name: 'ID', hidden: false, type: 'text'}, {name: 'user_id', hidden: false, type: 'text'}, {
            name: 'name',
            hidden: false,
            type: 'text'
        }, {name: 'url', hidden: false, type: 'text'}, {
            name: 'created_by',
            hidden: false,
            type: 'text'
        }, {name: 'creationDate', hidden: false, type: 'text'}];

    grid_attachments.RightToLeft = false;

    // grid_attachments.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

    grid_attachments.data = data;

    grid_attachments.render();

};
attachments_connection.get_grid = function () {
    var param = {"act": "attachments_get"};
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};
//________________get functions
attachments_connection.get_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get_by_ID = function (ID) {
    var param = {
        "act": "attachments_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_by_ID_call_back, "POST");
};

attachments_connection.get_by_ID_grid = function (ID) {
    var param = {
        "act": "attachments_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};
attachments_connection.get_by_user_id_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get_by_user_id = function (user_id) {
    var param = {
        "act": "attachments_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_by_user_id_call_back, "POST");
};
attachments_connection.get_by_user_id_call_back_sync = function (data , o) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
    if(void 0!=o && o != undefined )
        o(data);
    attachments_connection.data = data ;
};
attachments_connection.get_by_user_id_sync = function (user_id , o) {
    var param = {
        "act": "attachments_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback_sync(attachments_connection.controller_url, param, attachments_connection.get_by_user_id_call_back_sync, "POST",o);
};

attachments_connection.get_by_user_id_grid = function (user_id) {
    var param = {
        "act": "attachments_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};
attachments_connection.get_by_name_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get_by_name = function (name) {
    var param = {
        "act": "attachments_get_by_name",
        name: name
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_by_name_call_back, "POST");
};

attachments_connection.get_by_name_grid = function (name) {
    var param = {
        "act": "attachments_get_by_name",
        name: name
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};
attachments_connection.get_by_url_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get_by_url = function (url) {
    var param = {
        "act": "attachments_get_by_url",
        url: url
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_by_url_call_back, "POST");
};

attachments_connection.get_by_url_grid = function (url) {
    var param = {
        "act": "attachments_get_by_url",
        url: url
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};
attachments_connection.get_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get_by_created_by = function (created_by) {
    var param = {
        "act": "attachments_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_by_created_by_call_back, "POST");
};

attachments_connection.get_by_created_by_grid = function (created_by) {
    var param = {
        "act": "attachments_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};
attachments_connection.get_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.get_by_creationDate = function (creationDate) {
    var param = {
        "act": "attachments_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_by_creationDate_call_back, "POST");
};

attachments_connection.get_by_creationDate_grid = function (creationDate) {
    var param = {
        "act": "attachments_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.get_grid_call_back, "POST");
};

//________________edit functions
attachments_connection.edit_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_by_ID = function (ID, user_id, name, url, created_by, creationDate) {
    var param = {
        "act": "attachments_edit_by_ID",
        ID: ID, user_id: user_id, name: name, url: url, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_by_ID_call_back, "POST");
};
attachments_connection.edit_ID_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_ID_by_ID = function (ID, ID) {
    var param = {
        "act": "attachments_edit_ID_by_ID",
        ID: ID,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_ID_by_ID_call_back, "POST");
};
attachments_connection.edit_by_user_id_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_by_user_id = function (ID, user_id, name, url, created_by, creationDate) {
    var param = {
        "act": "attachments_edit_by_user_id",
        ID: ID, user_id: user_id, name: name, url: url, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_by_user_id_call_back, "POST");
};
attachments_connection.edit_user_id_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_user_id_by_ID = function (ID, user_id) {
    var param = {
        "act": "attachments_edit_user_id_by_ID",
        user_id: user_id,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_user_id_by_ID_call_back, "POST");
};
attachments_connection.edit_by_name_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_by_name = function (ID, user_id, name, url, created_by, creationDate) {
    var param = {
        "act": "attachments_edit_by_name",
        ID: ID, user_id: user_id, name: name, url: url, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_by_name_call_back, "POST");
};
attachments_connection.edit_name_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_name_by_ID = function (ID, name) {
    var param = {
        "act": "attachments_edit_name_by_ID",
        name: name,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_name_by_ID_call_back, "POST");
};
attachments_connection.edit_by_url_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_by_url = function (ID, user_id, name, url, created_by, creationDate) {
    var param = {
        "act": "attachments_edit_by_url",
        ID: ID, user_id: user_id, name: name, url: url, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_by_url_call_back, "POST");
};
attachments_connection.edit_url_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_url_by_ID = function (ID, url) {
    var param = {
        "act": "attachments_edit_url_by_ID",
        url: url,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_url_by_ID_call_back, "POST");
};
attachments_connection.edit_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_by_created_by = function (ID, user_id, name, url, created_by, creationDate) {
    var param = {
        "act": "attachments_edit_by_created_by",
        ID: ID, user_id: user_id, name: name, url: url, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_by_created_by_call_back, "POST");
};
attachments_connection.edit_created_by_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_created_by_by_ID = function (ID, created_by) {
    var param = {
        "act": "attachments_edit_created_by_by_ID",
        created_by: created_by,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_created_by_by_ID_call_back, "POST");
};
attachments_connection.edit_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_by_creationDate = function (ID, user_id, name, url, created_by, creationDate) {
    var param = {
        "act": "attachments_edit_by_creationDate",
        ID: ID, user_id: user_id, name: name, url: url, created_by: created_by, creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_by_creationDate_call_back, "POST");
};
attachments_connection.edit_creationDate_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (attachments_connection.debug_mode) {
        console.log(data);
    }
};
attachments_connection.edit_creationDate_by_ID = function (ID, creationDate) {
    var param = {
        "act": "attachments_edit_creationDate_by_ID",
        creationDate: creationDate,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(attachments_connection.controller_url, param, attachments_connection.edit_creationDate_by_ID_call_back, "POST");
};