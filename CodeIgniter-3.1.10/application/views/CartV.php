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
			<header>
				<img class='logo' src='/Assets/Logo.jpg' alt='logo' />
				<a class='login' href=''><button>Login</button></a>
				<a class='Sign-up' href=''><button>Sign up</button></a>
			</header>
			<div class='nav'>
				<a class='Category' href=''><button>Category</button></a>
				<a class='Order' href=''><button>Order</button></a>
				<a class='Cart' href=''><button>Cart</button></a>
				<a class='About us' href=''><button>About us</button></a>
			</div>
            

            <!--Menu Heading-->
            <div align = 'center' style = 'color: #003366;font-style: oblique'><h1>Cart</h1></div>




            <!--Cart Items-->
        
			<table id='customers'>
  <tr>
    <th>Food Item</th>
    <th>Unit Price</th>
    <th>Quantity</th>
	<th>Preparation Duration</th>
	<th>Subtotal</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
	<td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Berglunds snabbköp</td>
    <td>Christina Berglund</td>
    <td>Sweden</td>
	<td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td>Centro comercial Moctezuma</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
	<td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td>Ernst Handel</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
	<td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td>Island Trading</td>
    <td>Helen Bennett</td>
    <td>UK</td>
	<td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  
</table><br>

					<form action='MenuC' method='post' align = 'center' style = 'color: #003366;'>
					<input type = 'submit' name = 'Checkout' value = 'Checkout' style = 'font-style: oblique;background-color: #003366; color: white; text-align: center; padding: 5px 5px; border: none; height: 60px; width: 90px; border-radius: 25px;' >
					
				</form>




				


			");

    
			echo(
			'<!--Footnote-->
			

    
</body>
</html>
          ');  




?>




