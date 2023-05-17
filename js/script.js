function menuMobile() {
  const menuBtn = document.querySelector(".menuMobile");
  const nav = document.querySelector(".navegacao");

  menuBtn.addEventListener("click", handleClick);
  menuBtn.addEventListener("touchstart", handleClick);

  function handleClick(e) {
    e.preventDefault();
    nav.classList.toggle("ativo");
    menuBtn.classList.toggle("ativo");
  }
}
menuMobile();

const ancor = document.querySelector(".verde");

console.log(ancor);

