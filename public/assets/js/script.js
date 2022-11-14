window.addEventListener('DOMContentLoaded', () => {
    const togglers = document.querySelectorAll('.toggler')

    togglers.forEach((toggler) => {
        toggler.addEventListener('click', (e) => {
            e.target.parentNode.classList.toggle('opened')
            e.target.parentNode.parentNode.classList.toggle('toggled')
            if (e.target.parentNode.parentNode.querySelector('.hidden-content').style.opacity === '0') {
                e.target.parentNode.parentNode.querySelector('.hidden-content').style.opacity = '1';
                e.target.parentNode.parentNode.querySelector('.hidden-content').style.height = '100%';
            } else {
                e.target.parentNode.parentNode.querySelector('.hidden-content').style.opacity = '0';
                e.target.parentNode.parentNode.querySelector('.hidden-content').style.height = '0';
            }
        })
    })
})

