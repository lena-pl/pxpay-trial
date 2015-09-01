<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8">
		<title>Checkout</title>
	</head>
	<body>
		<h1>Checkout</h1>

		<form action="payment.php" method="post">

			<div>
				<label for="name">Full Name: </label>
				<input type="text" name="name" placeholder="Bruce Wayne">
			</div>

			<div>
				<label for="email">Email: </label>
				<input type="email" name="email" placeholder="bat@cave.com">
			</div>

			<div>
				<label for="postal">Postal Address: </label>
				<textarea name="postal" cols="30" rows="10"></textarea>
			</div>

			<p>Total: $120</p>

			<input type="submit" name="pay" value="Proceed to payment">

		</form>
	</body>
</html>