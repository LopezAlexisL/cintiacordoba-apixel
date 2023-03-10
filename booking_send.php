<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Ansonika">
    <title></title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">
	
	<!-- GOOGLE WEB FONT-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
    <link href="css/elegant_font/elegant_font.min.css" rel="stylesheet">
    <link href="css/simple-line-icons-master/css/simple-line-icons.css" rel="stylesheet">
    <link href="css/spa_icons/css/spa.css" rel="stylesheet">
    <link href="css/jquery.switch.css" rel="stylesheet">
    <link href="css/weather.css" rel="stylesheet">
    <link href="css/date_time_picker.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    
    <script type="text/javascript">
		function delayedRedirect(){
			window.location = "index.html"
		}
	</script>

</head>
<body onLoad="setTimeout('delayedRedirect()', 5000)">
<?php
						if(isset($_POST['website']) && $_POST['website'] == ''){
						$mail = $_POST['email'];

						/*$subject = "".$_POST['subject'];*/
						$to = "test@domain.com";		/* YOUR EMAIL HERE */
						$subject ="Content-Transfer-Encoding: 8bit";
						$subject = "Booking Request from SPLENDIDA";
						$headers .= "MIME-Version: 1.0"."\n";
						$headers .= "Content-Type: text/plain; charset=utf-8" . "\n";
						$headers .= "Content-Transfer-Encoding: 8bit". "\n";
						$headers .= "From: Booking from SPLENDIDA <noreply@yourdomain.com>";
						$message .= "\nTreatment date: " . $_POST['date_pick'];
						$message .= "\nTreatment time: " . $_POST['time_pick'];
						$message .= "\nTreatment type: " . $_POST['treatment_type'];
						$message .= "\nPeople: " . $_POST['people'];
						$message .= "\nName: " . $_POST['firstname'];
						$message .= "\nLast Name: " . $_POST['lastname'];
						$message .= "\nEmail: " . $_POST['email'];
						$message .= "\nTelephone: " . $_POST['telephone'];
						$message .= "\n\nBooking options:\n" ;
						foreach($_POST['options'] as $value) 
							{ 
							$message .=   "- " .  trim(stripslashes($value)) . "\n"; 
							};
						//Receive Variable
						$sentOk = mail($to,$subject,$message,$headers);
						
						//Confirmation page
						$user = "$mail";
						$usersubject = "Thank You";
						$userheaders = "From: booking@splendida.com\n";
						/*$usermessage = "Thank you for your time. Your survey is successfully submitted.\n"; WITH OUT SUMMARY*/
						//Confirmation page WITH  SUMMARY
						$usermessage = "Your booking request has been successfully sent.\n\nBELOW A SUMMARY\n\n$message\n\n We will confirm shortly or call us at 0044 38742384"; 
						mail($user,$usersubject,$usermessage,$userheaders);
						} 
	
?>

<!-- END SEND MAIL SCRIPT -->   
<div id="confirm">
	<div>
   	      <h1>Thank you!</h1>
          <h4>Your booking request has been successfully sent.</h4>
         <p>You will be redirect back in 5 seconds.</p>
   </div>
</div>
</body>
</html>