<?php
$naam = $_POST[name];
$email = $_POST[email];
$message = $_POST[mess];

//echo $naam . " - " . $email . " - " . $message;
mail($email,"NU 10% OP ALLE KAZEN. MEER KAAS IS MEER KORTING!!! AAAHAHA",$message);
?>

<html>
<head>
  <link rel="stylesheet" href="style.css">
  <title>Groep 46 contact</title></head>
<body>
  <div class="titleTop">M&M&L</div>
  <div class="titleBottom">Groep 46</div>

  <ul class="uldiv">
   <li class="lidiv"><a href="index.html">Home</a></li>
   <li class="lidiv"><a href="dummy1.html">Dummy 1</a></li>
   <li class="lidiv"><a href="dummy2.html">Dummy 2</a></li>
   <li class="lidiv" style="float:right"><a class="active" href="contact.html">Contact</a></li>
  </ul>
<div class="wrapper">
  <div class="container">
    <div class="textarea">
      <?php echo "Beste ". $naam . " ,dank u wel voor het contacteren vaan de oude kazen. Wij zullen uw via " . $email . " contacteren.";  ?>
    </div>
    </div>
    </div>
</body>
</html>
