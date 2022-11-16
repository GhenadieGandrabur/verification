<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4 p3 ">
    <?php
    if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
    endif;
    ?>
    <form method="post" action="">    
    <h2 class="tc  p">Login</h2>
    <div class="p2">
    <label for="email">Your email address</label>
    <input type="text" id="email" name="email"><br>   
    <label for="password">Your password</label>
    <input type="password" id="password" name="password"><br>        
    <label for="submit"></label>
    <input type="submit" name="login" value="Log in">    
    </form>
    </div>

</div>
<div class="col-4 col-s-4"></div>

</div>