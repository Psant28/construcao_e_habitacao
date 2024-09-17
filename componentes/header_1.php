<?php

require_once("requisitos.php");

$carousel = getTodosCarousel();
$empreendimentos = getTodosEmpreendimentosMenu();

?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Construção e Habitação</title>

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       
        <!-- CSS Local-->
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="fontes/stylesheet.css">

        <!-- JS -->
        <script src="main.js" defer></script>
        
        
    </head>
    <body>
      <header class="container-fluid px-0">
        <!-- NavBar-->
        <div class="row d-flex justify-content-lg-center justify-content-between align-items-end me-0 w-100 g-0" id="nav1">
          <div class="logo col-9 col-sm-auto d-flex justify-content-center justify-content-sm-end pe-xxl-4 pe-xl-2 pb-lg-3">
              <img src="img/logo.png" alt="logo">
          </div>

          <!-- Desktop -->
          <div class="col-3 col-sm-auto d-none d-lg-block">
            <nav class="navbar navbar-expand-lg bg-body-light p-0 me-xxl-1 me-xxl-3">
              <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto gap-lg-3 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "destaques") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" id="menu_empreendimentos" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Empreendimentos
                      </a>
                      <ul class="dropdown-menu">

                        <?php foreach($empreendimentos as $i => $e): ?>

                          <?php if($i > 0): ?>
                            <li><hr class="dropdown-divider"></li>
                          <?php endif; ?>

                          <li>
                            <a class="dropdown-item active" href="empreendimentos.php?id=<?= $e["id"]; ?>">
                              <?= $e["titulo"]?>
                            </a>
                          </li>

                        <?php endforeach; ?>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "centro_ferias") ? "active" : ""; ?>" href="centro_ferias.php">Centro de Férias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($nome_pagina == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                    </li>
                  </ul>                          
                </div>
              </div>
            </nav>
          </div>

          <!-- Mobile -->
          <div class="col-3 col-sm-auto d-block d-lg-none">
            <nav class="mobile navbar navbar-expand-lg bg-body-light p-0 me-xxl-1 me-xxl-3">
              <div class="container-fluid">
                <button class="navbar-toggler" onclick="mudarIcon()" class="d-inline" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span id="fechado" class="navbar-toggler-icon"></span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg d-none" id="aberto" viewBox="0 0 16 16">
                  <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z"/>
                  </svg>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto gap-lg-3 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link <?= ($pagina_atual == "home") ? "active" : ""; ?>" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($pagina_atual == "quem_somos") ? "active" : ""; ?>" href="quem_somos.php">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($pagina_atual == "socios") ? "active" : ""; ?>" href="socios.php">Sócios</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($pagina_atual == "noticias") ? "active" : ""; ?>" href="noticias.php">Notícias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link <?= ($pagina_atual == "destaques") ? "active" : ""; ?>" href="destaques.php">Destaques</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Empreendimentos
                      </a>
                      <ul class="dropdown-menu">
                        <?php foreach($empreendimentos as $i => $e): ?>

                          <?php if($i > 0): ?>
                            <li><hr class="dropdown-divider"></li>
                          <?php endif; ?>

                          <li>
                            <a class="dropdown-item" href="empreendimentos.php?id=<?= $e["id"]; ?>">
                              <?= $e["titulo"]?>
                            </a>
                          </li>
                          
                        <?php endforeach; ?>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0 <?= ($nome_pagina == "centro_ferias") ? "active" : ""; ?>" href="centro_ferias.php">Centro de Férias</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link px-0<?= ($nome_pagina == "contactos") ? "active" : ""; ?>" href="contactos.php">Contactos</a>
                    </li>
                  </ul>                          
                </div>
              </div>
            </nav>
          </div>
        </div>

        <!--Carousel-->
        <div class="row g-0">
          <div class="col-12 px-0">
            <div id="carouselExampleIndicators" class="carousel slide">
              <div class="carousel-indicators mb-4">

                <?php foreach($carousel as $i => $c): ?>

                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?= $i; ?>" class=<?= ($i == 0) ? "active" : ""; ?> aria-current="true" aria-label="Slide <?= $i+1 ?>"></button>
                
                <?php endforeach; ?>

              </div>

              <div class="carousel-inner">

                <?php foreach($carousel as $i => $c): ?>
                  <div class="carousel-item <?= ($i == 0) ? "active" : ""; ?>">
                    <img src="<?= $c["imagem"]; ?>" class="d-block w-100" alt="Carousel Imagem <?= $i+1; ?>">
                  </div>
                <?php endforeach; ?>

              </div>
            </div>
          </div>
        </div>
      </header>