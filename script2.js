/*Scroll reveal*/
ScrollReveal({
    //reset: true,
    distance: '80px',
    duration: 2000,
    delay: 200
});

ScrollReveal().reveal('.conti', { origin: 'top' });
ScrollReveal().reveal('.coco', { origin: 'left' });


/*Typed JS*/
const typed = new Typed('.mail', {
    strings: ['bryand9970@gmail.com'],
    typeSpeed: 100,
    backSpeed: 100,
    backDelay: 1000,
    loop: true,
});