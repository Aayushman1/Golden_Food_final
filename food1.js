const form1 = document.getElementById("form1");
const food1 = document.getElementById("food1");
const food2 = document.getElementById("food2");
const food3 = document.getElementById("food3");

form1.addEventListener("submit", function (e) {
  e.preventDefault();

  const food1Value = food1.value;
  const food2Value = food2.value;
  const food3Value = food3.value;

  localStorage.setItem("food1", food1Value);
  localStorage.setItem("food2", food2Value);
  localStorage.setItem("food3", food3Value);

  alert("Submited Sucessfully!")
});

// View LINK: https://www.youtube.com/watch?v=x0VcigW9kN0
