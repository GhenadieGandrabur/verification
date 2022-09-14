<br>
<br>
<br>
<br>
<br>
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
<form action="" method="post">
    <label for="email">Your email address</label>
    <input name="employee[email]" id="email" type="text" value="<?= $employee['email'] ?? '' ?>"><br>

    <label for="name">Your name</label>
    <input name="employee[name]" id="name" type="text" value="<?= $employee['name'] ?? '' ?>"><br>

    <label for="password">Password</label>
    <input name="employee[password]" id="password" type="password" value="<?= $employee['password'] ?? '' ?>"><br>

    <input type="submit" name="submit" v alue="Register account">
</form>