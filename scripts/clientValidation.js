// On load
$(document).ready(function () {

  // Your code here.
  // whenever the user tries to submit the form
$("#mainForm").on("submit", function() {


  // assume the form is valid, unless we find an invalid field
formValid = true;
// check if the first name is empty
firstNameIsValid = $("#Name").prop("validity").valid;




// if the first name field is valid (has text in it),
if(firstNameIsValid) {
 // hide the error
 $("#fnameError").hide();

} else { // (otherwise, if the first name field is empty)
 // show the error
 $("#fnameError").show();
 // and don’t let the user submit the form
 formValid = false;
}



//checkd = $("#check").is('');
// Validation for other fields here
// if the form is valid, let the user submit it; otherwise, block submission

/*else{

  formValid = true;

}*/


if($('input[type=radio]:checked').length < 2){
  formValid = false;
  $("#checkError").show();
  //$(#checkError).hide;
}
//else{

  //formValid = true;
  //$(#checkError).show;

//}





return formValid;






 // stop the form from submitting
 // check if the first name is empty
//var firstNameIsValid = $("#firstName").prop("validity").valid;
//var lastNameIsValid = $("#lastName").prop("validity").valid;
//var emailIsValid = $("#userEmail").prop("validity").valid;
//return firstNameIsValid&&emailIsValid&&lastNameIsValid;

});

});
