<?php

$contactos = getTodosContactos();

?>

<main class="container-fluid">
    <div class="row">
        <div class="col-12 d-flex justify-content-center flex-column mx-auto p-0">
            <div class="separador mx-auto"></div>
            <h1 class="titulo-1">Contactos</h1>
        </div>
    </div>

    <div class="row d-flex justify-content-start justify-content-md-center px-4 px-lg-5 mt-1 mt-lg-5">
        <div class="col-12 col-xl-4 campo-contactos px-1 px-md-5 line-height">
            <h1>Morada</h1>
            <h1><?= $contactos["morada"]; ?></h1>
            <br>
            <h1>Telefone</h1>
            <h1>(+351) <?= $contactos["telefone"]; ?></h1>
            <br>
            <h1>Fax</h1>
            <h1>(+351) <?= $contactos["fax"]; ?></h1>
            <br>
            <h1>E-mail</h1>
            <h1><?= $contactos["email"]; ?></h1>
            <br>
        </div>

        <div class="col-12 col-xl-4 d-flex justify-content-md-start justify-content-lg-center flex-column campo-informacao ms-lg-5 p-0">
            <form action="">
                <label for="nome">*NOME</label>
                <br>
                <input type="text" name="nome" id="nome" placeholder="Insira aqui o seu nome" required>
                <br>
                <label for="email">*E-MAIL</label>
                <br>
                <input type="email" name="email" id="email" placeholder="Insira aqui o seu e-mail" required>
                <br>
                <label for="telefone">*TELEFONE</label>
                <br>
                <input type="tel" name="telefone" id="telefone" placeholder="Insira aqui o seu telefone" required>
                <br>
                <label for="assunto">*ASSUNTO</label>
                <br>
                <input type="text" id="assunto" name="assunto" placeholder="Insira aqui o assunto" required>
                <br>
                <label for="mensagem">*MENSAGEM</label>
                <br>
                <textarea name="mensagem" id="mensagem" placeholder="Insira aqui a sua mensagem"></textarea>
                <br>
                <div class="row mt-1">
                    <div class="col"> 
                        <span>* Campos de preenchimento obrigatório</span>
                        <br>                       
                        <input type="checkbox" name="email-copia" id="email-copia" class="mt-2 mx-0">
                        <span>Quero receber uma cópia desta mensagem no meu e-mail.</span>                
                    </div>
                    <div class="col-12 col-lg-4 recaptcha">
                        <img src="img/recaptcha.png" alt="recaptcha">
                    </div>
                </div>
                              
            </form>
            <div class="d-flex justify-content-center justify-content-xl-end mt-5">
                <button id="informacao-enviar">Enviar</button>
            </div>  
        </div>
    </div>
</main>