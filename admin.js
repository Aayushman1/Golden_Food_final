const form1 = document.getElementById("znüni-div");
const file1 = document.getElementById("znüni-file");

form1.addEventListener("submit", function (e) {
  //e.preventDefault();

  //const fileValue = file.value;
  const fr = new FileReader();
  /*localStorage.setItem("znüni-file", fileValue);

  alert("Submited Sucessfully!");*/

  fr.readAsDataURL(file1.files[0]);

  fr.addEventListener('load', ()=>{
    const url=fr.result
    localStorage.setItem("znüni-file", url)
  })
});
