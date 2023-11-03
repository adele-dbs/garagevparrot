let buttonadd = document.getElementById("buttonadd");
let staffformadd = document.getElementById("staffformadd");
buttonadd.addEventListener("click", () => {
  if(getComputedStyle(staffformadd).display != "none"){
   staffformadd.style.display = "none";
  } else {
   staffformadd.style.display = "block";
  }
});