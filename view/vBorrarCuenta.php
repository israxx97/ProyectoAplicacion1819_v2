<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <section>
        <label>Código: </label>
        <input type="text" name="username" value="<?php echo $_SESSION['username']->getCodUsuario(); ?>" disabled>
        <label>Descripción: </label>
        <input type="text" name="descripcion" value="<?php echo $_SESSION['username']->getDescUsuario(); ?>" disabled>
        <div>
            <input type="submit" name="confirmar" value="Confirmar">
            <input type="submit" name="cancelar" value="Cancelar">
        </div>
    </section>
</form>