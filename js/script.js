//////////SLIDESHOW
var myIndex = 0;
carousel();

function carousel() {
  let transition = 'top .8s cubic-bezier(0.77, 0, 0.175, 1)';
  let i;
  let slides = document.getElementsByClassName("slide");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";      
  }

  myIndex++;
  if (myIndex > slides.length) {myIndex = 1}    
  slides[myIndex-1].style.display = "block";  
  slides[myIndex-1].style.transition = transition;   
  setTimeout(carousel, 20000);
}