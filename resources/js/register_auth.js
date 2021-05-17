const inputs = document.querySelectorAll('input')
const registerForm = document.getElementById('register-form')
const alertMessages = document.querySelectorAll('.alert-message')

registerForm.addEventListener('submit', (e) => {
    
    for(let i = 0; i < 5; i++) {
        let input = inputs[i]
        let alertMessage = alertMessages[i]

        if(i === 0) {
            if(!input.value.match(/^[A-Za-z]+$/)) {
                alertMessage.innerText = 'First Name can only have letters!'
                alertMessage.classList.remove('d-none')
            }
        }

        if(i === 1) {
            if(!input.value.match(/^[A-Za-z]+$/)) {
                alertMessage.innerText = 'Second Name can only have letters!'
                alertMessage.classList.remove('d-none')
            }
        }

        if(i === 2) {
            if(!input.value.match(/\S+@\S+\.\S+/)) {
                alertMessage.innerText = 'Incorrect e-mail address'
                alertMessage.classList.remove('d-none')
            }
        }

        if(input.value === '') {
            alertMessage.innerText = 'This field cannot be blank!'
            alertMessage.classList.remove('d-none')
        }
    }

    if(inputs[7].value === '' || inputs[8].value === '' || inputs[9].value === '') {
        alertMessages[5].classList.remove('d-none')
    }

    if(!inputs[10].checked) {
        alertMessages[6].classList.remove('d-none')
    }

    if([...alertMessages].some(alert => !alert.classList.contains('d-none'))) {
        e.preventDefault()
    }
})

for(let i = 0; i < inputs.length ; i++) {
    let input = inputs[i]

    input.addEventListener('input', () => {
        if(i >= 0 && i < 5) {
            let alertMessage = alertMessages[i]
            if(!alertMessage.classList.contains('d-none') && input.value !== '') {
                alertMessage.classList.add('d-none')
            }
        }

        if(i >= 7 && i <= 9) {
            let alertMessage = alertMessages[5]
            if(!alertMessage.classList.contains('d-none') && input.value !== '') {
                alertMessage.classList.add('d-none')
            }
        }

        if(i === 10) {
            if(!alertMessages[6].classList.contains('d-none') && inputs[10].checked) {
                alertMessages[6].classList.add('d-none')
            }
        }
    })
}