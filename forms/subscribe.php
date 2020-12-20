<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
$servername = "localhost";
$username = "root";
$password = "18QLoFHrSBHU";
$dbname = "lfps_userreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create a variable

$email=$_POST['email'];

mysqli_query($conn,"INSERT INTO userdetails2 (email)
		        VALUES ('$email')");


	if(mysqli_affected_rows($conn) > 0)
  {
	// echo "<h2>Thank you for registering with us</h2>";
     echo "(<a href='https://learnfrompalanisir.in/index.html'>Thank you for registering with us. Click here to continue!</a>)";
}
else {
	echo " Sorry! NOT Registered<br />";
	echo mysqli_error ($conn);
}
$conn->close();
  
?>
