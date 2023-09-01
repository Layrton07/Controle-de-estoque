<?php 
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Methods: *");
    header("Access-Control-Allow-Headers: Content-Type");
    header("Content-Type: application/json");
    $servername = "127.0.0.1:3306";
    $username = "root";
    $password = "root";
    $dbname = "estoque";

    try{
        $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
        die("Falha na conexão: " . $e->getMessage());
    }
?>