const novToggle = document.querySelector(".toggle")
const novMenu = document.querySelector(".nav-menu ")

novToggle.addEventListener("click", () => {
  novMenu.classList.toggle("nav-menu_visible")
})
const openCloseButton = document.querySelector('#buttonOpenCloseMenu');
const menuMobileItems = document.querySelector('#menu-mobile-items');

openCloseButton.addEventListener('click', e => {
  menuMobileItems.classList.toggle('menu-mobile-closed')
})

let marker = document.querySelector('#marker');
let item = document.querySelector('ul li a');

function Indicator(e) {
  marker.style.top = e.offsetTop + 'px';
  marker.style.width = e.offsetWidth + 'px';
}

item.forEach(link=>{
  link.addEventListener('mousemove',(e)=>{
    Indicator(e.target);
  })
})


const openCloseButton = document.querySelector('#buttonOpenCloseMenu');
const menuMobileItems = document.querySelector('#menu-mobile-items');

openCloseButton.addEventListener('click', e => {
    menuMobileItems.classList.toggle('menu-mobile-closed')
})

