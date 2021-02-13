// Copyright© by Fin

// Login
const downloadDiv = document.getElementById("download-div");
downloadDiv.classList.remove("download-div");
const inputKeyField = document.getElementById("key");


const footer = document.getElementById("footer-main");
const loginform = document.getElementById("login");
loginform.classList.remove("hidden");

var media = window.matchMedia("(max-width: 375px)")

// check Key
document.getElementById("login-button").addEventListener("click", () => {
  const inputKey = inputKeyField.value;
  // Retrieve text
  fetch("0.txt")
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