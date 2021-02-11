// Copyright© by Fin

// Login
const downloadButton = document.getElementById("download-button");
const downloadDiv = document.getElementById("download-div");
downloadDiv.classList.remove("download-div");
const inputKeyField = document.getElementById("key");
document.getElementById("login-button").addEventListener("click", checkKey);

const footer = document.getElementById("footer-main");
const loginform = document.getElementById("login");
loginform.classList.remove("hidden");

function checkKey() {

  // Retrieve Text
  /*fetch("main.js-key.txt")
    .then(response => response.text())
    .then(textData => {
      console.log(textData);
    })
    .catch(error => {
      console.error('Error:', error);
    });*/

  const key = "1";
  const inputKey = inputKeyField.value;
  var media = window.matchMedia("(max-width: 375px)")

  // Input
  if (key === inputKey) {
    if (media.matches) {
      Swal.fire({
        text: "Richtiger Key angegeben!",
        icon: "success",
        confirmButtonText: "OK"
      })
    } else {
      Swal.fire({
        title: "Richtiger Key angegeben!",
        icon: "success",
        confirmButtonText: "OK"
      })
    }
    downloadButton.classList.remove("hidden");
    downloadDiv.classList.add("download-div");
    loginform.classList.add("hidden");

  } else if (document.getElementById("key").value == "") {
    if (media.matches) {
      Swal.fire({
        text: "Kein Key angegeben!",
        icon: "warning",
        confirmButtonText: "OK"
      })
    } else {
      Swal.fire({
        title: "Kein Key angegeben!",
        icon: "warning",
        confirmButtonText: "OK"
      })
    }
  } else {
    if (media.matches) {
      Swal.fire({
        text: "Falscher Key!",
        icon: "error",
        confirmButtonText: "OK"
      }).then(() => {
        window.history.back()
      });
    } else {
      Swal.fire({
        title: "Falscher Key!",
        icon: "error",
        confirmButtonText: "OK"
      }).then(() => {
        window.history.back()
      });
    }
    /*downloadButton.classList.add("hidden");
    downloadDiv.classList.remove("download-div");
    comingsoon.classList.remove("hidden");
    loginform.classList.remove("hidden");*/



  }
}

// .zip-Download
var zip = new JSZip();
//zip.file("Hello.txt", "Hello world\n");

jQuery("#download-link").on("click", function() {
  zip.generateAsync({
    type: "download-link"
  }).then(function(download) {
    saveAs(download, "Maps.zip");
  }, function(err) {
    jQuery("#download-link").text(err);
  });
  console.log(JSZip);
});
