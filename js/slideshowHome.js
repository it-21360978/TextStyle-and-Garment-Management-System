let slideIndex = 0;
continueSlides();

function continueSlides() {
  let i;
  let slides = document.getElementsByClassName("slides");
  let imges = document.getElementsByClassName("img");

  for (i = 0; i < 3; i++)
  {
    slides[i].style.display = "none";  
  }

  slideIndex++;

  if (slideIndex > 3) 
  {
    slideIndex = 1
  }    

  for (i = 0; i < 3; i++)
  {
    imges[i].className = imges[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";  
  imges[slideIndex-1].className += " active";
  setTimeout(continueSlides, 3000);
}