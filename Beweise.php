<!-- Copyright© by Fin -->

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>Beweise</title>
</head>
<noscript>
<li><a href="https://support.google.com/adsense/answer/12654?hl=de" />JavaScript ist deaktiviert.</a></li>
  <link href="jsactive.css" rel="stylesheet">
</noscript>
<body>
   <!--
   $ip = $_SERVER["REMOTE_ADDR"];
   $mip = "x";

   if($ip == $mip):?>
   <style>#login{display: none;}</style>
 endif; -->
  <form id="login" method="POST" action="">
    <input type="text" id="key" placeholder="Key" name="key">
    <input type="submit" id="login-button" name="login" value="Login">
  </form>

    <script>var media = window.matchMedia("(max-width: 375px)");</script>
      <?php
  if(x){
    x
    if(x){

      x?>
      <script>const filename = "Beweise.zip";
      const file_error = "Error: File " + filename + " does not found.";</script>
      <?php
      if(file_exists($filepath)){
        // Define headers

        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Expires: 0");
        header("Content-type: application/zip");
        header('Content-Disposition: attachment; filename="'.$filename.'"');
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: ".filesize($filepath));
        ob_end_flush();
        readfile($filepath);
      } else{
          echo "<script>console.log(file_error)</script>";
          echo "Error: File $filename does not found.";
        }

    }else if($key == ""){
      ?>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
            if (media.matches) {
                Swal.fire({
                  text: "Kein Key angegeben!",
                  icon: "warning",
                  showConfirmButton: false,
                  allowEscapeKey: false,
                  allowOutsideClick: false,
                  timer: 1500
                })
              } else {
                Swal.fire({
                  title: "Kein Key angegeben!",
                  icon: "warning",
                  showConfirmButton: false,
                  allowEscapeKey: false,
                  allowOutsideClick: false,
                  timer: 1500
                })
              }</script>
      <?php
    }else{
      ?>
          <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
          <script>
          if (media.matches) {
            Swal.fire({
              text: "Falscher Key!",
              icon: "error",
              allowEscapeKey: false,
              allowOutsideClick: false,
              confirmButtonText: "OK"
            }).then(() => {
              window.history.back()
            });
          } else {
            Swal.fire({
              title: "Falscher Key!",
              icon: "error",
              allowEscapeKey: false,
              allowOutsideClick: false,
              confirmButtonText: "OK"
            })
          }</script>
      <?php
    }
  }
?>
  <header>
    <h1>Beweise</h1>
    <nav>
      <ul>
        <li><a href="index.php">» Start •</a></li>
      </ul>
    </nav>
  </header>
  <hr / id="mlg-hr-top">
  <!-- Download -->
  <!--<div id="download-div" class="download-div hidden">
  <form method="POST" action="download-process.php">
    <button name="download-button">DOWNLOAD</button>
  </form>-->
  </div>
</body>
  <!--<script type="text/javascript" src="main.js"></script>-->
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
