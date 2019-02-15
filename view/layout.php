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
<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="https://www.educa.jcyl.es" target="_blank">israel.garcab@educa.jcyl.es</a><br>
            <a href="webroot/images/180301CatalogoDeRequisitos.pdf" target="_blank">Catálogo de requisitos</a> | 
            <a href="webroot/images/180503ArbolDeNavegacion.jpg" target="_blank">Árbol de navegación</a><br>
            <a href="webroot/images/180503CasosDeUso.jpg" target="_blank">Casos de uso</a> | 
            <a href="webroot/images/180503DiagramaDeClases.jpg" target="_blank">Diagrama de clases</a><br>
            <a href="webroot/images/180503ModeloFisicoDeDatos.jpg" target="_blank">Modelo físico de datos</a> | 
            <a href="webroot/images/180503RelacionDeFicheros.jpg" target="_blank">Relación de ficheros</a><br>
            <a href="webroot/images/EstructuraDeAlmacenamiento.JPG" target="_blank">Estructura de almacenamiento</a>
        </p>
        <p>Israel García Cabañeros &copy; 2019<br>
            <a href="#">RSS</a> | 
            <a href="#">Atom</a> | 
            <a href="https://github.com/israxx97/ProyectoAplicacion1819_v2" target="_blank">GitHub</a> |
            <a href="https://getbootstrap.com/" target="_blank">Bootstrap</a><br>
            <a href="https://es.wikipedia.org/wiki/HTML" target="_blank">HTML</a> |
            <a href="https://es.wikipedia.org/wiki/Hoja_de_estilos_en_cascada" target="_blank">CSS</a> |
            <a href="https://jquery.com/" target="_blank">JQuery</a> |
            <a href="http://php.net/manual/es/intro-whatis.php" target="_blank">PHP</a> | 
            <a href="https://atom.io/" target="_blank">Atom</a><br>
            <a href="https://netbeans.org/" target="_blank">Netbeans</a><br>
            <a href="" target="_blank"></a><br>
        </p>
    </div>
</footer>
