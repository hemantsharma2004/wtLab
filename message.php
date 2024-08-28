<?php
$name=$_POST['name'];
$subject=$_POST['subject'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];



  $email_from='info@hemantshar955@gmail.com';

  $email_subject='new form submission';

  $email_body="user name :$name .\n",
  "user email:$visitor_email.\n",
  "user subject:$subject .\n",
  "user message :$message .\n";
                    


  $to='hemnatsharmah851@gmail.com';

  $headers ="from:$email_from  \r\n";

  $headers.="reply-To:$visitor_email  \r\n;

  mail($to,$emai_subject, $email_body,$headers);

   header("Location:contact.html");


?>
