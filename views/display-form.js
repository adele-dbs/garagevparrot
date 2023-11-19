let staffform = document.getElementById('staffform');
let btnDisplayAddForm = document.getElementById('buttonaddstaffform');
let btnHideAddForm = document.getElementById('buttonAddStaff');

function displayForm() {
  staffform.style.display = "block";
};

function hideForm() {
  staffform.style.display = "none";
};

btnDisplayAddForm.addEventListener('click', displayForm);
btnHideAddForm.addEventListener('submit', hideForm);