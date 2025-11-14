<!-- logica para conectar ao banco de dados -->
<?php   

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "crud_php";

    $mysqli = new mysqli($host, $user, $pass, $db);
    if($mysqli->connect_errno) {
        die("Falha ao tentar se conectar");
    }

    // new mySqli , é um objeto nativo do php, que usa os parametros que descrevi para conectar com o banco dedados 