/**
 * Валидация формы для регистрации
 * @param e
 */
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
        txt.innerHTML = 'Все поля должны быть заполнены'

        const msg = document.querySelector('.sys-message')
        msg.classList.remove('hidden')
    } else if (data.get('password').length < 6) {
        const txt = document.querySelector('.msg-text')
        txt.innerHTML = 'Длина пароля должна быть не менее 6 символов'

        const msg = document.querySelector('.sys-message')
        msg.classList.remove('hidden')
    } else if (data.get('password') !== data.get('password_repeat')) {
        const txt = document.querySelector('.msg-text')
        txt.innerHTML = 'Пароли не совпадают'

        const msg = document.querySelector('.sys-message')
        msg.classList.remove('hidden')
    } else {
        form.submit()
    }
}

/**
 * Валидация формы для аутентификации
 * @param e
 */
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