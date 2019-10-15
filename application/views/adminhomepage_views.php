<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<title>  ADMIN DASHBOARD</title>
	<script type = "text/javascript" src = "https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type = "text/javascript" src = "https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script type = "text/javascript " src = "https://cdn.datatables.net/1.10.15/jquery.dataTables.semanticui.min.js"> </script>
	<script type = "text/javascript" src = "https://cdnjs.cloudfare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type = "text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style media = "screen">
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
	 <tr style="background-color: #EEE;">
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
		.header input[type=text] {
  float: right;
  padding: 6px;
  border: none;
  margin-top: 8px;
  margin-right: 16px;
  font-size: 17px;
}	
</style>
 </head>
 <header class="header">
    <img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" />
    <h1>Taste of Africa</h1>
    <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>

    <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign up</button></a>
     <input type="text" placeholder="Search..">
  </header>
<body>

<div class="nav">
    <a class="Category" href=""><button>Category</button></a>
    <a class="Order" href=""><button>Order</button></a>
    <a class="Cart" href=""><button>Cart</button></a>
    <a class="About us" href=""><button>About us</button></a>
  </div> 



 ?>

 <?php
 if(isset($user_data))
 {
 		
 		?>
 		<?php echo form_open_multipart('Ahomepage/update_data');?>
 			<input type = "hidden" name = "eid">
 		<label>Food Name </label> <input type = "text" name = "foodName" placeholder="Enter foodname">
		<br><br><br>
		<label> Food Price</label> <input type = "text" name = "foodPrice" placeholder="Enter food price">
		<br><br><br>
		<?php echo form_open_multipart('Admin/do_upload');?>
		<label> Food Image</label> <input type = "file" name = "foodImage" placeholder="Upload foodImage">
		<br><br><br>

		<label> Food Type</label> <input type = "text" name = "foodType" placeholder="Enter food type">
		<br><br>
		<input type = "submit" value = "UPDATE DATA">
	</form>

 		<?php
 	
 }

	?>
<table > 
	<tr>
		<th> Foodname</th>
		<th>Foodprice</th>
		<th>FoodImage</th>	
		<th>Foodtype</th> 
		<th> Delete</th>
		<th>Edit</th>
	</tr>
		
	<?php

     $fetch_data = $this-> admin_model ->fetch_data();
	if($fetch_data->num_rows() > 0)
	{
		foreach($fetch_data -> result() as $row)
		{
	?>
			<tr>
				<td> <?php echo $row -> foodName; ?> </td>
				<td> <?php echo $row -> foodPrice; ?> </td>
				<td><img src = "<?php echo base_url();?>uploads/<?php echo $row ->foodImage;?>" style = "width :90px; height: 90px;"></td>
				<td> <?php echo $row -> foodType; ?> </td>
				<td><a href = "<?php echo site_url();?>/ahomepage/delete_data/<?php echo $row -> id; ?> " onclick = "return confirm('Are you sure ?')"> Delete </td>
					<br>
				<td><a href = "<?php echo site_url();?>/ahomepage/edit_data/<?php echo $row -> id; ?>" > Edit </td>

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

<br><br><br>
<div id = "menu">
<a onclick ="window.location.replace('Admin')" ><button> ADD TO MENU </button></a>
	<a onclick = "window.location.replace('Ahomepage')"><button>CHECK REPORTS </button></a>
	</div>

</body>
</html>
<script type = "text/javascript">
	$(document).ready(function())
	{

		$('#datatable').dataTable();

	}
	</script>
	<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}
</script>