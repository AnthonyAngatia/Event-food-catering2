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
  </style>
</head>

<body>
  <!--Header-->
  <header class="header">
    <img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" />
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




<div class="container">

	
    <!-- Status message -->

	
    <!-- Registration form -->
    <div class="wrapper">
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="FIRST NAME" class="form-control"  value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                <span class="help-block"><?php echo form_error('first_name','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="text" name="last_name"  class="form-control"  placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                <span class="help-block"><?php echo form_error('last_name','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="email"  class="form-control"   name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <span class="help-block"><?php echo form_error('email','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control"   name="password" placeholder="PASSWORD" required>
                <span class="help-block"><?php echo form_error('password','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="password"   class="form-control"  name="conf_password" placeholder="CONFIRM PASSWORD" required>
                <span class="help-block"><?php echo form_error('conf_password','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <span class="help-block"><?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?></span>
                <div class="radio">
                    <label>
                        <input type="radio"   name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio"    name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="phone"  class="form-control"   placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <span class="help-block"><?php echo form_error('phone','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="send-button">
            <span class="help-block"><input type="submit"  class="btn btn-primary" name="signupSubmit" value="CREATE ACCOUNT"></span>
            <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
        <p>Already have an account? <a href="#" onclick = "window.location.replace('login');">Login here</a></p>
    </div>
</div>