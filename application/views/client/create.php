<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Receiv debts</title>
  </head>
  <body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	  <div class="collapse navbar-collapse" id="navbarNav">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
		<a class="nav-link" href="/">Home<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item">
		<a class="nav-link" href="?r=/clients">Todos os Clientes</a>
	      </li>
	      <li class="nav-item">
		<a class="nav-link" href="?r=/debts">Todas as dívidas</a>
	      </li>
	    </ul>
	  </div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="card mt-3" style="width:85vw">
			  <div class="card-body">
				<form action="?r=/clients/create" method="POST">
				  <label for="name">*Nome:</label><br>
				  <input type="text" id="name" name="name" style="width:400px" required><br>
				  <label for="cpf" class="mt-2">*cpf:</label><br>
				  <input type="number" id="cpf" name="cpf" required><br>
				  <label for="birthday" class="mt-2">*Data de nascimento:</label><br>
				  <input type="date" id="birthday" name="birthday" required><br>
				  <label for="address" class="mt-2">*Endereço:</label><br>
				  <input type="text" id="address" name="address" style="width:600px" required><br>
				  <input type="submit" value="Salvar" class="card-link mt-2">
				</form>
			  </div>
			</div>

		</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>