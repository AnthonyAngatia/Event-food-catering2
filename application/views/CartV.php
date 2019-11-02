<?php
defined('BASEPATH') or exit('No direct script access allowed');

echo ("
        <!DOCTYPE html>
        <html>
        <head>
        <link rel = 'stylesheet' type = 'text/css' href = 'MenuV.css'></link>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <meta http-equiv='X-UA-Compatible' content='ie=edge' />
		<title>Taste of Africa</title>	
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
    cursor: pointer;

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
  #session-data{
    cursor: pointer;
  }


		#customers {
		font-family: 'Trebuchet MS', Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
		}

		#customers td, #customers th {
		border: 1px solid #ddd;
		padding: 8px;
		}

		#customers tr:nth-child(even){background-color: #f2f2f2;}

		#customers tr:hover {background-color: #ddd;}

		#customers th {
		padding-top: 12px;
		padding-bottom: 12px;
		text-align: left;
		background-color: #003366;
		color: white;
    }
    #checkout {
      cursor: pointer;
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 5px 5px;
      border: none;
      height: 60px;
      width: 160px;
    }

    #checkout:hover {
      border: 2px solid white;
    }
    #delete{
      background-color: #003366;
       color: white; 
       text-align: center; 
       padding: 5px 5px; 
       border: none; 
       height: 40px; 
       min-width: 90px;
    }
    #delete:hover{
      cursor:pointer;
      border:2px solid red;
      border-radius:10px;
      border-color:red;
      font-size:11pt;
      
    }

		
		
    </style>
            
        </head>
        <body>
		
			<!--Navbar-->
			

            

            <!--Menu Heading-->
            <div align = 'center' style = 'color: #003366; margin-top:1em;'><h1>Cart</h1></div><br>

            <!--Cart Items-->
            <form action='http://localhost/Event-food-catering3/index.php/CartC/saveCartData' method='post' align = 'center' style = 'color: #003366;'>
        
            <table id='customers'>
            <tr>
                <th>Food Item</th>
                <th>Unit Price</th>
                <th>Preparation Duration</th>
                <th>Quantity</th>
                <th></th>
  	            
              </tr>
            ");
if (!empty($cartItems)) {
  for ($i = 0; $i < count($cartItems); $i++) {
    echo ("
              
              <tr>
                <td>" . $cartItems[$i][0]['foodName']                                           . "</td>
                <td>" . "Sh " . $cartItems[$i][0]['foodPrice']                                   . "</td>
                <td>" . $cartItems[$i][0]['foodDuration'] . " minutes"                           . "</td>
                <td>" . "<input type = 'number' name = '" . $cartItems[$i][0]['foodName'] . "' style = 'text-align: center; width: 80px; height: 30px; ' >"  . "</td>
                <td> <!--<form action = 'CartC/deleteCartItem' method = 'post'>-->
                        <input id = 'delete' type = 'submit' name = 'Delete' value = 'Delete' style = ''>
                        <input type = 'hidden' name = 'cartItemToDelete' value = '" . $cartItems[$i][0]['foodName'] . "'/>
                      <!--</form>-->
                </td>
              
              </tr>
              ");
  }
}


echo ("
            
            </table><br><br><br><br>
            ");

if (!empty($cartItems)) {

  echo ("

  <button id='checkout'><input type = 'submit' name = 'Checkout' value = 'Checkout' style='background-color: #003366; color: white; border:none; cursor:pointer;'></button>
					  
					
          </form>
        ");
}





echo ('<!--Footnote-->
			

    
      </body>
    </html>
          ');
