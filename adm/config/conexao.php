<?php
session_start();
define('HOST', 'ec2-3-216-167-65.compute-1.amazonaws.com');
define('DB', 'db9hcdeb4icket');
define('USUARIO', 'kweuppelflmvip');
define('SENHA', 'd36b4d5a4eb681723f4ea8bbbd4530aadeeb9aa2c52a3d725dcfde8ad256b740');

global $conexao;

try{
    $conexao = new PDO('mysql:host=' . HOST . ';dbname=' . DB . ';', USUARIO, SENHA);
    //echo "Conexão com banco de dados ok!";
}catch(PDOException $erro){
    echo "Erro na conexão com banco de dados!",  $erro->getMessage();
}

?>
