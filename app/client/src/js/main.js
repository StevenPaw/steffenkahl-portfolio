
import Swiper from 'swiper/bundle';
import GLightbox from "glightbox";

document.addEventListener("DOMContentLoaded", function (event) {

    //Show hide
    let listToggleElements = [...document.querySelectorAll('[data-behaviour="list-toggle"]')];

    listToggleElements.forEach((element) => {
        element.addEventListener("click", (e) => {
            e.preventDefault();
            const item = element.parentNode.parentNode;
            item.classList.toggle("list_item--visible")

            listToggleElements.filter(e => e.parentNode.parentNode != item).forEach((e) => {
                e.parentNode.parentNode.classList.remove("list_item--visible")
            });
        })
    });

    //Show hide
    let showhideElements = [...document.querySelectorAll('[data-behaviour="showhide"]')];

    showhideElements.forEach((element) => {
        element.addEventListener("click", (e) => {
            e.preventDefault();
            element.parentNode.classList.toggle("visible")
        })
    });

    // init default Swipers:
    const portfolioSliders = document.querySelectorAll('.portfolio_swiper');

    portfolioSliders.forEach(function (slider) {

        var slidesPerView;
        if(slider.dataset.slidesperview){
            slidesPerView = parseInt(slider.dataset.slidesperview);
        }

        const swiper = new Swiper(slider, {
            effect: 'slide',
            direction: 'horizontal',
            slidesPerView: slidesPerView || 3,
            spaceBetween: 40,

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });

    //Toggle Menu
    const menu_button = document.querySelector('[data-behaviour="toggle-menu"]');

    menu_button.addEventListener('click', () => {
        document.body.classList.toggle('body--show');
    });

    //Dark Mode
    let dark_mode_wanted = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if(dark_mode_wanted){
        document.body.classList.toggle('dark_mode--on');
    }

    //Dark mode toggle
    const dark_mode_button = document.querySelector('[data-behaviour="toggle-darkmode"]');

    dark_mode_button.addEventListener('click', () => {
        document.body.classList.toggle('dark_mode--on');
    });

    parallax();
});

//parallax
function parallax() {

    let listParallaxElements = [...document.querySelectorAll('[data-behaviour="parallax"]')];
    //var parallax = document.querySelector('[data-behaviour="parallax"]');
    listParallaxElements.forEach((parallax, i) => {
        var scrolled = window.pageYOffset - (parallax.parentElement.offsetTop);

        // You can adjust the data-speed dataset to set the scroll speed
        var coords = (scrolled * parallax.dataset.speed) + 'px'
        parallax.style.transform = 'translateY(' + coords + ')';
    })
};

window.addEventListener('scroll', () => {
    parallax();
})
