<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Taste of Africa</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Montserrat&display=swap');

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0px;
      font-family: 'Montserrat', sans-serif;
      color: #333333;
    }

    h1 {
      /* text-align: center; */
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

    button {
      border: 1px solid aliceblue;
      border-radius: 20px;
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
  <!--Header-->
  <!-- <header class="header">
    <img class="logo" src="<?php //echo base_url("Assets/logo.jpg"); 
                            ?>" />
    <h1>Taste of Africa</h1>
    <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>

    <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign up</button></a>
  </header> -->
  <!-- <div class="nav">
    <a class="Category" href="<?php //echo site_url('catering')  
                              ?>"><button>Catering</button></a>
    <a class="Order" href=""><button>Order</button></a>
    <a class="Cart" href=""><button>Cart</button></a>
    <a class="About us" href=""><button>About us</button></a>
  </div> -->



  <div class="container">


    <!-- Status message -->


    <!-- Login form -->
    <div class="wrapper">
      <h2>Login</h2>
      <p>Please fill in your credentials to login.</p>
      <p style="color:red;">
        <?php
        if (!empty($success_msg)) {
          echo '<p class="status-msg success">' . $success_msg . '</p>';
        } elseif (!empty($error_msg)) {
          echo '<p class="status-msg error">' . $error_msg . '</p>';
        }
        ?>
      </p>

      <form action="" method="post">
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="EMAIL" required="">
          <span class="help-block"><?php echo form_error('email', '<p class="help-block">', '</p>'); ?></span>
        </div>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="PASSWORD" required="">
          <span class="help-block"><?php echo form_error('password', '<p class="help-block">', '</p>'); ?></span>
        </div>
        <div class="send-button">
          <input type="submit" class="btn btn-primary" name="loginSubmit" value="LOGIN">
        </div>
      </form>
      <p>Don't have an account? <a href="#" onclick="window.location.replace('registration');">Register </a> </p>
    </div>
  </div>