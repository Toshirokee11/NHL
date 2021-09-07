$('#formContact').submit(function(e) {
    e.preventDefault();
    let data = $(this).serialize();
    Swal.fire({
        icon: 'success',
        title: 'Enviando correo',
        text: ''
    });
    $.ajax({
        type: 'POST',
        url: $(this).attr('action'),
        data: data,
        success: function(res) {
            var res = JSON.parse(res);
            Swal.fire({
                icon: res.type,
                title: 'Gracias!',
                text: res.msg
            });
        }
    });
});