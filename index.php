
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

    <? $_POST["numberOfWords"] = testValues($_POST, true) ?>

  </head>

  <body>

    <div class="container">
	  <div class="header">
	    <h3 class="text-muted">"XKCD" Secure Password Generator</h3>
	  </div>

	  <div class="jumbotron">
	    <h2 class = "randomWords"><?php randomWords($_POST["numberOfWords"], $_POST)?></h2>
	    <p class="lead">Fill out the options below and click "Get new password" to generate a new secure password.</p>
	    
	  </div>

	  <div class = "row">
	  	<div class = "col-md-6">
			<form role="form" method="post" action="index.php">
			  
			  <div class="form-group">
			    <label for="numberOfWords"># of words</label>
			    <input maxlength=1 type="text" name = "numberOfWords" value = <? echo $_POST["numberOfWords"] ?> id="numWords"> (Max 9)
			  </div>

			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name = "addNumber" <?checked($_POST, "addNumber")?> > Add a random number to the end
			    </label>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name = "addSymbol"<?checked($_POST, "addSymbol")?> > Add a random symbol to the end
			    </label>
			  </div>
			  <div class="checkbox">
			    <label>
			      <input type="checkbox" name = "addCapitalLetter"<?checked($_POST, "addCapitalLetter")?> > Start with a capital letter
			    </label>
			  </div>
			  <button type="submit" class="btn btn-success">Get new password</button>
			  <br><br>
			</form>
		</div>
		<div class = "col-md-6">
			<p>Password generator based on:</p>
			<a href = "http://xkcd.com/936/" role="button" class="btn btn-default">XKCD Web Comic</a>
			<br><br>
		</div>
	  </div>

	  <div class="footer">
	    <p>	
	    	<? 
	    		testValues($_POST);
	    	?> 

	    </p>
	  </div>

    </div> <!-- /container -->


    <!-- JavaScript -->
    <script src='js/bootstrap.min.js'></script>

  </body>
</html>
