<?php 
$title = "";
$page = "checkout"; 
include "master.inc.php"; 
function content () {
	?>

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

    <?php 
}