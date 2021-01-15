let button = document.getElementsByClassName('header__togglebutton')[0];
let navBarLinks = document.getElementsByClassName('header__menu')[0];

button.addEventListener('click', () => {
  navBarLinks.classList.toggle('active');
});

navBarLinks.addEventListener('mousedown', (event) => {
  if (event.target !== navBarLinks) {
    navBarLinks.classList.toggle('active');
  }
});
