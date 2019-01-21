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
require_once './UsuarioPDO.php';

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
    
    public static function validarUsuario($codUsuario, $password) {
        $usuario = null;
        $a_usuarios = UsuarioPDO::validarUsuario($codUsuario, $password);
        
        if (!empty($a_usuarios)) {
            $usuario = new Usuario($codUsuario, 
                    $password, 
                    $a_usuarios['T01_DescUsuario'], 
                    $a_usuarios['T01_NumAccesos'], 
                    $a_usuarios['T01_FechaHoraUltimaConexion'], 
                    $a_usuarios['T01_Perfil']);
            
        }
        
        return $usuario;
        
    }
    
    public static function altaUsuario() {
        
    }
    
    public function modificarUsuario() {
        
    }
    
    public function borrarUsuario() {
        
    }
    
    public function registrarUltimaConexion() {
        
    }
    
    public static function validarCodNoExiste() {
        
    }
    
    public static function buscaUsuariosPorDesc() {
        
    }
    
    public function buscaOpinion() {
        
    }
    
    public function modificaOpinion() {
        
    }
    
    public function borraOpinion() {
        
    }

}
