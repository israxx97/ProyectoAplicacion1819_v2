<?php
$_SESSION['username']->getDescUsuario() . $_SESSION['visitas'];
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <section>
        <label>Usuario: <?php echo $_SESSION['username']->getDescUsuario(); ?></label>
        <input type="submit" name="salir" value="Cerrar Sesión">
    </section>
</form>