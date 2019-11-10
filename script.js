
const slike = document.querySelectorAll('.slika');
const popup = document.querySelector('.popup-wrapper');

const slikeZaGaleriju = document.querySelectorAll('.slike div');

for(let  i =0; i < slike.length; i++){
    slike[i].addEventListener('click', function(e){
        console.log(i);
        popup.classList.add('active');

        popup.querySelector('.popup').innerHTML = slikeZaGaleriju[i].innerHTML;
    })
}


window.addEventListener('keypress', function(e){
    console.log(e.which);
    console.log(e.key);
    if(e.key == 'Enter')
        popup.classList.remove('active');
})