<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    echo("
        <!DOCTYPE html>
        <html>
        <head>
        <link rel = 'stylesheet' type = 'text/css' href = 'MenuV.css'></link>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <meta http-equiv='X-UA-Compatible' content='ie=edge' />
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

		
		
    </style>
            
        </head>
        <body>
		
			<!--Navbar-->
			<header class='header'>
      <img class='logo' src='"); echo base_url("Assets/logo.jpg'/>");
      echo("<h1>Taste of Africa</h1>");  
      echo("
      <a class='login' href='#' onclick='window.location.replace('users/login');'><button>Login</button></a>
      <a class='Sign-up' href='#' onclick='window.location.replace('users/registration');'><button>Sign up</button></a>
      </header>
      
			<div class='nav'>
        <a class='Menu' href='' onclick='window.location.replace('MenuC')'><button>Menu</button></a>
        <a class='Cart' href='' onclick='window.location.replace('CartC')'><button>Cart</button></a>
        <a class='Catering' href='' onclick='window.location.replace('CateringMenuC')'><button>Catering</button></a>
        <!--<a class='viewPastOrders' href='#' onclick='window.location.replace('ViewPastOrdersC');'><button>View Past Orders</button></a>-->
      </div><br>

            

            <!--Menu Heading-->
            <div align = 'center' style = 'color: #003366;font-style: oblique'><h1>Cart</h1></div><br>

            <!--Cart Items-->
            <form action='CartC/saveCartData' method='post' align = 'center' style = 'color: #003366;'>
        
            <table id='customers'>
            <tr>
                <th>Food Item</th>
                <th>Unit Price</th>
                <th>Preparation Duration</th>
                <th>Quantity</th>
                <th></th>
  	            
              </tr>
            ");
            if(!empty($cartItems )){
            for($i = 0; $i < count($cartItems); $i++ )
            {
             echo("
              
              <tr>
                <td>" .$cartItems[$i][0]['foodName']                                           ."</td>
                <td>" ."Sh " .$cartItems[$i][0]['foodPrice']                                   ."</td>
                <td>" .$cartItems[$i][0]['foodDuration'] ." minutes"                           ."</td>
                <td>" ."<input type = 'number' name = '" .$cartItems[$i][0]['foodName'] ."' style = 'text-align: center; width: 50px; height: 20px; ' >"  ."</td>
                <td> <!--<form action = 'CartC/deleteCartItem' method = 'post'>-->
                        <input type = 'submit' name = 'Delete' value = 'Delete' style = 'font-style: oblique;background-color: #003366; color: white; text-align: center; padding: 5px 5px; border: none; height: 60px; width: 70px; border-radius: 25px;'>
                        <input type = 'hidden' name = 'cartItemToDelete' value = '" .$cartItems[$i][0]['foodName'] ."'/>
                      <!--</form>-->
                </td>
              
              </tr>
              ");
            }
          }


            echo("
            
            </table><br><br><br><br>
            ");

        if(!empty($cartItems)){
            
        echo("

					
					  <input type = 'submit' name = 'Checkout' value = 'Checkout' style = 'font-style: oblique;background-color: #003366; color: white; text-align: center; padding: 5px 5px; border: none; height: 60px; width: 70px; border-radius: 25px;' >
					
          </form>
        ");
            }


		

    
			echo(
			'<!--Footnote-->
			

    
      </body>
    </html>
          ');  




?>




