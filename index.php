<?php 
    require_once("globals.php");
    require_once("db.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">
    <link rel="short icon" href="<?= $BASE_URL ?>img/moviestar.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.css" integrity="sha512-zylce7fP6h4usg536JBTRj2rt7q22Z0qicHSlgSK53Irtfkz37ate3KCQ59du+aXZV6R3yyL2X1LyGKBEUMZaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>MovieStar</title>
</head>
<body>
    <header>
        <nav id="main-navbar" class="navbar navbar-expand-lg">
            <a href="<?= $BASE_URL ?>" class="navbar-brand" >
                <img src="<?= $BASE_URL ?>img/logo.svg" id="logo" alt="moviestar">
                <span id="moviestar-title">MovieStar</span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <form action="" method="GET" id="search-form" class="form-inline my-2 my-lg-0">
                <input type="text" name="q" id="search" class="form-control mr-sm-2" type="search" placeholder="Buscar Filmes" aria-label="Search">
                <button class="btn my-2 my-sm-0" type="submit">
                    <i class="fas fa-search"></i>
                </button>
            </form>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="<?= $BASE_URL ?>auth.php" class="nav-link">Entrar / Cadastrar</a>
                    </li>
                
            </div>
        </nav>
    </header>
    <div id="main-container" class="container-fluid">
        <h1>Corpo do site</h1>
    </div>

    <footer id="footer">
        <div class="social-container">
            <ul>
                <li>
                    <a href=""><i class="fab fa-facebook-square"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-instagram"></i></a>
                </li>
                <li>
                    <a href=""><i class="fab fa-youtube"></i></a>
                </li>
            </ul>
            <div id="footer-links-container">
                <ul>
                    <li>
                        <a href="#">Adicionar Filme</a>
                    </li>
                    <li>
                        <a href="#">Adicionar crítica</a>
                    </li>
                    <li>
                        <a href="#">Entrar / registrar</a>
                    </li>
                </ul>
            </div>
            <p>&copy 2025 Theo Henrique</p>
        </div>

    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/js/bootstrap.js" integrity="sha512-GKxQGmCBqm3YHCZTdqD3Bvsz+AHRObqztq6xDo+68527RxgVw7wF1TR5ZSBvtWiz5qzpOzUGGvxJbT/6UzzSOQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>