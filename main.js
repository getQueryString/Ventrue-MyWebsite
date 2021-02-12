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
  fetch("main.js-key.txt")
    .then(response => response.text())
    .then(textData => {
      console.log(textData);
    })
    .catch(error => {
      console.error('Error:', error);
    });

  const key = "*";
  const inputKey = inputKeyField.value;
  var media = window.matchMedia("(max-width: 375px)")

  // Input
  if (key === inputKey) {
    if (media.matches) {
      Swal.fire({
        text: "Richtiger Key angegeben!",
        icon: "success",
        showConfirmButton: false,
        timer: 1500
      })
    } else {
      Swal.fire({
        title: "Richtiger Key angegeben!",
        icon: "success",
        showConfirmButton: false,
        timer: 1500
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
        showConfirmButton: false,
        timer: 1500
      })
    } else {
      Swal.fire({
        title: "Kein Key angegeben!",
        icon: "warning",
        showConfirmButton: false,
        timer: 1500
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

// Download
document.getElementById("download-button").addEventListener("click", download);

function download() {
  window.open("*")
}
