<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>MICROFONE MILIONARIO</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link  href="/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/Estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
<!--
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
    </li>
</ul>-->
<!--  <input type="checkbox" id="hmenu"><label for="hmenu">&#9776</label>-->
<nav class="container-fluid shadow-md">
    <div class="itens-menu ">
        <ul>
            <li><a href="{{ url('/')}}">Home</a></li>
            <!--<li><a href="{{ url('todosvideos')}}">Todos videos </a></li>-->
            <li><a href="{{ url('todosvideos')}}">Todos videos </a></li>
            <li><a href="#comofunciona">Saber Mais</a></li>
            <li><a href="#quemsomos">Quem somos</a></li>
            <li><a href="{{ url('loginUsuario')}}">Login</a></li>
        </ul>
    </div>
    <div class="toglemenu"><i class="fas fa-bars" aria-hidden="true"></i><!--&#9776--></div>
</nav>



<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="../img/1.jpg" alt="First slide">
            <div class="carousel-caption">
                <h3 class="display-3" > MIGROFONE MILIONARIO</h3>
                <h5>=========================//==========================</h5>
            </div>
        </div>
        <div class="carousel-item">
            <img src="../img/2.jpg" class="img-fluid">
            <h3 class="carousel-caption">
            </h3>
        </div>
        <div class="carousel-item">
            <img src="../img/3.jpg" class="img-fluid">
            <h3 class="carousel-caption">
            </h3>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!--CAROUSEL COM  4 FOTOS--
<section id="carosel" class="car">
    <div class="carousel " id="caroselds7d" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#caroselds7d" data-slide-to="0" class="active"></li>
            <li data-target="#caroselds7d" data-slide-to="1"></li>
            <li data-target="#caroselds7d" data-slide-to="2"></li>
            <li data-target="#caroselds7d" data-slide-to="3"></li>
        </ol>
    <!--    <a class="carousel-control-next"href="#caroselds7d" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        <a class="carousel-control-prev" href="#caroselds7d" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>--
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../img/1.jpg" class="img-fluid">
                <div class="carousel-caption">
                    <h3 class="display-3" > MIGROFONE MILIONARIO</h3>
                    <h5>=========================//==========================</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../img/2.jpg" class="img-fluid">
                <h3 class="carousel-caption">
                </h3>
            </div>
            <div class="carousel-item">
                <img src="../img/3.jpg" class="img-fluid">
                <h4 class="carousel-caption"> </h4>
            </div>
            <div class="carousel-item"> <img src="../img/MM1.png" class="img-fluid">
                <div class="carousel-caption">
                </div>
            </div>
        </div>
    </div>
</section>
<!--<div>
    <div class="Lvideo">
<div class="container" >
    <div class="container-fluid c-video">
        <video autoplay muted loop class="video container-fluid" src="video/The%20Weeknd%20-%20Blinding%20Lights.mp4" type="video/mp4">
        </video>
    </div>
</div>
</div>

</div>
-->

<div class="corpo">

    <div id="#" class="corpo1">
        <h1 class="display-4">Videos mais votados</h1>
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 container-fluid">
            <div class="col">
                <div class="card">
                    <iframe class="card-img-top" width="560" height="200" src="httpsasa : dsdsd//www.youtube.com/embed/pD8Re3WENjI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                    <div class="card-body">
                        <h5 class="card-title">Casa de Madeira</h5>
                        <p class="card-text">Calema</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-outline-success">Votar neste video</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../img/MM2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Semear e Semear</h5>
                        <p class="card-text">Matias Damasio </p>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-outline-success">Votar neste video</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../img/MM1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Vai dormir</h5>
                        <p class="card-text">Anderson Mario.</p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-outline-success">Votar neste video</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="../img/MM3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-outline-success">Votar neste video</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="votador" class="corpo2 ">
        <h1 class="display-4 align-content-center">Usuarios que mais votão</h1>
        <div class="row row-cols-1 row-cols-md-4 row-cols-sm-2 g-4 container-fluid">
            <div class="col">
                <div class="card h-100">
                    <img src="../img/MM3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Luis</h5>
                        <p class="card-text">This is a wider card.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../img/MM1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Adao</h5>
                        <p class="card-text">This card.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../img/MM1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Zhacarias</h5>
                        <p class="card-text"></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="../img/MM2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Matheus</h5>
                        <p class="card-text">This is a wider card with supportin.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="jumbotron corpo3">
        <div class="container">
            <div  id="comofunciona" class="display-4">Como Funciona o voto</div>
            <p class="text-black-50">Lorem ipsum dolor sit amet consectetur adipisicing elit.
            <ol class="list-group">
                <li >Perspiciatis maxime minima dignissimos qui vitae aspernatur dicta.</li>
                <li>Sapiente ullam, commodi accusantium officia exercitationem quibusdam.</li>
                <li>amet totam quasi iure ut quo aliquam.</li>
            </ol>
            </p>
        </div>
    </div>
