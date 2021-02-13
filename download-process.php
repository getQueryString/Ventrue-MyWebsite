<?php
$filename = "Beweise.zip";
$filepath = "download/Beweise.zip";?>
<script>const filename = "Beweise.zip";
const file_error = "Error: File " + filename + " does not found.";</script>
<?php
if(isset($_POST["download-button"])){
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
}
?>
