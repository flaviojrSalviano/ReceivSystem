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
<?php foreach ($vars['client'] as $client): ?>
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
			<div class="card mt-3">
			  <div class="card-body">
				<form action="?r=/clients/edit" method="POST">
<div class="row">
				<div class="col-6">
<label for="name">*Nome:</label><br>
<input type="text" id="name" name="name" style="width:400px" value="<?php echo $client['name'] ?>">
</div>
				<div class="col-6">
<label for="cpf">*cpf:</label><br>
				  <input type="text" id="cpf" name="cpf" style="width:400px" value="<?php echo $client['cpf'] ?>">
</div>
</div>
				  <label for="address" class="mt-2">*Endereço:</label><br>
				  <input type="text" id="address" name="address" style="width:600px" value="<?php echo $client['address'] ?>"><br>
				  <input type="hidden" id="id" name="id" value="<?php echo $client['id'] ?>">
				  <label for="birthday" class="mt-2">*Data de nascimento:</label><br>
				  <input type="date" id="birthday" name="birthday" value="<?php echo $client['birthday'] ?>"><br>
				  <input type="submit" value="Salvar alterações" class="card-link mt-2">
				</form>
			  </div>
			</div>
		</div>
<div class="row mt-3">
	<h4>Total de dívidas: <?php echo count($vars['debts']) ?></h4>
</div>
<div class="row">
	<a href="?r=/debts/create&client_id=<?php echo $client['id'] ?>" class="btn btn-primary">Add Dívida<i class="glyphicon glyphicon-remove"></i></a>
</div>
<div class="row">
<table class="table table-dark mt-3">
  <thead>
    <tr>
      <th scope="col">Titulo</th>
      <th scope="col">Valor</th>
      <th scope="col">Data de vencimento</th>
      <th scope="col">Última atualização</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($vars['debts'] as $debt): ?>
    <tr>
      <th scope="row"><?php echo $debt['title'] ?></th>
      <td><?php echo $debt['value'] ?></td>
      <td><?php echo $debt['due_date'] ?></td>
      <td><?php echo $debt['update'] ?></td>
      <td>
	<a href="?r=/debts/delete&id=<?php echo $debt['id'] ?>" style="text-decoration:none; color:white">
		<svg class="bi bi-trash-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M2.5 1a1 1 0 00-1 1v1a1 1 0 001 1H3v9a2 2 0 002 2h6a2 2 0 002-2V4h.5a1 1 0 001-1V2a1 1 0 00-1-1H10a1 1 0 00-1-1H7a1 1 0 00-1 1H2.5zm3 4a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7a.5.5 0 01.5-.5zM8 5a.5.5 0 01.5.5v7a.5.5 0 01-1 0v-7A.5.5 0 018 5zm3 .5a.5.5 0 00-1 0v7a.5.5 0 001 0v-7z" clip-rule="evenodd"/>
		</svg>
	</a>
      </td>
    </tr>
    <?php endforeach ?>
  </tbody>
</table>
</div>
	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<?php endforeach ?>  
</body>
</html>