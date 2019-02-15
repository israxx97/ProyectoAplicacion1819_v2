<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <section>
        <label>Código: </label>
        <input type="text" name="username" value="<?php echo $_SESSION['username']->getCodUsuario(); ?>" disabled>
        <label>Descripción: </label>
        <input type="text" name="descripcion" value="<?php
        if ($_REQUEST['descripcion'] != null) {
            echo $_REQUEST['descripcion'];
        } else {
            echo $_SESSION['username']->getDescUsuario();
        }
        ?>" minlength="3" maxlength="255">
               <?php echo "<font color='red' size='1px'>$a_errores[descripcion]</font>" ?>
        <div>
            <input type="submit" name="confirmar" value="Confirmar" disabled>
            <input type="submit" name="cancelar" value="Cancelar">
            <br>
            <input type="submit" name="cambiar" value="Cambiar password">
            <input type="submit" name="eliminar" value="Eliminar perfil">
        </div>
    </section>
</form>