<!-- Copyright© by Fin -->

<!DOCTYPE html>
<html lang="de" id="html-beweise">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../styles/style.css">
    <link rel="stylesheet" type="text/css" href="../styles/loginstyle.css">
    <title>Beweise</title>
</head>
<noscript>
    <li><a href="https://support.google.com/adsense/answer/12654?hl=de"/>JavaScript ist deaktiviert.</a></li>
    <link href="njs.css" rel="stylesheet">
</noscript>
<body>
  <div id="page-container">
    <div id="content-wrap">
<div class="login_form">
  <h1>Login</h1>
  <form method="POST" action="">
    <div class="password_input">
      <input type="password" name="key">
      <span></span>
      <label>Key</label>
    </div>
    <input class="submit_button" type="submit" name="login" value="Login">
  </form>
</div>

<script>var media = window.matchMedia("(max-width: 375px)");</script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php
if (isset($_POST["login"])) {
    $file = file_get_contents("0.txt", FALSE, NULL, 0, 17) or die("Unable to open file!");
    $key = $_POST["key"];
    if ($key == $file) {

        $filename = "Beweise - 12.02.2021-15.24.zip";
        $filepath = "download/Beweise - 12.02.2021-15.24.zip"; ?>
        <script>const filename = "Beweise - 12.02.2021-15.24.zip";
            const file_error = "Error: File " + filename + " does not found.";</script>
    <?php
    if (file_exists($filepath)) {
        // Define headers
        header("Cache-Control: no-cache, no-store, must-revalidate");
        header("Expires: 0");
        header("Content-type: application/zip");
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header("Content-Transfer-Encoding: binary");
        header("Content-Length: " . filesize($filepath));
        ob_end_flush();
        readfile($filepath);
    } else {
        echo "<script>console.log(file_error)</script>";
        echo "Error: File $filename does not found.";
    }

    }else if ($key == ""){
    ?>
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
            <li><a href="../index.php">» Start •</a></li>
        </ul>
    </nav>
</header>

</div>
</div>
<footer class="footer-beweise">
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
