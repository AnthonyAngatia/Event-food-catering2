<! DOCTYPE html>
<html>
<head> 
	<style>

	* {
      box-sizing: border-box;
      margin: 0;
      padding: 0px;
    }
    body
    {
      background-color: floralwhite;
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
    .insert
    {
      border:9px solid #003366;
      width:600px;
      margin-left: 400px;
      margin-top: 200px;
      padding:30px;
      text-align: center;

    }
	</style>
</head>
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
<body>
	<form method = "post" action = "admin/form_validation" class = "insert">
<br>
<label> Food Price</label> <input type = "text" name = "foodPrice" placeholder="Enter food price">
<br><br><br>
<?php echo form_open_multipart('Admin/do_upload');?>
<label> Food Image</label> <input type = "file" name = "foodImage" placeholder="Upload foodImage">
<br><br><br>

<label> Food Type</label> <input type = "text" name = "foodType" placeholder="Enter food type">
<br><br><br>
<label> Food Duration</label> <input type = "text" name = "foodDuration" placeholder="Enter food type">
<br><br><br>
<label> Food Name</label> <input type = "text" name = "foodName" placeholder="Enter food type">

<br><br>
<input type = "submit" value = "insert">

</form>
	</body>
	</html>