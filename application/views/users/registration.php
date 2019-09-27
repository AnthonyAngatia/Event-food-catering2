<div class="container">

	
    <!-- Status message -->

	
    <!-- Registration form -->
    <div class="wrapper">
    <?php  
        if(!empty($success_msg)){ 
            echo '<p class="status-msg success">'.$success_msg.'</p>'; 
        }elseif(!empty($error_msg)){ 
            echo '<p class="status-msg error">'.$error_msg.'</p>'; 
        } 
    ?>
        <h2>Sign Up</h2>
        <p>Please fill this form to create an account.</p>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" name="first_name" placeholder="FIRST NAME" class="form-control"  value="<?php echo !empty($user['first_name'])?$user['first_name']:''; ?>" required>
                <span class="help-block"><?php echo form_error('first_name','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="text" name="last_name"  class="form-control"  placeholder="LAST NAME" value="<?php echo !empty($user['last_name'])?$user['last_name']:''; ?>" required>
                <span class="help-block"><?php echo form_error('last_name','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="email"  class="form-control"   name="email" placeholder="EMAIL" value="<?php echo !empty($user['email'])?$user['email']:''; ?>" required>
                <span class="help-block"><?php echo form_error('email','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="password" class="form-control"   name="password" placeholder="PASSWORD" required>
                <span class="help-block"><?php echo form_error('password','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <input type="password"   class="form-control"  name="conf_password" placeholder="CONFIRM PASSWORD" required>
                <span class="help-block"><?php echo form_error('conf_password','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <span class="help-block"><?php 
                if(!empty($user['gender']) && $user['gender'] == 'Female'){ 
                    $fcheck = 'checked="checked"'; 
                    $mcheck = ''; 
                }else{ 
                    $mcheck = 'checked="checked"'; 
                    $fcheck = ''; 
                } 
                ?></span>
                <div class="radio">
                    <label>
                        <input type="radio"   name="gender" value="Male" <?php echo $mcheck; ?>>
						Male
                    </label>
                    <label>
                        <input type="radio"    name="gender" value="Female" <?php echo $fcheck; ?>>
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input type="text" name="phone"  class="form-control"   placeholder="PHONE NUMBER" value="<?php echo !empty($user['phone'])?$user['phone']:''; ?>">
                <span class="help-block"><?php echo form_error('phone','<p class="help-block">','</p>'); ?></span>
            </div>
            <div class="send-button">
            <span class="help-block"><input type="submit"  class="btn btn-primary" name="signupSubmit" value="CREATE ACCOUNT"></span>
            <input type="reset" class="btn btn-default" value="Reset">
            </div>
        </form>
        <p>Already have an account? <a href="#" onclick = "window.location.replace('login');">Login here</a></p>
    </div>
</div>