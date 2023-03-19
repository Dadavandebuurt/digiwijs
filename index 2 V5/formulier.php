<html>
<head><link rel="stylesheet" href="style.css" media="screen">
<link rel="stylesheet" href="style.css" media="screen">
    <link rel="stylesheet" href="contact.css" media="screen">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    </head>
<body>
    <!--menu-->
<div class="navbar">
  <a href="index.html">Home</a>
  <a href="software.html">Software</a>
  <a href="hardware.html">Hardware</a>
	<a href="NadelenRisicos.htm">Nadelen</a>
  <a href="contact.html">Contact</a>
</div>
          <div class="main-container">
  <div class="fixer-container">
     <h1 align=center>Contact</h1>
   <?php
        $naam=$_POST["name"];
        $email=$_POST["email"];
        $sex=$_POST["geslacht"];
        $msg=$_POST["message"];
    
      print("<p>Bedankt voor uw gegevens, we zullen zo snel mogelijk contact met u opnemen.</p>
                <b>Naam:</b> $naam <br>
                <b>E-mail:</b> $email <br>
                <b>Geslacht:</b> $sex <br>
                <b>Opmerking:</b> $msg <br>
   
    
    ")
    ?> 
		
              </div>
    </div>
</body>
</html>