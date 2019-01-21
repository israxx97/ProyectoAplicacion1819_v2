<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'config/configuracionDB.php';
require_once 'core/validacionFormularios.php';
require_once 'model/Usuario.php';

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
