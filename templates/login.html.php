
<div class="lt forform" >
<?php
if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
endif;
?>
<form method="post" action="">
    <div class="login">
        <h3 class="text-center ">Login</h3>
        <label for="email">Your email address</label>
        <input type="text" id="email" name="email">   
        <label for="password">Your password</label>
        <input type="password" id="password" name="password">        
        <label for="submit"></label>
        <input type="submit" name="login" value="Log in">
    </div>
</form>
</div>