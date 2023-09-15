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

<!-- Shop Detail Start -->
<div class="container-fluid py-5">
    <div class="row px-xl-5">
        <div class="col-lg-5 pb-5">
            <div id="product-carousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner border">
                    <div class="carousel-item active">
                        <img class="w-100 h-100" src="assets/img/product-1.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="assets/img/product-2.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="assets/img/product-3.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                        <img class="w-100 h-100" src="assets/img/product-4.jpg" alt="">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#product-carousel" data-slide="prev">
                    <i class="fa fa-2x fa-angle-left text-dark"></i>
                </a>
                <a class="carousel-control-next" href="#product-carousel" data-slide="next">
                    <i class="fa fa-2x fa-angle-right text-dark"></i>
                </a>
            </div>
        </div>

        <div class="col-lg-7 pb-5">
            <h3 class="font-weight-semi-bold">Colorful Stylish Shirt</h3>
            <div class="d-flex mb-3">
                <div class="text-primary mr-2">
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star"></small>
                    <small class="fas fa-star-half-alt"></small>
                    <small class="far fa-star"></small>
                </div>
                <small class="pt-1">(50 Reviews)</small>
            </div>
            <h3 class="font-weight-semi-bold mb-4">R$ 150,00</h3>
            <p class="mb-4">
                Volup erat ipsum diam elitr rebum et dolor. Est nonumy elitr erat diam stet sit clita ea.
                Sanc invidunt ipsum et, labore clita lorem magna lorem ut. Erat lorem duo dolor no sea nonumy. 
                Accus labore stet, est lorem sit diam sea et justo, amet at lorem et eirmod ipsum diam et rebum 
                kasd rebum.
            </p>
            <div class="d-flex mb-3">
                <p class="text-dark font-weight-medium mb-0 mr-3">Tamanho:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-1" name="size">
                        <label class="custom-control-label" for="size-1">XS</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-2" name="size">
                        <label class="custom-control-label" for="size-2">S</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-3" name="size">
                        <label class="custom-control-label" for="size-3">M</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-4" name="size">
                        <label class="custom-control-label" for="size-4">L</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="size-5" name="size">
                        <label class="custom-control-label" for="size-5">XL</label>
                    </div>
                </form>
            </div>
            <div class="d-flex mb-4">
                <p class="text-dark font-weight-medium mb-0 mr-3">Cores:</p>
                <form>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-1" name="color">
                        <label class="custom-control-label" for="color-1">Preto</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-2" name="color">
                        <label class="custom-control-label" for="color-2">Branco</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-3" name="color">
                        <label class="custom-control-label" for="color-3">Vermelho</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-4" name="color">
                        <label class="custom-control-label" for="color-4">Azul</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" class="custom-control-input" id="color-5" name="color">
                        <label class="custom-control-label" for="color-5">Verde</label>
                    </div>
                </form>
            </div>
            <div class="d-flex align-items-center mb-4 pt-2">
                <div class="input-group quantity mr-3" style="width: 130px;">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-minus"><i class="fa fa-minus"></i></button>
                    </div>
                    <input type="text" class="form-control bg-secondary text-center" value="1">
                    <div class="input-group-btn">
                        <button class="btn btn-primary btn-plus"><i class="fa fa-plus"></i></button>
                    </div>
                </div>
                <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i> Adicionar ao carrinho</button>
            </div>
            <div class="d-flex pt-2">
                <p class="text-dark font-weight-medium mb-0 mr-2">Compartilhar:</p>
                <div class="d-inline-flex">
                    <a class="text-dark px-2" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="text-dark px-2" href=""><i class="fab fa-twitter"></i></a>
                    <a class="text-dark px-2" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="text-dark px-2" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <div class="row px-xl-5">
        <div class="col">
            <div class="nav nav-tabs justify-content-center border-secondary mb-4">
                <a class="nav-item nav-link active" data-toggle="tab" href="#tab-pane-1">Descrição</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-2">Informação</a>
                <a class="nav-item nav-link" data-toggle="tab" href="#tab-pane-3">Reviews (0)</a>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="tab-pane-1">
                    <h4 class="mb-3">Descrição do Produto</h4>
                    <p>
                        Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam 
                        invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod 
                        consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. 
                        Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos 
                        dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod 
                        nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt 
                        tempor lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.
                    </p>
                    <p>
                        Dolore magna est eirmod sanctus dolor, amet diam et eirmod et ipsum. Amet dolore tempor 
                        consetetur sed lorem dolor sit lorem tempor. Gubergren amet amet labore sadipscing clita 
                        clita diam clita. Sea amet et sed ipsum lorem elitr et, amet et labore voluptua sit rebum. 
                        Ea erat sed et diam takimata sed justo. Magna takimata justo et amet magna et.
                    </p>
                </div>
                <div class="tab-pane fade" id="tab-pane-2">
                    <h4 class="mb-3">Informações Adicionais</h4>
                    <p>
                        Eos no lorem eirmod diam diam, eos elitr et gubergren diam sea. Consetetur vero aliquyam 
                        invidunt duo dolores et duo sit. Vero diam ea vero et dolore rebum, dolor rebum eirmod 
                        consetetur invidunt sed sed et, lorem duo et eos elitr, sadipscing kasd ipsum rebum diam. 
                        Dolore diam stet rebum sed tempor kasd eirmod. Takimata kasd ipsum accusam sadipscing, eos 
                        dolores sit no ut diam consetetur duo justo est, sit sanctus diam tempor aliquyam eirmod 
                        nonumy rebum dolor accusam, ipsum kasd eos consetetur at sit rebum, diam kasd invidunt tempor 
                        lorem, ipsum lorem elitr sanctus eirmod takimata dolor ea invidunt.
                    </p>
                    <div class="row">
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                            </ul> 
                        </div>
                        <div class="col-md-6">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item px-0">
                                    Sit erat duo lorem duo ea consetetur, et eirmod takimata.
                                </li>
                                <li class="list-group-item px-0">
                                    Amet kasd gubergren sit sanctus et lorem eos sadipscing at.
                                </li>
                                <li class="list-group-item px-0">
                                    Duo amet accusam eirmod nonumy stet et et stet eirmod.
                                </li>
                                <li class="list-group-item px-0">
                                    Takimata ea clita labore amet ipsum erat justo voluptua. Nonumy.
                                </li>
                            </ul> 
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-pane-3">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="mb-4">1 Revisão para "Colorful Stylish Shirt"</h4>
                            <div class="media mb-4">
                                <img src="assets/img/user.jpg" alt="Image" class="img-fluid mr-3 mt-1" style="width: 45px;">
                                <div class="media-body">
                                    <h6>João Silva<small> - <i>01 Jan 2020</i></small></h6>
                                    <div class="text-primary mb-2">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>
                                        Diam amet duo labore stet elitr ea clita ipsum, tempor labore accusam ipsum 
                                        et no at. Kasd diam tempor rebum magna dolores sed sed eirmod ipsum.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="mb-4">Deixe um comentário</h4>
                            <small>Seu endereço de e-mail não será publicado. Os campos obrigatórios estão marcados com *</small>
                            <div class="d-flex my-3">
                                <p class="mb-0 mr-2">Sua avaliação * :</p>
                                <div class="text-primary">
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                            <form>
                                <div class="form-group">
                                    <label>Deixe o seu comentário
                                        <textarea cols="30" rows="5" class="form-control"></textarea>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Seu Nome *
                                        <input type="text" class="form-control" required>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label>Seu Email *
                                        <input type="email" class="form-control" required>
                                    </label>
                                </div>
                                <div class="form-group mb-0">
                                    <input type="submit" value="Enviar" class="btn btn-primary px-3">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "inc/footer.php"; ?>