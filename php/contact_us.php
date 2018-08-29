<?php
$PHPtext = "inside pho";
$firstname = $_POST["tfirstName"];
$lastname = $_POST["tlastName"];
$email = $_POST["temail"];
$phone = $_POST["tphone"];
$message = $_POST["message"];
$EmailTo = "testemailforapp007@gmail.com";
$Subject = "Arrow Transport Customer Inquiry";
$Body = "New email received from Arrow Transport website with the details below \n\n";
// prepare email body text
$Body .= " First Name: ";
$Body .= $_POST["tfirstName"];
$Body .= "\n";
$Body .= " Last Name: ";
$Body .= $_POST["tlasttName"];
$Body .= "\n";
$Body .= "Email: ";
$Body .= $_POST["temail"];
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $_POST["tphone"];
$Body .= "\n";
$Body .= "\n";
$Body .= "Message: ";
$Body .= $_POST["tmessage"];
$Body .= "\n";
// send email
$success = mail($EmailTo, $Subject, $Body);
// redirect to success page
if ($success){
   header('Location: ../pages/thankyou.htm');
   die();
}else{
    echo "invalid";
}
?>
