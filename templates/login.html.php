<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
    <?php
    if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
    endif;
    ?>

<table style="margin:auto">
    <form method="post" action="" >      
        <tr><td><label for="email"></label></td></tr>
        <tr><td><input type="text" id="email" name="email"> </td></tr>
        <tr><td><label for="password"></label></td></tr>
        <tr><td><input type="password" id="password" name="password"></td></tr>
        <tr><td><label for="submit"></label></td></tr>
        <tr><td style="text-align: center;"><input type="submit" name="login" value="🚛" id="submit">  </td></tr>      
    </form>
</table>
    </div>
    
    

</div>
<div class="col-4 col-s-4"></div>

</div>