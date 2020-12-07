<?php

$naam = $_POST[name];
$email = $_POST[email];
$message = $_POST[mess];

$oldName = $naam . "";
$finalMessage = "Brie brie C \n\n" . $message;

mail($email,"Wat is de favoriete zender van een kaas?", $finalMessage);
function exsists($naam){
  if (file_exists($naam . ".txt")) {
    $naam = $naam . "kaas";
    return exsists($naam);
  } else{
    return $naam;
  }
}

$naam = exsists($naam);

$fileName = $naam . ".txt";

$file = fopen($fileName, "w");
fwrite($file, "Neem contact op met: " . $oldName . " op Email: " . $email);
fclose($file);

?>

<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/purecss@2.0.3/build/grids-responsive-min.css" />

    <link rel="stylesheet" href="style.css">
    <title>Groep 46 hoofdpagina</title>
    <link rel="shortcut icon" src="/assets/cheesefavicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  <body>
    <div class="massiveBod">
      <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">M&M&L</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="dummy1.html">Pagina 1</a></li>
            <li><a href="dummy2.html">Pagina 2</a></li>
            <li class="active"><a href="contact.html">Contact</a></li>
            <li><a href="responsive/bootstrap.html">Bootstrap</a></li>
          </ul>
        </div>
      </nav>
  <div class="main-content">
    <div class="container container-space">
      <div class="jumbotron">
        <h1><?php echo "Beste ". $oldName ; ?></h1>
        <p><?php echo "Dank u wel voor het contacteren vaan de oude kazen. Wij zullen u via " . $email . " contacteren.";  ?></p>
      </div>
  </div>
    </div>
    </div>
  </body>
</html>
