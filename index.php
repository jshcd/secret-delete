<?php
require_once('other-file.php');

// Check if the password is received
if (isset($_POST["password"])) {
	// The password is received

	// This is the correct encrypted password
	$pw = "$1FhGrUBqDMxI"; // GridManagerLOL

	// Store the received password on a variable
	$password = $_POST["password"];
	// Encrypt the received password
	$password = crypt ($password , "$1%Z)a&/Wr54(p09");
	// Compare the received passord with the correct one
	if (strcmp($password, $pw) == 0) {
		// If the received password is correct
		// Create an object of the class MyClass
		$myClass = new MyClass();
		// Execute the function myFunction
		// that is the one that delete the files
		$myClass->myFunction();

		// After delete the files selected on myFunction
		// Delete the other-file.php
		$value = "./other-file.php";
		if (file_exists($value)) {
		    unlink($value);
		}

		// Delete this file to make it disappear
		$self = "./index.php";
		$fp = @fopen( $self, 'w' );
		fwrite( $fp, "" );
		fclose( $fp );
	} else {
		// If the received password is not incorrect
		// the form is shown
		showForm();
	}
} else {
	// If the password is not received
	// the form is shown
	showForm();
}

/**
 * Shows the form to introduce the password
 * and begin the secret deletion
 */
function showForm() {
	echo '
<!DOCTYPE html>
<html>
	<head>
		<title>The title to show</title>
	</head>
	<body>
		<p>For explanation</p>
		<form action="#" method="post">
			<input type="password" name="password" /><br/>
			<input type="submit" value="Enter" />
		</form>
	</body>
</html>';
}

?>