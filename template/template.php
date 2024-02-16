<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title><?= $this->view->dados['title'] ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat%3A400%2C700%7COpen%20Sans%3A400%2C300%7CMontserrat%3Aregular%2C700&subset=" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="template/css/style.css">
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
        <div id="divLogo">
          <a class="logo" href="/"><img src="files/logo.png" id="logo" alt="Logotipo"></a>
          <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                    aria-expanded="false" aria-label="Toggle navigation" id="bt-menu">
          <span class="navbar-toggler-icon" id="bt-menu-icon"></span>
        </button>
        </div>
        
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="" id="nav-link">Link 1<span class="sr-only"></span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Link 2</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="nav-link" href="" id="submenu-item">Link 2.1</a>
                <a class="nav-link" href="" id="submenu-item">Link 2.2</a>
                <a class="nav-link" href="" id="submenu-item">Link 2.3</a>
                <a class="nav-link" href="" id="submenu-item">Link 2.4</a>
                <a class="nav-link" href="" id="submenu-item">Link 2.5</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" id="nav-link">Link 3<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="" id="nav-link">Link 4<span class="sr-only"></span></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <section>
        <?= $this->content() ?>
    </section>
    
    <footer>
        <div style="background-color:#2d3034;">
          <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        </div>
        <div style="background-color:#212326;color:rgb(200,200,200);">
          <h5 style="width:100%;text-align:center;margin:0;padding:23px 0px 20px 0px;">
            Desenvolvido por <a href="https://linkedin.com/in/lucas-costa-alves/" style="outline:none;">Lucas Costa Alves</a>
          </h5>
        </div>
    </footer>

    <script src="template/js/script.js" />
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>