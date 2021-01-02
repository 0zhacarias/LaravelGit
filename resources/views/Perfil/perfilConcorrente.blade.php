<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MICROFONE MILIONARIO</title>
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
<nav class=" cor navbar navbar-expand-lg navbar-dark  shadow">
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


<form class="container">
    <div class="row">
        <div class="col-8">
            <h3>Editar perfil do Concorrente</h3>
            <p>Os utilizadores do Microfone Milionario poderão conhecer-te melhor através das seguintes informações</p>
        </div>
        <div class="col-4  titulo">
            <button type="submit" class="btn btn-outline-dark">Cancelar</button>
            <button type="submit" class="btn btn-outline-dark">Concluir</button>
        </div>
        <div class="avatar col-12">
            <img src="/img/5.jpg" alt="Avatar" class="img-fluid">
            <button type="submit" class="btn btn-outline-dark">Alterar a foto</button>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6  col-sm-12">
            <label for="Npropio">Nome próprio</label>
            <input type="text" class="form-control" id="Npropio" placeholder="Nome Próprio">
        </div>
        <div class="form-group col-md-6 col-sm-12">
            <label for="Apelido">Apelido</label>
            <input type="password" class="form-control" id="Apelido" placeholder="Apelido">
        </div>
    </div>
    <div class="form-group">

        <label for="inputEmail4">Email</label>
        <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="inputAddress2">Data de nascimento</label>
        <input type="date" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor" required>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4 col-sm-12">
            <label for="senhaAntiga">Senha Antiga</label>
            <input type="password" class="form-control" id="senhaAntiga">
        </div>
        <div class="form-group col-md-4 col-sm-12">
            <label for="senhaNova" >Senha Antiga</label>
            <input type="password" class="form-control" id="senhaNova">

            <!--<label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>-->
        </div>
        <div class="form-group col-md-4 col-sm-12">
            <label for="rSenhaNova">Repete a senha nova</label>
            <input type="password" class="form-control" id="rSenhaNova">
        </div>
    </div>
    <div class="form-group">
        <label for="ControlTextarea">Sobre o teu perfil</label>
        <textarea class="form-control" id="ControlTextarea" rows="3" placeholder="Escreve um pouco sobre a tua pessoa como artista"></textarea>
    </div>
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="form-group">
                <label for="ControlFile">Adicionar video a concorrer</label>
                <input type="file" class="form-control-file" id="ControlFile">
            </div>
            <div class="form-group">
                <!-- <button type="submit" class="btn btn-primary">Sign in</button>-->
            </div>
        </div>
    </div>
</form>
<footer class="rodape">

    <p>Copyright &copy; by SoftSoup</p>
</footer>
<!---Modal-->
</body>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.js"></script>
</html>

