<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/configDB.php';
require_once 'config/config.php';

session_start();

if (isset($_SESSION['usuario']) && !isset($_SESSION['pagina'])) {
    include_once $controladores['inicio'];
}
if (isset($_SESSION['pagina'])) {
    include_once $controladores[$_SESSION['pagina']];
} else {
    include_once $controladores['login'];
}

/*switch (true) {
    case (isset($_SESSION['username']) && !isset($_SESSION['pagina'])):
        include_once $controladores['inicio'];

        break;

    case (isset($_SESSION['pagina'])):
        include_once $controladores[$_SESSION['pagina']];

        break;

    default:
        include_once $controladores['login'];

        break;
}*/
