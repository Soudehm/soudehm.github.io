
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<p><span class="error">* required field.</span></p>
 
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Comment: <br> <br> <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="radio" name="information" value="generalinquiries" checked> General inquiries<br>
  <input type="radio" name="information" value="requestanappointment"> Request an appointment<br>
  <input type="radio" name="information" value="other"> Other <br><br>
  <input type="submit" name="submit" value="Submit">  
  <br><br>


<?php
echo "<h3>Thank you for submitting your request we will contact you at</h3>";
?>

</body>

