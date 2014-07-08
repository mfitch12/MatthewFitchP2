<!DOCTYPE html>
<html lang="en">

  <head>

  </head>

  <body>
  	<form method='POST' action='test.php'>
    Enter 5 contestants<br>
    <input type='text' name='contestant1'><br>
    <input type='text' name='contestant2'><br>
    <input type='text' name='contestant3'><br>
    <input type='text' name='contestant4'><br>
    <input type='text' name='contestant5'><br>
    <input type='submit' value='Pick a winner!'><br>
    <input type='submit'>

    <pre>
    <?php print_r($_POST); ?>
	</pre>

</form>


  </body>

</html>