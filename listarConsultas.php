<?php
require_once './actions/config.php';

$sql = "SELECT * FROM lista";
$stmt = $conn->query($sql);
$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>


 <!--<?php include './layout/header.php'; ?>-->

  <!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
    crossorigin="anonymous">

</head>

<body>
 
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>


<h4>Consultas Agendadas</h4>

<div class="mt-5">

<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Data</th>
        <th>Horário</th>
    </tr>
    </thead>
   <?php

   
    // Aqui você deve substituir essa parte com a lógica de consulta ao banco de dados
    // e obter os resultados em um array. Por exemplo:
    
   /* $consultas = array(
        array('id' => 1, 'nome' => 'João', 'email' => 'joao@example.com', 'Telefone' => '32240260', 'data' => '2024-03-28', 'horário'=> '13:00'),
        array('id' => 2, 'nome' => 'Maria', 'email' => 'maria@example.com', 'Telefone' => '32250450', 'data' => '2024-03-29', 'horário'=> '14:30'),
    ); */

    foreach ($lista as $lista) {

        echo "<tr>";

        echo "<td>" . $lista['id'] . "</td>";
        echo "<td>" . $lista['nome'] . "</td>";
        echo "<td>" . $lista['cpf'] . "</td>";
        echo "<td>" . $lista['email'] . "</td>";
        echo "<td>" . $lista['telefone'] . "</td>";
        echo "<td>" . $lista['data'] . "</td>";
        echo "<td>" . $lista['hora'] . "</td>";

        echo "</tr>";
    }
    ?>

</table>

</body>
</html>


<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>
</body>
</html>-->