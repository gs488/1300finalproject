<?php
session_start();
$firstName = $_SESSION["Name"];
// combine the first and last name, with a space in the middle.
// In PHP the "." is like +, but for strings.
$waiting = $_SESSION["Day1"];
$food = $_SESSION["Day2"];
$email = $_SESSION["userEmail"];
$Critique = $_SESSION["Critique"];
$text = $_SESSION["Text"];
$req = $_SESSION['req1'];
if($Critique=="Other"){
  $Critique = $req;
}
if(empty($text)){
  $text = "No response given";
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
    <div class = box id = "submitbox">

      <h1>Your form has been submitted!</h1>

      <p>
        Thanks, <?php echo($firstName); ?>.
      </p>
      <p>
        Your critique has been recieved, and you've been added to our mailing list. The information you provided was:
      </p>
      <p>

        Email:  <?php echo($email); ?>
      </p>
      <p> Name:  <?php echo($firstName); ?>
      <p>Your rating of waiting: <?php echo($waiting); ?></p>
      <p>Your rating of food: <?php echo($food); ?></p>
      <p>How you found out about Miyake: <?php echo($Critique); ?></p>
      <p>Additional comments/concerns: <?php echo($text); ?></p>
      

</div>
</div>

</body>

</html>
