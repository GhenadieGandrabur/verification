<?php
if (!empty($errors)) :
?>
    <div class="errors">
        <p>Your account could not be created,
            please check the following:</p>
        <ul>
            <?php
            foreach ($errors as $error) :
            ?>
                <li><?= $error ?></li>
            <?php
            endforeach; ?>
        </ul>
    </div>
<?php
endif;
?>
<div class="lt">
    <h4 class="text-center">Register an account</h4>
    <form action="" method="post">
        <div class="col-50"><label for="author[email]">Your email address</label></div>
        <div class="col-50"><input name="author[email]" value="<?= $author['email'] ?? '' ?>"></div>

        <div class="col-50"><label for="author[name]">Your name</label></div>
        <div class="col-50"><input name="author[name]"   value="<?= $author['name'] ?? '' ?>"></div>

        <div class="col-50"><label for="author[password]">Password</label></div>
        <div class="col-50"><input name="author[password]"  type="password" value="<?= $author['password'] ?? '' ?>"></div>
        
        <div class="col-50"><label for="submit"></label></div>
        <div class="col-50"><input type="submit" name="submit" v alue="Register account"></div>
    </form>
</div>