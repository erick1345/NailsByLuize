<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nails By Luize</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>


     <header class="header">
      <h3>Nails By Luize</h3>
      <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Início</a></li>
                    <li class="nav-item"><a class="nav-link" href="fotos">Imagens</a></li>
                    <li class="nav-item"><a class="nav-link" href="lojavelas">Loja</a></li>
                    <li class="nav-item"><a class="nav-link btn btn-pink btn-lg" href="horario">Reserve seu horario</a></li>
                </ul>
            </div>
        </div>
      </nav>
    </header>

   <main>
      <?php

      if (isset($_GET["param"])) {
          $param = $_GET["param"];  
          $p = explode("/", $param);
      }

      $page = $p[0] ?? "home";

      $pagina = "pages/{$page}.php";

      if (file_exists($pagina)) {
          include $pagina;
      } else {
          include "pages/erro.php";
      }

      ?>
    </main>

    <footer class="text-center mt-4 p-3 bg-dark text-light">
      <p>&copy; 2025 Luize nail design. Todos os direitos reservados.</p>
      <div class="d-flex justify-content-center gap-3">
        <a href="https://www.instagram.com/nails.by.luize?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" class="text-light">
          <i class="bi bi-instagram fs-3"></i>
        </a>
        <a href="https://pin.it/2bGvsN8uz" target="_blank" class="text-light">
          <i class="bi bi-pinterest fs-3"></i>
        </a>
        <a href="https://wa.me/+554299521974" target="_blank" class="text-light">
          <i class="bi bi-whatsapp fs-3"></i>
        </a>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</html>






