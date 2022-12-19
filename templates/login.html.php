<div class="row">
<div class="col-3 col-s-3"></div>
<div class="col-6 col-s-6">
    <?php
    if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
    endif;
    ?>
    <div class="forminput">
    
    <form method="post" action="" class="log">    
    <table>
        <tr><td colspan="2" class="tc"><h1>Login</h1></td></tr>
        <tr><td><label for="email">Your email address</label></td><td><input type="text" id="email" name="email"> </td></tr>
        <tr><td><label for="password">Your password</label></td><td><input type="password" id="password" name="password"></td></tr>
        <tr><td><label for="submit"></label></td><td><input type="submit" name="login" value="Log in" id="submit">  </td></tr>      
    </table>
    </form>
    </div>
    </div>

</div>
<div class="col-3 col-s-3"></div>

</div>