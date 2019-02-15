<form action="<?php echo $_REQUEST['PHP_SELF'] ?>" method="post">
    <section>
        <label>Antigua contraseña: </label>
        <input type="password" name="password1" minlength="3" maxlength="20"><br>
        <?php
        echo "<font color='red' style='1px'>$a_errores[password1]</font>";
        ?>
        <label>Nueva contraseña: </label>
        <input type="password" name="password2" minlength="3" maxlength="20"><br>
        <?php
        echo "<font color='red' style='1px'>$a_errores[password2]</font>";
        ?>
        <label>Repite nueva contraseña: </label>
        <input type="password" name="password3" minlength="3" maxlength="20"><br>
        <?php
        echo "<font color='red' style='1px'>$a_errores[password3]</font>";
        ?>
        <div>
            <input type="submit" name="confirmar" value="Confirmar">
            <input type="submit" name="cancelar" value="Cancelar">
        </div>
    </section>
</form>
