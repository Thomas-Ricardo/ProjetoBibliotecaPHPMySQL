<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Alteração</title>
</head>
<body>
    <?php

    
include __DIR__ . ("/../classe/conexao.php");

    $id = $_POST['id'];
    $nome_usuario = $_POST['nome_usuario'];
    $data_nasc = $_POST['data_nasc'];
    $escolaridade = $_POST['escolaridade'];
    $endereco = $_POST['endereco'];
    $telefone = $_POST['telefone'];
    $genero = $_POST['genero'];
    $email = $_POST['email'];

    $sql = "UPDATE `usuarios` set 
    `nome_usuario` = '$nome_usuario', 
    `data_nasc` = '$data_nasc', 
    `escolaridade` = '$escolaridade', 
    `endereco` = '$endereco',
     `telefone` = '$telefone', 
     `genero` = '$genero', 
     `email` = '$email'  
     WHERE id_usuario = $id";


    if (mysqli_query($conn, $sql)) {
        echo(' <h2><b>Alterado com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao Alterar!</b></h2>');
    }
?>
<a href='http://localhost/biblioteca_mario_de_andrade/formularios/pesquisa_usuarios.php' class='btn btn-info'>Voltar</a>
</body>
</html>
