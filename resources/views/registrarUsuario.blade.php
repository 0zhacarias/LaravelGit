<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	 <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <!--CSS EXTERNO-->
    <link rel="stylesheet"  href="../css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


	<title>Registrar</title>
</head>
<body>
<div class="texto">
    <h1 class="estilo">Registe-se</h1>

</div>
	 <div class="card" id="telalogin" >
      <div class="card-body">
        <form>
        	<div class="mb-3">
        		<label class="form-label">Nome</label>
        		<input type="text" class="form-control" placeholder="Insira seu Nome">
        	</div>
          <div class="mb-3">
            <label class="form-label">Email </label>
            <input type="email" class="form-control"  aria-describedby="emailHelp" placeholder="Insira o seu email">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Palavra-passe</label>
            <input type="password" class="form-control" placeholder="insira sua palavra-passe">
          </div>
          <label class="form-label">sexo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
             <label class="form-check-label" for="flexRadioDefault1">feminino </label>
          </div>
          <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
          <label class="form-check-label" for="flexRadioDefault2"> masculino </label>
          </div>
            <div class="d-grid gap-2">
            <button class="btn btn-success" class="btn btn-primary" type="button">Registar</button>

            <hr>
            <p>Já tem uma conta?  <a href="{{url('loginUsuario')}}" style="text-decoration: none;">  Iniciar Sessão</a></p>
          </div>
        </form>

      </div>

    </div>



	 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <!--Font awesome-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>

</body>
</html>
