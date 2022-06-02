let navbarTogglerBtn = document.getElementById("navbar-toggler-btn")
let navbar = document.querySelector(".main-nav")
let closer = document.getElementById("toggler-close-btn")
let subNav = document.querySelector(".banner-wrap")
let togller = 0;
var owl = $(".owl-carousel");
var initOwl = {
    animateOut: 'slideOutDown',
    animateIn: 'heartBeat',
    loop:true,
    items:(document.body.clientWidth <= 767 ? 1 :3)
}
closer.addEventListener('click',(e)=>{
    togller = 0
    if(navbar.classList.contains("show-main-nav")){
        navbarTogglerBtn.classList.remove("btn-toggler-show")
        navbar.classList.remove("show-main-nav")
        subNav.classList.add('sticky-top')
    }
})
window.onload = (e)=>{
    handleRerenderOwl(document.body.clientWidth)
}
const handleRerenderOwl = (width)=>{
    let initPer = {}
    if(width > 767){
        initPer = {...initOwl,items:3}
    }else if(width > 576){
        initPer = {...initOwl,items:2}
    }else{
        initPer = {...initOwl,items:1}
    }
    owl.trigger("destroy.owl.carousel")
    owl.html(owl.find('.owl-stage-outer').html()).removeClass('owl-loaded');
    owl.owlCarousel(initPer);
}
window.onresize = (e)=>{
    if(document.body.clientWidth >= 768){
        handleRerenderOwl(document.body.clientWidth)
        togller = 0
        if (subNav.classList.contains(('sticky-top'))){
            subNav.classList.remove('sticky-top')
        }
        if(navbar.classList.contains("show-main-nav")){
            navbarTogglerBtn.classList.remove("btn-toggler-show")
            navbar.classList.remove("show-main-nav")
        }
    }else {
        handleRerenderOwl(document.body.clientWidth)
    }
}

const handleToggler = (event)=>{
    if(togller == 0){
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
    if(document.body.clientWidth > 767){
        if(document.body.scrollTop > 80 || document.documentElement.scrollTop > 80){
            navbar.classList.add('sticky-top')
        }else{
            navbar.classList.remove('sticky-top')
        }
    }else{
        let scroll = document.documentElement.scrollTop || document.body.scrollTop
        console.log(scroll)
        if(!togller){
            if(scroll > 80){
                if(!subNav.classList.contains("sticky-top")){
                    subNav.classList.add('sticky-top')
                }
            }else if (scroll + 10 <= 10){
                if(subNav.classList.contains("sticky-top")){
                    subNav.classList.remove('sticky-top')
                }
            }
        }else{
            subNav.classList.remove('sticky-top')
        }
    }
})
navbarTogglerBtn.addEventListener('click',handleToggler)
// owl

$(document).ready(function(){
    console.log(initOwl)
    owl.owlCarousel(initOwl);
});
