var total;
var sizePrice = 15;
var crustTypePrice = 0;
var toppingPrice = 0;
var taxPercentage = 13;

function onClickSize() {
	var form = document.getElementById("orderForm");
	var selectedSize = form.elements["sizeOptions"].value
	
	if (selectedSize == "small") {
		sizePrice = 5;
	}
	else if (selectedSize == "medium") {
		sizePrice = 10;
	}
	else if (selectedSize == "large") {
		sizePrice = 15;
	}
	else if (selectedSize == "extraLarge") {
		sizePrice = 20;
	}

	calculateOrderTotal();
	showTotal();
}

function onClickCrustType() {
	var form = document.getElementById("orderForm");
	var selectedCrustType = form.elements["crustTypeOptions"].value
	
	if (selectedCrustType == "stuffed") {
		crustTypePrice = 2;
	}
	else {
		crustTypePrice = 0;
	}

	calculateOrderTotal();
	showTotal();
}

function onClickTopping() {
	var form = document.getElementById("orderForm");
	var toppingsOptions = form.elements["toppingsOptions"]
	
	var selectedToppingsAmount = 0;
	for (var i = 0; i < toppingsOptions.length; i++) {
		if (toppingsOptions[i].checked) {
	    	selectedToppingsAmount++;
	 	}
	}
	
	toppingPrice = selectedToppingsAmount > 0 ? (selectedToppingsAmount - 1) * 0.5 : 0;

	calculateOrderTotal();
	showTotal();
}

function onChangeProvince() {
	var selectProvince = document.getElementById("selectProvince");
	var selectedProvince = selectProvince.options[selectProvince.selectedIndex].value;

	if (selectedProvince == "ON") {
		taxPercentage = 13;
	}
	else if (selectedProvince == "QC") {
		taxPercentage = 14.975;
	}
	else if (selectedProvince == "MB") {
		taxPercentage = 13;
	}
	else if (selectedProvince == "SK") {
		taxPercentage = 10;
	}

	calculateOrderTotal();
	showTotal();
}

function calculateOrderTotal() {
	total = (sizePrice + crustTypePrice + toppingPrice) * (1 + (taxPercentage / 100));
}

function showTotal() {
	var orderTotal = document.getElementById("orderTotal");
	orderTotal.innerHTML = "Order Total: $" + total.toFixed(2);
}