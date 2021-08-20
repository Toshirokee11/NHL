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
                    location.reload();
                }else{
                    alert("error");
                }

            }                
        })

    }

});     
