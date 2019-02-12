<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="webroot/css/styles_2.css">
        <link rel="stylesheet" href="../../../webroot/css/styles.css">
        <link rel="shortcut icon" href="./webroot/images/favicon2.png" type="image/x-icon"/>
    </head>

    <body>
        <header>
            <div class="navbar navbar-dark bg-dark shadow-sm">
                <div class="container d-flex justify-content-between">
                    <span class="navbar-brand d-flex align-items-center">
                        Página principal de <?php echo $_SESSION['username']->getDescUsuario(); ?>
                    </span>
                </div>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div style="right: 150%;" class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Perfil
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <?php if ($_SESSION['username']->getPerfil() == 'Administrador') { ?>
                                <input class="dropdown-item bg-warning" type="submit" name="" value="Mto. Usuarios">
                                <div class="dropdown-divider"></div>
                            <?php } ?>
                            <input class="dropdown-item" type="submit" name="" value="Editar Perfil">
                            <input class="dropdown-item" type="submit" name="" value="Borrar Cuenta">
                            <input class="dropdown-item bg-danger" type="submit" name="salir" value="Cerrar Sesión">
                        </div>
                    </div>
                </form>
            </div>
        </header>
        <main role="main">
            <div class="container-fluid d-flex justify-content-center">
                <span class="navbar-brand d-flex align-items-center">
                    <?php
                    echo '<p class="alert alert-success">' . $_SESSION['username']->getDescUsuario() . $_SESSION['visitas'] . '</p>';
                    ?>
            </div>
        </main>
        <footer class="text-muted">
            <div class="container">
                <p class="float-right">
                    <a href="https://www.educa.jcyl.es">israel.garcab@educa.jcyl.es</a>
                </p>
                <p>Israel García Cabañeros &copy; 2019<br><a href="#">RSS</a> | <a href="#">Atom</a> | <a href="https://getbootstrap.com/">Bootstrap</a></p>
            </div>
        </footer>

    </body>
</html>