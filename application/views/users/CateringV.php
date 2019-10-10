<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
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
        .food{
            display:grid;
            grid-template-columns:1fr 1fr 1fr;
        }

        #cont{
            background-image:url(<?php echo base_url("Assets/Catering.jpg"); ?>)
        
        }
        .wrapper{
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6));
            color:white;
            
            
        }
    </style>
</head>

<body>
    <!--Header-->
    <header class="header">
        <img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" />
        <h1>Taste of Africa</h1>
        <div id="sessionVariable">
        <img class="logo" src="<?php echo base_url("Assets/PRO.png"); ?>" />
        <p><b><?php echo $user['first_name'].' '.$user['last_name']; ?></b></p>
        <a href="<?php echo base_url('index.php/Users/login'); ?>"> Log Out </a>
        </div>

    </header>
    <div class="nav">
        <a href="#" onclick = "window.location.replace('CateringC');"><button>Catering</button></a>
        <a class="Order" href=""><button>Order</button></a>
        <a class="Cart" href=""><button>Cart</button></a>
        <a class="About us" href=""><button>About us</button></a>
    </div>
    <div id="cont">
    <div class="wrapper" style="border-radius: 0px; border:0px solid; margin-top:20px; width: 350px; font-style: italic;">
    <form action="" method="post">
            <div class="form-group">
                <label>Number of Attendes</label>
                <input type="range" list="tickmarks">
                   <datalist id="tickmarks">
                      <option value="0" label="0%"></option>
                      <option value="10"></option>
                      <option value="20"></option>
                      <option value="30"></option>
                      <option value="40"></option>
                      <option value="50" label="50%"></option>
                      <option value="60"></option>
                      <option value="70"></option>
                      <option value="80"></option>
                      <option value="90"></option>
                      <option value="100" label="100%"></option>
                   </datalist>
                <div id="food" style = "display:grid;
            grid-template-columns:1fr 1fr 1fr;">
                <div class="food_types">
                <h3>Drinks</h3>
                <input type="checkbox" name="drink"  value="Bike"> Drinks<br>
                <input type="checkbox" name="protein"  value="Car"> Proteins<br>
                <input type="checkbox" name="salad"  value="Boat"> Salads<br>
                <input type="checkbox" name="carbohybrid" value="Boat"> Carbohybrids<br>
                </div>

                <div class="food_types">
                <h3>Drinks</h3>
                <input type="checkbox" name="drink" class="inputGroup"  value="Bike"> Drinks<br>
                <input type="checkbox" name="protein" class="inputGroup"   value="Car"> Proteins<br>
                <input type="checkbox" name="salad" class="inputGroup"   value="Boat"> Salads<br>
                <input type="checkbox" name="carbohybrid" class="inputGroup"  value="Boat"> Carbohybrids<br>
                </div>

                <div class="food_types">
                <h3>Drinks</h3>
                <input type="checkbox" name="drink"  value="Bike"> Drinks<br>
                <input type="checkbox" name="protein"  value="Car"> Proteins<br>
                <input type="checkbox" name="salad"  value="Boat"> Salads<br>
                <input type="checkbox" name="carbohybrid" value="Boat"> Carbohybrids<br>
                </div>


                <div>

                <label>Location</label>
                <input type="textfield"  class="form-control" name="location" placeholder="location" required="">
                <label>Start Time</label>
                <input type="time"  class="form-control" name="location" required="">  
                <label>End Time</label>
                <input type="time"  class="form-control" name="location" required="">     
                <label>Description</label>
                <input type="textfield"  class="form-control" name="description" placeholder="describe your event here" required="">
            
                <input type="submit" class="btn btn-primary"  name="loginSubmit" value="SUBMIT">

                
            </div>
            
    </form>
    </div>
    </div>
</body>
</html>    