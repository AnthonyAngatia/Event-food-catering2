<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Taste of Africa</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0px;
    }

    h1 {
      text-align: center;
    }

    header {
      display: flex;
      justify-content: flex-end;

    }

    .logo {
      height: 60px;
      width: 60px;
      border: 1px solid tomato;
      margin-right: auto;
      padding: 5px;
	  
    }

    .header h1 {
      font-family: cursive;
      margin-right: auto;
      padding: 5px;

    }

    .Sign-up button {
      border: 1px solid #003366;
      color: #003366;
      padding: 7px;
      border-radius: 50px;
      cursor: pointer;
      background-color: white;
    }

    a {
      padding: 15px;
    }

    .nav {

      display: flex;
      justify-content: space-evenly;
      background-color: #003366;
    }

    button {
      border: 1px solid aliceblue;
      border-radius: 50px;
      background-color: #003366;
      padding: 7px;
      color: white;
      cursor: pointer;
    }

    button:hover {
      color: powderblue;
    }



    .mySlides {
      display: none;
    }

    /* Slideshow container */
    .slideshow-container {

      max-width: 100%;
      position: relative;
      margin: auto;

      max-height: 900px;
      background-color: #ddd;
    }

    .mySlides img {
      max-height: 610px;
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

    .text button {
      font-size: 24px;
      border-radius: 0px;
      width: 150px;
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
      -webkit-animation-duration: 0.5s;
      animation-name: slide;
      animation-duration: 0.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: 0.4;
      }

      to {
        opacity: 1;
      }
    }

    @keyframes fade {
      from {
        opacity: 0.4;
      }

      to {
        opacity: 1;
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .text {
        font-size: 11px;
      }
    }

    /*  @media (min-width: 768px) */



    .Dishes {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 1em;
      grid-auto-rows: minmax(300px, auto);

      margin-left: 5px;
      margin-right: 5px;
    }

    .Dishes img {
      max-height: 300px;
      height: 100%;
      width: 100%;
    }

    .Extras {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 1em;
      grid-auto-rows: minmax(300px, auto);

      margin-left: 5px;
      margin-right: 5px;
    }

    .Extras img {
      max-height: 300px;
      height: 100%;
      width: 100%;
    }

    .Extras div {
      background-color: #ddd;

    }

    .Description {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 1em;
      grid-auto-rows: minmax(100px, auto);
      margin-left: 5px;
      margin-right: 5px;
    }

    .Description 2 {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr;
      grid-gap: 1em;
      grid-auto-rows: minmax(100px, auto);
      margin-left: 5px;
      margin-right: 5px;
    }



    .Dishes div {
      background-color: #ddd;

    }

    .Description div {
      background-color: #dddd;
      box-shadow: 0 8px 6px -6px black;
      padding: 2em;
    }

    .Description2 div {
      background-color: #dddd;
      box-shadow: 0 8px 6px -6px black;
      padding: 2em;
    }

    footer {
      margin-top: 1em;
      background-color: #003366;
      color: white;
      text-align: center;
      font-size: 24px;
    }
  </style>
</head>

<body>
  <!--Header-->
  <header class="header">
    <img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" />
    <h1>Taste of Africa</h1>
    <a class="login" href="" onclick = myFunction()><button >Login</button></a>
	
    <a class="Sign-up" href=""><button>Sign up</button></a>
  </header>
  <div class="nav">
    <a class="Category" href=""><button>Category</button></a>
    <a class="Order" href=""><button>Order</button></a>
    <a class="Cart" href=""><button>Cart</button></a>
    <a class="About us" href=""><button>About us</button></a>
  </div>
  <!--SlideShow-->
  <div class="slideshow-container">
    <div class="mySlides ">
      <img src="<?php echo base_url("/Assets/brocoli.png"); ?>" style="width:100%;" />
      <div class="text"><a href ="#" onclick= "window.location.replace('MenuC');">click here</a></div>
    </div>

    <div class="mySlides ">
      <img src="<?php echo base_url("/Assets/chicken.png"); ?>" style="width:100%;
          " />
      <div class="text"><a href ="#" onclick= "window.location.replace('MenuV');">click here</a></div>
    </div>

    <div class="mySlides ">
      <img src="<?php echo base_url("/Assets/cheeseburger.png"); ?>" style="width:100%; ;
" />
      <div class="text"><a href ="#" onclick= "window.location.replace('MenuV');"><button>Menu</button></a></div>
    </div>
  </div>
  <br />

  <div style="text-align:center; display:none;">
    <span class="dot"></span>
    <span class="dot"></span>
    <span class="dot"></span>
  </div>
  <!--Foods-->
  <h1 style="margin: 1em">Dishes</h1>
  <div class="Dishes">
    <div class="Dish1">
      <img src="<?php echo base_url("/Assets/brocoli.png"); ?>" alt="Dish1" />
    </div>
    <div class="Dish2">
      <img src="<?php echo base_url("/Assets/cheeseburger.png"); ?>" alt="Dish2" />
    </div>
    <div class="Dish3">
      <img src="<?php echo base_url("/Assets/brocoli.png"); ?>" alt="Dish3" />
    </div>
  </div>



  <div class="Description">
    <div class="desc1">
      <h3>Brocoli</h3>
      <p>Price</p>
    </div>
    <div class="desc2">
      <h3>Cheese Burger</h3>
      <p>Price</p>
    </div>
    <div class="desc3">
      <h3>Brocoli</h3>
      <p>Price</p>
    </div>
  </div>
  <button style="margin:1em"><a href="" style="text-decoration:none; color:white">See more</a></button>

  <h1 style="margin: 1em">Extra</h1>
  <div class="Extras">
    <div class="Extra1">
      <img src="<?php echo base_url("/Assets/Catering.jpg"); ?>" alt="Extra1" />
    </div>
    <div class="Extra2">
      <img src="<?php echo base_url("/Assets/Waiter.jpg"); ?>" alt="Extra1" />
    </div>
    <div class="Extra3">
      <img src="<?php echo base_url("/Assets/QualityFood.jpg"); ?>" alt="Extra3" />
    </div>
  </div>

  <div class="Description">
    <div class="desc1">
      <h1>Catering Services</h1>
      <p>Get the best for your function</p>
      <button style=" margin:1em; padding:1em;"><a href="" style="text-decoration:none; color:white ">Find out more</a></button>
    </div>
    <div class="desc2">
      <h1>Zero Waiting time</h1>
      <button style=" margin:1em; padding:1em;"><a href="" style="text-decoration:none; color:white ">Find out more</a></button>
    </div>
    <div class="desc3">
      <h1>Quality Food</h1>
      <button style=" margin:1em; padding:1em;"><a href="" style="text-decoration:none; color:white ">Find out more</a></button>
    </div>
  </div>
  <footer>
    <p>CopyRight &copy; 2019</p>
  </footer>

  <script>
  function myFunction() {
  document.getElementByClassName("login").style.display = "block";
  }
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
      if (slideIndex > slides.length) {
        slideIndex = 1;
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 2 seconds
    }
  </script>
</body>

</html>