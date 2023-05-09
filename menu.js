const food1=localStorage.getItem("food1")
const food2=localStorage.getItem("food2")
const food3=localStorage.getItem("food3")

const later1=localStorage.getItem("later1")
const later2=localStorage.getItem("later2")
const later3=localStorage.getItem("later3")

document.getElementById("result1").textContent=food1
document.getElementById("result2").textContent=food2
document.getElementById("result3").textContent=food3

document.getElementById("result1.1").textContent=later1
document.getElementById("result2.2").textContent=later2
document.getElementById("result3.3").textContent=later3