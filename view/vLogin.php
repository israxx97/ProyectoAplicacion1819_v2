<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
        </div>
        <input name="username" type="text" value="<?php echo $_REQUEST['username']; ?>" class="form-control" placeholder="Usuario">
    </div>
    <div class="input-group form-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-key"></i></span>
        </div>
        <input name="password" type="password" value="<?php echo $_REQUEST['password']; ?>" class="form-control" placeholder="Contraseña">
    </div>
    <div class="row align-items-center remember">
        <input onclick="mostrarContrasena()" type="checkbox">Mostrar Contraseña <!-- onclick="mostrarContrasena()" -->
    </div>
    <div class="form-group">
        <input name="entrar" type="submit" value="Entrar" class="btn float-right login_btn">
    </div>
    <p style="color: red;"><?php $a_errores[username]; ?></p>
    <p style="color: red;"><?php $a_errores[password]; ?></p>
    <!-- <div class="card-footer">
        <div class="d-flex justify-content-center links">
            ¿No tienes una cuenta?<a href="./view/register.php">Registrarse</a>
        </div>
    </div> -->
</form>
