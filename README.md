Copyright (c) 2012 Jose Arnao
Code is under the MIT License 


Controles dinámicos con PHP, JavaScript y MySQL
===============================================

Crear controles dinámicamente, realizar operaciones de cálculo con JavaScript, y guardar datos en MySQL.


Configuración:
--------------
1.- Crear la base de datos y las tablas.
2.- Registrar los datos preliminares en la tabla que corresponde
3.- Cambiar los parámetros de autenticación con el servidor MySQL

try {
    $db->connect('localhost', 'username', 'password', 'database_name');
} 
catch (Exception $e) {
    die($e->getMessage());
}