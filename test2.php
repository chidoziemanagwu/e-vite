<?php

	  $name = $_POST['fname'];

	  $kw = $_POST['kw'];

$to= 'chidozie.managwu@gmail.com';

 $email_subject = "Well Wishes!!!";

$email_body = "Guest Name:\n $name.\n".
	                           "Message:\n$kw.\n";
    mail($to,$email_subject,$email_body);
header('Location: next.html');
	?>