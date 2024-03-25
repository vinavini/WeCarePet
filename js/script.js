// window.addEventListener("load",()=> {
//     /*-- preloader --*/
//     document.querySelector(".js-preloader").classList.add("fade-out");
//     setTimeout(() => {
//         document.querySelector(".js-preloader").style.display = "none"; 
//     },600);
// });

/*--- Nav ---*/
const navToggler = document.querySelector(".js-nav-toggler");
const nav = document.querySelector(".js-nav");

function navToggle(){
    nav.classList.toggle("active");
    navToggler.classList.toggle("active");
}

navToggler.addEventListener("click",navToggle);

// hide the nav by clicking outside it
document.addEventListener("click",(event) => {
    const isClickInsideNav = nav.contains(event.target);
    const isClickInsideNavToggler = navToggler.contains(event.target);
    if(!(isClickInsideNav || isClickInsideNavToggler) && nav.classList.contains("active")){
        navToggle();
    }
})