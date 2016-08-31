<?php
/* Make sure to set /etc/apache2/envvars APACHE_RUN_USER and GROUP to 'mail' or somesuch */

/* Set e-mail recipient */
$myemail = "jsprow@gmail.com";

/* Check all form inputs using check_input function */
$name = check_input($_POST['name'], "Enter your name");
$email = check_input($_POST['email'], "Enter a valid email address");
$phone = check_input($_POST['phone'], "Enter a valid phone number");
$message = check_input($_POST['message'], "Write your message");

// /* If e-mail is not valid show error message */
// if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
// {
// show_error("E-mail address not valid");
// }

/* Let's prepare the message for the e-mail */
$message = "
Customer Name: $name
E-mail: $email
Phone: $phone
Subject: EMA Catering Website email from $email

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
if ($problem && strlen($data) == 0)
{
show_error($problem);
}
return $data;
}

function show_error($myError)
{
?>
<html>
<body>

<p>Please correct the following error:</p>
<strong><?php echo $myError; ?></strong>
<p>Hit the back button and try again</p>

</body>
</html>
<?php
exit();
}
?>
