// LOGIN
const loginForm = document.getElementById('login-form');

loginForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const email = document.getElementById('email').value
    const password = document.getElementById('password').value
    const response = await fetch('login/auth', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({
            email, 
            password
        })
    })
    if(response.ok){
        window.location.href = '/dashboard'
    }else{
        //
    }
})

// SIGN UP
const signupForm = document.getElementById('signup-form')
signupForm.addEventListener('submit', function(event){
    const namaInput = document.getElementById('nama')
    const emailInput = document.getElementById('email')
    const passwordInput = document.getElementById('password')
    const agreementCheckbox = document.getElementById('agreement')

    if(!isValidName(namaInput.value)){
        alert('Nama lengkap harus diisi dan minimal 3 karakter')
        namaInput.preventDefault()
        return false
    }
    if(!isValidEmail(emailInput.value)){
        alert('Email tidak valid')
        emailInput.focus()
        event.preventDefault()
        return false
    }
    if(!isValidPassword(passwordInput.value)){
        alert('Password minimal 8 karakter')
        passwordInput.focus()
        event.preventDefault()
        return false
    }
    if(!agreementCheckbox.checked){
        alert('Anda harus menyetujui syarat dan ketentuan')
        event.preventDefault()
        return false
    }
})
function isValidNama(nama){
    return nama.length >= 3
}
function isValidEmail(email){
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/
    return emailRegex.test(email)
}
function isValidPassword(password){
    return password.length >= 8
}






let sidebar = document.getElementById('sidebar')
let content = document.getElementById('content')
sidebar.style.float = 'left'
content.style.marginLeft = '20%'
