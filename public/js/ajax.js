function sendIdea(){
    var form = document.querySelector('#formIdea');
    var buttonForm = form.querySelector('button');
    var titre = form.querySelector('');
    var desc = form.querySelector('');
    var user_id = form.data('user_id');

    var infos = {
        "module":"idea",
        "titre":titre, 
        "desc":desc,
        "user_id":user_id
    }
    sendPost(infos, buttonForm);
    form.reset();
}

function sendLike(){
    var button = document.querySelector('#like');
    var user_id = button.data('user_id');
    var prop_id = button.data('id');

    var infos = {
        "module":"like",
        "user_id":user_id,
        "id":id
    }
    sendPost(infos, button);
}

function sendPost(infos, elmt){ 
    var route = "/xhr";
    elmt.disabled=true;

    $.ajax({
        type: "POST",
        url: route, // This is what I have updated
        dataType: 'JSON',
        beforeSend: function (xhr) {
            var token = $('meta[name="csrf_token"]').attr('content');
            if (token) {
                return xhr.setRequestHeader('X-CSRF-TOKEN', token);
            }
        },
        data: {
            _token: $('meta[name="csrf-token"]').attr('content'),
            info : infos
        },
        success: function (Response) {
            retour = Response["message"];
            console.log(retour);
            elmt.disabled=false;
        }
    });
}

