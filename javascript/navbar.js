let button = document.getElementsByClassName('header__togglebutton')[0];
let navBarLinks = document.getElementsByClassName('header__menu')[0];

button.addEventListener('click', () => {
  navBarLinks.classList.toggle('active');
  button.classList.toggle('active-mobile');
});

navBarLinks.addEventListener('mousedown', (event) => {
  if (event.target !== navBarLinks) {
    setTimeout(() => {
      navBarLinks.classList.toggle('active');
    }, 1000);
  }
});
