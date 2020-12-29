<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet"  href="../../../Login/bootstrap/css/bootstrap.min.css">
    <!--CSS EXTERNO-->
    <link rel="stylesheet"  href="../../../public/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    

       
    <title>Login</title>
  </head>
  <body>
     <h1 class="estilo">Iniciar sessão</h1>

    <!--FORMULARIO DO LOGIN-->

    <div class="card" id="telalogin" >


       
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Email </label>
            <input type="text" class="form-control"   placeholder="Insira o seu Nome">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Palavra-passe</label>
            <input type="password" class="form-control" placeholder="insira sua palavra-passe">
          </div>
          <div class="mb-3 form-check">
             <a href="" style="text-decoration: none;">Esqueceu sua senha?</a> <br>
             <input type="checkbox" class="form-check-input"  >
            <label class="form-check-label" >Lembrar-me</label>
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn-success" class="btn btn-primary" type="button">Iniciar sessão</button>
            <button  class="btn btn-primary" type="button" id="iniciar"><i class="fab fa-facebook"></i> Iniciar sessão com facebook</button>
            <button  class="btn btn-danger" class="btn btn-primary" type="button" id="iniciar"><i class="fab fa-google-plus"></i> Iniciar sessão com gmail</button>
            <hr>
            <p>Ainda não tem uma conta?  <a href="registrarUsuario.blade.php" style="text-decoration: none;">  Registe-se aqui!</a></p>
          </div>
        </form>
        
      </div>
      
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--Font awesome-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
      
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>