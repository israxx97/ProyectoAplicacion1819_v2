<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="webroot/css/styles_1.css">
        <link rel="shortcut icon" href="./webroot/images/favicon2.png" type="image/x-icon"/>
        <script type="text/javascript">
            function mostrarContrasena() {
                var tipo = document.getElementById("password");

                if (tipo.type == "password") {
                    tipo.type = "text";
                } else {
                    tipo.type = "password";
                }
            }
        </script>
    </head>

    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Login</h3>
                        <!-- <div class="d-flex justify-content-end social_icon">
                            <span><a href="./../../ProyectoTema5/index.php"><img style="width: 100px; height: 100px;" src="./webroot/images/home.png" class="fas" alt="home"></a></span>
                        </div> -->
                    </div>
                    <div class="card-body">
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
                            <p style="color: red;"><?php $a_errores[username] ?></p>
                            <p style="color: red;"><?php $a_errores[password]; ?></p>
                            <!-- <div class="card-footer">
                                <div class="d-flex justify-content-center links">
                                    ¿No tienes una cuenta?<a href="./view/register.php">Registrarse</a>
                                </div>
                            </div> -->
                            <div class="d-flex justify-content-center links">
                                <a href="https://github.com/israxx97/ProyectoAplicacion1819_v2"><span style="text-decoration: none; color: white; background-color: blue;">Repositorio</span></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>