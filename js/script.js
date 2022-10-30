function menuMobile() {
  const menuBtn = document.querySelector('.menuMobile');
  const nav = document.querySelector('.navegacao');
  
  menuBtn.addEventListener('click', handleClick);
  menuBtn.addEventListener('touchstart', handleClick);
  
  function handleClick(e) {
    e.preventDefault();
    nav.classList.toggle('ativo');
    menuBtn.classList.toggle('ativo');
  }
}
menuMobile();

const banner = document.querySelector('.banner');
const imgs = banner.querySelectorAll('img');
const imgList = Array.from(imgs);

const srcList = imgList.map(e => {
  return e.getAttribute('src');
})

// console.log(srcList.length)
// console.log(srcList);
