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



<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Confirmar Dados</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Nome
                            <input class="form-control" type="text" placeholder="João">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Sobrenome
                            <input class="form-control" type="text" placeholder="Silva">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail
                            <input class="form-control" type="text" placeholder="joao@hostmail.com">
                        </label>
                        
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Telefone celular
                            <input class="form-control" type="text" placeholder="79 98888-5500">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Endereço 
                            <input class="form-control" type="text" placeholder="123 Street">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Referência
                            <input class="form-control" type="text" placeholder="123 Street">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>País</label>
                        <select class="custom-select">
                            <option selected>Brasil</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Cidade
                            <input class="form-control" type="text" placeholder="Aracaju">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Estado
                            <input class="form-control" type="text" placeholder="Sergipe">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Código da cidade
                            <input class="form-control" type="text" placeholder="79">
                        </label>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="newaccount">
                            <label class="custom-control-label" for="newaccount">Crie uma conta aqui</label>
                        </div>
                    </div>
                    <div class="col-md-12 form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="shipto">
                            <label 
                                class="custom-control-label" 
                                for="shipto"  
                                data-toggle="collapse" 
                                data-target="#shipping-address">Enviar para outro endereço
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="collapse mb-4" id="shipping-address">
                <h4 class="font-weight-semi-bold mb-4">Endereço para envio</h4>
                <div class="row">
                    <div class="col-md-6 form-group">
                        <label>Nome
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Sobrenome
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>E-mail
                            <input class="form-control" type="text">
                        </label>
                        
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Telefone celular
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Endereço 
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Referência
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>País</label>
                        <select class="custom-select">
                            <option selected>Brasil</option>
                        </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Cidade
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Estado
                            <input class="form-control" type="text">
                        </label>
                    </div>
                    <div class="col-md-6 form-group">
                        <label>Código da cidade
                            <input class="form-control" type="text">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Total de Pedidos</h4>
                </div>
                <div class="card-body">
                    <h5 class="font-weight-medium mb-3">Produtos</h5>
                    <div class="d-flex justify-content-between">
                        <p>Colorful Stylish Shirt 1</p>
                        <p>R$ 150,00</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Colorful Stylish Shirt 2</p>
                        <p>R$ 150,00</p>
                    </div>
                    <div class="d-flex justify-content-between">
                        <p>Colorful Stylish Shirt 3</p>
                        <p>R$ 150,00</p>
                    </div>
                    <hr class="mt-0">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">R$ 450,00</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Envio</h6>
                        <h6 class="font-weight-medium">R$ 10,00</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">R$ 460,00</h5>
                    </div>
                </div>
            </div>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Pagamento</h4>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="paypal">
                            <label class="custom-control-label" for="paypal">A vista</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                            <label class="custom-control-label" for="directcheck">Pix</label>
                        </div>
                    </div>
                    <div class="">
                        <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                            <label class="custom-control-label" for="banktransfer">Transferência bancaria</label>
                        </div>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Fazer o Pedido</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "inc/footer.php"; ?>