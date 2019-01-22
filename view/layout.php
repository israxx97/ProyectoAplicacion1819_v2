<!DOCTYPE html>
<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if (isset($_SESSION['username'])) {
    $vista = $vistas['inicio'];
} else {
    $vista = $vistas['login'];
}
if (isset($_SESSION['pagina'])) {
    $vista = $vistas[$_SESSION['pagina']];
}
?>

                        <?php
                        require_once $vista;
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        <div>
            <a href="https://github.com/israxx97/ProyectoAplicacion1819_v2">Repositorio</a>
        </div>
    </body>
</html>
