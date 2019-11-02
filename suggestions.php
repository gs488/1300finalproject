<?php
session_start();

$HIDDEN_ERROR_CLASS = "hiddenError";

$Critique = $_REQUEST["Critique"];
$text = $_REQUEST["Text"];




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

$radio1 = $_REQUEST["Day2"];
if(!empty($_REQUEST["Day2"])){
  $radio1Valid = true;
}
else{
  $radio1Valid = false;
}

  // Handle the name
  $firstName = $_REQUEST["Name"];
  // if the first name field is not empty:
  if ( !empty($firstName) ) {
    // the first name is valid
    $fnameValid = true;
  } else {
    // the first name is not valid
    $fnameValid = false;
  }



  // Handle email
  $email = $_REQUEST["userEmail"];
  if ( !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ) {
    $emailValid = true;
  } else {
    $emailValid = false;
  }
  $critValid = true;
if($Critique=="Other"){
  $critValid = false;
}
$critValid1 = true;
$req1 = $_REQUEST["req1"];
if ( empty($req1) ) {
  $critValid1 = false;
}



  // the form is valid if the name, email, and all the other entries is valid.
  $formValid = $fnameValid && $emailValid && $radioValid && $radio1Valid && ($critValid || $critValid1);

  // if every value is valid, submit the document
  if ($formValid) {
    // create a bunch of session variables for each value

    $_SESSION['Name'] = $firstName;
    $_SESSION['userEmail'] = $email;
    $_SESSION['Day1'] = $radio;
    $_SESSION['Day2'] = $radio1;
    $_SESSION['Critique'] = $Critique;
    $_SESSION['Text'] = $text;
    $_SESSION['req1'] = $req1;




    header("Location: formSubmitted.php");
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
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all"/>
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>

  <script type="text/javascript" src="scripts/clientValidation.js"></script>
</head>

<body>
  <?php include ("includes/navigation.php"); ?>
  <div class = "box" id = "rightbox">
    <h1 class = "faqTextHeader"> Rate Your Experience </h1>
    <p class="faqText">Please consider submitting a form to rate your experience at Miyake:</p>
        <form method="post" action="suggestions.php" id="mainForm" novalidate>
    <label class="faqText">Enter Name: </label>
      <input id="Name" name="Name" placeholder="Enter name" value="<?php echo($firstName);?>" required>

        <span class="errorContainer <?php if ($fnameValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="fnameError">
              Name is required.
            </span>
      <br>
      <label class="faqText">Enter Email: </label>
        <input id="userEmail" type = "email" name="userEmail" placeholder="Your Email" value="<?php echo($email);?>" required>
        <span class="errorContainer hiddenError" id="emailError">First Name is required.</span>
        <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="fnameError">
              Email is required.
            </span>
      <p class="faqText">Rate your experience from 1 to 5 (1 = poor; 5 = excecellent) with:</p>
        <p class="faqText">Service:</p>
          <label>1</label>
            <input type="radio" name="Day1" value="1" <?php if($radio == "1"){echo "checked";} ?>>
            <input type="radio" name="Day1" value="2" <?php if($radio == "2"){echo "checked";} ?>>
            <input type="radio" name="Day1" value="3" <?php if($radio == "3"){echo "checked";} ?>>
            <input type="radio" name="Day1" value="4" <?php if($radio == "4"){echo "checked";} ?>>
            <input type="radio" name="Day1" value="5" <?php if($radio == "5"){echo "checked";} ?>>
          <label>5</label><br>
          <span class="errorContainer <?php if ($radioValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="radioError">
                You must rate our waiting services.
              </span>
        <p class="faqText">Food:</p>
          <label>1</label>
            <input type="radio" name="Day2" value="1" <?php if($radio == "1"){echo "checked";} ?>>
            <input type="radio" name="Day2" value="2" <?php if($radio == "2"){echo "checked";} ?>>
            <input type="radio" name="Day2" value="3" <?php if($radio == "3"){echo "checked";} ?>>
            <input type="radio" name="Day2" value="4" <?php if($radio == "4"){echo "checked";} ?>>
            <input type="radio" name="Day2" value="5" <?php if($radio == "5"){echo "checked";} ?>>
          <label>5</label><br>
          <span class="errorContainer <?php if ($radioValid) { echo($HIDDEN_ERROR_CLASS); } ?>" id="radioError">
                You must rate our food quality.
              </span>
      <p class="faqText">How did you learn about Miyake?</p>
        <select name="Critique" id="reason">
          <option value="Word of Mouth" <?php if($Critique == "Word of Mouth"){echo("selected");} ?>>Word of mouth</option>
          <option value="Online" <?php if($Critique == "Online"){echo("selected");} ?>>Online</option>
          <option value="Through Advertisements" <?php if($Critique == "Through Advertisements"){echo("selected");} ?>>Advertisements</option>
          <option value="Other" id = "other" <?php if($Critique == "Other"){echo("selected");} ?>>other</option>
        </select><br>
        <p>if other, please enter how you heard about miyake:</p><br>
        <input name="req1" placeholder="Enter name" value="<?php echo($req1);?>"><br>





    
      <p class="faqText">If you have any complaints or requests, please input here:</p>
        <textarea id = "textA" name = "Text" rows="5" cols="70" placeholder="please enter any complaints here"><?php echo($text)?></textarea>
      <div>
        <button type="submit" name="submit" class="submit">Submit</button>
      </div>
        </form><br><br>
      </div>
  <div class="clearfix">
    <p class="suggestions">
      <span class="suggestions1">To Contact Us Directly</span>
      <br/>
      Manager's Name: Shane
      <br/>
      Manager's Email: yc537@cornell.edu
      <br/>
      Phone: (607)-277-6767
    </p>
  </div>

    <?php include ("includes/footer.php"); ?>
</body>
</html>
