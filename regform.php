<?php
// Check for empty fields
if(
   empty($_POST['email']) 		||
  
   empty($_POST['name'])	||
   empty($_POST['gender'])	||
   empty($_POST['address'])	||
   empty($_POST['phone'])	||
empty($_POST['institute'])	||

  
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
	
$institute = $_POST['institute'];
$gender = $_POST['gender'];
$linkedin = $_POST['linkedin'];
$year = $_POST['year'];
$city = $_POST['city'];
$degree = $_POST['degree'];

$description = $_POST['description'];



// Create the email and send the message
$to = 'leadinterns@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName:$name;
\nemail :$email_address ;\n
phone:$phone ;\n
address:$address ;\n


Gender: $gender;\n
Linkedin: $linkedin ;\n
Year: $year ;\n
City: $city ;\n
Institute: $institute;\n
degree: $degree ;\n
skill name: $skillname;\n
description:$description;";
$headers = "From: leadinterns@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers = "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
$to = $email_address; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Lead Intern";
$email_body = "Thank you for contacting us. We will get in touch with you very soon.";
$headers = "From: gaurav@leadintern.in\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers = "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
// Check if form was previously submitted
if(isset($_POST['skillsub'])) {
    echo "<script>alert("Thank you. We are happy to help you.");</script>";}

return true;			
?>
