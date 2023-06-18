<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Cadastro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="?page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuários</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<div class="container">
    <div class="row">
        <div class="col mt-5">
            <?php
                include("config.php");

                    switch($_REQUEST["page"]){
                        case "novo":
                            include("cadastrar.php");
                            break;

                        case "listar":
                            include("listar.php");
                            break;

                        case "salvar":
                            include("salvar-usuario.php");
                            break;

                        default:
                        print "<h1>Bem vindos!</h1>";
                        }
           ?>
            </div>
    </div>
</div>


<script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>