</div>
<div class="corpo4">
    <div class="display-4"> Vantages do Sistema</div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis maxime minima dignissimos qui vitae aspernatur dicta, sapiente ullam, commodi accusantium officia exercitationem quibusdam amet totam quasi iure ut quo aliquam.</p>
</div>
<div class="jumbotron corpo5">
    <div id="quemsomos">
        <div class="display-4">Quem Somos</div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis maxime minima dignissimos qui vitae aspernatur dicta, sapiente ullam, commodi accusantium officia exercitationem quibusdam amet totam quasi iure ut quo aliquam.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam impedit veritatis dolore soluta velit ipsum nobis, unde laborum, molestias laboriosam, ipsam inventore? Officia qui incidunt fugit ut ipsa reprehenderit blanditiis!</p><br>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae laudantium earum minima minus quidem explicabo corporis quis accusamus perspiciatis, sed possimus temporibus alias provident hic. Illum, illo repudiandae. Praesentium, ab? Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui dolorum possimus, dolorem quasi voluptas labore fugit quis quae perferendis, reprehenderit exercitationem dolores sint? At perferendis assumenda sed non tempore. Animi!</p>

    </div>

</div>
<div class="corpo6">
    <div class="display-4">DESEVOLVEDORES</div>
    <p></p>
    <!--carosssel dinamico-->
    <div class="slider owl-carousel">
        <div class="card">
            <div class="img"><img src="MM2.png" alt=""></div>
            <div class="content">
                <div class="title">Briana Tozour</div>
                <div class="sub-title">Graphic Designer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img"><img src="profile-2.jpeg" alt=""></div>
            <div class="content">
                <div class="title">Pricilla Preez</div>
                <div class="sub-title">Web Developer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img"><img src="profile-3.jpeg" alt=""></div>
            <div class="content">
                <div class="title">Eliana Maia</div>
                <div class="sub-title">App Developer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="img"><img src="profile-3.jpeg" alt=""></div>
            <div class="content">
                <div class="title">Eliana Maia</div>
                <div class="sub-title">App Developer</div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit modi dolorem quis quae animi nihil minus sed unde voluptas cumque.</p>
                <div class="btn">
                    <button>Read more</button>
                </div>
            </div>
        </div>
    </div>
</div>

</div>


<script>
    $(".slider").owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000, //2000ms = 2s;
        autoplayHoverPause: true,
    });
</script>
<!--carosssel dinamico-->



<footer class="rodape">

    <p>Copyright &copy; by SoftSoup</p>
    <div class="ull">
        <p>|<a class="btn-link" href="#">HOME</a>|<a class="btn-link" href="#">CONCURSO</a>|<a class="btn-link"    href="#comofunciona">COMO FUNCIONA</a> | <a class="btn-link" href="#quemsomos"> QUEM SOMOS</a>|<a class="btn-link" href="#">LOGIN</a>||</p>
    </div>
</footer>
</body>

<script src="JS/jquery.min.js"></script>
<script src="JS/bootstrap.js"></script>
</html>
