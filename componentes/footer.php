<?php

require_once("requisitos.php");

$contactos = getTodosContactos();

?>

<footer class="container-fluid">

<!-- Contactos -->
                    <div class="row contactos m-0">
                    <div class="col-12 filtro h-100 p-0">
                        <div class="row d-flex justify-content-center m-0">

                        <div class="col-12 separador2"></div>

                        <div class="col-12 titulo-contactos mt-4 mt-lg-5 mb-lg-5">
                            <h1 class="text-center mx-auto ">Contactos</h1>
                        </div>

                        <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-center mt-3 mt-lg-5">
                            <div class="telefone d-flex flex-column align-items-center">
                            <img src="img/butoes/tel.svg" alt="Telefone">
                            <span><?= $contactos["telefone"]; ?></span>
                            </div>
                        </div>
                        
                        <div class="col-12 col-lg-3 d-flex justify-content-center mt-4 mt-lg-5">
                            <div class="localizacao d-flex flex-column align-items-center">
                            <img src="img/butoes/loc.svg" alt="Localizacao">
                            <span class="text-center">
                                <?= $contactos["morada"]; ?>
                            </span>
                            </div>
                        </div>

                        <div class="col-12 col-lg-3 d-flex justify-content-center justify-content-lg-start mt-4 mt-lg-5">
                            <div class="mail d-flex flex-column align-items-center">
                            <img src="img/butoes/mail.svg" alt="Email">
                            <span><?= $contactos["email"]; ?></span>
                            </div>
                        </div>
                        </div>  
                    </div>
                    </div>

                    <!-- Localização -->
                    <div class="row m-0">
                    <div class="col-12 mapa p-0">
                    <div style="max-width:100%;overflow:hidden;color:red;width:100%;height:500px;"><div id="embed-map-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Porto,+Portugal&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe></div><a class="googlemaps-made" href="https://www.bootstrapskins.com/themes" id="enable-maps-data">premium bootstrap themes</a><style>#embed-map-display img.text-marker{max-width:none!important;background:none!important;}img{max-width:none}</style></div>
                    </div>
                    </div>


                    <div class="row navbar2 mx-0 p-0">
                    <div class="col-12 filtro2 h-100 px-0">
                    <!-- Facebook Area -->
                    <div class="row m-0">
                        <a href="<?= $contactos["link_facebook"]; ?>" target="_blank">
                        <div class="col-12 facebook-area d-flex flex-column align-items-center mx-0">
                            <img src="img/butoes/facebook.svg" class="d-block mx-auto" alt="Facebook">
                            <p>Siga-nos no Facebook</p></a>
                        </div>
                        </a>
                    </div>

                    <div class="row separador3 mt-5 mx-0"></div>

                    <div class="row m-0">
                        <div class="col-12 navbar2-links d-none d-lg-block mt-5">
                        <nav class="d-flex justify-content-center">
                            <a href="index.php" class="<?= ($nome_pagina == "home") ? "active" : ""; ?>">Home</a>
                            <a href="quem_somos.php" class="<?= ($nome_pagina == "quem_somos") ? "active" : ""; ?>">Quem Somos</a>
                            <a href="socios.php" class="<?= ($nome_pagina == "socios") ? "active" : ""; ?>">Sócios</a>
                            <a href="noticias.php" class="<?= ($nome_pagina == "noticias") ? "active" : ""; ?>">Notícias</a>
                            <a href="destaques.php" class="<?= ($nome_pagina == "destaques") ? "active" : ""; ?>">Destaques</a>
                            <a href="#" class="<?= ($nome_pagina == "empreendimentos") ? "active" : ""; ?>" onclick="abrirMenu()">Empreendimentos</a>
                            <a href="centro_ferias.php" class="<?= ($nome_pagina == "centro_ferias") ? "active" : ""; ?>">Centro de Férias</a>
                            <a href="contactos.php" class="<?= ($nome_pagina == "contactos") ? "active" : ""; ?>">Contactos</a>
                        </nav>
                        </div>
                    </div>
                    
                    <div class="row m-0">
                        <div class="col-xl-8 col-12 copyright d-flex justify-content-center mt-lg-5 text-wrap text-center">
                            <a href="https://www.mediamaster.pt/" target="_blank">Copyright &copy <?= date("Y"); ?> Grupo MediaMaster. Todos os direitos reservados.</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>