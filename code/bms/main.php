<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Home</title>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  top: 80px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  position:relative;
  top: 115px;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #ddd;
  border-radius: 50%;
  opacity:0;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 2s;
  animation-name: fade;
  animation-duration: 2s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}



.pos{
	position:relative;
	top:140px;
}

</style>
</head>

<body>

<div><?php include 'header.php'; ?></div>

<div class="slideshow-container">

<div class="mySlides fade">
  <a href="event2.php" title="click for more information"><img src="slide3.jpg" style="width:100%"></a>
</div>

<div class="mySlides fade">
  <a href="event1.php" title="click for more information"><img src="slide1.jpg" style="width:100%"></a>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span>
</div>

<div class="pos"><?php include 'footer.php' ?></div>

<script>
var slideIndex = 0;
showSlides();

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
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>

</body>
</html>