<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat:300&display=swap');
        * {
      box-sizing: border-box;
      margin: 0;
      padding: 0px;
      font-family: 'Montserrat', sans-serif;
      color: #333333;
    }

    header {
      display: flex;
      justify-content: flex-end;


    }

    header a {
      margin-top: -10px;
      margin-right: auto;
    }

    .logo {
      height: 60px;
      width: 60px;
      padding: 5px;

    }

    .header h1 {
      margin-right: auto;
      margin-top: 15px;
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

    .nav button {
      border: 1px solid aliceblue;
      border-radius: 20px;
      background-color: #003366;
      padding: 7px;
      color: white;
      cursor: pointer;
    }


        .nav button:hover {
            color: white;
            border-color: #5a6268;
            border: 2px solid white;
        }

        .wrapper {
            border: 1px solid black;

            font-size: 28px;

            margin: 2em 15em;
            width: 30%;
            min-height: 300px;


            align-items: left;
            /* min-width:300px; */
        }

        .wrapper>* {
            text-align: center;
            margin: 5px;
            padding: 5px;
        }

        .inputlabel>* {
            margin: 5px;
            padding: 5px;
        }

        .wrapper input,
        button {
            margin: 10px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <a href="#" onclick="window.location.replace('CateringC');"><button>Catering</button></a>
        <a class="Order" href=""><button>Order</button></a>
        <a class="Cart" href=""><button>Cart</button></a>
        <a class="About us" href=""><button>About us</button></a>
    </div>
    <div class="wrapper">
        <div>Lipa na MPESA</div>
        <div>Total:</div>
        <div>
            <label for="PhoneNo">Enter Phone Number</label><br></div>
        <div class="inputlabel">
            <input type="tel" name="PhoneNo" id=""><br>
            <button type="submit">Send</button>
            <div>


            </div>
</body>

</html>