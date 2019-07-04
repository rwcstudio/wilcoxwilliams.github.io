<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "Please press submit!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message= $_POST['message'];

//Validate first
if(empty($name)||empty($visitor_email)) 
{
    echo "Please give us your contact information so we can get back to you.";
    exit;
}

if(IsInjected($visitor_email))
{
    echo "Is your email correct?";
    exit;
}

$email_from = 'info@wilcoxwilliams.com';//<== update the email address
$email_subject = "[Web Site Message]";
$email_body = "New message from $name\n".
    "Email: $visitor_email \n Message: $message \n".
    
$to = "info@wilcoxwilliams.com";//<== update the email address
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done. redirect to thank-you page.
header('Location: ../index.html');


// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
   
?> 
