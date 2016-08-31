<?php
/* Make sure to set /etc/apache2/envvars APACHE_RUN_USER and GROUP to 'mail' or somesuch */

/* Set e-mail recipient */
$to = "jsprow@gmail.com";

/* Subject line of email */
$subject = "Customer Email from EMA Website";
/* Let's prepare the message for the e-mail */
$message = "Customer Name: $name
E-mail: $email
Phone: $phone

Message:
$message

";

/* Send the message using mail() function */
mail($to, $subject, $message);

/* Redirect visitor to the thank you page */
// header('Location: thanks.html');
// exit();

echo '<script language="javascript">';
echo 'alert("Thank you for contacting us. We will get back to you shortly.")';
echo '</script>';
header('Location: index.php');
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
