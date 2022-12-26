<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json charset=utf-8');
ini_set('default_charset', 'utf-8');
session_start();

require('conexao.php');

$response = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST'){


    global $pdo;
    $produto = "SELECT * FROM mensagens";
    $produto = $pdo -> prepare($produto);
    $produto->execute();

    
    foreach($produto as $consulta){
        $response[] = $consulta;
    }
        

    echo json_encode($response);
}