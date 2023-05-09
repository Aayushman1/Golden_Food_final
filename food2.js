const form2 = document.getElementById("form2");
const later1 = document.getElementById("later1");
const later2 = document.getElementById("later2");
const later3 = document.getElementById("later3");

form2.addEventListener("submit", function (e) {
  e.preventDefault();

  const later1Value = later1.value;
  const later2Value = later2.value;
  const later3Value = later3.value;

  localStorage.setItem("later1", later1Value);
  localStorage.setItem("later2", later2Value);
  localStorage.setItem("later3", later3Value);

  alert("Submited Sucessfully!");
});
