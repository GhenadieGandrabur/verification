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
<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
    <h1 class="text-center">Register an account</h1>
    <form action="" method="post" class="formwork">
        <label for="author[email]">Your email address</label>
        <input name="author[email]" value="<?= $author['email'] ?? '' ?>">
        
        <label for="author[name]">Your name</label>
        <input name="author[name]"   value="<?= $author['name'] ?? '' ?>">
        
        <label for="author[password]">Password</label>
        <input name="author[password]"  type="password" value="<?= $author['password'] ?? '' ?>">
        
        <label for="submit"></label>
        <input type="submit" name="submit" v alue="Register account">
    </form>
</div>
    <div class="col-4 col-s-4"></div>
</div>