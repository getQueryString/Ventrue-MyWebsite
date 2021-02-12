<!-- Copyright© by Fin -->

<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Beweise</title>
</head>
<noscript><p>JavaScript ist deaktiviert.</p>
  <link href="jsactive.css" rel="stylesheet">
</noscript>

<body>
  <?php
$ip = $_SERVER["REMOTE_ADDR"];
$mip = "*";

if($ip != $mip):?>
  <style>#login{display: none;}</style>
<?php else: ?>
<?php endif; ?>
  <form id="login" class="hidden">
    <input type="text" id="key" placeholder="Key">
    <button type="button" id="login-button">Login</button>
  </form>
  <header>
    <h1>Beweise</h1>
    <nav>
      <ul>
        <li><a href="index.php">» Start •</a></li>
      </ul>
    </nav>
  </header>
  <hr / id="mlg-hr-top">
  <div id="download-div" class="download-div">
    <button class="hidden" id="download-button">DOWNLOAD</button>
  </div>
</body>
  <script type="text/javascript" src="main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  <script src="sweetalert2.all.min.js"></script>
<footer class="footer-main" id="footer-main">
  <div id="footer1">
    <ul>
      <li><a href="https://github.com/getQueryString" />GitHub</a></li>
    </ul>
  </div>
  <div id="footer2">
    <ul>
      <li><a href="https://www.youtube.com/c/MrDudeCraftHD" />YouTube</a></li>
    </ul>
  </div>
  <div id="footer3">
    <ul>
      <li><a href="https://ventrue.eu/Forum/" />Forum</a></li>
    </ul>
  </div>
  <div id="footer4">
    <ul>
      <li><a href="ts3server://Ventrue.EU" />TeamSpeak</a></li>
    </ul>
  </div>
  <div id="footer-p">
    <p>| » Copyright © 2021 getQueryString - All rights reserved. |</p>
  </div>
</footer>

</html>
