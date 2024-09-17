<?php

require_once("../requisitos.php");
verificarNaoLogado();

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice - Construção e Habitacão</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
       
    <!-- CSS Local-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../fontes/stylesheet.css">

    <!-- Gestor de texto -->
    <script src="https://cdn.tiny.cloud/1/cpg9n0vtzhmtvstkdnf6e6yie101bjs5mju96298d78kqlgr/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        var base_url = "http://localhost/construcao_e_habitacao/";
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            relative_urls: false,
            remove_script_host: false,
            image_advtab: true,
            language: "pt_PT",
            tinycomments_author: 'Author name',
            mergetags_list: [
            { value: 'First.Name', title: 'First Name' },
            { value: 'Email', title: 'Email' },
            ],
            ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
        });
    </script>
</head>

<body>
   <header class="container-fluid">
        <div class="row">
            <div class="col-12 p-0">
                <ul class="nav justify-content-center bg-danger">
                    <li class="nav-item">
                        <a class="nav-link" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="carousel.php">Carousel</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="banner.php">Banner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="noticias.php">Noticias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="destaques.php">Destaques</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="empreendimentos.php">Empreendimentos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactos.php">Contactos</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Menus Simples</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="menu_simples.php?id=1">Quem Somos</a></li>
                            <li><a class="dropdown-item" href="menu_simples.php?id=2">Sócios</a></li>
                            <li><a class="dropdown-item" href="menu_simples.php?id=3">Centro de Férias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sair.php">Sair</a>
                    </li>
                </ul>
            </div>
        </div>
   </header>