<!DOCTYPE html>
<html>
<head>
	<title>CATERING PAGE</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
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

	</style>
</head>
<body>
	 <header class="header">
    <img class="logo" src="<?php echo base_url('Assets/logo.jpg'); ?>" />
    <h1>Taste of Africa</h1>
    <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>

    <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign up</button></a>
  </header>
  <div class="nav">
    <a class="Category" href=""><button>Category</button></a>
    <a class="Order" href=""><button>Order</button></a>
    <a class="Cart" href=""><button>Cart</button></a>
    <a class="About us" href=""><button>About us</button></a>
  </div>
<br>
<br>
<br>
<div class="dropdown">
  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Show Entries
  </a>
<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#">1</a>
    <a class="dropdown-item" href="#">5</a>
    <a class="dropdown-item" href="#">10</a>
  </div>
</div>
<br>
<br>
<br>
<table class="table">
  <thead class="thead-light">
    <tr>
     

      <th scope="col">Catering ID</th>
      <th scope="col">Number of People</th>
      <th scope="col">Carbohydrate</th>
      <th scope="col">Protein</th>
      <th scope="col">Salad</th>
      <th scope="col">Drink</th>
      <th scope="col">Description</th>
      <th scope="col">Location</th>
      <th scope="col">Start Time</th>
      <th scope="col">End Time</th>
      <th scope="col">Order Time</th>
      <th scope="col">User Id</th>



    </tr>
  </thead>
  <tbody>
    <?php   
    $fetch_data = $this-> Cateringe_model ->fetch_data();
    if($fetch_data->num_rows() > 0)
  {
    foreach($fetch_data -> result() as $row)
    {
  ?>
      <tr>
        <td><?php echo $row -> Catering_id;?> </td>
        <td> <?php echo $row -> No_of_people; ?> </td>
        <td> <?php echo $row -> Carbohydrate; ?> </td>
        <td> <?php echo $row -> Protein; ?> </td>
        <td> <?php echo $row -> Salad; ?> </td>
        <td> <?php echo $row -> Drink; ?> </td>
        <td> <?php echo $row -> Description; ?> </td>
        <td> <?php echo $row -> Location; ?> </td>
        <td> <?php echo $row -> Start_time; ?> </td>
        <td> <?php echo $row -> End_time; ?> </td>
        <td> <?php echo $row -> Order_Time; ?> </td>
        <td> <?php echo $row -> User_Id; ?> </td>




            </tr>

      <?php

    }
  } 
  else
  {
  ?>
    <tr>
         <td colspan = "3"> No data was entered </td>
     </tr>
     <?php
  

  
  }
  ?>  


   


  </tbody>
</table>


</body>

</html>