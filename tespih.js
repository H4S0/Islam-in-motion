const prva = 'subhānallah';
const druga = 'elhamdulillāh';
const treca = 'Allāhu ekber';
let trenutnarijec = 0;
let count = 0;
let set = 1;
let beads = document.querySelectorAll('.bead');
let countBtn = document.getElementById('count-btn');

const rijeci = [prva, druga, treca];

function nextBead() {
  beads[count].classList.add('active');
  count++;
  updateCount();
}

function updateCount() {
  let countEl = document.querySelector('.count');
  countEl.textContent = count;
  
  if(set === 1){
    trenutnarijec = 0;
  }
  else if(set === 2 ){
    trenutnarijec = 1;
  }
  else if(set === 3){
    trenutnarijec = 2;
  }
  else if(set === 4){
    alert('Zikr je završen');
    location.reload();
  }

  countBtn.textContent = rijeci[trenutnarijec];
}

countBtn.addEventListener('click', function() {
  count++;
  updateCount();
  if (count === 33) {
    count = 0;
    beads.forEach(bead=>{
      bead.classList.remove('active');
      bead.style.backgroundColor = 'white';
    });
    beads[count].style.backgroundColor = 'bead';
    if(count % 33 === 0){
      set++;
    }
  } else {
    beads[count].style.backgroundColor = 'white';
    beads[count].style.backgroundColor = '#50A7FF';
  }
});

beads.forEach(bead => {
  bead.addEventListener('click', nextBead);
});
