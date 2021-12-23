// Show menu

const navMenu = document.getElementById('nav-menu')
const navToggle = document.getElementById('nav-toggle')
const navClose = document.getElementById('nav-close')


if(navToggle) {
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu')
    })
}

if(navClose) {
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu')
    })
}

//  remove the mobile menu 
const navLink = document.querySelectorAll('.nav_link')


navLink.forEach(n => n.addEventListener('click', () => {
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}));

// background change
window.addEventListener('scroll', () => {
    const header = document.getElementById('header')

    if(this.scrollY >= 50) {
        header.classList.add('scroll-header')
    }else {
        header.classList.remove('scroll-header')
    }
})

//  Scroll Section Active Link 
