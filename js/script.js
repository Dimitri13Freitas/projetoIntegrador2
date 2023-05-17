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

const theme = document.querySelector(".theme");

theme.addEventListener("click", () => {
  let active = false;
  active = !active;
  window.localStorage.setItem("theme", active);
  document.documentElement.classList.toggle("change");
});

window.onload = () => {
  if (window.localStorage.getItem("theme")) {
    document.documentElement.classList.toggle("change");
  }
};

