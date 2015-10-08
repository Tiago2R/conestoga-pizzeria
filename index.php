<?php
	function saveOrder($arr) {
		$path = 'orders.txt';
		$f = (file_exists($path))? fopen($path, "a+") : fopen($path, "w+");

		extract($arr);
		fwrite($f, "************************ORDER************************"."\n");
		fwrite($f, "Name: ".$name."\n");
		fwrite($f, "Address: ".$address."\n");
		fwrite($f, "Postal Code: ".$postalCode."\n");
		fwrite($f, "City: ".$city."\n");
		fwrite($f, "Province: ".$province."\n");
		fwrite($f, "Telephone: ".$telephone."\n");
		fwrite($f, "Email Adress: ".$emailAdress."\n");
		fwrite($f, "Size: ".$sizeOptions."\n");
		fwrite($f, "Crust Type: ".$crustTypeOptions."\n");
		fwrite($f, "Toppings: ");
		foreach($toppingsOptions as $toppingsOption) {
			fwrite($f, $toppingsOption." ");
		}
		fwrite($f, "\n");
		fwrite($f, "*****************************************************"."\n");
		
		fclose($f);
	}

	function validateOrderForm($arr) {
		extract($arr);

		if (!$name || 
			!$address || 
			!preg_match("/^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]( )?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i", $postalCode) ||
			!$city || 
			!$province || 
			!preg_match("/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/", $telephone) ||
			!preg_match("/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i", $emailAdress) ||
			!$sizeOptions || 
			!$crustTypeOptions || 
			!$toppingsOptions) {

			return FALSE;
		}
		else {
			saveOrder($_POST);

			return TRUE;
		}
	}

	if (isset($_POST['name']) &&
		isset($_POST['address']) &&
		isset($_POST['postalCode']) &&
		isset($_POST['city']) &&
		isset($_POST['province']) &&
		isset($_POST['telephone']) &&
		isset($_POST['emailAdress']) &&
		isset($_POST['sizeOptions']) &&
		isset($_POST['crustTypeOptions']) &&
		isset($_POST['toppingsOptions'])) {
		
		$result = validateOrderForm($_POST);
	}
	else {
		$result = FALSE;
	}
?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script language="javascript" type="text/javascript" src="js/calculateOrder.js"></script>
		<script language="javascript" type="text/javascript" src="js/validation.js"></script>
	</head>
	<body>
		<div class="container">
			<div class="text-center">
				<img src="imgs/logo.png" alt="Conestoga Pizzeria logo">
			</div>
			<?php
				if (isset($result) && $result) {
					if ($result) {
						echo "<div class=\"text-center alert alert-success\" role=\"alert\"><strong>Order Placed!</strong></div>";
					}
					else {
						echo "<div class=\"text-center alert alert-danger\" role=\"alert\"><strong>Incorrect Information!</strong></div>";
					}		
				}
			?>
			<form id="orderForm" action="<?PHP echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" onsubmit="return validateForm()" method="post">
				<div class="row">
					<div class="col-sm-6 form-block">
						<h1>Personal Details</h1>
						<div id="divName" class="form-group">
							<label for="inputName">Name</label>
							<input type="text" class="form-control" id="inputName" name="name" placeholder="Name">
						</div>
						<div id="divAddress" class="form-group">
							<label for="inputAddress">Address</label>
							<input type="text" class="form-control" id="inputAddress" name="address" placeholder="Address">
						</div>
						<div class="row">
							<div id="divPostalCode" class="col-xs-4 form-group">
								<label for="inputPostalCode">Postal Code</label>
								<input type="text" class="form-control" id="inputPostalCode" name="postalCode" placeholder="Postal Code">
							</div>
							<div id="divCity" class="col-xs-4 form-group">
								<label for="inputCity">City</label>
								<input type="text" class="form-control" id="inputCity" name="city" placeholder="City">
							</div>
							<div id="divProvince" class="col-xs-4 form-group">
								<label for="selectProvince">Province</label>
								<select class="form-control" id="selectProvince" name="province" onchange="onChangeProvince()">
							  		<option value="ON">Ontario</option>
							  		<option value="QC">Quebec</option>
							  		<option value="MB">Manitoba</option>
							  		<option value="SK">Saskatchewan</option>
								</select>
							</div>
						</div>
						<div id="divTelephone" class="form-group">
							<label for="inputTelephone">Telephone</label>
							<input type="text" class="form-control" id="inputTelephone" name="telephone" placeholder="Telephone">
						</div>
						<div id="divEmailAddress" class="form-group">
							<label for="inputEmailAddress">Email Address</label>
							<input type="text" class="form-control" id="inputEmailAddress" name="emailAdress" placeholder="Email Address">
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
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioCheese" value="cheese" checked> Cheese
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioSausage" value="sausage"> Sausage
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioBeef" value="beef"> Beef
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioHam" value="ham"> Ham
										</label>
									</div>
								</div>
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioOnions" value="onions"> Onions
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioTomatoes" value="tomatoes"> Tomatoes
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioMushrooms" value="mushrooms"> Mushrooms
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioOlives" value="olives"> Olives
										</label>
									</div>
								</div>
								<div class="row toppings">
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioSpinach" value="spinach"> Spinach
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioGarlic" value="garlic"> Garlic
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioBacon" value="bacon"> Bacon
										</label>
									</div>
									<div class="col-xs-3">
										<label class="checkbox-inline">
											<input type="checkbox" name="toppingsOptions[]" onclick="onClickTopping()" id="radioPineapple" value="pineapple"> Pineapple
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