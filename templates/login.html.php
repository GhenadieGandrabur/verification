
<div class="lt" >
<?php
if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
endif;
?>
<form method="post" action="">
    <div class="login">
        <h3 class="text-center ">Login</h3>
        <div class="col-50"><label for="email">Your email address</label></div>
        <div class="col-50"><input type="text" id="email" name="email"></div>   
        <div class="col-50"><label for="password">Your password</label></div>
        <div class="col-50"><input type="password" id="password" name="password"></div>        
        <div class="col-50"><label for="submit"></label></div>
        <div class="col-50"><input type="submit" name="login" value="Log in"></div>

</div>
</form>
</div>