<br>
<br>
<br>
<br>
<?php
if (isset($error)) :
    echo '<div class="errors">' . $error . '</div>';
endif;
?>
<div style="width: 30%; margin:0 auto;">
<form method="post" action="">
    <table class="login">
        <tr>

            <th colspan="2">
                <h2>Login</h2>
            </th>
        </tr>
        <tr>
            <td> <label for="email">Your email address</label></td>
            <td> <input type="text" id="email" name="email"></td>
        </tr>
        <tr>
            <td><label for="password">Your password</label></td>
            <td><input type="password" id="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="login" value="Log in"></td>
        </tr>






    </table>
</form>
</div>