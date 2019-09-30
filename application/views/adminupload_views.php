<!	DOCTYPE html>
<html>
<head> 
	<style>
		#img{

			width : 40px;
			height : 40px;
		}
		#nav
		{

		}
	</style>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		
</head>
<body> 
<div id = "nav">
	<img id = "img" src = "<?php echo base_url("assets/logo.png");?>">
	<a href = "#" > Sign Up </a>
	<a href = "#" > Log In </a>
	<a href = "#" > Cart </a>
	<a href = "#" > Catering </a>
</div>
<br>
<br><br><br>

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
<h3>View Menu </h3>
<table id = "view">
	<tr>
		<th> Foodname</th>
		<th>Foodprice</th>
		<th>FoodImage</th>
		<th>Foodtype</th>
		<th>Delete </th>

	</tr>
	<?php
	if($fetch_data -> num_rows() > 0)
	{
		foreach ($fetch_data -> result() as $row)
		{
			?>
			<tr>
				<td> <?php echo $row -> foodName; ?> </td>
				<td> <?php echo $row -> foodPrice; ?> </td>
				<td> <?php echo $row -> foodImage; ?> </td>
				<td> <?php echo $row -> foodType; ?> </td>
				<td><a href = "#" class = "delete_data" id = "<?php echo $row-> id ;?>" >Delete</a></td>
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
</table>
<script>
	$(document).ready(function(){
		$('.delete_data').click(function(){
			var id = $(this).attr("id");
			if(confirm("Are you sure you want to delete this?"))
			{
				window.location = "<?php echo base_url('index.php/Admin/delete_data'); ?>" + id;
			}
			else
			{
				return false;
			}


		});


	});
	</script>
<h3> Delete Food Items</h3>

</body>
</html>