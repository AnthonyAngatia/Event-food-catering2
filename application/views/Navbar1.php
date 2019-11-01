<!--This nav has no session -->
<header class="header">
        <a href="<?php echo site_url('HomeU')  ?>"><img class="logo" src="<?php echo base_url("Assets/logo.jpg"); ?>" /></a>
        
        <h1>Taste of Africa</h1>
        <a class="login" href="#" onclick="window.location.replace('users/login');"><button>Login</button></a>
        <a class="Sign-up" href="#" onclick="window.location.replace('users/registration');"><button>Sign
                up</button></a>
</header>
<div class="nav">
        <a href="<?php echo site_url('catering')  ?>"><button>Catering</button></a>
        <a class="Order" href="<?php echo site_url('order')  ?>"><button>Order</button></a>
        <a class="Cart" href="<?php echo site_url('cart')  ?>"><button>Cart</button></a>
        <a class="About us" href="<?php echo site_url('catering')  ?>"><button>Past Orders</button></a>
    </div>