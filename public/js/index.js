const backdrop = document.getElementById('side_menu_container')
const body = document.getElementsByTagName('body')[0]

const toggleBackdrop = () => {
  backdrop.classList.toggle('hiden')
  body.classList.toggle('with_backdrop')
}

backdrop.onclick = (event) => {
  event.stopPropagation()
  toggleBackdrop()
}

window.addEventListener('resize', (event) => {
  if(event.target.innerWidth > 960){
    backdrop.classList.add('hiden')
    body.classList.remove('with_backdrop')
  }
}, true);

document.getElementById('nav_menu_button').onclick = toggleBackdrop
document.getElementById('close_button').onclick = toggleBackdrop

document.getElementById('side_menu').onclick = (event) => {
  event.stopPropagation()
}

