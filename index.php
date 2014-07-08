
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require "logic.php" ?>

    <title>Fitch - Project 2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>

    <div class="container">
      <div class="header">
        <h3 class="text-muted">XKCD Password Generator</h3>
      </div>

      <div class="jumbotron">
        <h2 class = "randomWords"><?php randomWords($_POST["numberOfWords"])?></h2>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">New Password</a></p>
      </div>

		<form role="form" method="post" action="index.php">
		  
		  <div class="form-group">
		    <label for="numberOfWords"># of words</label>
		    <input maxlength=1 type="text" name = "numberOfWords" value = "" id="numWords"> (Max 9)
		  </div>

		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name = "addNumber"> Add a number
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name = "addSymbol"> Add a symbol
		    </label>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name = "addCapitalLetter"> Start with a capital letter
		    </label>
		  </div>
		  <button type="submit" class="btn btn-success">Submit</button>
		</form>

      <div class="footer">
        <p>	
        	<? 
        		if(array_key_exists("numberOfWords", $_POST))
        		{
        			echo $_POST["numberOfWords"] ;
        		}
        	?> 
        	<br>
        	<? echo $_POST["addNumber"] ?> 
        	<br>
        	<? echo $_POST["addSymbol"] ?> 
        	<br>
        	<? echo $_POST["addCapitalLetter"] ?> 
        </p>
      </div>

    </div> <!-- /container -->


    <!-- JavaScript -->
    <script src='//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js'></script>

  </body>
</html>
