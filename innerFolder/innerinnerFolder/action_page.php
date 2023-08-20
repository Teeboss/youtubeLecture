<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
</head>
<body>

<?php

  $fname = $_GET['fname'];

  $lname = $_GET['lname']; 

  if (isset($fname)) {
    echo $fname. " " . $lname. "Is welcome";
  } else {
    echo "No data collected";
  }

?>

<h2>HTML Forms</h2>

<form action="action_page.php" method="get">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" placeholder="First Name"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" placeholder="Last Name" ><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>