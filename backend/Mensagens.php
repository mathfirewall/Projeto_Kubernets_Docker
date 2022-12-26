<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-Type: application/json charset=utf-8');
ini_set('default_charset', 'utf-8');



$response = array();
$response["erro"] = true;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    

    if((!empty($nome)) && (!empty($email)) && (!empty($mensagem))) {
        
        include_once ("conexao.php");
        global $pdo;
        $pdo->query("INSERT INTO mensagens (nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem')");
        $response['mensagem'] = "Menagem Cadastrada Com Sucesso !";

    }else{

        $response['mensagem'] = "Preencha os Campos !";

    }



echo json_encode($response);

}


