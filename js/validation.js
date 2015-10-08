function validateForm() {
    if (!isNameValid()    || 
    	!isAddressValid() || 
    	!isPostalCodeValid() || 
    	!isCityValid() || 
    	!isTelephoneValid() || 
    	!isEmailAddressValid()) {

    	return false;
	}
}

function isNameValid() {
	var inputName = document.getElementById("inputName").value;

	if (inputName == null || inputName == "") {
		addError("divName");
		return false;
	}
	else {
		removeError("divName");
		return true;
	}
}

function isAddressValid() {
	var inputAddress = document.getElementById("inputAddress").value;

	if (inputAddress == null || inputAddress == "") {
		addError("divAddress");
		return false;
	}
	else {
		removeError("divAddress");
		return true;
	}
}

function isPostalCodeValid() {
	var inputPostalCode = document.getElementById("inputPostalCode").value;
	var postalCodePattern = /^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ]( )?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i;

	if (inputPostalCode == null || inputPostalCode == "" || postalCodePattern.test(inputPostalCode) == false) {
		addError("divPostalCode");
		return false;
	}
	else {
		removeError("divPostalCode");
		return true;
	}

	return true;
}

function isCityValid() {
	var inputCity = document.getElementById("inputCity").value;

	if (inputCity == null || inputCity == "") {
		addError("divCity");
		return false;
	}
	else {
		removeError("divCity");
		return true;
	}
}

function isTelephoneValid() {
	var inputTelephone = document.getElementById("inputTelephone").value;
	var telephonePattern = /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/;

	if (inputTelephone == null || inputTelephone == "" || telephonePattern.test(inputTelephone) == false) {
		addError("divTelephone");
		return false;
	}
	else {
		removeError("divTelephone");
		return true;
	}
}

function isEmailAddressValid() {
	var inputEmailAddress = document.getElementById("inputEmailAddress").value;
	var emailAddressPattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

	if (inputEmailAddress == null || inputEmailAddress == "" || emailAddressPattern.test(inputEmailAddress) == false) {
		addError("divEmailAddress");
		return false;
	}
	else {
		removeError("divEmailAddress");
		return true;
	}
}

function addError(div) {
	var divError = document.getElementById(div);
	if (divError.className.indexOf("has-error") == -1) {
		divError.className = divError.className + " has-error";
	}
}

function removeError(div) {
	var divError = document.getElementById(div);
	if (divError.className.indexOf("has-error") != -1) {
		divError.className = divError.className.replace(" has-error", "");
	}
}