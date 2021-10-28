//Menu Toggle and Burger Animation
const navSlide = () =>{
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.mobile-menu');

    burger.addEventListener('click', () =>{
        menu.classList.toggle('mobile-active');
            //Burger Animation
        burger.classList.toggle('burger-toggle');
    });
}
navSlide();