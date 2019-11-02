<?php
$HIDDEN_ERROR_CLASS = "hiddenError";

$Critique = $_REQUEST["Critique"];
$submit = $_REQUEST["submit"];
if (isset($submit)) {
  error_log("user submitted form");

$radio = $_REQUEST["Day1"];
if(!empty($_REQUEST["Day1"])){
  $radioValid = true;
}

else{
  $radioValid = false;
}

if(!empty($_REQUEST["Day2"])){
  $radio1Valid = true;
}

else{
  $radio1Valid = false;
}

$firstName = $_REQUEST["Name"];
if ( !empty($firstName) ) {
  $fnameValid = true;
} else {
  $fnameValid = false;
}

$email = $_REQUEST["email"];
if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
  $emailValid = true;
} else {
  $emailValid = false;
}

$formValid = $fnameValid && $emailValid && $radioValid && $radio1Valid;

if ($formValid) {
  session_start();
  $_SESSION['fname'] = $firstName;
  $_SESSION['email'] = $email;
  $_SESSION['Day'] = $radio;
  $_SESSION['Critique'] = $Critique;

  header("Location: action1.php");
  return;
  }

} else {
  error_log("no form submitted");
  $fnameValid = true;
  $emailValid = true;
  $radioValid = true;
  $radio1Valid = true;
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Miyake</title>
  <link rel="stylesheet" type="text/css" href="styles/normalize.css" media="all"/>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all">
  <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="scripts/clientValidation.js" type="text/javascript"></script>

</head>

<body>
  <?php include ("includes/navigation.php"); ?>

  <div class="mainContent">
    <div class = box id = leftbox>
      <h1 class = "faqTextHeader1"> FAQ </h1>
        <h2 class = "faqTextHeader"> Does Miyake have any discounts or coupons? </h2>
          <p class="faqText"> Yes! Any deals can be found here on the <a href = "specials.php">Deals</a> page. </p>
        <h2 class = "faqTextHeader"> Does Miyake deliver? </h2>
          <p class="faqText"> No, Miyake does not deliver.</p>
        <h2 class = "faqTextHeader"> Does Miyake take reservations?</h2>
          <p class="faqText"> We do take reservations for groups of over 20. We provide one party room that seats up to 30 people. </p>
        <h2 class = "faqTextHeader">Where is Miyake?</h2>
          <p class="faqText">Miyake is located at 416 Eddy Street in the College Town region of Ithaca, NY.</p>
        <h2 class = "faqTextHeader">Can you customize items on the menu</h2>
          <p class="faqText">Yes, Miyake allows for customization of rolls and menu items as the client desires.</p>
        <h2 class = "faqTextHeader">Is there a dress code?</h2>
          <p class="faqText">No. Miyake tries to be amendable to all clients, and as such, no dress code is in place.</p>
    </div>
  <?php include ("includes/footer.php"); ?>
</body>
</html>
