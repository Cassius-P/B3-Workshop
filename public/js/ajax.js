var buttonId = document.querySelector('#buttonIdea');
buttonId.addEventListener('click', event=>{
    sendIdea();
})

var buttonId2 = document.querySelector('#buttonLike');
buttonId2.addEventListener('click', event=>{
    //sendLike();
    console.log('la con de tt tes os');
})

function sendIdea(){
    var form = document.querySelector('#formIdea');
    var buttonForm = form.querySelector('#buttonIdea');
    var titre = form.querySelector('#titre');
    var desc = form.querySelector('#description');
    var user_id = form.dataset.user;
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
    var button = document.querySelector('#buttonLike');
    var user_id = button.dataset.user;
    var prop_id = button.dataset.idea;

    var infos = {
        "module":"like",
        "user_id":user_id,
        "id":id
    }
    sendPost(infos, button);
}

function sendPost(infos, button){
    var route = "/xhr";
    button.disabled=true;

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
            button.disabled=false;
        }
    });
}

