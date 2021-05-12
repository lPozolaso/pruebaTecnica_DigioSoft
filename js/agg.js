//Agregar cliente a base de datos.
$(function () {
 //Recoger datos del form.
    $('#agg_form').on('submit', function (e) {
        e.preventDefault();
        var jsonData = $(this).serializeArray()
            .reduce(function (a, z) {
                a[z.name] = z.value;
                return a;
            }, {});
        console.log(jsonData);
    });
    $.ajax({
        url: "inc/agregar.php",
        type: "POST",
        datatype: "JSON",
        data: jsonData,
        success: function (data) {
            console.log(data);
            //Notificar 
            if (data == "1") {
                //Si existe ya el cliente.
                Swal.fire({
                    type: 'success',
                    title: 'Cliente dado de alta!',
                }).then((result) => {
                    if (result.value) {
                        //window.location.href = "vistas/pag_inicio.php";
                        console.log("Conexion Exitosa");
                        location.reload();
                    }
                });
            } else {
                Swal.fire({
                    type: 'success',
                    title: 'El cliente ya existe!',

                });

            }
        }

    });

});