<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Cadastro Usuários</title>
</head>
<body>
    <?php
        
    include __DIR__ . ("/../classe/conexao.php");
    
    $nome_usuario = $_POST['nome_usuario'];
    $data_nasc = $_POST['data_nasc'];
    $escolaridade = $_POST['escolaridade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'] ;
    $email =  $_POST['email'];

    $sql = "INSERT INTO `usuarios`(`nome_usuario`, 
    `data_nasc`, 
    `escolaridade`, 
    `endereco`, 
    `telefone`, 
    `genero`, 
    `email`) 
    VALUES ('$nome_usuario', 
    '$data_nasc', 
    '$escolaridade', 
    '$endereco', 
    '$telefone', 
    '$genero', 
    '$email')";
    
    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Cadastrado com sucesso!</b></h2>');
    }else {
        echo('<h2><b>Cadastro Não realizado!</b></h2>');
    }
?>

<a href="http://localhost/biblioteca_mario_de_andrade/formularios/cadastro_usuario.php" class='btn btn-info'>Voltar</a>
</body>
</html>

