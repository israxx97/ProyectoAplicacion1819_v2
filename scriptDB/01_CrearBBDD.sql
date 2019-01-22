/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  daw2
 * Created: Jan 22, 2019
 */
-- Primero creamos la base de datos userEjercicio2
create database if not exists DAW202_ProyectoAplicacion1819;
-- Entramos a la base de datos sobre la que vamos a trabajar con la sentencia use 'nombre'.
use DAW202_ProyectoAplicacion1819;
-- Por último creamos la tabla
create table T01_Usuarios(T01_CodUsuario varchar(255) primary key, T01_Password varchar(255), T01_DescUsuario varchar(250), T01_NumAccesos int, T01_FechaHoraUltimaConexion int, T01_Perfil varchar(50))engine=innodb;
-- Creamos la tabla Departamento.
create table T02_Departamentos(T02_CodDepartamento varchar(3) primary key, T02_DescDepartamento varchar(255), T02_FechaCreacionDepartamento date, T02_VolumenDeNegocio float, T02_FechaBajaDepartamento date)engine=innodb;
-- Creamos la tabla Cuestiones.
create table T03_Cuestiones(T03_CodCuestion int primary key, T03_DescCuestion varchar(255), T03_NumOrden int, T03_TipoRespuesta varchar(255))engine=innodb;
-- Creamos la tabla Opiniones.
create table T04_Opiniones(T04_CodUsuario varchar(255), T04_CodCuestion int, T04_ValorOpinionTipoBoolean boolean, T04_ValorOpinionTipoEntero int, T04_ValorOpinionTipoString varchar(255), T04_ValorOpinionTipoDate date, primary key (T04_CodUsuario, T04_CodCuestion), foreign key (T04_CodUsuario) references T01_Usuarios (T01_CodUsuario), foreign key (T04_CodCuestion) references T03_Cuestiones (T03_CodCuestion))engine=innodb;
-- Damos permisos al usuario
grant all privileges on DAW202_ProyectoAplicacion1819.* to 'user202ProyectoAplicacion1819'@'%' identified by 'paso';
