<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca Mário de Andrade</title>
<!--Google fonts - Roboto-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
<!--Bootstrap Icons-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
<!--CSS do projeto-->
<link rel="stylesheet" href="css/style.css">
<!--JS do projeto-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous">
</script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="http://localhost/biblioteca_mario_de_andrade/index.php">
            <img src="img/bma-icon.png" alt="BMA">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/biblioteca_mario_de_andrade/formularios/cadastro_usuario.php">Cadastrar Usuários </a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/biblioteca_mario_de_andrade/formularios/cadastro_livro.php">Cadastrar Livro</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/biblioteca_mario_de_andrade/formularios/emprestimo.php">Cadastrar Empréstimo</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/biblioteca_mario_de_andrade/formularios/pesquisa_usuarios.php">Consultar Usuários</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/biblioteca_mario_de_andrade/formularios/pesquisa_livros.php">Consultar Livros</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="/biblioteca_mario_de_andrade/formularios/pesquisa_emprestimos.php">Consultar Empréstimos</a>
            </li>
        </ul>
        <span class="navbar-text">
        Biblioteca Mário de Andrade
        </span>
        </div>
    </div>
    </nav>
    <form class='form-control'action="http://localhost/biblioteca_mario_de_andrade/scripts/emprestimo_script.php" method="POST">
        <div class='titletop'>
            <h2><b>Empréstimo</b></h2>
        </div>

        <!-- SELECT DE LIVRO PARA EMPRESTIMO -->
        <div class='group'>
            <label ><b>Nome do Livro</b></label>
            <select class="form-select" aria-label=".form-select-lg example" name='livro_emprestado' required>
                <option value=''>Selecione...</option>
            <?php
                
include __DIR__ . ("/../classe/conexao.php");


                $sql= "SELECT * FROM livros";
                $resultado = mysqli_query($conn, $sql);
                while( $dados = mysqli_fetch_array($resultado)) {
                    $nome_livro = $dados['nome_livro'];
                    $nome_livro = $dados['nome_livro'];
                    echo ("<option value='$nome_livro'>$nome_livro</option>");                  
                }
            ?>
        </select>
        </div><br>

        <!-- SELECT DE NOME DO USUÁRIO PARA EMPRESTIMO -->
        <div class='group'>
            <label ><b>Nome do Usuário: </b></label>
            <div class='group'>
            <select class="form-select" aria-label=".form-select-lg example" name='usuario_emp' required>
                <option value=''>Selecione...</option>
            <?php
                
include __DIR__ . ("/../classe/conexao.php");

                $sql= "SELECT * FROM usuarios";
                $resultado = mysqli_query($conn, $sql);
                while( $dados = mysqli_fetch_array($resultado)) {
                    $nome_usuario = $dados['nome_usuario'];
                    $nome_usuario = $dados['nome_usuario'];
                    echo ("<option value='$nome_usuario'>$nome_usuario</option>");                  
                }
            ?>
            </select>
        </div><br>
        <div class='group'>
            <label><b>Data</b><br>
                <input type='date' name='data_emprestimo' value='<?php echo date("d/m/Y"); ?>'>
            </label>
        </div><br>    
        <div>
            <label ><b>Quantidade</b></label>
            <input class="form-control" aria-label="Amount" type="number" name="quantidade_emp" min="1" max="10" required>
        </div><br>
        <div class=botaoemprestimo>
            <button type="submit" class='btn btn-success'>Efetuar Empréstimo</button>
        </div><br>
        <a href="../index.php" class='btn btn-primary'>Voltar</a>
    </form>
</body>
</html>