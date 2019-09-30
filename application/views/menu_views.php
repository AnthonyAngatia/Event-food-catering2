<!	DOCTYPE html>
<html>
<head> 
	<style>
		#img
	{

		float:left;
		width : 20px;
		height : 20px;
		

	}
	#nav
	{
			text-align: right;
			height : 40px;
			border-bottom: 1px solid #000;

	}
	#nav a 
	{
		padding: 14px 16px;
  		text-decoration: none;
  		font-size: 17px;
	}
	#nav a:hover {
  		background-color: #ddd;
  		color: black;
	}
	#nav a.active {
  		background-color: #31455D ;
  		color: white;
		}
	#view
	{
		table-layout: fixed;
  		width: 100%;
  		border-collapse: collapse;
  		border: 3px solid #31455D;
	}
	th, td {
  		padding: 20px;
	}
	thead th:nth-child(1) {
  		width: 30%;
	}
	th {
  		letter-spacing: 2px;
	}
	td {
  		letter-spacing: 1px;
	}
	tbody td {
  		text-align: center;
	}
	thead {
  
  		text-shadow: 1px 1px 1px black;
	}
	

	</style>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		
</head>
<body> 
<div id = "nav">
	<div id = "img">
	<img src = "<?php echo base_url('assets/logo.png'); ?>" style = "width:30px; height: 30px;">
	</div>
	<a class="active" href="#home">Home</a>
  	<a href="#Logout">Logout</a>
</div>
<br>
<br><br><br>
<h3> ADDING FOOD TO MENU </h3>
<form method = "post" action = "Admin/form_validation">
Food Name : <input text = "name" name = "foodname" >
<br><br>
Food Price : <input type = "name" name = "foodprice">
<br>
<br>

Food Image : <input type = "file" name = "foodImage" value = "upload_image">
<br> <br>

Food Type : <input type = "name" name = "foodtype">
<br>
<br>
<input type = "submit" value = "Add to Menu">
</form>
<br><br><br><br><br>