<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Checkout</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">
    	<!-- Native -->
    	<link href="css/main.css" rel="stylesheet">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <a class="navbar-brand" href="./">Buy Stuff</a>
	        </div>
	        <div id="navbar" class="collapse navbar-collapse">
	          <ul class="nav navbar-nav">
	            <li class="active"><a href="./">Home</a></li>
	            <li><a href="#about">About</a></li>
	            <li><a href="#contact">Contact</a></li>
	          </ul>
	        </div> <!--/.nav-collapse -->
	      </div>
	    </nav> <!--/.nav -->

		<div class="container"> <!-- .container -->
			<h1 class="text-center">Checkout</h1>

			<form action="payment.php" method="post">

				<div class="form-group">
					<label for="name">Full Name: </label>
					<input type="text" name="name" placeholder="Bruce Wayne" class="form-control">
				</div>

				<div class="form-group">
					<label for="email">Email: </label>
					<input type="email" name="email" placeholder="bat@cave.com" class="form-control">
				</div>

				<div class="form-group">
					<label for="postal">Postal Address: </label>
					<textarea name="postal" cols="30" rows="5" class="form-control"></textarea>
				</div>

				<p class="lead"><strong>Total to pay:</strong> $120</p>

				<input type="submit" name="pay" value="Proceed to payment" class="btn btn-success btn-lg btn-block">

			</form>
		</div> <!-- /.container -->

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
	</body>
</html>