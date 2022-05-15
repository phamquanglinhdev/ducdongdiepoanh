let navbarTogglerBtn = document.getElementById("navbar-toggler-btn")
let navbar = document.querySelector(".main-nav")
let closer = document.getElementById("toggler-close-btn")
let subNav = document.querySelector(".banner-wrap")
let togller = 0;
closer.addEventListener('click',(e)=>{
    togller = 0
    if(navbar.classList.contains("show-main-nav")){
        navbarTogglerBtn.classList.remove("btn-toggler-show")
        navbar.classList.remove("show-main-nav")
        subNav.classList.add('sticky-top')
    }
})

window.onresize = (e)=>{
    if(window.screen.width >= 768){
        togller = 0
        subNav.classList.remove('sticky-top')
        if(navbar.classList.contains("show-main-nav")){
            navbarTogglerBtn.classList.remove("btn-toggler-show")
            navbar.classList.remove("show-main-nav")
        }
    }
}

const handleToggler = (event)=>{
    if(togller === 0){
        togller = 1
        if(!navbar.classList.contains("show-main-nav")){
            navbarTogglerBtn.classList.add("btn-toggler-show")
            navbar.classList.add("show-main-nav")
            navbar.classList.remove('sticky-top')
            subNav.classList.remove('sticky-top')
        }
    }else{
        if(navbar.classList.contains("show-main-nav")){
            togller = 0
            navbarTogglerBtn.classList.remove("btn-toggler-show")
            navbar.classList.remove("show-main-nav")
            subNav.classList.remove('sticky-top')
        }
    }
}

window.addEventListener('scroll',(e)=>{
    if(window.screen.width > 767){
        if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 20){
            navbar.classList.add('sticky-top')
        }else{
            navbar.classList.remove('sticky-top')
        }
    }else{
        if(!togller){
            if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 20){
                subNav.classList.add('sticky-top')
            }else{
                subNav.classList.remove('sticky-top')
            }
        }else{
            subNav.classList.remove('sticky-top')
        }

    }
})
navbarTogglerBtn.addEventListener('click',handleToggler)

$(document).ready(function(){
    $(".owl-carousel").owlCarousel();

});
