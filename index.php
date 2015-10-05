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
						<div class="row">
							<div class="col-xs-4 form-group">
								<label for="inputAddress">Postal Code</label>
								<input type="text" class="form-control" id="inputPostalCode" placeholder="Postal Code">
							</div>
							<div class="col-xs-4 form-group">
								<label for="inputAddress">City</label>
								<input type="text" class="form-control" id="inputCity" placeholder="City">
							</div>
							<div class="col-xs-4 form-group">
								<label for="inputProvince">Province</label>
								<input type="text" class="form-control" id="inputProvince" placeholder="Province">
							</div>
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
							<label for="sizeRadios">Size</label>
							<div id ="sizeRadios" class="row size">
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioSmall" value="small"> Small
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioMedium" value="medium"> Medium
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioLarge" value="large"> Large
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioExtraLarge" value="extraLarge"> Extra Large
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="crustTypeRadios">Crust Type</label>
							<div id ="crustTypeRadios" class="row size">
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioHandTossed" value="handTossed"> Hand-Tossed
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioPan" value="pan"> Pan
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioStuffed" value="stuffed"> Stuffed
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioThin" value="thin"> Thin
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="toppingsCheckboxes">Toppings</label>
							<div id ="toppingsCheckboxes">
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioCheese" value="cheese"> Cheese
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioSausage" value="sausage"> Sausage
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioBeef" value="beef"> Beef
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioHam" value="ham"> Ham
										</label>
									</div>
								</div>
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioOnions" value="onions"> Onions
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioTomatoes" value="tomatoes"> Tomatoes
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioMushrooms" value="mushrooms"> Mushrooms
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioOlives" value="olives"> Olives
										</label>
									</div>
								</div>
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioSpinach" value="spinach"> Spinach
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioGarlic" value="garlic"> Garlic
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioBacon" value="bacon"> Bacon
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" id="radioPineapple" value="pineapple"> Pineapple
										</label>
									</div>
								</div>
							</div>
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