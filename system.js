function login() {
  let pass = document.getElementById("password").value;
  if (pass == "küche") {
    window.location = "admin.html";
  } else {
    alert("Login fehlgeschlagen");
  }
}

/*function checkPassword() {
    const password = document.getElementById("password").value;
    if (password == "küche") {
      window.location = "admin.html";
      return false;
    } else {
      alert("Falsches Passwort");
      return false;
    }
  }*/
