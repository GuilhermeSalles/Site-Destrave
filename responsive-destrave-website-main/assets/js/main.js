/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/* Menu hidden */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}


/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))


/*=============== GSAP ANIMATION ===============*/
gsap.from('.home__points', 1.5,{opacity: 0, y: -300, delay: .2})
gsap.from('.home__rocket', 1.5,{opacity: 0, y: 300, delay: .3})
gsap.from('.home__planet-1', 1.5,{opacity: 0, y: -200, delay: .8})
gsap.from('.home__planet-2', 1.5,{opacity: 0, y: 200, delay: 1})
gsap.from('.home__cloud-1', 1.5,{opacity: 0, y: 200, delay: 1.2})
gsap.from('.home__cloud-2', 1.5,{opacity: 0, y: 200, delay: 1.3})
gsap.from('.home__content', 1.5,{opacity: 0, y: -100, delay: 1.4})
gsap.from('.home__title img', 1.5,{opacity: 0, y: 100, delay: 1.5})


/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
    // reset: true //Animation repeat
  })
  
  sr.reveal('.contact__container, .botaoContact, .section__title');
  sr.reveal('.botao', {origin: 'bottom'});
  sr.reveal('.about__subtitle, .about__title, .about__description, .simples__title', {origin: 'right'});
  sr.reveal('.about__image, .about__image2, .service__image', {origin: 'left'}); 
  sr.reveal('.services__card, .services__card2', {interval: 100});