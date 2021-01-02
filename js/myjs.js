function onkeyup() {
  var x = document.getElementById("TA");
  x.value = x.value.toUpperCase();
}

document.getElementById("TA").addEventListener("keyup", onkeyup);

function onkeydown() {
  var x = document.getElementById("password");
  document.getElementById("password").style.color = "green";
}

document.getElementById("password").addEventListener("keydown", onkeydown);

function onload() {
  alert("Welcome to the Credit Card Page");
}

function onreset() {
  alert("Form is reset");
}

document.getElementById("form").addEventListener("reset", onreset);

function onScroll() {
alert("You are scrolling the Textbox");
}

document.getElementById("TA").addEventListener("scroll",onScroll);



var alertRedInput = "#8C1010";
var defaultInput = "rgba(10, 180, 180, 1)";

function userNameValidation(usernameInput) {
    var username = document.getElementById("name");
    var issueArr = [];
    if (/[-!@#$%^&*()_+|~=`{}\[\]:";'<>?,.\/]/.test(usernameInput)) {
        issueArr.push("No special characters!");
    }
    if (issueArr.length > 0) {
        username.setCustomValidity(issueArr);
        username.style.borderColor = alertRedInput;
    } else {
        username.setCustomValidity("");
        username.style.borderColor = defaultInput;
    }
}

function passwordValidation(passwordInput) {
    var password = document.getElementById("password");
    var issueArr = [];
    if (!/^.{7,15}$/.test(passwordInput)) {
        issueArr.push("Password must be between 7-15 characters.");
    }
    if (!/\d/.test(passwordInput)) {
        issueArr.push("Must contain at least one number.");
    }
    if (!/[a-z]/.test(passwordInput)) {
        issueArr.push("Must contain a lowercase letter.");
    }
    if (!/[A-Z]/.test(passwordInput)) {
        issueArr.push("Must contain an uppercase letter.");
    }
    if (issueArr.length > 0) {
        password.setCustomValidity(issueArr.join("\n"));
        password.style.borderColor = alertRedInput;
    } else {
        password.setCustomValidity("");
        password.style.borderColor = defaultInput;
    }
}