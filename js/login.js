$('#login_form').submit(function (e) {
    
    e.preventDefault();
    var usuario = $.trim($("#usuario").val());
    var password = $.trim($("#inputPassword").val());

    
    //Verificar si estan vacios.
    if (usuario.length == "" || password == "") {
        Swal.fire({
            type: 'warning',
            title: 'Debe ingresar un usuario y/o password',
        });
        return false;
    } else {
        $.ajax({
            url: "inc/login.php",
            type: "POST",
            datatype: "json",
            data: {
                usuario: usuario,
                password: password
            },
            success: function (data) {
                console.log(data);
                if (data == "null") {
                    Swal.fire({
                        type: 'error',
                        title: 'Usuario y/o password incorrecta',
                    });
                } else {
                    Swal.fire({
                        type: 'success',
                        title: '¡Conexión exitosa!',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ingresar'
                    }).then((result) => {
                        if (result.value) {
                            window.location.href = "/main.php";
                            console.log("Conexion Exitosa");
                        }
                    });

                }
            }
        });
    }
});