let slideshow_num = 0; //variable to keep track of the slide used
continueSlides(); //function to make images transition from one to another

function continueSlides() 
{
  let i;
  let slides = document.getElementsByClassName("slides");
  let imges = document.getElementsByClassName("img");

  for (i = 0; i < 4; i++)
  {
    slides[i].style.display = "none";  
  }

  slideshow_num++;

  if (slideshow_num > 4) 
  {
    slideshow_num = 1;
  }    

  for (i = 0; i < 4; i++)
  {
    imges[i].className = imges[i].className.replace(" active", "");
  }

  slides[slideshow_num-1].style.display = "block";  
  imges[slideshow_num-1].className += " active";
  setTimeout(continueSlides, 3000);
}