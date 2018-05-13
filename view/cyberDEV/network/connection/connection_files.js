var grid_files;
var files_connection = {
    controller_url: '../controller_robo/controller_files.php' //TODO: set controller url
    , debug_mode: false
    ,data : null
    //controller/controller_users.php
};

files_connection.get_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get = function () {
    var param = {"act": "files_get"};
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_call_back, "POST");
};
//_____________ delete function
files_connection.delete_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};

files_connection.delete = function (ID) {
    var param = {
        act: "files_delete",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.delete_call_back, "POST");
};
//_____________ set function
files_connection.set_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};

files_connection.set = function (user_id, type, title, comment, date, created_by) {
    var param = {
        act: "files_set",
        user_id: user_id, type: type, title: title, comment: comment, date: date, created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.set_call_back, "POST");
};
//_____________ grid function
files_connection.get_grid_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }

    grid_files = new PSCO_grid('grid_files');

    grid_files.cols = [
        {name: 'ID', hidden: false, type: 'text'}, {name: 'user_id', hidden: false, type: 'text'}, {
            name: 'type',
            hidden: false,
            type: 'text'
        }, {name: 'title', hidden: false, type: 'text'}, {name: 'comment', hidden: false, type: 'text'}, {
            name: 'date',
            hidden: false,
            type: 'text'
        }, {name: 'created_by', hidden: false, type: 'text'}, {name: 'creationDate', hidden: false, type: 'text'}];

    grid_files.RightToLeft = false;

    // grid_files.actions = [{name: 'delete', ClassName: 'glyphicon glyphicon-remove', attribute: {onclick: 'deleteIt()'}}];

    grid_files.data = data;

    grid_files.render();

};
files_connection.get_grid = function () {
    var param = {"act": "files_get"};
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
//________________get functions
files_connection.get_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_ID = function (ID) {
    var param = {
        "act": "files_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_ID_call_back, "POST");
};
files_connection.get_by_ID_call_back_sync = function (data , o) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
    files_connection.data = data;
    if(void 0 != o && o!= undefined )
        o(data);
};
files_connection.get_by_ID_sync = function (ID , o ) {
    var param = {
        "act": "files_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback_sync(files_connection.controller_url, param, files_connection.get_by_ID_call_back_sync, "POST",o);
};

files_connection.get_by_ID_grid = function (ID) {
    var param = {
        "act": "files_get_by_ID",
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_user_id_call_back_sync = function (data,o) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
    files_connection.data = data;
    if(void 0!= o && o != undefined)
        o(data);

};
files_connection.get_by_user_id_sync = function (user_id,o) {
    var param = {
        "act": "files_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback_sync(files_connection.controller_url, param, files_connection.get_by_user_id_call_back_sync, "POST",o);
};
files_connection.get_by_user_id_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_user_id = function (user_id) {
    var param = {
        "act": "files_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_user_id_call_back, "POST");
};

files_connection.get_by_user_id_grid = function (user_id) {
    var param = {
        "act": "files_get_by_user_id",
        user_id: user_id
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_type_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_type = function (type) {
    var param = {
        "act": "files_get_by_type",
        type: type
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_type_call_back, "POST");
};

files_connection.get_by_type_grid = function (type) {
    var param = {
        "act": "files_get_by_type",
        type: type
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_title_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_title = function (title) {
    var param = {
        "act": "files_get_by_title",
        title: title
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_title_call_back, "POST");
};

files_connection.get_by_title_grid = function (title) {
    var param = {
        "act": "files_get_by_title",
        title: title
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_comment_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_comment = function (comment) {
    var param = {
        "act": "files_get_by_comment",
        comment: comment
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_comment_call_back, "POST");
};

files_connection.get_by_comment_grid = function (comment) {
    var param = {
        "act": "files_get_by_comment",
        comment: comment
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_date_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_date = function (date) {
    var param = {
        "act": "files_get_by_date",
        date: date
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_date_call_back, "POST");
};

files_connection.get_by_date_grid = function (date) {
    var param = {
        "act": "files_get_by_date",
        date: date
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_created_by = function (created_by) {
    var param = {
        "act": "files_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_created_by_call_back, "POST");
};

files_connection.get_by_created_by_grid = function (created_by) {
    var param = {
        "act": "files_get_by_created_by",
        created_by: created_by
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};
files_connection.get_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.get_by_creationDate = function (creationDate) {
    var param = {
        "act": "files_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_by_creationDate_call_back, "POST");
};

files_connection.get_by_creationDate_grid = function (creationDate) {
    var param = {
        "act": "files_get_by_creationDate",
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.get_grid_call_back, "POST");
};

//________________edit functions
files_connection.edit_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_ID = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_ID",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_ID_call_back, "POST");
};
files_connection.edit_ID_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_ID_by_ID = function (ID, ID) {
    var param = {
        "act": "files_edit_ID_by_ID",
        ID: ID,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_ID_by_ID_call_back, "POST");
};
files_connection.edit_by_user_id_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_user_id = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_user_id",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_user_id_call_back, "POST");
};
files_connection.edit_user_id_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_user_id_by_ID = function (ID, user_id) {
    var param = {
        "act": "files_edit_user_id_by_ID",
        user_id: user_id,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_user_id_by_ID_call_back, "POST");
};
files_connection.edit_by_type_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_type = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_type",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_type_call_back, "POST");
};
files_connection.edit_type_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_type_by_ID = function (ID, type) {
    var param = {
        "act": "files_edit_type_by_ID",
        type: type,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_type_by_ID_call_back, "POST");
};
files_connection.edit_by_title_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_title = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_title",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_title_call_back, "POST");
};
files_connection.edit_title_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_title_by_ID = function (ID, title) {
    var param = {
        "act": "files_edit_title_by_ID",
        title: title,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_title_by_ID_call_back, "POST");
};
files_connection.edit_by_comment_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_comment = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_comment",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_comment_call_back, "POST");
};
files_connection.edit_comment_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_comment_by_ID = function (ID, comment) {
    var param = {
        "act": "files_edit_comment_by_ID",
        comment: comment,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_comment_by_ID_call_back, "POST");
};
files_connection.edit_by_date_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_date = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_date",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_date_call_back, "POST");
};
files_connection.edit_date_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_date_by_ID = function (ID, date) {
    var param = {
        "act": "files_edit_date_by_ID",
        date: date,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_date_by_ID_call_back, "POST");
};
files_connection.edit_by_created_by_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_created_by = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_created_by",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_created_by_call_back, "POST");
};
files_connection.edit_created_by_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_created_by_by_ID = function (ID, created_by) {
    var param = {
        "act": "files_edit_created_by_by_ID",
        created_by: created_by,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_created_by_by_ID_call_back, "POST");
};
files_connection.edit_by_creationDate_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_by_creationDate = function (ID, user_id, type, title, comment, date, created_by, creationDate) {
    var param = {
        "act": "files_edit_by_creationDate",
        ID: ID,
        user_id: user_id,
        type: type,
        title: title,
        comment: comment,
        date: date,
        created_by: created_by,
        creationDate: creationDate
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_by_creationDate_call_back, "POST");
};
files_connection.edit_creationDate_by_ID_call_back = function (data) {
    //TODO: set code after the server response
    if (files_connection.debug_mode) {
        console.log(data);
    }
};
files_connection.edit_creationDate_by_ID = function (ID, creationDate) {
    var param = {
        "act": "files_edit_creationDate_by_ID",
        creationDate: creationDate,
        ID: ID
    };
    ajax.sender_data_json_by_url_callback(files_connection.controller_url, param, files_connection.edit_creationDate_by_ID_call_back, "POST");
};