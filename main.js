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

var media = window.matchMedia("(max-width: 375px)")

function checkKey() {
  const inputKey = inputKeyField.value;
  // Retrieve text
  fetch("0.txt")
    .then(response => response.text())
    .then(textData => {
      console.log("Text: " + textData);
      if (textData === inputKey) {
        keyCorrect();
      } else if (!inputKey.length) {
        keyNone();
      } else {
        keyError();
      }
    })
    .catch(error => {
      console.error('Error:', error);
    });
}

function keyCorrect() {

  // Input
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
}

function keyNone() {
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
}

function keyError() {
  loginform.classList.add("hidden");
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
}
/*downloadButton.classList.add("hidden");
downloadDiv.classList.remove("download-div");
*/

// Download
document.getElementById("download-button").addEventListener("click", download);

function download() {
  window.open("*")
}
