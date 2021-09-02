$("#logins").submit(function(e) {
    e.preventDefault();

    let username = $("#usuario").val();
    let password = $("#clave").val();
    var data = {
        username: username,
        password: password,
        action: "login"
    }
    //console.log(data.username);
    $.ajax({
        type: "POST",
        url: "admin/controller/userController.php",
        data: data,
        success: function(response) {
            if (response == 0) {
                swal("Intente Nuevamente!", "Usuario o Contraseña Incorrecto!", "error");
            } else {
                window.location.href = "admin/view/dashboard.php";

            }

        }


    })


});