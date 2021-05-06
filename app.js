alert('Clique em "Adicionar", para abrir o formulario de cadastro');

const navSlide = () => {
	const burger = document.querySelector('.burger');
	const nav = document.querySelector('.nav-links');
	const navLinks = document.querySelectorAll('.nav-links li');

burger.addEventListener('click', () => {
	nav.classList.toggle('nav-active');

		navLinks.forEach((link, index) => {
			if (link.style.animation) {
				link.style.animation = ''
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
			}
		});
		burger.classList.toggle(`toggle`);

	});


}

const navClick = () => {
	const clicar = document.querySelector('.clicar');
	const nav = document.querySelector('.nav-links');
	const navLinks = document.querySelectorAll('.nav-links li');

clicar.addEventListener('click', () => {
	nav.classList.toggle('nav-active');

		navLinks.forEach((link, index) => {
			if (link.style.animation) {
				link.style.animation = ''
			} else {
				link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.5}s`;
			}
		});
		clicar.classList.toggle(`toggle`);

	});


}

navSlide();
navClick();

/*----------------Formulario--------------------------------------------------------------------------------------------*/

 function toggle_visibility(id) {
       var e = document.getElementById(id);
       if(e.style.display == 'block')
          e.style.display = 'none';
       else
          e.style.display = 'block';
    }