	<!doctype html>
	<html lang="en">
	<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
			<?php foreach ($vars['debt'] as $debt): ?>
				<form action="?r=/debts/edit" method="POST">
				  <input type="hidden" id="id" name="id" value="<?php echo $debt['id'] ?>">
				  <input type="hidden" id="client_id" name="client_id" value="<?php echo $debt['client_id'] ?>">
				  <label for="title">Título:</label><br>
				  <input type="text" id="title" name="title" style="width:50vw" value="<?php echo $debt['title'] ?>" required><br>
				  <label for="value" class="mt-1">Valor:</label><br>
				  <input type="number" step="0.01" min="0.01" id="value" name="value" value="<?php echo $debt['value'] ?>" required><br>
				  <label for="due_date" class="mt-1">Data de vencimento:</label><br>
				  <input type="date" id="due_date" name="due_date" value="<?php echo $debt['due_date'] ?>" required><br>
				  <input type="submit" value="Submit" class="mt-1">
				</form> 
			<?php endforeach ?>
			  </div>
			</div>

		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
	</html>