<?php
    require('includes/header.php');
?>

    <main class = "container">
        <div class=" row justify-content-center align-items-center">
            <form method="POST" name="login_form" id="login_form" action="" autocomplete="off">
                <img src="/img//logotipo.png" class="mx-auto d-block" alt="logotipo">
                <div class="input-group mb-3 ">
                    <div class="input-group-append"  data-validate = "Usuario incorrecto">
                        <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="email" id="usuario" name="usuario"  value="test@test.com" class="form-control input_user" value="" placeholder="Email o nombre Usuario" required  />
                </div>
                <div class="input-group mb-2 ">
                    <div class="input-group-append"  data-validate = "Password incorrecto">
                        <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" id="inputPassword" name="inputPassword" required  class="form-control input_pass" placeholder="Contrasena">
                </div>

                <div class="row">
                    <div class="d-grid gap-4 col-8 mx-auto">

                        <button type="submit" class="btn btn-danger btn-block" id="submit" name="submit">Acceso</button>

                    </div>
                </div>
                <p class="mt-5 mb-3 text-muted">&copy; 2021 Digiosoft Acesores SC. Todos los derechos reservados.</p>
            </form>
        </div>
    </main>
<?php
    require('includes/footer.php');
?>