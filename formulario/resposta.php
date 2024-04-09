<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resposta</title>
</head>

<body>

    <h1>Reposta</h1>

    <?php

    echo print_r($_GET);

    $nome = $_GET["nomePessoa"];
    $sobrenome = $_GET["sobreNome"];
    $idade = $_GET["idade"];
    
    echo  "<br>" . $_GET["nomePessoa"];

    

    ?>

</body>

</html>