<?php

require_once'./config.php';


$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data = $_POST['data'];
$hora = $_POST['hora'];

/*var_dump($nome, $email, $telefone, $data, $horário, $cpf);
die();*/

$sql= "INSERT INTO lista ( nome, cpf, email, data, telefone, hora) VALUES (:nome, :cpf, :email, :data, :telefone, :hora)";
$stmt = $conn->prepare($sql);
//$stmt->bindvalue (':id', $id);
$stmt->bindvalue (':nome', $nome);
$stmt->bindvalue (':cpf', $cpf);
$stmt->bindvalue (':email', $email);
$stmt->bindvalue (':data', $data);
$stmt->bindvalue (':telefone', $telefone);
$stmt->bindvalue (':hora', $hora);
$stmt->execute();

if($stmt->rowcount() > 0){
    header("Location: ../index.php");
}else{
    echo "erro ao tentar adicionar lista";
}
     

