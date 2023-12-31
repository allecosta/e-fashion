<?php 

require_once "inc/head.php";
require_once "inc/topbar.php";
require_once "inc/navbar.php";

?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        
    </div>
</div>

<!-- Contact Start -->
<div class="container-fluid pt-5">
    <div class="text-center mb-4">
        <h3 class="section-title px-5"><span class="px-2">Entre em Contato para Qualquer Dúvida</span></h3>
    </div>
    <div class="row px-xl-5">
        <div class="col-lg-7 mb-5">
            <div class="contact-form">
                <div id="success"></div>
                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                    <div class="control-group">
                        <input type="text" class="form-control bg-secondary" id="name" placeholder="Nome"
                            required="required" data-validation-required-message="Favor informar o seu nome." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="email" class="form-control bg-secondary" id="email" placeholder="Email"
                            required="required" data-validation-required-message="Favor informar o seu email." />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" class="form-control bg-secondary" id="subject" placeholder="Assunto"
                            required="required" data-validation-required-message="Favor informar o assunto" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <textarea class="form-control bg-secondary" rows="6" id="message" placeholder="Mensagem"
                            required="required" style="resize:none"
                            data-validation-required-message="Favor informar descrever a sua mensagem">
                        </textarea>
                        <p class="help-block text-danger"></p>
                    </div>
                    <div>
                        <button class="btn btn-primary py-2 px-4" type="submit" id="sendMessageButton">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-5 mb-5">
            <h5 class="font-weight-semi-bold mb-3 text-dark">Entrar em contato</h5>
            <p>
                Justo sed diam ut sed amet duo amet lorem amet stet sea ipsum, sed duo amet et. Est elitr dolor elitr 
                erat sit sit. Dolor diam et erat clita ipsum justo sed.
            </p>
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3 text-dark">Loja 1</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Avenida Oviedo, Aracaju, SE</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>contato@efashion.com.br</p>
                <p class="mb-2"><i class="fa fa-phone-alt text-primary mr-3"></i>+055 79 345-6789</p>
            </div>
            <div class="d-flex flex-column">
                <h5 class="font-weight-semi-bold mb-3 text-dark">Loja 2</h5>
                <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>123 Street, New York, USA</p>
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@example.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
            </div>
        </div>
    </div>
</div>

<?php require_once "inc/footer.php"; ?>