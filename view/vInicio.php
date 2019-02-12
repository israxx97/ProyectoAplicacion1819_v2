<?php
echo '<p>' . $_SESSION['username']->getDescUsuario() . $_SESSION['visitas'] . '</p>';
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <section>
        <label>Usuario: <?php echo $_SESSION['username']->getDescUsuario(); ?></label><br>
        <?php if ($_SESSION['username']->getPerfil() == 'Administrador') { ?>
            <input type="submit" name="mantenimientoUsuarios" value="Mto Usuarios">
        <?php } ?>
        <input type="submit" name="salir" value="Cerrar Sesión">
    </section>
</form>