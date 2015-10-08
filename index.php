<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script language="javascript" type="text/javascript" src="js/script.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="text-center">
				<img src="imgs/logo.png" alt="Conestoga Pizzeria logo">
			</div>
			<form id="orderForm">
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
								<label for="selectProvince">Province</label>
								<select class="form-control" id="selectProvince" onchange="onChangeProvince()">
							  		<option value="ON">Ontario</option>
							  		<option value="QC">Quebec</option>
							  		<option value="MB">Manitoba</option>
							  		<option value="SK">Saskatchewan</option>
								</select>
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
										<input type="radio" name="sizeOptions" id="radioSmall" onclick="onClickSize()" value="small"> Small
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioMedium" onclick="onClickSize()" value="medium"> Medium
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioLarge" onclick="onClickSize()" value="large" checked> Large
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="sizeOptions" id="radioExtraLarge" onclick="onClickSize()" value="extraLarge"> Extra Large
									</label>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="crustTypeRadios">Crust Type</label>
							<div id ="crustTypeRadios" class="row size">
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioHandTossed" onclick="onClickCrustType()" value="handTossed"> Hand-Tossed
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioPan" onclick="onClickCrustType()" value="pan" checked> Pan
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioStuffed" onclick="onClickCrustType()" value="stuffed"> Stuffed
									</label>
								</div>
								<div class="col-xs-3">
									<label class="radio-inline">
										<input type="radio" name="crustTypeOptions" id="radioThin" onclick="onClickCrustType()" value="thin"> Thin
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
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioCheese" value="cheese"> Cheese
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioSausage" value="sausage"> Sausage
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioBeef" value="beef"> Beef
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioHam" value="ham"> Ham
										</label>
									</div>
								</div>
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioOnions" value="onions"> Onions
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioTomatoes" value="tomatoes"> Tomatoes
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioMushrooms" value="mushrooms"> Mushrooms
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioOlives" value="olives"> Olives
										</label>
									</div>
								</div>
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioSpinach" value="spinach"> Spinach
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioGarlic" value="garlic"> Garlic
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioBacon" value="bacon"> Bacon
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions" onclick="onClickTopping()" id="radioPineapple" value="pineapple"> Pineapple
										</label>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<h3 id="orderTotal">Order Total: $16.95</h3>
				</div>
				<div class="text-center">
					<button type="submit" class="btn btn-primary">Place Order</button>
				</div>
			</form>
		</div>
	</body>
</html>