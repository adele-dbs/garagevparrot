const staffform = document.getElementById('staffform')
const btnDisplayAddForm = document.getElementById('buttonaddstaffform')
const btnHideAddForm = document.getElementById('buttonAddStaff')
const btnDisplayUpdateForm = document.getElementById('updateStaff')
const btnHideUpdateForm = document.getElementById('buttonUpdateStaff')

const DisplayForm = (e) => {
  staffform.style.display = "block"
  e.preventDefault()
}

function HideForm(e) {
  staffform.style.display = "none"
  e.preventDefault(e)
}

btnDisplayAddForm.addEventListener('click', DisplayForm)
btnHideAddForm.addEventListener('submit', HideForm)
btnHideUpdateForm.addEventListener('submit', HideForm)
btnDisplayUpdateForm.addEventListener('submit', DisplayForm)