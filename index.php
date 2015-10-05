<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>
		<div class="container">
			<div class="text-center">
				<img src="imgs/logo.png" alt="Conestoga Pizzeria logo">
			</div>
			<form>
				<div class="row">
					<div class="col-sm-6 form-block">
						<h1>Personal Details</h1>
						<div class="form-group">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" id="inputName" placeholder="Name">
						</div>
						<div class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" placeholder="Address">
						</div>
						<div class="form-group">
							<label for="inputAddress">Postal Code</label>
							<input type="text" class="form-control" id="inputPostalCode" placeholder="Postal Code">
						</div>
						<div class="form-group">
							<label for="inputAddress">City</label>
							<input type="text" class="form-control" id="inputCity" placeholder="City">
						</div>
						<div class="form-group">
							<label for="inputProvince">Province</label>
							<input type="text" class="form-control" id="inputProvince" placeholder="Province">
						</div>
						<div class="form-group">
							<label for="inputTelephone">Telephone</label>
							<input type="text" class="form-control" id="inputTelephone" placeholder="Telephone">
						</div>
						<div class="form-group">
							<label for="inputEmailAddress">Email Address</label>
							<input type="text" class="form-control" id="inputEmailAddress" placeholder="Email Address">
						</div>
					</div>
					<div class="col-sm-6 form-block">
						<h1>Order Information</h1>
						<div class="form-group">
							<label for="inputToppings">Size</label>
							<input type="text" class="form-control" id="inputSize" placeholder="Size">
						</div>
						<div class="form-group">
							<label for="inputToppings">Crust Type</label>
							<input type="text" class="form-control" id="inputToppings" placeholder="Crust Type">
						</div>
						<div class="form-group">
							<label for="inputToppings">Toppings</label>
							<input type="text" class="form-control" id="inputToppings" placeholder="Toppings">
						</div>
					</div>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-default">Place Order</button>
				</div>
			</form>
		</div>
	</body>
</html>