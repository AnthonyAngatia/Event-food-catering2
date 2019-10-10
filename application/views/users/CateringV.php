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
        #cont {
            color: red;
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
            <p><b><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></b></p>
            <a href="<?php echo base_url('index.php/Users/login'); ?>"> Log Out </a>
        </div>

    </header>
    <div class="nav">
        <a href="#" onclick="window.location.replace('CateringC');"><button>Catering</button></a>
        <a class="Order" href=""><button>Order</button></a>
        <a class="Cart" href=""><button>Cart</button></a>
        <a class="About us" href=""><button>About us</button></a>
    </div>

    <div class="wrapper">
        <form action="http://localhost/Event-food-catering3/index.php/Users/putting_data" method="post">
            <div class="form-group">
                <label>Number of Attendes</label>
                <input type="range" list="tickmarks" name="No_of_people">
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
                <div class="food_types">
                    <h3>Carbohydrates</h3>
                    <input type="checkbox" name="Carbohydrates[]" value="100" id = "cab" onclick = "printChecked();"> Rice<br>
                    <input type="checkbox" name="Carbohydrates[]" value="200" id = "cab"> Potatoes<br>
                    <input type="checkbox" name="Carbohydrates[]" value="100" id = "cab"> Ugali<br>
                    <input type="checkbox" name="Carbohydrates[]" value="200" id = "cab"> Spaghetti<br>
                </div>
                
            
            <script>
function getValue(){
var test1 = document.getElementById('test1');
var test1Value = '';
if(test1.checked){
    //alert(test1.value);
     test1Value = parseInt(test1.value);
}
    var test2 = document.getElementById('test2');
    var test2Value = '';
    if(test2.checked){
    //alert(test1.value);
     test2Value = parseInt(test2.value);
}
var totalPrice = 0;
 totalPrice = test1Value + test2Value;
   alert(totalPrice);
}
</script>
            
                <div class="food_types">
                    <h3>Proteins</h3>
                    <input type="checkbox" name="Proteins[]" value="100"> Beef<br>
                    <input type="checkbox" name="Proteins[]" value="150"> Pork<br>
                    <input type="checkbox" name="Proteins[]" value="200"> Chicken<br>
                    <input type="checkbox" name="Proteins[]" value="250"> Fish<br>
                </div>
                <!--     
                <div class="food_types">
                    <h3>Salad</h3>
                    <input type="checkbox" name="Salad[]" value="100"> Drinks<br>
                    <input type="checkbox" name="Salad[]" value="200"> Proteins<br>
                    <input type="checkbox" name="Salad[]" value="100"> Salads<br>
                    <input type="checkbox" name="Salad[]" value="200"> Carbohybrids<br>
                </div>
                <div class="food_types">
                    <h3>Drinks</h3>
                    <input type="checkbox" name="Drinks[]" value="100"> Drinks<br>
                    <input type="checkbox" name="Drinks[]" value="200"> Proteins<br>
                    <input type="checkbox" name="Drinks[]" value="100"> Salads<br>
                    <input type="checkbox" name="Drinks[]" value="200"> Carbohybrids<br>
                </div>
    -->
                <label>Location</label>
                <input type="textfield" class="form-control" name="Location" placeholder="location" required="">
                <label>Start Time</label>
                <input type="time" class="form-control" name="Start_time" required="">
                <label>End Time</label>
                <input type="time" class="form-control" name="End_time" required="">
                <label>Description</label>
                <input type="textfield" class="form-control" name="Description" placeholder="describe your event here" required="">

                <input type="submit" class="btn btn-primary" name="caterSubmit" value="SUBMIT">


            </div>

        </form>
    </div>
</body>

</html>