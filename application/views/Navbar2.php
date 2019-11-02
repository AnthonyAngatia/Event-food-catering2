<header class="header">
    <a href="<?php echo  site_url('Home') ?>">
        <img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" />
    </a>
    <h1>Taste of Africa</h1>
    <div id="sessionVariable">
        <!-- <div id="login-signup-button">
                <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>
                <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign
                        up</button></a>
            </div> -->
        <div id="session-data">
            <img style="margin-left:4em;" onclick="displayLogout();" class="logo" src="<?php echo base_url("Assets/PRO.png"); ?>" />
            <p onclick="displayLogout();"><b><?php echo $user['first_name'] . ' ' . $user['last_name']; ?></b></p>
            <a  href="<?php echo base_url('index.php/HomePage'); ?>" style="display:none;" id="logout"> Log Out </a>
        </div>
    </div>
</header>
<div class="nav">
    <a href="<?php echo site_url('catering')  ?>"><button>Catering</button></a>
    <a class="Order" href="<?php echo site_url('order')  ?>"><button>Menu</button></a>
    <a class="Cart" href="<?php echo site_url('cart')  ?>"><button>Cart</button></a>
    <a class="About us" href="<?php echo site_url('OrderHistory')  ?>"><button>Past Orders</button></a>
</div>
<script>
    function displayLogout() {
        document.getElementById('logout').style.display = "unset";
        document.getElementById('logout').style.marginLeft = "3em";

    }
</script>

<!-- <div id="session-data">
            <img style="margin-left:4em;" onclick="displayLogout();" class="logo" src="<?php //echo base_url("Assets/PRO.png"); ?>" />
            <p onclick="displayLogout();"><b><?php //echo $user['first_name'] . ' ' . $user['last_name']; ?></b></p>
            <a style="margin-left:3em; color:red;" href="<?php //echo base_url('index.php/HomePage'); ?>" style="display:none;" id="logout"> Log Out </a>
        </div> -->