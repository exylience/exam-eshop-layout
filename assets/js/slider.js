const pages = document.querySelectorAll('.slider-item')

let currentPage = 0
let previousPage = pages.length - 1

/**
 * Анимация слайдера
 * @param back
 */

const animateSlider = (back = false) => {
    if (!back) {
        let nextPage = currentPage + 1 < pages.length ? currentPage + 1 : 0

        pages[nextPage].style.animationName = 'leftNext'
        pages[currentPage].style.animationName = 'leftCurrent'

        previousPage = currentPage
        currentPage = nextPage
    } else {
        previousPage = currentPage - 1 >= 0 ? currentPage - 1 : pages.length - 1

        pages[previousPage].style.animationName = 'rightPrev'
        pages[currentPage].style.animationName = 'rightCurrent'

        currentPage = previousPage

    }
}

pages[0].style.left = '0'
