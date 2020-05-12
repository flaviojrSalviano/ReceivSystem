<?php require_once __DIR__.'/../../Utils/Utils.php'; ?>
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
   <h4>Total de clients: <?php echo count($vars['clients']) ?></h4>
 </div>
 <div class="row">
   <a href="?r=/clients/create" class="btn btn-primary">Criar Novo<i class="glyphicon glyphicon-remove"></i></a>
 </div>
 <div class="row">
  <table class="table table-dark mt-3">
    <thead>
      <tr>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Data de nascimento</th>
        <th scope="col">Endereço</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($vars['clients'] as $client): ?>
        <tr>
          <th scope="row"><a href="?r=/clients/show&id=<?php echo $client['id'] ?>" style="text-decoration:none; color:white"><?php echo $client['name'] ?></a></th>
          <td><?php echo $client['cpf'] ?></td>
          <td><?php echo data($client['birthday']) ?></td>
          <td><?php echo $client['address'] ?></td>
          <td>
           <a href="?r=/clients/show&id=<?php echo $client['id'] ?>" style="text-decoration:none; color:white">
            <svg class="bi bi-eye-fill" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path d="M10.5 8a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"/>
              <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 100-7 3.5 3.5 0 000 7z" clip-rule="evenodd"/>
            </svg>
          </a>
          <a href="?r=/clients/delete&id=<?php echo $client['id'] ?>" style="text-decoration:none; color:white">
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>