<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/configDB.php';
require_once 'core/validacionFormularios.php';
require_once 'model/Usuario.php';

define('OBLIGATORIO', 1);
define('NOOBLIGATORIO', 0);
define('LONGMAX', 3);
define('LONGMIN', 3);
define('LONGMAXDESC', 255);
define('LONGMINDESC', 3);
define('LONGMAXUSUARIO', 20);
define('LONGMINUSUARIO', 3);
define('LONGMAXPASS', 20);
define('LONGMINPASS', 3);
define('LONGMAXALFABETICO', 50);
define('LONGMINALFABETICO', 10);
define('MAXIMONUMERO', 10);
define('MINIMONUMERO', 0);
define('LONGMAXTEXTOLIBRE', 250);
define('LONGMINTEXTOLIBRE', 10);

$controladores = [
    'login' => 'controller/cLogin.php',
    'inicio' => 'controller/cInicio.php',
    'tecnologias' => 'controller/cTecnologias',
    'rss' => 'controller/cRSS',
    'registroUsuario' => 'controller/cRegistro.php',
    'miCuenta' => 'controller/cMiCuenta.php',
    'borrarCuenta' => 'controller/cBorrarCuenta.php',
    'mtoDepartamentos' => 'controller/cMtoDepartamentos.php',
    'altaDepartamento' => 'controller/cAltaDepartamento.php',
    'modificarDepartamento' => 'controller/cModificarDepartamento.php',
    'eliminarDepartamento' => 'controller/cEliminarDepartamento.php',
    'analisisOpiniones' => 'controller/cAnalisisOpiniones.php',
    'modificarOpiniones' => 'controller/cModificarOpiniones.php',
    'soap' => 'controller/cSOAP.php',
    'rest' => 'controller/cREST.php',
    'mtoCuestiones' => 'controller/cMtoCuestiones.php',
    'altaCuestion' => 'controller/cAltaCuestion.php',
    'modificarCuestion' => 'controller/cModificarCuestion.php',
    'eliminarCuestion' => 'controller/cEliminarCuestion.php',
    'mtoUsuarios' => 'controller/cMtoUsuarios.php',
    'modificarUsuario' => 'controller/cModificarUsuario.php',
    'eliminarUsuario' => 'controller/cEliminarUsuario.php',
    'wip' => 'controller/cWIP.php',
    'error' => 'controller/cError.php'
];

$vistas = [
    'layout' => 'view/layout.php',
    'login' => 'view/vLogin.php',
    'inicio' => 'view/vInicio.php',
    'tecnologias' => 'view/vTecnologias',
    'rss' => 'view/vRSS',
    'registroUsuario' => 'view/vRegistro.php',
    'miCuenta' => 'view/vMiCuenta.php',
    'borrarCuenta' => 'view/vBorrarCuenta.php',
    'mtoDepartamentos' => 'view/vMtoDepartamentos.php',
    'altaDepartamento' => 'view/vAltaDepartamento.php',
    'modificarDepartamento' => 'view/vModificarDepartamento.php',
    'eliminarDepartamento' => 'view/vEliminarDepartamento.php',
    'analisisOpiniones' => 'view/vAnalisisOpiniones.php',
    'modificarOpiniones' => 'view/vModificarOpiniones.php',
    'soap' => 'view/vSOAP.php',
    'rest' => 'view/vREST.php',
    'mtoCuestiones' => 'view/vMtoCuestiones.php',
    'altaCuestion' => 'view/vAltaCuestion.php',
    'modificarCuestion' => 'view/vModificarCuestion.php',
    'eliminarCuestion' => 'view/vEliminarCuestion.php',
    'mtoUsuarios' => 'view/vMtoUsuarios.php',
    'modificarUsuario' => 'view/vModificarUsuario.php',
    'eliminarUsuario' => 'view/vEliminarUsuario.php',
    'wip' => 'view/vWIP.php',
    'error' => 'view/vError.php'
];

