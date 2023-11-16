const staffform = document.getElementById('staffform')
const btnDisplayAddForm = document.getElementById('buttonaddstaffform')
const btnHideAddForm = document.getElementById('buttonAddStaff')
const btnDisplayUpdateForm = document.getElementById('updateStaff')
const btnHideUpdateForm = document.getElementById('buttonUpdateStaff')

const DisplayForm = (e) => {
  staffform.style.display = "block"
  e.preventDefault()
}

function HideForm() {
  staffform.style.display = "none"
}

btnDisplayAddForm.addEventListener('click', DisplayForm)
btnDisplayUpdateForm.addEventListener('click', DisplayForm)
btnHideAddForm.addEventListener('click', HideForm)
btnHideUpdateForm.addEventListener('click', HideForm)