<form action="<?php echo $_SERVER['PHP_SELF'] . '?CodUsuario=' . $_REQUEST['codUsuario']; ?>" method="post">
    <section>
        <label>Código: </label>
        <input type="text" name="username" value="<?php echo $usuario->getCodUsuario(); ?>" disabled>
        <label>Descripción: </label>
        <input type="text" name="descripcion" value="<?php echo $usuario->getDescUsuario(); ?>" disabled>
        <div>
            <input type="submit" name="confirmar" value="Confirmar">
            <input type="submit" name="cancelar" value="Cancelar">
        </div>
    </section>
</form>
