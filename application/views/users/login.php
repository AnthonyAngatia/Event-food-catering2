<div class="container">


    <!-- Status message -->

	
    <!-- Login form -->
    <div class="row">
    <div class="col-md-offset-5 col-md-4 text-center">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php  
        if(!empty($success_msg)){ 
            echo '<p style="color:red;" class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p style="color:red;"  class="status-msg error">'.$error_msg.'</p>'; 
        } 
        ?>
    
	
        <form action="" method="post">
            <div class="form-group">
                <input type="email"  class="form-control" name="email" placeholder="EMAIL" required="">
                <span class="help-block"><?php echo form_error('email','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control"   name="password" placeholder="PASSWORD" required="">
                <span class="help-block"><?php echo form_error('password','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="send-button">
                <input type="submit" class="btn btn-primary"  name="loginSubmit" value="LOGIN">
            </div>
        </form>
        <p>Don't have an account? <a href="#" onclick = "window.location.replace('registration');">Register </a> </p>
    </div>
    </div>
</div>