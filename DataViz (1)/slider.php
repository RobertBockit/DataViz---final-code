<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none; margin:auto;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 80%;
  position: relative;
  margin: auto;
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
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
</style>
</head>
<body>


<div href='/data.php' class="slideshow-container">

<div href='/data.php' class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <a href='/data.php'><img href='/data.php' src="/1photo.jpg" style="width:100%"></a>
</div>

<div href='/data.php' class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <a href='/data.php'><img href='/data.php' src="/2photo.jpg" style="width:100%"></a>
</div>

<div href='/data.php' class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <a href='/data.php'><img href='/data.php' src="/3photo.jpg" style="width:100%"></a>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

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
  setTimeout(showSlides, 10000); // Change image every 10 seconds
}
</script>
