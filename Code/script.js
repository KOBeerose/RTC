// hide the model once submited

const openModalButtons = document.querySelectorAll('[data-idnt-target]')
const closeModalButtons = document.querySelectorAll('[data-close-button]')
const overlay = document.getElementById('overlay')

openModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const idnt = document.querySelector(button.dataset.idntTarget)
    openModal(idnt)
  })
})


closeModalButtons.forEach(button => {
  button.addEventListener('click', () => {
    const idnt = button.closest('.idnt')
    closeModal(idnt)
  })
})

function openModal(idnt) {
  if (idnt == null) return
  idnt.classList.add('active')
  overlay.classList.add('active')
}

function closeModal(idnt) {
  if (idnt == null) return
  idnt.classList.remove('active')
  overlay.classList.remove('active')
}