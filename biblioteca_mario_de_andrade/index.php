<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mário de Andrade</title>
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
<link rel="stylesheet" href="formularios/css/style.css">
<!--JS do projeto-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
crossorigin="anonymous">
</script>
</head>
<body>
     <!-- NAVBAR -->
    <nav class="navebar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="/biblioteca_mario_de_andrade/index.php">
            <img src="img/bma-icon.png" alt="BMA">
            <span class="navbar-text">
            Biblioteca Mário de Andrade
        </span>
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
       
        </div>
    </div>
    </nav>
    <!--Home-->
    <section class="home" id="home">
<div class="container" id="slider-container">
    <div class="carousel slide" id="slider" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button 
            type="button"
            class="active" 
            data-bs-target="#slider" 
            data-bs-slide-to="0"
            aria-current="true"
            aria-label="Slide 1"
            ></button>
            <button 
            type="button"
            data-bs-target="#slider" 
            data-bs-slide-to="1"
            aria-label="Slide 2"
            ></button>
            <button 
            type="button"
            data-bs-target="#slider" 
            data-bs-slide-to="2"
            aria-label="Slide 3"
            ></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imgs/foto_livros.jpg" object-fit: cover; alt="Home 1" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Biblioteca Mário de Andrade</h5>
                    <a href="http://localhost/biblioteca_mario_de_andrade/formularios/emprestimo.php" class="btn btn-dark">Empreste Livros</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/pessoa_livro.jpg" alt="Home 3" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Biblioteca Mário de Andrade</h5>
                    <a href="http://localhost/biblioteca_mario_de_andrade/formularios/cadastro_livro.php" class="btn btn-dark">Cadastre Livros</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="imgs/foto_livros.jpg" alt="Home 2" class="d-block w-100">
                <div class="carousel-caption">
                    <h5>Biblioteca Mário de Andrade</h5>
                    <a href="http://localhost/biblioteca_mario_de_andrade/formularios/cadastro_usuario.php" class="btn btn-dark">Cadastre um Usuário</a>
                </div>
            </div>
        </div>
        <button 
        class="carousel-control-prev" 
        type="button" 
        data-bs-target="#slider" 
        data-bs-slide="prev">

    <i class="bi bi-chevron-compact-left"></i>
    <span class="visually-hidden">Previous</span>
</button>
<button 
        class="carousel-control-next" 
        type="button" 
        data-bs-target="#slider" 
        data-bs-slide="next">

    <i class="bi bi-chevron-compact-right"></i>
    <span class="visually-hidden">Next</span>
</button>
    </div>
</div>
</section>
</body>
</html>