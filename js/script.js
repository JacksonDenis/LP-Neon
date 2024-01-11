const btnProdutosNeon = document.querySelector(".menuProdutosNeon");
const dropdownProdutosNeon = document.querySelector(".dropdown");
const btmMobile = document.querySelector(".btn-mobile");
const overlay = document.querySelector(".overlay");
const header = document.querySelector("header");

function openDropdown(event) {
    event.preventDefault();
    dropdownProdutosNeon.classList.toggle("active");
}

function fixedMenu() {
    if (window.pageYOffset > 80) {
        header.classList.add("fixed-menu");
    } else {
        header.classList.remove("fixed-menu");
    }
}

function openMenuMobile() {
    document.documentElement.classList.toggle('menu-opened')
    
}


document.addEventListener("scroll", fixedMenu);
btnProdutosNeon.addEventListener("click", openDropdown);
dropdownProdutosNeon.addEventListener("mouseleave", openDropdown);
btmMobile.addEventListener("click",openMenuMobile)
overlay.addEventListener("click",openMenuMobile)
