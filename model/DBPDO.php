<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DBPDO
 *
 * @author Israel García Cabañeros
 */
class DBPDO {

    public static function ejecutaConsulta($sentenciaSQL, $parametros) {
        try {
            $db = new PDO(HOST_DB, USER_DB, PASSWORD_DB);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $preparedStatement = $db->prepare($sentenciaSQL);
            $preparedStatement->execute($parametros);
        } catch (PDOException $pdoe) {
            $preparedStatement = null;
            echo 'Error(' + $pdoe->getMessage() + ').';
            unset($db);
        }

        return $preparedStatement;
    }

}
