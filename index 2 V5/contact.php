<!DOCTYPE html>
<html style="font-size: 16px;" lang="nl"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Contact</title>
    <link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="contact.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  </head>
  <body>
	
	<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader = "From:".$name."<".$email.">\r\n";

$recipient = "dantefriede@gmail.com";

mail($recipient, $subject, $message, $mailheader) or die("Error!");

echo'

?>

      
      <!--menu-->
<div class="navbar">
  <a href="index.html">Home</a>
  <a href="software.html">Software</a>
  <a href="hardware.html">Hardware</a>
		<a href="NadelenRisicos.htm">Nadelen</a>
  <a href="contact.html">Contact</a>
</div>

<p>jgfjffjf</p>

</body>
</html>
