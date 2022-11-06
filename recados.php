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
            <li class="nav-item active">
              <a class="nav-link" href="midia.html">Mídia <span class="sr-only"></span></a>
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
      <section id="lista-recados">
        <div class="container">                
          <h2>Meus recados</h2>
          <hr>
            
            <?php
                $sql = "SELECT * FROM pedrosite WHERE ativo like 'S'";
                $conexao = new PDO('mysql:host=127.0.0.1;dbname=site','root','');
                $resultado = $conexao->query($sql);
                $lista = $resultado->fetchAll();
            ?>

          <div class="row">
            <?php foreach ($lista as $linha): ?>
              <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                  <div class="card-body">
                    <p class="card-text"><?php echo $linha['recado'] ?></p>
                    <div class="d-flex justify-content-end align-items-center">
                      <small class="text-muted"><?php echo $linha['nome'] ?></small>
                      <small class="text-muted"><?php echo $linha['turma'] ?></small>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
          <div class="col-12 justify-content-end">
            <p>Para enviar um comentário clique no botão abaixo</p>
            <a href="comentario.html" class="btn btn-primary" style="background-color: #2282dc;">Mandar comentário</a>
          </div>
          <hr>
        </div>
      </section>        
    </main>

    <footer class="container">
      <p>&copy; Desenvolvido por - Pedro Henrique Corassa Sobroza ~ 2022</p>
        <ul class="nav container">
          <li id="itens">
            <a class="nav-link active" href="https://www.instagram.com/pedrogulho02/"><img id="instagram" class="img-fluid" src="imagensSite/instaLogo.png" alt=""></a>
          </li>
          <li id="itens">
            <a class="nav-link" href="https://www.instagram.com/pdf.forzafotos/"><img id="instagram" class="img-fluid" src="imagensSite/instaProLogo.png" alt=""></a>
          </li>
        </ul>
    </footer>
  
  <!-- Principal JavaScript do Bootstrap
  ================================================== -->
  <!-- Foi colocado no final para a página carregar mais rápido -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>