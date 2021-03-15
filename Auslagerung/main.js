// Copyright© by Fin

// Login
// DownloadDiv
const downloadDiv = document.getElementById("download-div");
downloadDiv.classList.remove("download-div");

// Input
const inputKeyField = document.getElementById("key");

// Loginform
const loginform = document.getElementById("login");
loginform.classList.remove("hidden");

// Media
var media = window.matchMedia("(max-width: 375px)");

// Login-button
const loginButton = document.getElementById("login-button");

// check Key
loginButton.addEventListener("click", () => {
  const inputKey = inputKeyField.value;
  // Retrieve text
  fetch("x")
    .then(response => response.text())
    .then(textData => {
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
})

// correct Key
function keyCorrect() {
  // Input
  if (media.matches) {
    Swal.fire({
      text: "Richtiger Key angegeben!",
      icon: "success",
      showConfirmButton: false,
      allowEscapeKey: false,
      allowOutsideClick: false,
      timer: 1500
    })
  } else {
    Swal.fire({
      title: "Richtiger Key angegeben!",
      icon: "success",
      showConfirmButton: false,
      allowEscapeKey: false,
      allowOutsideClick: false,
      timer: 1500
    })
  }
  downloadDiv.classList.remove("hidden");
  downloadDiv.classList.add("download-div");
  loginform.classList.add("hidden");
}

// no Key
function keyNone() {
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
  }
}

// wrong Key
function keyError() {
  loginform.classList.add("hidden");
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
    }).then(() => {
      window.history.back()
    });
  }
}