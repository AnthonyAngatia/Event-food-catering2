
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
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
<header class="header">
    <img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" />
    <h1>Taste of Africa</h1>
    <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>

    <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign up</button></a>
</header>
<div class="nav">
    <a class="Menu" href="" onclick="window.location.replace('MenuC')"><button>Menu</button></a>
    <a class="Cart" href="" onclick="window.location.replace('CartC')"><button>Cart</button></a>
    <a class="Catering" href="" onclick="window.location.replace('CateringMenuC')"><button>Catering</button></a>
    <!--<a class='viewPastOrders' href='#' onclick='window.location.replace('ViewPastOrdersC');'><button>View Past Orders</button></a>-->
</div><br><br>

      <!--Order Items-->
      <div align = 'center' style = 'color: #003366;font-style: oblique'><h1>Past Order History</h1></div><br><br>
      
        
        <table id='customers'>
        <tr>
            <th>Total Order Price</th>
            <th>Order Status</th>
            <th>Order Duration</th>
            <th>Date of Order</th>
            
        </tr>
        
        <tr>
           <td></td>
           <td></td>
           <td></td>
           <td></td>
           <td></td>

        </tr>
        <?php
          foreach ($orderDetails as $row)
          {
           echo("
            
            <tr>
              <td>"           .$row['orderPrice']                              ."</td>
              <td>"           .$row['orderStatus']                             ."</td>
              <td>"           .$row['orderDuration']    ." minutes"            ."</td>
              <td>"           .$row['dateCreated']                             ."</td>
              
            </tr>
            ");
          }

          // TEST
          // echo("<pre>");
          // print_r($orderDetails);
          // echo("</pre>");

          // echo("<pre>");
          // print_r($userDetails);
          // echo("</pre>");

        
        
        ?>




         
        
        </table><br><br><br><br>

        <div>
          <!--<button id = "confirmOrder"><input type = 'submit' name = 'Confirm_Order'  value = 'Confirm_Order' style = 'font-style: oblique;background-color: #003366; color: white; text-align: center; padding: 5px 5px; border: none; height: 60px; width: 160px; border-radius: 25px;' ></button>-->
          <!--<button id = "viewPastOrders"><a style = 'font-style: oblique;background-color: #003366; color: white; text-align: center; padding: 5px 5px; border: none; height: 60px; width: 160px; border-radius: 25px;' ></a></button>-->
        </div>

        <!-- <script>
          document.getElementById('confirmOrder').addEventListener('click', showInfoWindow);
          function showInfoWindow(){
            alert("You have successfully completed your order");
          }
        </script> -->
      



    
</body>
</html>