<form action="<?php echo $_SERVER['PHP_SELF'] . '?codUsuario=' . $_REQUEST['codUsuario']; ?>" method="post">
    <section>
        <label>Código: </label>
        <input type="text" name="username" value="<?php echo $usuario->getCodUsuario(); ?>" disabled>
        <label>Descripción: </label>
        <input type="text" name="descripcion" value="<?php
        if ($_REQUEST['descripcion'] != null) {
            echo $_REQUEST['descripcion'];
        } else {
            echo $usuario->getDescUsuario();
        }
        ?>" minlength="3" maxlength="255">
               <?php
               echo "<font color='red' style='1px'>$a_errores[descripcion]</font>";
               ?>
        <br>
        <label>Perfil</label>
        <select name="perfil">
            <option value="Usuario" <?php
            if (($_REQUEST['perfil'] == Usuario) || ($_REQUEST['perfil'] == null && $usuario->getPerfil() == 'Usuario')) {
                echo "selected";
            }
            ?>>Usuario</option>
            <option value="Administrador" <?php
            if (($_REQUEST['perfil'] == Administrador) || ($_REQUEST['perfil'] == null && $usuario->getPerfil() == 'Administrador')) {
                echo "selected";
            }
            ?>>Administrador</option>
        </select>
        <?php
        echo "<font color='red' size='1px'>$a_errores[perfil]</font>";
        ?>
        <br>
        <label>Contraseña</label>
        <input type="password" name="password" minlength="3" maxlength="20">
        <?php
        echo "<font color='red' size='1px'>$a_errores[password]</font>";
        ?>
        <div>
            <input type="submit" name="confirmar" value="Confirmar">
            <input type="submit" name="cancelar" value="Cancelar">
        </div>
    </section>
</form>
