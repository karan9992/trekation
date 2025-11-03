const rightArrow = document.getElementsByClassName('rightArrow')[0];
const leftArrow = document.querySelector('.leftArrow');
const treks = document.querySelectorAll('.trekDisp');
const trekContainer = document.querySelector('.topTrek');


console.log(treks);
rightArrow.addEventListener('click', () => {
 

  trekContainer.scrollLeft += 200;
  
});

leftArrow.addEventListener('click', () => { 
    trekContainer.scrollLeft -= 200;
});
