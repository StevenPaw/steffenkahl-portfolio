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


    const menu_button = document.querySelector('[data-behaviour="toggle-menu"]');

    menu_button.addEventListener('click', () => {
        document.body.classList.toggle('body--show');
    });

    let dark_mode_wanted = window.matchMedia('(prefers-color-scheme: dark)').matches;
    if(dark_mode_wanted){
        document.body.classList.toggle('dark_mode--on');
    }

    const dark_mode_button = document.querySelector('[data-behaviour="toggle-darkmode"]');

    dark_mode_button.addEventListener('click', () => {
        document.body.classList.toggle('dark_mode--on');
    })
});
