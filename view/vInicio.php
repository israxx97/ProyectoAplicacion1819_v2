<?php
echo '<p>' . $_SESSION['username']->getDescUsuario() . $_SESSION['visitas'] . '</p>';
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <section>
        <label>Usuario: <?php echo $_SESSION['username']->getDescUsuario(); ?></label><br>
        <label>Fecha y hora última conexión: <?php echo $_SESSION['username']->getFechaHoraUltimaConexion(); ?></label><br>
        <label>Número de visitas: <?php echo $_SESSION['username']->getNumAccesos(); ?></label><br>
        <input type="submit" name="salir" value="Cerrar Sesión">
    </section>
</form>