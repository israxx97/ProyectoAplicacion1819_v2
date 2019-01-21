<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/configuracionDB.php';
require_once 'core/validacionFormularios.php';
require_once 'model/Usuario.php';

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
