<div class="lt">
    <h1 class="inputheader">User edit</h3>
<?php if ($userId == $usersdata['authorId']) : ?>
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
</div>