let count = 0;
let beads = document.querySelectorAll('.bead');

function nextBead() {
  beads[count].classList.add('active');
  count++;
  if (count === 33) {
    count = 0;
  }
  updateCount();
}

function updateCount() {
  let countEl = document.querySelector('.count');
  countEl.textContent = count;
}

beads.forEach(bead => {
  bead.addEventListener('click', nextBead);
});
