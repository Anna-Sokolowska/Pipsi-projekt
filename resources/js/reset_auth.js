const input = document.getElementById('reset-email')
const alertMessage = document.querySelector('.alert-message')

document.querySelector('form').addEventListener('submit', (e) => {
    e.preventDefault()
    if(!input.value.match(/\S+@\S+\.\S+/)) {
        alertMessage.innerText = 'Incorrect e-mail address'
        alertMessage.classList.remove('d-none')
    }

    if(input.value === '') {
        alertMessage.innerText = 'This field cannot be blank!'
        alertMessage.classList.remove('d-none')
    }

    if(!alertMessage.classList.contains('d-none')) {
        e.preventDefault()
    }
})

input.addEventListener('input', () => {
    if(!alertMessage.classList.contains('d-none') && input.value !== '') {
        alertMessage.classList.add('d-none')
    }
})