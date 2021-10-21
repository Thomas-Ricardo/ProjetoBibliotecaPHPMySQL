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
    $usuario_emp = $_POST['usuario_emp'];
    $livro_emprestado = $_POST['livro_emprestado'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $quantidade_emp = $_POST['quantidade_emp'];
    
    $sql = "UPDATE `emprestimos` set 
    `usuario_emp` = '$usuario_emp', 
    `livro_emprestado` = '$livro_emprestado', 
    `data_emprestimo` = '$data_emprestimo', 
    `quantidade_emp` = '$quantidade_emp' 
    WHERE id_emprestimo = $id";


    if (mysqli_query($conn, $sql)) {
        echo('<h2><b> Alterado com sucesso!</b></h2>');
    } else {
        echo('<b>Erro ao Alterar!</b>');
    }
?>
<a href='http://localhost/biblioteca_mario_de_andrade/formularios/pesquisa_emprestimos.php' class='btn btn-info'>Voltar</a>
</body>
</html>
