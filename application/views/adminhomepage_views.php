<!DOCTYPE html>
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
 </head>
<body>
<div id = "nav">
	<div id = "img">
	<img src = "<?php echo base_url('assets/logo.png'); ?>" style = "width:30px; height: 30px;">
	</div>
	<a class="active" href="#home">Home</a>
  	<a href="#Logout">Logout</a>
</div>
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
<br><br><br>
<div id = "menu">
<a onclick ="window.location.replace('Admin')" ><button> ADD TO MENU </button></a>
</div>

</body>
</html>