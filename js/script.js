const btnProdutosNeon = document.querySelector('.menuProdutosNeon');
const dropdownProdutosNeon = document.querySelector('.dropdown');

function openDropdown(event) {
    event.preventDefault();
    dropdownProdutosNeon.classList.toggle('active')
}

btnProdutosNeon.addEventListener('click', openDropdown);
dropdownProdutosNeon.addEventListener('mouseleave', openDropdown);