<?php
    //Función que nos retornara una conexión con mysqli
    function createConnection(){
        //Datos para la conexión con el servidor
        $server = 'localhost';
        $database = 'univeylandia';
        $user = 'super';
        $password = 'alumne';
        //Creando la conexión, nuevo objeto mysqli
        $conn = new mysqli($server,$user,$password,$database);
        //Si sucede algún error la función muere e imprimir el error
        if($conn->connect_error){
            die('Error en la connexió : '.$conn->connect_errno.'-'.$conn->connect_error);
        }
        //Si nada sucede retornamos la conexión
        return $conn;
    }
?>
