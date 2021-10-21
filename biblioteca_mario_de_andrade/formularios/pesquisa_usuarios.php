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
    <?php
$pesquisa = $_POST['busca'] ?? '';

include __DIR__ . ("/../classe/conexao.php");

$sql = "SELECT * FROM usuarios WHERE nome_usuario LIKE '%$pesquisa%'";

$dados = mysqli_query($conn, $sql);

?>



    <h1><b>Pesquisar Usuários</b></h1>

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <form class="d-flex" action="pesquisa_usuarios.php" method="POST">
                <input class="form-control me-2" type="search" placeholder="Nome" aria-label="Search" name='busca' autofocus>
                <button class="btn btn-outline-success" type="submit">Pesquisar</button>
            </form>
        </div>
    </nav>
    <table class="table table table-hover">
        <td
ead>
        <tr>
            <td scope="col">Nome</td>

            <td scope="col">Data Nascimento</td>

            <td scope="col">Escolaridade</td>

            <td scope="col">Endereço</td>
 
            <td  scope="col">Telefone</td>

            <td scope="col">Gênero</td>
 
            <td scope="col">Email</td>
        </tr>
        </thead>
        <tbody>
        <?php
        while($linha = mysqli_fetch_assoc($dados)) {
        $id_usuario = $linha['id_usuario'];
        $nome_usuario = $linha['nome_usuario'];
        $data_nasc = $linha['data_nasc'];
        $escolaridade = $linha['escolaridade'];
        $endereco = $linha['endereco'];
        $telefone = $linha['telefone'];
        $genero = $linha['genero'];
        $email = $linha['email'];
          echo "<tr>
                    <td
 scope='row'>$nome_usuario</td>

                    <td type='date'>$data_nasc</td>
                    <td>$escolaridade</td>
                    <td>$endereco</td>
                    <td>$telefone</td>
                    <td>$genero</td>
                    <td>$email</td>
                    <td width=150px><a href='http://localhost/biblioteca_mario_de_andrade/formularios/cadastro_usuario_edit.php?id=$id_usuario' class='btn btn-success'>Editar</a>
                        <a href='#' class='btn btn-danger btn-sm' data-bs-toggle='modal' data-bs-target='#confirma' onclick=" . '"' . "get_data($id_usuario, '$nome_usuario ID:$id_usuario')" . '"' . ">Deletar</a>

                    </td>
                </tr>";
}
?>
        </tbody>
    </table>
    <a href="../index.php" class='btn btn-primary'>Voltar</a>

    <div class="modal fade" id="confirma" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirma Deletar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
            <form action='/../biblioteca_mario_de_andrade/scripts/deletar_usuarios_script.php' method='POST'>
                <p>Deseja realmente deletar</p>
                <p id='nome_usuario'>Nome da Pessoa</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                <input type='hidden' name='id' id='id_usuario' value=''>
                <input type="submit" class="btn btn-danger" value='Sim'>
            </form>
      </div>
    </div>
  </div>
</div>
<script type='text/javascript'>
    function get_data(id, nome) {
        document.getElementById('nome_usuario').innerHTML = nome;
        document.getElementById('id_usuario').value = id;
    }
</script>
<!--Bootstrap Bundle with Popper-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    
  </body>
</html>