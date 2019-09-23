<?php
defined('BASEPATH') OR exit('No direct script access allowed');
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
      header {
        display: flex;
        justify-content: flex-end;
        border: 1px solid greenyellow;
      }

      .logo {
        height: 60px;
        width: 60px;
        border: 1px solid tomato;
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
        border: 1px solid greenyellow;
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

      @media (min-width: 768px) {
        .grid-container {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          grid-gap: 1em;
          grid-auto-rows: minmax(200px, auto);
          background: #ddd;
          margin: 5px;
        }
      }

      .box1 {
        grid-column: 1/3;
        grid-row: 1/3;
        position: relative;
      }
      .box1 img {
        max-height: 400px;
        height: 100%;
        width: 100%;
      }
      .box2 {
        position: relative;
      }

      .box2 img {
        max-height: 100%;
        height: 100%;
        width: 100%;
      }
      .box3 {
        position: relative;
      }
      .box3 img {
        max-height: 100%;
        height: 100%;
        width: 100%;
      }
      .box1-inside {
        color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;

        /*border: 1px solid tomato;*/
      }
      .box1-inside h1 {
        font-family: helvetica;
        font-size: 42px;
        text-align: center;
        cursor: pointer;
      }
      .box1-inside p {
        font-family: verdana;
        text-align: center;
      }
      .box2-inside {
        color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;

        /*border: 1px solid tomato;*/
      }
      .box2-inside h1 {
        text-align: center;
        font-family: helvetica;
        cursor: pointer;
      }
      .box2-inside p {
        font-family: verdana;
        text-align: center;
      }
      .mySlides {
        display: none;
      }

      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        border: 1px solid red;
        max-height: 500px;
        background-color: #ddd;
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
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
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
    </style>
  </head>
  <body>
    <header>
      <img class="logo" src="/Assets/Logo.jpg" alt="logo" />
      <a class="login" href=""><button>Login</button></a>
      <a class="Sign-up" href=""><button>Sign up</button></a>
    </header>
    <div class="nav">
      <a class="Category" href=""><button>Category</button></a>
      <a class="Order" href=""><button>Order</button></a>
      <a class="Cart" href=""><button>Cart</button></a>
      <a class="About us" href=""><button>About us</button></a>
    </div>
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="/Assets/brocoli.png" style="width:100%; max-height:500px;" />
        <div class="text"><button>Menu</button></div>
      </div>

      <div class="mySlides fade">
        <img
          src="/Assets/Restaurant-image-1.jpg"
          style="width:100%;
          max-height:500px;"
        />
        <div class="text"><button>Menu</button></div>
      </div>

      <div class="mySlides fade">
        <img
          src="/Assets/cheeseburger.png"
          style="width:100%;
          max-height:500px;"
        />
        <div class="text"><button>Menu</button></div>
      </div>
    </div>
    <br />

    <div style="text-align:center; display:none;">
      <span class="dot"></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>
    <div class="grid-container">
      <div class="box1">
        <img src="/Assets/Restaurant-image-1.jpg" alt="logo" />
        <div class="box1-inside">
          <h1>Taste of Africa</h1>
          <p>Find a variety of all tasty food</p>
        </div>
      </div>
      <div class="box2">
        <img src="/Assets/brocoli.png" alt="logo" />
        <div class="box2-inside">
          <h1>Make your order</h1>
          <p>Find a variety of all tasty food</p>
        </div>
      </div>
      <div class="box3">
        <img src="/Assets/Restaurant-image-1.jpg" alt="logo" />
        <div class="box2-inside">
          <h1>Todays Special</h1>
          <p>Find a variety of all tasty food</p>
        </div>
      </div>
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
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 10000); // Change image every 2 seconds
      }
    </script>
  </body>
</html>
