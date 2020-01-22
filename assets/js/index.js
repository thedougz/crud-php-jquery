var xhr = new XMLHttpRequest();  

// GET
function getList(){
    xhr.onload = function() {
        if (xhr.status == 200) {
            $('#getList').html(xhr.responseText);
        }
    };

    xhr.open('GET', 'controllers/get', 'true');
    xhr.send(null);

}

getList();


//POST
$( "#form-register" ).submit(function( event ) {
    event.preventDefault();

    let data = $('#form-register').serialize();

    $.ajax({
        url: 'controllers/post',
        data: data,
        type: 'POST',
        success: (res) => {
            if (res == true) {
                $( "#form-register" )[0].reset();
                getList();
            }else if(res === "User Already Registered"){
                Swal.fire({
                    title: 'Atenção',
                    text: 'Esta conta de email já está em uso!',
                    icon: 'warning',
                    confirmButtonText: 'Tentar outro'
                })
            }
        }
    })
});

//PUT
$( "#form-update" ).submit(function( event ) {
    event.preventDefault();

    let data = $('#form-update').serialize();

    $.ajax({
        url: url+'controllers/put',
        data: data,
        type: 'POST',
        success: (res) => {
            if (res == true) {
                window.location.href = "../";
            }else if(res === "User Already Registered"){
                Swal.fire({
                    title: 'Atenção',
                    text: 'Esta conta de email já está em uso!',
                    icon: 'warning',
                    confirmButtonText: 'Tentar outro'
                })
            }
        }
    })
});

function deleteUser(id){
    $.ajax({
        url: 'controllers/delete',
        data: {id},
        type: 'POST',
        success: (res) => {
            if (res == true) {
                getList();
            }
        }
    });
}
