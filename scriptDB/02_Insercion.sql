/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  daw2
 * Created: Jan 22, 2019
 */
-- Insertamos los siguientes registros en la tabla Usuarios (uno por línea).
insert into T01_Usuarios (T01_CodUsuario, T01_Password, T01_DescUsuario, T01_NumAccesos, T01_Perfil) values ('admin','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Administrador de la aplicacion',0,'Administrador'),
                           ('heraclio','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Heraclio',0,'Usuario'),
                           ('baldomero','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Baldomero',0,'Usuario'),
                           ('amor','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Amor',0,'Usuario'),
                           ('maria','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Maria',0,'Usuario'),
                           ('israel','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Israel',0,'Usuario'),
                           ('christian','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Christian',0,'Usuario'),
                           ('adrian','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Adrian',0,'Usuario'),
                           ('tania','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Tania',0,'Usuario'),
                           ('alejandro','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Alejandro',0,'Usuario'),
                           ('victor','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Victor',0,'Usuario'),
                           ('david','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','David',0,'Usuario'),
                           ('mario','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Mario',0,'Usuario'),
                           ('laura','4dd09b8f659e27847f94782920fb7e41b2c5afbd7f419a4a3ed8ab7aa5b7f944','Laura',0,'Usuario');
-- Insertamos los siguientes registros en la tabla Departamentos (uno por línea).
insert into T02_Departamentos (T02_CodDepartamento, T02_DescDepartamento, T02_FechaCreacionDepartamento, T02_VolumenDeNegocio) values ('CMP','Departamento Compras','2019-01-01',12000.45),
                            ('VNT','Departamento Ventas','2019-01-01',12000.90),
                            ('CNT','Departamento Contabilidad','2019-01-01',76000.67),
                            ('GST','Departamento Gestion','2019-01-01',36000.52);
-- Insertamos los siguientes registros en la tabla Cuestiones (uno por línea).
insert into T03_Cuestiones values (1,'Código de usuario:',1,'[5-20 caracteres]'),
                                  (2,'DNI:',2,'[8 caracteres y 1 letra]'),
                                  (3,'Fecha de nacimiento:',3,'[Fecha entre 1900 y 2020]'),
                                  (4,'Grado de satisfacción:',4,'[0-10]'),
                                  (5,'Valoración de los materiales entregados por el profesor:',5,'[5-20 caracteres]'),
                                  (6,'Opiniones y sugerencias para mejorar los resultados:',6,'[10-250 caracteres]');