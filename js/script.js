const io = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    console.log(entry.intersectionRatio)
    if (entry.intersectionRatio > 0) {
      entry.target.classList.add('visible')
    }
  })
}, options = { thresholds: 0.7 });

const cards = document.querySelectorAll('.card');
cards.forEach(card => io.observe(card));


// NavMobile active mode
const list = document.querySelectorAll('.list');
function activeLink() {
  list.forEach((item) =>
    item.classList.remove('active'));
  this.classList.add('active');
}
list.forEach((item) =>
  item.addEventListener('click', activeLink));

// BookMenu toggle

const bookMenu = document.getElementById('bookMenu');

bookMenu.addEventListener('click', () => {
  bookMenu.classList.toggle('is-active')
})


// Glider

new Glider(document.querySelector('.glider'), {
  slidesToShow: 1,
  draggable: true,
  dots: '#dots',
  arrows: {
    prev: '.glider-prev',
    next: '.glider-next'
  }
}).mount({ controls })


