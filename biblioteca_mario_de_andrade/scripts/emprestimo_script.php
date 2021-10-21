<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Empréstimo</title>
</head>
<body>
<?php  
include __DIR__ . ("/../classe/conexao.php");

    $usuario_emp = $_POST['usuario_emp'];
    $livro_emprestado = $_POST['livro_emprestado'];
    $data_emprestimo = $_POST['data_emprestimo'];
    $quantidade_emp = $_POST['quantidade_emp'];
    
    $sql = "INSERT INTO `emprestimos` (`usuario_emp`, 
    `livro_emprestado`, 
    `data_emprestimo`, 
    `quantidade_emp`) 
    VALUES ('$usuario_emp',       
    '$livro_emprestado', 
    '$data_emprestimo', 
    '$quantidade_emp')";

    if (mysqli_query($conn, $sql)) {
        echo('<h2><b>Empréstimo cadastrado com sucesso!</b></h2>');
    }else {
        echo('<h2><b>Erro ao cadastrar Empréstimo!</b></h2>');
    }
?>
<a href="http://localhost/biblioteca_mario_de_andrade/formularios/emprestimo.php" class='btn btn-info'>Voltar</a>
</body>
</html>


