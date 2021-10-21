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
    <form  class='form-control'action="http://localhost/biblioteca_mario_de_andrade/scripts/cadastro_usuario_script.php" method="POST">
        <div class='titletop'>
            <h2><b>Cadastro de Usuário</b></h2>
        </div>
        <div class='group'>
            <label for='nome'><b>Nome Completo</b></label>
            <input class='form-control' type="text" name='nome_usuario' placeholder="Nome Completo" required>
        </div><br>
        <div class='form-group'>
            <label for='data_nasc'><b>Data de Nascimento</b></label>
            <input  class='form-control' type='date' name='data_nasc' required>
        </div><br>
        <div>
            <label><b>Escolaridade</b></label>
            <select class="form-select" name='escolaridade' id='escolaridade'>
                <option selected disabled value="">Selecione</option>
                <option>Ensino Fundamental Incompleto</option>
                <option>Ensino Fundamental</option>
                <option>Ensino Médio</option>
                <option>Ensino Superior</option>
            </select>
        </div><br>
        <div class='form-group'>
            <label for='endereco'><b>Endereço: </b></label>
            <input class='form-control'  type="text" name='endereco' placeholder="Endereço" required>
        </div><br>
        <div class='form-group'>
            <label><b>Telefone</b></label>
            <input class='form-control' type="number" name='telefone' placeholder="(xx) xxxxx-xxxx" required>
        </div><br>
        <div>
            <label><b>Gênero</b></label>
            <select class="form-select" name='genero' id='genero'>
                <option selected disabled value="">Selecione</option>
                <option>Masculino</option>
                <option>Feminino</option>
                <option>Transgênero</option>
                <option>Não binário</option>
                <option>Outro</option>
            </select>
        </div><br>
        <div>
            <label><b>Email</b></label>
            <input class='form-control' type="email" name='email' id='email' required>
        </div><br>
        
        <div class=botaoCadastrar>
            <button type="submit" class='btn btn-success'>Cadastrar</button>
        </div><br>
        <a href="../index.php" class='btn btn-primary'>Voltar</a>
    </form>
</body>
</html>