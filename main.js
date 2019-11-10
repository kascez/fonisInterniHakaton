// pronadji sve card elemente

const cards = document.querySelectorAll('.card');
let tajmer;
// prodji kroz sve te elemente

for (const card of cards) {
    card.addEventListener('onmouseenter', promeniSlike(card));
}

// dodaj funkciju na hover koja menja nesto


function promeniSlike(element) {
    const slike = element.querySelectorAll('img');
    let index = 0;
    tajmer = window.setTimeout(() => {
        if (index < slike.length)
            index++;
        else index = 0;
        element.querySelector('.active').classList.remove('.active');
        slike[index].classList.add('active');
    }, 200)
}