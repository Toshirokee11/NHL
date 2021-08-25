$("#login").submit(function(e){
    e.preventDefault();

    if($('#nombre').val()== "" || $('#telefono').val() == "" || $('#correo').val() == "" ){
        alert("Asegurece de llenar todos los campos.");
    }else{

        let nombre = $("#nombre").val();
        let telefono = $("#telefono").val();
        let correo = $("#correo").val();
        var data = {
            nombre:nombre,
            telefono:telefono,
            correo:correo,
            action:"addSucriptor"
        }

        $.ajax({
            type: "POST",
            url: "/admin/controller/userController.php",
            data: data,
            success: function(data){
                
                data=JSON.parse(data)
                console.log("responsive serve"+data);

                if(data == true){
                    //alert("cookie agregada usuario");
                    document.cookie = "user=true; max-age=3600; path=/";
                    document.cookie = "modal=1; max-age=2; path=/";
                    location.reload();
                    
                }else{
                    alert("error");
                }

            }                
        })

    }

});     

$(document).ready(() => {
    if (document.cookie.includes("user")) {
        $('#modal .contenedor:nth-child(1)').removeClass('activo').addClass('inactivo');
        $('#modal .contenedor:nth-child(2)').removeClass('inactivo').addClass('activo');
        if (document.cookie.includes("modal")) {
            $('#catalogo').click();
        }
    }
})