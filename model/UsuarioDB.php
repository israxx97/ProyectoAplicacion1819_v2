<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author israel
 */
interface UsuarioDB {

    public static function validarUsuario($codUsuario, $password);

    public static function modificarUsuario($codUsuario, $password, $descripcion);

    public function borrarUsuario($codUsuario);

    public function registrarUltimaConexion($codUsuario);

    public static function validarCodNoExiste($codUsuario);

    public static function buscaUsuariosPorDesc($descripcion);

}
