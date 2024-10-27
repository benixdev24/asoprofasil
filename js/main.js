//menu responsive
const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.conteiner_list-header');
const closeMenu = document.querySelector('.close_menu');

navToggle.addEventListener("click", () => {
	navMenu.classList.add('visible');
})

closeMenu.addEventListener("click", () => {
	navMenu.classList.remove('visible');
})