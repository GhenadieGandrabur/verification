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
<div style="width: 30px; margin:0 auto;">
    <form action="" method="post">
        <label for="email">Your email address</label>
        <input name="author[email]" id="email" type="text" value="<?= $author['email'] ?? '' ?>"><br>

        <label for="name">Your name</label>
        <input name="author[name]" id="name" type="text" value="<?= $author['name'] ?? '' ?>"><br>

        <label for="password">Password</label>
        <input name="author[password]" id="password" type="password" value="<?= $author['password'] ?? '' ?>"><br>

        <input type="submit" name="submit" v alue="Register account">
    </form>
</div>