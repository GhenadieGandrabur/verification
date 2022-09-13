<?php if ($userId == $usersdata['employeeId']) : ?>
    <form action="" method="post">
        <input type="hidden" name="$user['id']" value="<?= $usersdata['id'] ?? '' ?>">
        <label for="name">
        </label>
        <input id="username" name="user[name]" <?= $usersdata['name'] ?? '' ?>> </input>
        <input type="submit" name="submit" value="Save">
    </form>
<?php else : ?>

    <p>You may only edit jokes that you posted.</p>

<?php endif; ?>