<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Usuario
 *
 * @author Israel García Cabañeros
 */
require_once 'UsuarioPDO.php';

class Usuario {

    private $codUsuario;
    private $password;
    private $descUsuario;
    private $numAccesos;
    private $fechaHoraUltimaConexion;
    private $perfil;
    private $listaOpinionesUsuario;

    function __construct($codUsuario, $password, $descUsuario, $numAccesos, $fechaHoraUltimaConexion, $perfil) {
        $this->codUsuario = $codUsuario;
        $this->password = $password;
        $this->descUsuario = $descUsuario;
        $this->numAccesos = $numAccesos;
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
        $this->perfil = $perfil;
    }

    function getCodUsuario() {
        return $this->codUsuario;
    }

    function setCodUsuario($codUsuario) {
        $this->codUsuario = $codUsuario;
    }

    function getPassword() {
        return $this->password;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function getDescUsuario() {
        return $this->descUsuario;
    }

    function setDescUsuario($descUsuario) {
        $this->descUsuario = $descUsuario;
    }

    function getNumAccesos() {
        return $this->numAccesos;
    }

    function setNumAccesos($numAccesos) {
        $this->numAccesos = $numAccesos;
    }

    function getFechaHoraUltimaConexion() {
        return $this->fechaHoraUltimaConexion;
    }

    function setFechaHoraUltimaConexion($fechaHoraUltimaConexion) {
        $this->fechaHoraUltimaConexion = $fechaHoraUltimaConexion;
    }

    function getPerfil() {
        return $this->perfil;
    }

    function setPerfil($perfil) {
        $this->perfil = $perfil;
    }

    function getListaOpinionesUsuario() {
        return $this->listaOpinionesUsuario;
    }

    function setListaOpinionesUsuario($listaOpinionesUsuario) {
        $this->listaOpinionesUsuario = $listaOpinionesUsuario;
    }

    /**
     * Función validarUsuario($codUsuario, $password).
     * 
     * Función utilizada para validar un usuario en el inicio de sesión.
     * 
     * @function validarUsuario();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @param $codUsuario.
     * @param $password.
     * @return objeto $usuario.
     */

    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $a_usuarios = UsuarioPDO::validarUsuario($codUsuario, $password);

        if (!empty($a_usuarios)) {
            $usuario = new Usuario(
                    $codUsuario, $password, $a_usuarios['T01_DescUsuario'], $a_usuarios['T01_NumAccesos'], $a_usuarios['T01_FechaHoraUltimaConexion'], $a_usuarios['T01_Perfil']);
        }

        return $usuario;
    }

    /**
     * Función altaUsuario($codUsuario, $password, $descripcion).
     * 
     * Función utilizada para dar de alta o registrar un nuevo usuario.
     * 
     * @function altaUsuario();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @param $codUsuario.
     * @param $password.
     * @param $descripcion.
     * @return objeto $usuario.
     */

    public static function altaUsuario($codUsuario, $password, $descripcion) {
        $usuario = null;
        $a_usuarios = UsuarioPDO::altaUsuario($codUsuario, $password, $descripcion);

        if (!empty($a_usuarios)) {
            $usuario = new Usuario($codUsuario, $password, $descripcion, $a_usuarios['T01_NumAccesos'], $a_usuarios['T01_FechaHoraUltimaConexion'], $a_usuarios['T01_Perfil']);
        }

        return $usuario;
    }

    /**
     * Función modificarUsuario($password, $descripcion, $perfil).
     * 
     * Función utilizada para la modificación de los campos de un usuario.
     * 
     * @funcion modificarUsuario();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @param $password.
     * @param $descripcion.
     * @param $perfil.
     * @return objeto $usuario.
     */

    public static function modificarUsuario($password, $descripcion, $perfil) {
        $codUsuario = $this->getCodUsuario();
        $usuario = null;

        if ($perfil == null) {
            $a_usuarios = UsuarioPDO::modificarUsuario($codUsuario, $password, $descripcion);
        } else {
            $a_usuarios = UsuarioPDO::modificarUsuario($codUsuario, $password, $descripcion, $perfil);
        }

        if (!empty($a_usuarios)) {
            $usuario = new Usuario($a_usuarios['T01_CodUsuario'], $a_usuarios['T01_Password'], $a_usuarios['T01_DescUsuario'], $a_usuarios['T01_NumAccesos'], $a_usuarios['T01_FechaHoraUltimaConexion'], $a_usuarios['T01_Perfil']);
        }

        return $usuario;
    }

    /**
     * Función borrarUsuario().
     * 
     * Función usada para eliminar la cuenta de un usuario.
     * 
     * @function borrarUsuario();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @return boolean $eliminado.
     */

    public function borrarUsuario() {
        $codUsuario = $this->getCodUsuario();
        $eliminado = UsuarioPDO::borrarUsuario($codUsuario);

        return $eliminado;
    }

    /**
     * Función registrarUltimaConexion().
     * 
     * Función usada para registrar la última conexión de un usuario.
     * 
     * @function registrarUltimaConexion();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @return String $ultimaConexion.
     */

    public function registrarUltimaConexion() {
        setlocale(LC_TIME, 'es_ES.UTF-8');
        date_default_timezone_set('Europe/Madrid');

        $codUsuario = $this->getCodUsuario();
        $a_conexiones = UsuarioPDO::registrarUltimaConexion($codUsuario);
        $fecha = date('d-m-Y H:i:s', $a_conexiones['T01_FechaUltimaConexion']);
        $contadorConexiones = $a_conexiones['T01_NumAccesos'];

        if ($contadorConexiones == 0) {
            $ultimaConexion = ' bienvenid@ por primera vez.';
        } else {
            $ultimaConexion = ' hola, número de conexiones hasta ahora: ' . $contadorConexiones . ', la última vez fue el ' . $fecha;
        }

        return $ultimaConexion;
    }

    /**
     * Funcion validarCodNoExiste($codUsuario).
     * 
     * Funcion utilizada para validar si el codigo de un usuario ya existe o no.
     * 
     * @function validarCodNoExiste();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @param $codUsuario.
     * @return boolean $existente.
     */

    public static function validarCodNoExiste($codUsuario) {
        $existente = UsuarioPDO::validarCodNoExiste($codUsuario);
        return $existente;
    }

    /**
     * Función buscaUsuariosPorDesc($descripcion, $pagina, $numRegistros).
     * 
     * Función utilizada para buscar un usuario por su descripción.
     * 
     * @function buscaUsuariosPorDesc();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @param $descripcion.
     * @param $pagina.
     * @param $numRegistros.
     * @return objeto $usuario.
     */

    public static function buscaUsuariosPorDesc($descripcion, $pagina, $numRegistros) {
        $a_usuarios = UsuarioPDO::buscaUsuariosPorDesc($descripcion, $pagina, $numRegistros);

        if (!empty($a_usuarios)) {
            for ($numUsuarios = 0; $numUsuarios < count($a_usuarios); $numUsuarios++) {
                $usuario[$numUsuarios] = new Usuario($a_usuarios[$numUsuarios]['T01_CodUsuario'], $a_usuarios[$numUsuarios]['T01_Password'], $a_usuarios[$numUsuarios]['T01_DescUsuario'], $a_usuarios[$numUsuarios]['T01_NumAccesos'], $a_usuarios[$numUsuarios]['T01_FechaHoraUltimaConexion'], $a_usuarios[$numUsuarios]['T01_Perfil']);
            }
        }

        return $usuario;
    }

   

}
