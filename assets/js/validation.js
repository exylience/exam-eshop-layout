const validateRegisterForm = (e) => {
    e.preventDefault()

    const form = document.getElementById('registerForm')

    const data = new FormData(form)

    if (
        data.get('name') === '' ||
        data.get('surname') === '' ||
        data.get('login') === '' ||
        data.get('email') === '' ||
        data.get('password') === '' ||
        data.get('password_repeat') === ''
    ) {
        const txt = document.querySelector('.msg-text')
        txt.innerHTML += 'Все поля должны быть заполнены'

        const msg = document.querySelector('.sys-message')
        msg.classList.remove('hidden')
    } else {
        form.submit()
    }
}

const validateAuthForm = (e) => {
    e.preventDefault()

    const form = document.getElementById('authForm')

    const data = new FormData(form)

    if (
        data.get('login') === '' ||
        data.get('password') === ''
    ) {
        const txt = document.querySelector('.msg-text')
        txt.innerHTML += 'Все поля должны быть заполнены'

        const msg = document.querySelector('.sys-message')
        msg.classList.remove('hidden')
    } else {
        form.submit()
    }
}