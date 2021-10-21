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
    $nome_livro = $_POST['nome_livro'];
    $autor = $_POST['autor'];
    $tema = $_POST['tema'];
    $data_pub = $_POST['data_pub'];
    $categoria = $_POST['categoria'];
    $quantidade = $_POST['quantidade'];

    $sql = "UPDATE `livros` set 
    `nome_livro` = '$nome_livro', 
    `autor` = '$autor', `tema` = 
    '$tema', `data_pub` = '$data_pub',
     `categoria` = '$categoria', 
     `quantidade` = '$quantidade' 
     WHERE id_livro  = $id";


    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Exemplar Alterado com sucesso!</b></h2>');
    } else {
        echo('<h2><b>Erro ao Alterar Exemplar!</b></h2>');
    }
?>
<a href='http://localhost/biblioteca_mario_de_andrade/formularios/pesquisa_livros.php' class='btn btn-info'>Voltar</a>
</body>
</html>

