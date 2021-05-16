username = document.getElementById('username')
password = document.getElementById('password')
loginForm = document.getElementById('login-form')
alertMessage = document.getElementById('alert-message')

loginForm.addEventListener('submit', (e) => {
    
    if(username.value === '' || password.value === '') {
        e.preventDefault()
        alertMessage.classList.remove('d-none')
    }
})