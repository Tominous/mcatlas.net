const bg = document.querySelector('.bg');
const bgTransLayer = document.querySelector('.bg-trans');
const windowWidth = window.innerWidth / 5;
const windowHeight = window.innerHeight / 5;

bgTransLayer.addEventListener('mousemove', (e) => {
  const mouseX = e.clientX / windowWidth;
  const mouseY = e.clientY / windowHeight;
  bg.style.transform = `translate3d(-${mouseX}%, -${mouseY}%, 0)`;
});

function setURL(url, el) {
  document.getElementById("vote-page").src = url;
  $('.ndzn-active-voteLink').removeClass('ndzn-active-voteLink');
  $(el).addClass('ndzn-active-voteLink');
}

function openInNewTab(url) {
  var win = window.open(url, '_blank');
  win.focus();
}
