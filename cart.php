<?php 

require_once "inc/head.php";
require_once "inc/topbar.php";
require_once "inc/navbar.php";

?>

<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <!-- <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1> -->
        <div class="d-inline-flex">
            <!-- <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Shopping Cart</p> -->
        </div>
    </div>
</div>

<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Produtos</th>
                        <th>Preço</th>
                        <th>Qualidade</th>
                        <th>Total</th>
                        <th>Remover</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    <tr>
                        <td class="align-middle">
                            <img src="img/product-1.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" ><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <img src="img/product-2.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" ><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <img src="img/product-3.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" ><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <img src="img/product-4.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt
                        </td>
                        <td class="align-middle">R$ 50,00</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" ><i class="fa fa-minus"></i></button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle"><button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button></td>
                    </tr>
                    <tr>
                        <td class="align-middle">
                            <img src="img/product-5.jpg" alt="" style="width: 50px;"> Colorful Stylish Shirt
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <div class="input-group quantity mx-auto" style="width: 100px;">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-minus" >
                                    <i class="fa fa-minus"></i>
                                    </button>
                                </div>
                                <input type="text" class="form-control form-control-sm bg-secondary text-center" value="1">
                                <div class="input-group-btn">
                                    <button class="btn btn-sm btn-primary btn-plus"><i class="fa fa-plus"></i></button>
                                </div>
                            </div>
                        </td>
                        <td class="align-middle">R$ 150,00</td>
                        <td class="align-middle">
                            <button class="btn btn-sm btn-primary"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Cód. do cupom">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Aplicar cupom</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Resumo do carrinho</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">R$ 150,00</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Envio</h6>
                        <h6 class="font-weight-medium">R$ 10,00</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">R$ 160,00</h5>
                    </div>
                    <button class="btn btn-block btn-primary my-3 py-3">Fazer o Check-out</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "inc/footer.php"; ?>