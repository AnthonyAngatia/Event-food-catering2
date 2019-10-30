<!--
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
      header {
        display: flex;
        justify-content: flex-end;
        border: 1px solid greenyellow;
      }

      .logo {
        height: 60px;
        width: 60px;
        border: 1px solid tomato;
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
        border: 1px solid greenyellow;
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

      @media (min-width: 768px) {
        .grid-container {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          grid-gap: 1em;
          grid-auto-rows: minmax(200px, auto);
          background: #ddd;
          margin: 5px;
        }
      }

      .box1 {
        grid-column: 1/3;
        grid-row: 1/3;
        position: relative;
      }
      .box1 img {
        max-height: 400px;
        height: 100%;
        width: 100%;
      }
      .box2 {
        position: relative;
      }

      .box2 img {
        max-height: 100%;
        height: 100%;
        width: 100%;
      }
      .box3 {
        position: relative;
      }
      .box3 img {
        max-height: 100%;
        height: 100%;
        width: 100%;
      }
      .box1-inside {
        color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;

        /*border: 1px solid tomato;*/
      }
      .box1-inside h1 {
        font-family: helvetica;
        font-size: 42px;
        text-align: center;
        cursor: pointer;
      }
      .box1-inside p {
        font-family: verdana;
        text-align: center;
      }
      .box2-inside {
        color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;

        /*border: 1px solid tomato;*/
      }
      .box2-inside h1 {
        text-align: center;
        font-family: helvetica;
        cursor: pointer;
      }
      .box2-inside p {
        font-family: verdana;
        text-align: center;
      }
      .mySlides {
        display: none;
      }

      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        border: 1px solid red;
        max-height: 500px;
        background-color: #ddd;
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
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
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
    </style>



    <style2>
      @media (min-width: 768px) {
        .grid-container {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr;
          grid-gap: 1em;
          grid-auto-rows: minmax(200px, auto);
          background: #ddd;
          margin: 5px;
        }
      }

      .box1 {
        grid-column: 1/3;
        grid-row: 1/3;
        position: relative;
      }
      .box1 img {
        max-height: 400px;
        height: 100%;
        width: 100%;
      }
      .box2 {
        position: relative;
      }

      .box2 img {
        max-height: 100%;
        height: 100%;
        width: 100%;
      }
      .box3 {
        position: relative;
      }
      .box3 img {
        max-height: 100%;
        height: 100%;
        width: 100%;
      }
      .box1-inside {
        color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;

        /*border: 1px solid tomato;*/
      }
      .box1-inside h1 {
        font-family: helvetica;
        font-size: 42px;
        text-align: center;
        cursor: pointer;
      }
      .box1-inside p {
        font-family: verdana;
        text-align: center;
      }
      .box2-inside {
        color: whitesmoke;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 100;

        /*border: 1px solid tomato;*/
      }
      .box2-inside h1 {
        text-align: center;
        font-family: helvetica;
        cursor: pointer;
      }
      .box2-inside p {
        font-family: verdana;
        text-align: center;
      }
      .mySlides {
        display: none;
      }

      /* Slideshow container */
      .slideshow-container {
        max-width: 1000px;
        position: relative;
        margin: auto;
        border: 1px solid red;
        max-height: 500px;
        background-color: #ddd;
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
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
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
    </style2>



  </head>
  <body>
    <header>
      <img class="logo" src=src="<?php echo base_url("Assets/logo.jpg"); ?>" />
      <a class="login" href=""><button>Login</button></a>
      <a class="Sign-up" href=""><button>Sign up</button></a>
    </header>
    <div class="nav">
      <a class="Category" href=""><button>Category</button></a>
      <a class="Order" href=""><button>Order</button></a>
      <a class="Cart" href=""><button>Cart</button></a>
      <a class="About us" href=""><button>About us</button></a>
    </div>
    
    
  </body>
</html>
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    echo("
        <!DOCTYPE html>
        <html>
        <head>
        <link rel = 'stylesheet' type = 'text/css' href = 'MenuV.css'></link>
        <meta charset='UTF-8' />
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <meta http-equiv='X-UA-Compatible' content='ie=edge' />
			
	<style>
  @import url('https://fonts.googleapis.com/css?family=Montserrat:300&display=swap');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0px;
    font-family: 'Montserrat', sans-serif;
    color: #333333;
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

  .nav button {
    border: 1px solid aliceblue;
    border-radius: 20px;
    background-color: #003366;
    padding: 7px;
    color: white;
    cursor: pointer;
  }

  .nav button:hover {
    color: white;
    border-color: #5a6268;
    border: 2px solid white;
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

      
      
        .card-wrap {
          display: grid;
          grid-template-columns: 1fr 1fr 1fr 1fr;
          grid-column-gap: 1em;
          font-family: 'Source Sans Pro', sans-serif;
          grid-auto-rows: minmax(300px, auto);
          color: #333333;
        }
        .card-wrap img {
          max-height: 300px;
          height: 100%;
          width: 100%;
        }
        .card-wrap > div {
          background-color: #dddddd;
          box-shadow: 0 8px 6px -6px black;
        }
        .card-wrap h4,
        p {
          padding-left: 1em;
        }
        .checkbox-input {
          display: flex;
          justify-content: space-between;
        }
        #cart_btn{
          cursor: pointer;
      background-color: #003366;
      color: white;
      text-align: center;
      padding: 5px 5px;
      border: none;
      height: 60px;
      width: 160px;
        }
        #cart_btn:hover {
          border: 2px solid white;
        }

      }
    </style>
            
        </head>
        <body>
		
			<!--Navbar-->

            <!--Menu Heading--><br><br>
            <div align = 'center' style = 'color: #003366;'><h1>Menu</h1></div>

            <!--Menu Items-->
        ");
            /*
            foreach (menuItems as $row)
            {
                    echo $row["foodName"];
            }
            */
          //Former Menu Display 
          //   foreach ($menuItems as $row)
          //   {
          //     //echo("<img class='logo' src='"); echo base_url("Assets/logo.jpg'/>"); 

          //       echo("
                    
					// 	<div id = 'Pic' style = 'background-color: white; float: left; border: 1px solid #003366; width: 100px; height: 100px;'>"
          //       ."<img src = '"); echo base_url("uploads/" .$row['foodImage']  ."' height = '100' width = '100'>"    ."<br>" 
          //   ."</div>

            
          //   <div id = 'Details' align = 'center' style = ' background-color: white; float: left; margin: 4px; border: 1px solid #003366; width: 1300px; height: 100px; color: #003366; line-height: 80px;border-radius: 25px;'>   
          //       <!--Display data here from db-->" 
          //       ."<a style = 'display: inline-block; width: 200px; text-align: left;'><h2>" .$row['foodName'] ."</h2></a>"
					// 		  ."<a style = 'display: inline-block; width: 200px; text-align: center;'><h2>" .$row['foodPrice'] ."</h2></a>"
					// 		  ."<a style = 'display: inline-block; width: 200px; text-align: right;'><h2>" .$row['foodDuration'] ."</h2></a>"
          //       ."</div><br><br>"
						
					// 	."<div id = 'checkBox' style = 'float: right; margin: 4px; border: 1px solid #003366; width: 15px; height: 15px; color: #003366;'>
          //       <input type = 'checkbox' name = " .$row['foodName'] ."  value =" .$row['foodName']." >
					// 	</div>	                          

                        
                    
          // "); 

            echo('
				<!--Outer Div-->
                <div style = "background-color: white; color: #003366; border: 1px solid white;border-radius: 25px;"><br><br><br>
                <form action ="MenuC/saveMenuData" method="post">
				');
                        
        echo(
          '<!--Footnote-->
          <div class="card-wrap">
          ');
    
          foreach ($menuItems as $row){
            echo('
            <div class="card">
    
              <img src="');  echo base_url('uploads/' .$row['foodImage']  .'" height = "100" width = "100">
              
              <div class="info" style = "">
                <h2> ' .$row['foodName'] .'</h2><br>
                <h3> Sh ' .$row['foodPrice'] .'</h3><br>
    
    
                <div class="checkbox-input">
                <h3> Duration: ' .$row['foodDuration'] .' minutes</h3>
                  <input
                    type =  "checkbox"
                    name =  "' .$row['foodName'] .'"
                    value = "' .$row['foodName'] .'"
                    id=""
                    style="width:30px;height:30px;"
                  />
                </div><br>
    
              </div>
    
            </div>
            ');
          }
          echo('
          </div>'); 
          
          
					
					
            
			echo('</div>');
			echo("<br><br>");
			
      echo('
          <div id = "formButtons"align = "center">
					<input id = "cart_btn" align = "center" type = "submit" name = "Add_to_Cart"  value = "Add to Cart" style = "" >
          </div>
        </form>
				
				');


    
			
      




//   echo('

//       <div class="card">
//         <img src="Chicken.jpg" alt="" />
//         <div class="info">
//           <H4>Chicken</H4>
//           <h4>Sh 100</h4>
//           <div class="checkbox-input">
//             <p>Duration: 30mins</p>
//             <input
//               type="checkbox"
//               name="Foodx"
//               id=""
//               style="width:30px;height:30px;"
//             />
//           </div>
//         </div>
//       </div>
//       <div class="card">
//         <img src="Chicken.jpg" alt="" />
//         <div class="info">
//           <H4>Chicken</H4>
//           <h4>Sh 100</h4>
//           <div class="checkbox-input">
//             <p>Duration: 30mins</p>
//             <input
//               type="checkbox"
//               name="Foodx"
//               id=""
//               style="width:30px;height:30px;"
//             />
//           </div>
// 		</div>
		
// 	  </div>
// 	  <div class="card">
// 			<img src="Chicken.jpg" alt="" />
// 			<div class="info">
// 			  <H4>Chicken</H4>
// 			  <h4>Sh 100</h4>
// 			  <div class="checkbox-input">
// 				<p>Duration: 30mins</p>
// 				<input
// 				  type="checkbox"
// 				  name="Foodx"
// 				  id=""
// 				  style="width:30px;height:30px;"
// 				/>
// 			  </div>
// 			</div>
//     </div>

//     <div class="card">
// 			<img src="Chicken.jpg" alt="" />
// 			<div class="info">
// 			  <H4>Chicken</H4>
// 			  <h4>Sh 100</h4>
// 			  <div class="checkbox-input">
// 				<p>Duration: 30mins</p>
// 				<input
// 				  type="checkbox"
// 				  name="Foodx"
// 				  id=""
// 				  style="width:30px;height:30px;"
// 				/>
// 			  </div>
// 			</div>
//     </div>

// </div>
    
// </body>
// </html>
//           ');  




?>

<?php
//Cart Items Processing
//Declare array for cart items
$cartItems = array();

foreach($menuItems as $row){
  if(ISSET($_POST[$row["foodName"]])){
    array_push($cartItems, $row["foodName"]);   
  }
}






?>




