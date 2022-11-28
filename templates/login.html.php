<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
    <?php
    if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
    endif;
    ?>
    <div class="forminput">
        <h2 class="tc  p">Login</h2>
    <form method="post" action="">    
    
    <label for="email">Your email address</label>
    <input type="text" id="email" name="email">  
    <label for="password">Your password</label>
    <input type="password" id="password" name="password">       
    <label for="submit"></label>
    <input type="submit" name="login" value="Log in">    
    </form>
    </div>
    </div>

</div>
<div class="col-4 col-s-4"></div>

</div>