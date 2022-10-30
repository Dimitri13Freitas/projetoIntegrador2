const menuBtn = document.querySelector('.menuMobile');
const nav = document.querySelector('.navegacao');

menuBtn.addEventListener('click', handleClick);

function handleClick(e) {
  e.preventDefault();
  nav.classList.toggle('ativo');
  console.log(nav)
}