<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <p>Welcome here</p>
    <form action ="<?=base_url()?>index.php/TestC/saveMenuData" method="post" align = "center" style = "color: #003366;">
		<input type = "submit" name = "Add_to_Cart"  value = "Add_to_Cart" style = "font-style: oblique;background-color: #003366; color: white; text-align: center; padding: 5px 5px; border: none; height: 60px; width: 90px; border-radius: 25px;" >
		<input type = "checkbox" name = 'food'  value = 'food' >
	</form>	
</body>
</html>