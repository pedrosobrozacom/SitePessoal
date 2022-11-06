<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pedro Sobroza</title>
    <link rel="icon" href="imagensSite/iconePedro.png" type="image/icon type">
    <link rel="stylesheet" href="cssIndex.css">

    <!-- Fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- Principal CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>

  <body>
  <header>
      <nav class="navbar navbar-expand-md navbar-light" style="background-color: #ffbe0b">
        <a class="navbar-brand" href="index.html">
          <img src="imagensSite/logoPedro.png" width="40" height="40" alt="Logo do Site">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="gatas.html">Gatas <span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Comentários</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="comentarios.html">Mandar um comentário</a>
                <a class="dropdown-item" href="recados.php">Ler outros comentários</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Hobbies</a>
              <div class="dropdown-menu" aria-labelledby="dropdown01">
                <a class="dropdown-item" href="velocidade.html">Velocidade</a>
                <a class="dropdown-item" href="horizon.html">Jogos</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
    <?php

    $nome = $_POST['txtnome'];
    $turma = $_POST['optturma'];
    $recado = $_POST['txtrecado'];

    $sql = "INSERT INTO pedrosite (nome, turma, recado, ativo) 
            VALUES ('$nome', '$turma', '$recado', 'N')";

    $conexao = new PDO('mysql:host=127.0.0.1;dbname=site', 'root', '');
    $conexao->exec($sql);

    ?>
    <div class="container">
      <div class="jumbotron">
        <h2 class="display-4">Muito Obrigado!</h2>
        <p class="lead">Seu comentário foi enviado e estará disponível para leitura após aprovação</p>
        <hr class="my-4">
        <p>Clique aqui para voltar a página principal</p>
        <a href="index.html" class="btn btn-primary" style="background-color: #2282dc;">Voltar</a>
      </div>
    </div>
    </main>
  </body>
</html>