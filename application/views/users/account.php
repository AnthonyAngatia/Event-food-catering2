<div class="container">
    <h2>Welcome <?php echo $user['first_name']; ?>!</h2>

    <a href="<?php echo base_url('index.php/Users/login'); ?>"> Log Out </a>
 

    <div class="regisFrm">
        <p><b>Name: </b><?php echo $user['first_name'].' '.$user['last_name']; ?></p>
        <p><b>Email: </b><?php echo $user['email']; ?></p>
        <p><b>Phone: </b><?php echo $user['phone']; ?></p>
        <p><b>Gender: </b><?php echo $user['gender']; ?></p>
    </div>
</div>