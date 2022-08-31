<!DOCTYPE html>
<html lang="pt-br">

<head>
  <link href="estilo.css" rel="stylesheet">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>R&W - read and write</title>

  <!-- css links  -->
  <link href="carousel.css" rel="stylesheet">
  <link rel="icon" href="../../../../favicon.ico">
  <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
   <!-- scrpits links  -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>

<body>

  <!-- Navbar  -->
  <div class="container-fluid ">
    <nav class="navbar navbar-expand-lg navbar-light bg-light " style="box-shadow: 2px 2px 2px #bbb;">
      <a class="navbar-brand" href="#">R&W</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Gênero
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Romance</a>
              <a class="dropdown-item" href="#">Fantasia</a>
              <a class="dropdown-item" href="#">Terror</a>
              <a class="dropdown-item" href="#">Poema</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Fanart</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#faleconosco">Fale conosco</a>
          </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
        </form>
      </div>
    </nav>
  </div>

  <!-- Carousel  -->
  <div class="container-fluid area-carousel">

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner center-block">
        <div class="carousel-item active">
          <img class="d-block w-20 " src="img/cu.png" alt="First slide" style="height: 400px;">
              
        </div>
        <div class="carousel-item">
          <img class="d-block w-20" src="img/cu2.png" alt="Second slide" style="height: 400px;">
        </div>
        <div class="carousel-item">
          <img class="d-block w-20 " src="img/cu3.png" alt="Third slide" style="height: 400px;">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>


  <!-- area  -->
  <div class="container marketing">
    <div class="area">
      <div class="row">
        <div class="col-lg-4">
          <img class="rounded-circle" src="img/cu.png" alt="Livro image" width="170" height="170">
          <div class="texto">
            <h2 class="text-center">Livros</h2>
            <p class="text-center">Não ler é aceitar ficar parado, estagnado sempre no mesmo lugar com as mesmas coisas e pessoas... A leitura nos movimenta e abre horizontes.</p>
            <p class="text-center">Já viram as nossas coleções?<br>
              Clica aqui embaixo nao perca tempo</p>
            <p><a class="btn btn-primary btn-left" href="#" role="button">Acessar livros</a></p>
          </div>
        </div>

        <div class="col-lg-4">
          <img class="rounded-circle" src="img/cu2.png" alt="Garota image" width="150" height="150">
          <div class="texto2">
            <h2 class="text-center">Título</h2>
            <p class="text-center">A leitura exercita o cérebro e acalma a alma.<br>Só acha leitura perda de tempo quem ainda não aprendeu a viver com qualidade.Ler é formular imagens invisíveis.</p>
            <p class="text-center">Leia quando quiser e onde quiser!<br>Venha Fazer parte do nosso cantinho da leitura.</p>
            <p><a class="btn btn-primary btn-left" href="#" role="button">Saiba mais</a></p>
          </div>
        </div>

        <div class="col-lg-4">
          <img class="rounded-circle" src="img/cu3.png" alt="Generic placeholder image" width="120" height="120" >
          <div class="texto3">
            <h2 class="text-center">Fanart</h2>
            <p class="text-center">A leitura é uma fonte inesgotável de prazer, mas por incrível que pareça, a quase totalidade, não sente esta sede.</p>
            <p class="text-center">Solte sua imaginação: crie histórias e publique ilustrações<br>Publique as suas histórias conosco!</p>
            <p><a class="btn btn-primary btn-left1" href="#" role="button">Veja mais</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Rodapé da página -->
  <div class="rodape bg-light">
    <div class="container">
      <footer class="py-5">
        <div class="row">
          <div class="col-2">
            <h5>Categorias</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Comédia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Romance</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Terror</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Fantasia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Poema</a></li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Equipe</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bianca </a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Julia </a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Maria</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Raissa </a></li>
            </ul>
          </div>

          <div class="col-2">
            <h5>Redes Sociais</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"></a>Bianca</li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Julia</a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Maria </a></li>
              <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Raissa</a></li>
            </ul>
          </div>

          <div class="col-4 offset-1">
            <form>
              <h5 class="text-center">Assina a nossa newsletter</h5>
              <p class="text-center">E venha fazer parte da nossa equipe</p>
              <div class="d-flex w-100 gap-2">
                <label for="newsletter1" class="visually-hidden"></label>
                <input id="newsletter1" type="text" class="form-control" placeholder="Informe o seu melhor email">
                <button class="btn btn-primary" type="button"><i class="bi bi-fast-forward">Cadastrar</i></button>
              </div>
            </form>
          </div>
        </div>
        <div class="d-flex justify-content-between py-4 my-4 border-top">
          <p>&copy; 2022 Company, Inc. All rights reserved.</p>
          <ul class="list-unstyled d-flex">
            <li class="ms-3">
              <a class="link-dark" href="#">
                <img src="https://img.icons8.com/fluency/48/000000/instagram-new.png" alt="instagram" style="margin-top: -30%;">
              </a>
            </li>
            <li class="ms-3">
              <a class="link-dark" href="#">
                <img src="https://img.icons8.com/fluency/48/000000/facebook-new.png" alt="facebook" style="margin-top: -30%;">
              </a>
            </li>
            <li class="ms-3">
              <a class="link-dark" href="#">
                <img height="45" src="https://img.icons8.com/ios-filled/50/000000/github.png" alt="github" style="margin-top: -30%;">
              </a>
            </li>
          </ul>
        </div>
      </footer>
    </div>

    <!-- scripts links  -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>