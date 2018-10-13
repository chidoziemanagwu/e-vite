<?php

	  $name = $_POST['full_name'];

	  $atndc = $_POST['attendance'];

	  $num = $_POST['number'];

$to= 'chidozie.managwu@gmail.com';

 $email_subject = "R.S.V.P Feedback!!!";

$email_body = "Guest Name:\n $name.\n".

	                            "Attendance:\n $atndc.\n".
                                "Number of guests:\n$num.\n";
    mail($to,$email_subject,$email_body);
header('Location: next.html');
	?>