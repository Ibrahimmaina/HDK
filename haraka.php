<!DOCTYPE html>
<html lang="fr">
<head>
<title>HDK</title>
<meta charset="UTF-8">
<link href="css/helper.css" media="screen" rel="stylesheet" type="text/css" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="css/dropdown.vertical.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/default.css" media="screen" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="bootstrap.css"  type="text/css" />
    <script type="text/javascrip" src="bootstrap.js"></script>  
</head>
<body class="bg">
	
	<style>
body, html{
	height: 100%;
}
.bg{
background-image: url("images/z.jpg");
height: 100%;
background-position: center;
background-repeat: no-repeat;
background-size: cover;
}
#nav li{
    font-size: 45px;
    background-color: rgb(99, 133, 226);
}
	</style>
<h1 style="color:black ;">HDK Global Bussiness Line</h1>
<img src="images/logo8.png" alt="" height="100px" width="200px" style="position:absolute ;top:1%;right:4%;border:1px solid white;border-radius:80px;">
<div>
		<marquee behavior="" direction=""> <h1 style="color:blue;">Bien venue sur notre Platforme</h1></marquee>
	</div>
<h1>Liste des articles</h1>
<div>
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
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
  animation-name: fade;
  animation-duration: 1.5s;
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

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/b.jpg" style="width:45%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/a.jpg" style="width:45%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/c.jpg" style="width:45%">
  <div class="text">Caption Three</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 
</div>
</body>
</html>