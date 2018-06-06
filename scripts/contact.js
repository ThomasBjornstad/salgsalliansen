

var firstFilled = false;
var lastFilled = false;
var phoneFIlled = false;
var emailFilled = false;

function submitReady() {
  setTimeout(function () {
    console.log(firstFilled);
    if (firstFilled == true && lastFilled == true && phoneFIlled == true && emailFilled == true){
      document.getElementById('submitContact').style.backgroundColor = "#45644E";
      document.getElementById('submitContact').disabled = false;
    }
    submitReady();
  }, 1000);

}


function firstNameValidation() {
  var firstName = document.getElementById('firstName').value;
  var firstNamePattern = /^[a-z ,.'-]+$/i;

  if(firstNamePattern.test(firstName) == false){
    firstNameInvalid.classList.remove('valid');
  } else if (firstNamePattern.test(firstName) == true){
    firstNameInvalid.classList.add('valid');
    firstNameError.classList.add('valid');
    firstFilled = true;
  }
}

function lastNameValidation() {
  var lastName = document.getElementById('lastName').value;
  var lastNamePattern = /^[a-z ,.'-]+$/i;

  if(lastNamePattern.test(lastName) == false){
    lastNameInvalid.classList.remove('valid');
  } else if (lastNamePattern.test(lastName) == true){
    lastNameInvalid.classList.add('valid');
    lastNameError.classList.add('valid');
    lastFilled = true;
  }
};

function phoneValidation() {
  var phone = document.getElementById('phone').value;

  var phonePattern =/^\(?[0-9]{3}?[-. ]([0-9]{3})[-. ]([0-9]{4})$/;

  if(phonePattern.test(phone) == false){
    phoneError.classList.remove('valid');
  } else if (phonePattern.test(phone) == true){
    phoneError.classList.add('valid');
    phoneFIlled = true;
  }
};

function emailValidation() {
  var email = document.getElementById('email').value;
  var emailPattern = /^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

  if(emailPattern.test(email) == false){
    emailError.classList.remove('valid');
  } else if(emailPattern.test(email) == true){
    emailError.classList.add('valid');
    emailFilled = true;
  }
};


function formValidation(){
  var firstName = document.getElementById('firstName').value;
  var lastName = document.getElementById('lastName').value;
  var email = document.getElementById('email').value;
  var emailPattern = /^[a-zA-Z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
  var phone = document.getElementById('phone').value;
  var phonePattern =/^\(?[0-9]{3}?[-. ]([0-9]{3})[-. ]([0-9]{4})$/;
  var validCount = 0;

  if(firstName != ""){
    validCount += 1;
  } else {
    firstNameError.classList.remove('valid');
  }

  if(lastName != ""){
    validCount += 1;
  } else {
    lastNameError.classList.remove('valid');
  }

if(phonePattern.test(phone) == false){
  phoneError.classList.remove('valid');
} else if (phonePattern.test(phone) == true){
  validCount += 1;
}

if(emailPattern.test(email) == false){
  emailError.classList.remove('valid');
} else if(emailPattern.test(email) == true){
  validCount += 1;
}

if(validCount == 4) {
  document.getElementById('fatalErrorBackground').classList.toggle('blur');
  document.getElementById('successModal').classList.toggle('modal-hidden');
  setTimeout(function () {
    document.getElementById('loader').style.display = "none";
    document.getElementById('sent').style.display = "block";
  }, 2000);
  setTimeout(function () {
    document.getElementById('fatalErrorBackground').classList.toggle('blur');
    document.getElementById('successModal').classList.toggle('modal-hidden');
  }, 4000);
  setTimeout(function () {
    location.reload();
  }, 4001);
}


}
