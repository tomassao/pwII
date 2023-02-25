<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $nome = "João";
    $idade = 48;
    $salario = 4000;
    $aumento = 200;

    echo "<style> 
    #vermelho{
        color:#FF0000} 
    #verde
        {color:#00FF00} 
    #azul{
        color:#0000FF} 
    </style>";

    echo "<p>
    <span id='vermelho'> Nome: $nome </span> <br>
    <span id='verde'> Idade: $idade </span> <br>
    <span id='azul'> Salário: " . ($salario + $aumento) . "</span>
    </p>";
?>


    
</body>
</html>