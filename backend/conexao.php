<?php


    //BD External
    /*
    $mysql = array(
			"host"=>"",
			"user"=>"",
			"password"=>"",
            "database"=>""
		);
    */

    //BD Local
    $mysql = array(
			"host"=>"172.31.100.100",
			"user"=>"root",
			"password"=>"Senha123",
            "database"=>"api_php"
		);

global $pdo;

try {

    $pdo = new PDO("mysql:dbname=".$mysql['database']."; host=".$mysql['host'], $mysql['user'], $mysql['password'],
    array(PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8"));
    $pdo -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


}catch (PDOException $e) {
    echo "OPSS!";
    exit();
}

