<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta http-equiv = "X-UA-Compatible" content = "IE=edge">
	<title>  ADMIN DASHBOARD</title>
  <link rel = "stylesheet" href = "<?php echo base_url('resources/bootstrap.min.css');?>"/>
	<script type = "text/javascript" src = "https://code.jquery.com/jquery-1.12.4.js"></script>
	<script type = "text/javascript" src = "https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
	<script type = "text/javascript " src = "https://cdn.datatables.net/1.10.15/jquery.dataTables.semanticui.min.js"> </script>
	<script type = "text/javascript" src = "https://cdnjs.cloudfare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.js"></script>
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script type = "text/javascript" src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
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
      background-color: #003366;

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
.card-wrapper{
	display:grid;
	grid-template-columns: 1fr 1fr 1fr 1fr;
	grid-gap:1em
	grid-auto-row :minmax(300px,auto);
	}
	 .Dishes {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
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
    .Description {
      display: grid;
      grid-template-columns: 1fr 1fr 1fr 1fr;
      grid-gap: 1em;
      grid-auto-rows: minmax(100px, auto);
      margin-left: 5px;
      margin-right: 5px;
    }
    #update
    {
      background-color: floralwhite;
      border:3px solid #003366;
      width:600px;
      text-align: center;
      padding :30px;
      margin-left: 400px;
      margin-top: 100px;
    }

</style>
 </head>
 <!-- <header class="header">
    <img class="logo" src="<?php //echo base_url("Assets/logo.jpg"); ?>" />
    <h1>Taste of Africa</h1>
    <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>

    <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign up</button></a>
     <input type="text" placeholder="Search..">
  </header>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



 

 <?php
 if(isset($user_data))
 {
 		
 		?>
    <form id = "update">
      <h2> UPDATE FORM</h2>
 		<?php echo form_open_multipart('ahomepage/update_data');?>
 			<input type = "hidden" name = "eid">

		<br><br><br>
		<label> Food Price</label> <input type = "text" name = "foodPrice" placeholder="Enter food price">
		<br><br><br>
		<?php echo form_open_multipart('Admin/do_upload');?>
		<label> Food Image</label> <input type = "file" name = "foodImage" placeholder="Upload foodImage">
		<br><br><br>

		<label> Food Type</label> <input type = "text" name = "foodType" placeholder="Enter food type">
		<br><br><br>
    <label>Food Name </label> <input type = "text" name = "foodDuration" placeholder="Enter Food Duration">
    <br><br><br>
    <label>Food Name </label> <input type = "text" name = "foodName" placeholder="Enter foodname">
  <br><br><br>
		<input type = "submit" value = "UPDATE DATA" name = "update">
	</form>

 		<?php
 	
 }

	?>
<table > 
	<tr>
		<th> Food Id</th>
		<th>Food Price</th>
		<th>Food Image</th>	
		<th>Food Type</th> 
    <th>Food Duration</th> 
    <th>Food Name</th> 

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

				<td> <?php echo $row -> foodID; ?> </td>
				<td> <?php echo $row -> foodPrice; ?> </td>
				<td><img src = "<?php echo base_url();?>uploads/<?php echo $row -> foodImage;?>" style = "width :100px; height: 100px;"></td>
				<td> <?php echo $row -> foodType; ?> </td>
          <td> <?php echo $row -> foodDuration; ?> </td>
            <td> <?php echo $row -> foodName; ?> </td>
				<td><a href = "<?php echo site_url();?>/ahomepage/delete_data/<?php echo $row -> foodID; ?> " onclick = "return confirm('Are you sure ?')"> Delete </td>
					<br>
				<td><a href = "<?php echo site_url();?>/ahomepage/edit_data/<?php echo $row -> foodID; ?>" > Edit </td>

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

<br>
<br>
 
<br><br><br>
<div id = "menu">
<a onclick ="window.location.replace('Admin')" ><button> ADD TO MENU </button></a>
	<a onclick = "window.location.replace('controllereports')"><button>CHECK REPORTS </button></a>
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