<input type="text" id="name" name="name" class="form-control" required>
<input type="email" id="email" name="email" class="form-control"required>
<input type="text" id="subject" name="subject" class="form-control"required>
<textarea id="message" name="message" class="form-control" rows="6" maxlength="3000" required>

<?php
	
	require_once("db_connection.php");
	
	$errors = [];
	$response = [];

	if(isset($_POST['submit'])) {
		// Get the form data
		$name = $con->real_escape_string($_POST['name']);
		$email = $con->real_escape_string($_POST['email']);
		$subject = $con->real_escape_string($_POST['subject']);
		$message = $con->real_escape_string($_POST['message']);
		
		// Validate form fields
		if(empty($name)) {
			$errors[] = "Please enter your name.";
		}
		
		if(empty($email) || filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$errors[] = "Please enter a valid email.";
		}
		
		if(empty($subject)) {
			$errors[] = "Please enter subject.";
		}
		
		if(empty($message)) {
			$errors[] = "Please enter your message.";
		}
		
		// Check errorss
		if(empty($errors)) {
			
			$sql="INSERT INTO simple_contact_form (name, email, subject, message) VALUES ('".$name."','".$email."', '".$subject."', '".$message."')";
			
			if(!$result = $con->query($sql)){
				$errors[] = 'There was an error running the query <br>' . $con->error;
			} else {
				require_once("sendmail.php");
				$response[] = "Thank you! We will contact you soon";
			}
			
		}
		
	}
?>
