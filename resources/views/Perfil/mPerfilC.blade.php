<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTMLS</title>
    <link href="/css/bootstrap.css" rel="stylesheet">
    <link href="/css/perfil.css" rel="stylesheet">
</head>

<body>
<!---Menus--
<ul class="nav nav-tabs shadow">
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item">        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>
-->
<nav class=" cor navbar navbar-expand-lg navbar-dark shadow">
    <a class="navbar-brand" href="#">
        <img src="/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
    </a>
    <a class="navbar-brand" href="{{ url('/')}}">MICROFONE MILIONARIO</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto px-4">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="/img/2.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Sair</a>
                </div>
            </li>
        </ul>

    </div>
</nav>
<!---Fim MEnus-->
<div class="container">
    <div class="card">
        <div class="row no-gutters shadow">
            <div class="col-md-2 avatar">
                <img src="/img/2.jpg" class="card-img" alt="...">
            </div>
            <div class="col-md-10">
                <div class="row">
                    <div class="col-md-7">
                        <div class="card-body">
                            <h5 class="card-title">Zhacarias Milonga</h5>
                            <p class="card-text">asassssssssssssssss sssssssssssssssssssss sssssssssssssss</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <ul class="card-text">
                                <li class="nav-link ">Saldo na conta:<input type="text" name="saldo" disabled placeholder="20.900.00" class="text-center"></li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container">
    <h2 class="text-center"> Sobre o Concorrente</h2>
    <div class="card-deck">
        <div class="card shadow">
            <video src="/img/estrada.mp4" width="220" height="200" poster=”teste.jpg” autoplay controls muted loop class="card-img-top" alt="..."> </video>

            <div class="card-body">
                <h5 class="card-title">Xkedou</h5>
                <p class="card-text">Pauleson.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card shadow">
            <video src="/img/limao.mp4" width="220" height="200" poster=”teste.jpg” autoplay controls muted loop crossorigin="" class="card-img-top" alt="..."> </video>
            <div class="card-body">
                <h5 class="card-title">Tic tac</h5>
                <p class="card-text">Scró k Cuia </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
        <div class="card shadow">
            <video src="/img/estrada.mp4" width="220" height="200" poster=”teste.jpg” autoplay controls muted loop crossorigin="" class="card-img-top" alt="..."> </video>
            <div class="card-body">
                <h5 class="card-title">Te amo tanto</h5>
                <p class="card-text">Rui Orlando</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
        </div>
    </div>
</div>

<div class="container outrosvideos">
    <div class="shad shadow">
        <div class="card-deck mb-5">
            <div class="card shadow-sm">
                <img src="/img/1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Semear</h5>
                    <p class="card-text"> Matias Damasio.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card shadow-sm">
                <img src="/img/2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Beatyfull</h5>
                    <p class="card-text">Masta</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card  shadow-sm">
                <img src="/img/3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sombra</h5>
                    <p class="card-text">Calema</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="card-deck">
            <div class="card shadow-sm">
                <img src="/img/5.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Soraia Ramos</h5>
                    <p class="card-text"> O nosso amor.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card shadow-sm">
                <img src="/img/4.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Do Babulo</h5>
                    <p class="card-text">Pocapy</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
            <div class="card shadow-sm">

                <video src="/img/limao.mp4" width="220" height="180" poster=”teste.jpg” autoplay controls muted loop> </video>

                <div class="card-body">
                    <h5 class="card-title">Água do chefe</h5>
                    <p class="card-text">Reducador.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>
<footer>sdsd</footer>
</body>

<script src="public/js/jquery.min.js"></script>
<script src="public/js/bootstrap.js"></script>
</html>
