const closeMessage = (e) => {
    e.preventDefault()

    const msg = document.querySelector('.sys-message')
    msg.classList.add('hidden')
}