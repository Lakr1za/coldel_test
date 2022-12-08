

function showSlides() {
  
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 10250); // Change image every 7 seconds
}
var slideIndex = 0;
showSlides();


function userprogress(time){
  var start= 0;
  var time = Math.round(time*1000/100);
  var progressElement = document.getElementById('progress-line');
  var intervalId=setInterval(function(){
    if(start>100){
      clearInterval(intervalId);
      userprogressCallBack();
    }
    else{
    progressElement.value= start;
  }
    start++
  },time);
}

function userprogressCallBack(){
  setInterval(userprogress(10), 1);
}
userprogress(10);



$(document).ready(function(){
	$('.slider').slick({
		arrows:true,
		dots:true,
		slidesToShow:3,
		autoplay:false,
		speed:1000,
		autoplaySpeed:800,
		leftMode:true,
		responsive:[
			{
				breakpoint: 768,
				settings: {
					slidesToShow:2
				}
			},
			{
				breakpoint: 550,
				settings: {
					slidesToShow:1
				}
			}
		],
		appendArrows:$('.btn'),
		appendDots:$('.line')
	});
});



