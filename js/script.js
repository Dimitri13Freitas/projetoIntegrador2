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
  if (document.documentElement.classList.contains("change")) {
    window.localStorage.setItem("theme", false) == false;
    document.documentElement.classList.toggle("change");
  } else {
    window.localStorage.setItem("theme", "true");
    document.documentElement.classList.toggle("change");
  }
});

window.onload = () => {
  if (localStorage.theme == "true") {
    document.documentElement.classList.add("change");
  }
};

document.querySelectorAll("[data-toggle~=dropdown]").forEach(setupDropdown);

function setupDropdown(dropdownToggle) {
  dropdownToggle.setAttribute("aria-haspopup", "true");
  dropdownToggle.setAttribute("aria-expanded", "false");

  var dropdownMenu = dropdownToggle.parentNode.querySelector(".dropdown-menu");

  dropdownMenu.setAttribute("aria-hidden", "true");

  dropdownToggle.onclick = toggleDropdown;

  function toggleDropdown() {
    if (dropdownToggle.getAttribute("aria-expanded") === "true") {
      dropdownToggle.setAttribute("aria-expanded", "false");
      dropdownMenu.setAttribute("aria-hidden", "true");
      dropdownToggle.parentNode.classList.remove("dropdown-on");
      return;
    }
    dropdownToggle.setAttribute("aria-expanded", "true");
    dropdownMenu.setAttribute("aria-hidden", "false");
    dropdownToggle.parentNode.classList.add("dropdown-on");
    dropdownMenu.children[0].focus();
    return;
  }
}

function toggleParentClass(elem, className) {
  elem.parentNode.classList.toggle(className);
}

function addParentClass(elem, className) {
  elem.parentNode.classList.add(className);
}

function removeParentClass(elem, className) {
  elem.parentNode.classList.remove(className);
}

function toggleMenu() {
  var elem = document.getElementById("main-nav");
  elem.classList.toggle("menu-on");
}

window.addEventListener("DOMContentLoaded", (event) => {
  const btnAumentar = document.getElementById("btnAumentar");
  const btnDiminuir = document.getElementById("btnDiminuir");

  btnAumentar.addEventListener("click", () => {
    aumentarFonte();
  });

  btnDiminuir.addEventListener("click", () => {
    diminuirFonte();
  });

  function aumentarFonte() {
    const currentFontSize = parseInt(
      window.getComputedStyle(document.body).fontSize,
    );
    document.body.style.fontSize = `${currentFontSize + 2}px`;
  }

  function diminuirFonte() {
    const currentFontSize = parseInt(
      window.getComputedStyle(document.body).fontSize,
    );
    document.body.style.fontSize = `${currentFontSize - 2}px`;
  }
});

