<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UsuarioPDO
 *
 * @author Israel García Cabañeros
 */
require_once "UsuarioDB.php";
require_once "DBPDO.php";
require_once "UsuarioDB.php";

class UsuarioPDO implements UsuarioDB {

    public static function validarUsuario($codUsuario, $password) {
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ? AND T01_Password = SHA2(?, 256)';
        $a_usuario = [];
        $resultSet = DBPDO::ejecutaConsulta($sql, [$codUsuario, $password]);

        if ($resultSet->rowCount() == 1) {
            $fetchRow = $resultSet->fetchObject();

            $a_usuario['T01_CodUsuario'] = $fetchRow->T01_CodUsuario;
            $a_usuario['T01_Password'] = $fetchRow->T01_Password;
            $a_usuario['T01_DescUsuario'] = $fetchRow->T01_DescUsuario;
            $a_usuario['T01_NumAccesos'] = $fetchRow->T01_NumAccesos;
            $a_usuario['T01_FechaHoraUltimaConexion'] = $fetchRow->T01_FechaHoraUltimaConexion;
            $a_usuario['T01_Perfil'] = $fetchRow->T01_Perfil;
        }
        return $a_usuario;
    }

    public static function altaUsuario() {
        
    }

    public static function modificarUsuario() {
        
    }

    public static function borrarUsuario() {
        
    }

    public static function registrarUltimaConexion() {
        
    }

    public static function validarCodNoExiste() {
        
    }

    public static function buscaUsuariosPorDesc() {
        
    }

    public static function crearOpinion() {
        
    }

    public static function modificaOpinion() {
        
    }

    public static function borraOpinion() {
        
    }

}
