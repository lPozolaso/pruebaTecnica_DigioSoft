<?php
session_start();

if($_SESSION["s_usuario"] === null){
    header("Location: ../index.php");
}

require('includes/header.php');
?>
<!--
        Si el admin ingreso sesion, va poder acceder a esta pagina para agregar un cliente e igual cerrar la sesion.
     -->
<!--
        Barra fancy para cerrar sesion.
    -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Agregar Usuario</a>

        <form class="d-flex">

            <button class="btn btn-outline-success" id="cerrar_sesion" href="../bd/logout.php" role="button">Cerrar Sesion</button>
        </form>
    </div>
    </div>
</nav>
<!--AGREGAR USUARIO -->
<main class="container">
    <div class="bg-light p-5 rounded">
        <h1>Agregar Cliente</h1>
        <!-- FORM PARA AGREGAR USUARIO-->
        <form method="POST" name="agg_form" id="agg_form" action="" autocomplete="off">
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputPrimerNombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre "id="inputNombre" placeholder="Nombre" required>
                </div>
                <div class="form-group col">
                    <label for="inputSegundoNombre">Segundo Nombre</label>
                    <input type="text" class="form-control" name="segundo_nombre" id="inputSegundoNombre" placeholder="">
                </div>
                <div class="form-group col">
                    <label for="inputPrimerApellido">Apellido Paterno</label>
                    <input type="text" class="form-control" name="primero_apellido"id="inputApellidoP" placeholder="Apellido Paterno" required>
                </div>
                <div class="form-group col">
                    <label for="inputSegundoApellido">Apellido Materno</label>
                    <input type="text" class="form-control" name = "segundo_apellido" id="inputApellidoM" placeholder="Apellido Materno">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="selectGenero">Genero</label>
                    <select id="selectGenero" name = "genero" class="form-control">
                        <option selected>Selecciona una opcion </option>
                        <option>Masculino</option>
                        <option>Femenino</option>

                    </select>
                </div>
                <div class="form-group col">
                    <label for="selectEstadoCivil">Estado Civil</label>
                    <select id="selectEstadoCivil" name = "estado_civil" class="form-control">
                        <option selected>Selecciona una opcion </option>
                        <option>Soltero</option>
                        <option>Casado</option>
                        <option>Union Libre</option>
                        <option>Separado</option>
                        <option>Viudo</option>
                        <option>Divorciado</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="inputFecha">Fecha de Nacimiento</label>
                    <input type="date" class="form-control" id="inputFecha" name ="fecha_nacimiento" required>
                </div>
                <div class="form-group col">
                    <label for="inputINE">INE</label>
                    <input type="text" class="form-control" name = "ine" id="inputINE" placeholder="" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col">
                    <label for="inputCurp">CURP</label>
                    <input type="text" class="form-control" id="inputCurp" name ="curp"placeholder="" required>
                </div>
                <div class="form-group col">
                    <label for="inputSucursal">Sucursal</label>
                    <select id="inputSucursal" name ="sucursal" class="form-control">\
                        <option selected>Selecciona una opcion </option>
                        <option>Los Mochis</option>
                        <option>Guasave</option>
                        <option>Mazatlan</option>
                    </select>
                </div>
                <div class="form-group col">
                    <label for="inputCelular">Celular Propio</label>
                    <input type="tel" class="form-control" id="inputCelular" name="celular_propio" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                </div>
                <div class="form-group col">
                    <label for="inputFijo">Fijo Propio</label>
                    <input type="tel" class="form-control" id="inputFijo" name = "tel_fijo" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"  required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</main>

<?php
require('includes/footer.php');
?>