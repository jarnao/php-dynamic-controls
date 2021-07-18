Code is under the MIT License<br />
Copyright (c) 2012 Jose Arnao - jarnao@msn.com


Controles dinámicos con PHP, JavaScript y MySQL
-----------------------------------------------

Crear controles dinámicamente, realizar operaciones de cálculo con JavaScript sobre arrays y guardar datos en MySQL.

Configuración
-------------
1.- Crear la base de datos y las tablas.<br />
2.- Registrar los datos preliminares en las tablas que corresponde<br />
3.- Cambiar los parámetros de autenticación con el servidor MySQL<br />

try {<br />
    $db->connect('localhost', 'username', 'password', 'database_name');<br />
} <br />
