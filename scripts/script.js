const notList = document.querySelector('.not-list')
const notIcon = document.querySelector('.not-icon')

window.addEventListener('click', (e) => {
    if(notIcon.contains(e.target)) {
        notList.classList.remove('d-none')
        setTimeout(() => {
            notList.classList.remove('hide')
        }, 20)  
    } else {
        notList.classList.add('hide')
        notList.addEventListener('transitionend', () => {
            notList.classList.add('d-none')
        }, {
            capture: false,
            once: true,
            passive: false
        }) 
    }
}, false)