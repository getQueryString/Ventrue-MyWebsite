<!-- Copyright© by Fin -->

<!DOCTYPE html>
<html lang="de" id="html-kontakt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/kontaktstyle.css">
    <title>Kontakt</title>
</head>
<header>
    <h1>Kontakt</h1>
    <nav>
        <ul>
            <li><a href="../">» Start •</a></li>
            <li><a href="javascript:history.back()">» Zurück •</a></li>
        </ul>
    </nav>
</header>
<body>
  <div id="page-container">
    <div id="content-wrap">
</div>
<div class="kontakt-content">
  <h2>- Kontakt -</h2>
  <hr />
  <h3>Fin/getQueryString</h3>
  <p>» Discord: getQueryString#6944 •</p>
  <p>» https://discord.gg/BUZaTs9 •</p>
  <div class="kcemailform">
  <form action="" method="post">
  <input type="email" name="email" placeholder="E-Mail" required/>
  <select name="sex">
  <option value="" selected disabled hidden>Keine</option>
  <option value="m">Männlich</option>
  <option value="w">Weiblich</option>
  <option value="d">Dritte</option>
</select>
  <input type="submit" name="submit" value="Senden" class="kcemailformbutton"/>
</div>
</form>
  <?php
  if(isset($_POST["submit"])){
  $mailFrom = $_POST["email"];
  $message = "Message";
  $subject = "Kontaktformular";

  $mailTo = "mr.dudecrafthd@gmail.com";
  $headers = "E-Mail: ".mailFrom;
  $txt = "E-mail von ".mailFrom." bekommen.\n\n".message;
  $s = $_POST["sex"];

if(mail($mailTo, $subject, $txt, $headers, $s)):
  echo "console.log('Send')";
else:
  echo "console.log('Error')";
endif;
   header("Location: index.php?mailsend");
}
  ?>
  <p />
  <hr />
</div>
<footer class="footer-main">
    <div id="footer1">
        <ul>
            <li><a href="https://github.com/getQueryString"/>GitHub</a></li>
        </ul>
    </div>
    <div id="footer2">
        <ul>
            <li><a href="https://www.youtube.com/c/MrDudeCraftHD"/>YouTube</a></li>
        </ul>
    </div>
    <div id="footer3">
        <ul>
            <li><a href="https://ventrue.eu/Forum/"/>Forum</a></li>
        </ul>
    </div>
    <div id="footer4">
        <ul>
            <li><a href="ts3server://Ventrue.EU"/>TeamSpeak</a></li>
        </ul>
    </div>
    <div id="footer-p">
        <p>| » Copyright © 2021 getQueryString - All rights reserved. |</p>
    </div>
</footer>
</div>
</body>
</html>
