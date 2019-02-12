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
require_once "DBPDO.php";
require_once "UsuarioDB.php";

class UsuarioPDO implements UsuarioDB {
    /*
     * Función validarUsuario($codUsuario, $password).
     * 
     * Función utilizada para comprobar si el usuario introducido se encuentra o no en la base de datos.
     * 
     * @function validarUsuario();
     * @author Israel García Cabañeros.
     * @version 1.0
     * @since 2019-02-11
     * @param $codUsuario.
     * @param $password.
     * @return array $a_usuario.
     */

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

    public static function altaUsuario($codUsuario, $password, $descripcion) {
        $sql = 'INSERT INTO T01_Usuarios VALUES (?, SHA2(?, 256), ?, 0, ?, "Usuario")';
        $a_usuarios = [];
        $fecha = new DateTime();
        $rs = DBPDO::ejecutaConsulta($sql, [$codUsuario, $password, $descripcion, $fecha->getTimestamp()]);

        if ($rs->rowCount() == 1) {
            $a_usuarios['T01_CodUsuario'] = $codUsuario;
            $a_usuarios['T01_Password'] = $password;
            $a_usuarios['T01_DescUsuario'] = $descripcion;
            $a_usuarios['T01_NumAccesos'] = 1;
            $a_usuarios['T01_FechaHoraUltimaConexion'] = $fecha->getTimestamp();
            $a_usuarios['T01_Perfil'] = 'Usuario';
        }
        
        return $a_usuarios;
    }

    public function modificarUsuario($codUsuario, $password, $descripcion) {
        $a_usuarios = [];

        if ($descripcion == null) {
            $sql = 'UPDATE T01_Usuarios SET T01_Password = SHA2(?, 256) WHERE T01_CodUsuario = ?';
            $rs = DBPDO::ejecutaConsulta($sql, [$password, $codUsuario]);
        } else {
            $sql = 'UPDATE T01_Usuarios SET T01_DescUsuario = ? WHERE T01_CodUsuario = ?';
            $rs = DBPDO::ejecutaConsulta($sql, [$descripcion, $codUsuario]);
        }

        if ($rs->rowCount() == 1) {
            $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
            $rs = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

            if ($rs->rowCount() == 1) {
                $fetchRow = $rs->fetchObject();
                $arrayUsuario['T01_CodUsuario'] = $fetchRow->T01_CodUsuario;
                $arrayUsuario['T01_Password'] = $password;
                $arrayUsuario['T01_DescUsuario'] = $fetchRow->T01_DescUsuario;
                $arrayUsuario['T01_NumAccesos'] = $fetchRow->T01_NumAccesos;
                $arrayUsuario['T01_FechaHoraUltimaConexion'] = $fetchRow->T01_FechaHoraUltimaConexion;
                $arrayUsuario['T01_Perfil'] = $fetchRow->T01_Perfil;
            }

            return $a_usuarios;
        }
    }

    public function borrarUsuario($codUsuario) {
        $eliminado = false;
        $sql = 'DELETE FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $rs = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

        if ($rs->rowCount() == 1) {
            $eliminado = true;
        }

        return $eliminado;
    }

    public function registrarUltimaConexion($codUsuario) {
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $a_fecha = [];
        $fecha = new DateTime();
        $rs = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

        if ($rs->rowCount() == 1) {
            $fetchRow = $rs->fetchObject();
            $a_fecha['T01_NumAccesos'] = $fetchRow->T01_NumAccesos;
            $a_fecha['T01_FechaHoraUltimaConexion'] = $fetchRow->T01_FechaHoraUltimaConexion;
            $a_fecha['T01_DescUsuario'] = $fetchRow->T01_DescUsuario;
        }

        $sql2 = 'UPDATE T01_Usuarios SET T01_NumAccesos = T01_NumAccesos + 1, T01_FechaHoraUltimaConexion = ? WHERE T01_CodUsuario = ?';
        $rs2 = DBPDO::ejecutaConsulta($sql2, [$fecha->getTimestamp(), $codUsuario]);
        return $a_fecha;
    }

    public static function validarCodNoExiste($codUsuario) {
        $existe = false;
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $rs = DBPDO::ejecutaConsulta($sql, [$codUsuario]);

        if ($rs->rowCount() == 1) {
            $existe = true;
        }

        return existe;
    }

    public static function buscaUsuariosPorDesc($codigo) {
        $sql = 'SELECT * FROM T01_Usuarios WHERE T01_CodUsuario = ?';
        $a_usuarios = [];
        $rs = DBPDO::ejecutaConsulta($sql, [$codigo]);

        if ($rs->rowCount() > 0) {
            while ($fetchRow = $rs->fetchObject()) {
                $a_usuarios['T01_CodUsuario'] = $fetchRow->T01_CodUsuario;
                $a_usuarios['T01_Password'] = $fetchRow->T01_Password;
                $a_usuarios['T01_DescUsuario'] = $fetchRow->T01_DescUsuario;
                $a_usuarios['T01_NumAccesos'] = $fetchRow->T01_NumAccesos;
                $a_usuarios['T01_FechaHoraUltimaConexion'] = $fetchRow->T01_FechaHoraUltimaConexion;
                $a_usuarios['T01_Perfil'] = $fetchRow->T01_Perfil;
            }
        }

        return $a_usuarios;
    }

  

}
