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

    //Slider
    let slideElementsNext = [...document.querySelectorAll('[data-behaviour="slide_next"]')];
    slideElementsNext.forEach((element) => {
        var maxScrollLeft = element.parentElement.children[0].scrollWidth;
        element.addEventListener("click", (e) => {
            e.preventDefault();
            maxScrollLeft = element.parentElement.children[0].scrollWidth;
            element.nextElementSibling.classList.remove("hidden");
            if(window.innerWidth < 480){
                element.parentElement.children[0].scrollLeft += window.innerWidth;
                if(element.parentElement.children[0].scrollLeft + window.innerWidth >= maxScrollLeft){
                    element.classList.toggle("hidden");
                }
            } else if(window.innerWidth < 700){
                element.parentElement.children[0].scrollLeft += window.innerWidth / 2;
                if(element.parentElement.children[0].scrollLeft + (window.innerWidth / 2) >= maxScrollLeft){
                    element.classList.toggle("hidden");
                }
            } else {
                element.parentElement.children[0].scrollLeft += window.innerWidth / 3;
                if(element.parentElement.children[0].scrollLeft + (window.innerWidth / 3) >= maxScrollLeft){
                    element.classList.toggle("hidden");
                }
            }
        })
    });

    let slideElementsPrevious = [...document.querySelectorAll('[data-behaviour="slide_previous"]')];
    slideElementsPrevious.forEach((element) => {
        element.addEventListener("click", (e) => {
            e.preventDefault();
            element.previousElementSibling.classList.remove("hidden");
            if(window.innerWidth < 480){
                element.parentElement.children[0].scrollLeft -= window.innerWidth;
                if(element.parentElement.children[0].scrollLeft - window.innerWidth <= 0){
                    element.classList.toggle("hidden");
                }
            } else if(window.innerWidth < 700) {
                element.parentElement.children[0].scrollLeft -= window.innerWidth / 2;
                if(element.parentElement.children[0].scrollLeft - (window.innerWidth / 2) <= 0){
                    element.classList.toggle("hidden");
                }
            } else {
                element.parentElement.children[0].scrollLeft -= window.innerWidth / 3;
                if(element.parentElement.children[0].scrollLeft - (window.innerWidth / 3) <= 0){
                    element.classList.toggle("hidden");
                }
            }
        })
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
