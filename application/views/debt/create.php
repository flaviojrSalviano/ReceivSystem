<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="?r=/debts/create" method="POST">
  <input type="hidden" id="client_id" name="client_id" value="<?php echo $vars['client_id'] ?>">
  <label for="title">title:</label><br>
  <input type="text" id="title" name="title"><br>
  <label for="value">value:</label><br>
  <input type="text" id="value" name="value"><br>
  <label for="due_date">due_date:</label><br>
  <input type="date" id="due_date" name="due_date"><br>
  <input type="submit" value="Submit">
</form> 
</body>
</html>