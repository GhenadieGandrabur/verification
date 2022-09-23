
<div class="mt">
<h4>Users</h4>
<p><button class="button" onclick="newauthor()">New author</button> <?= $totalUsers ?> users in DB</p>

<table class="forwindow">

    <th>ID</th><th>Date</th><th>Name</th><th>E-mail<th>Priority</th>
    <tr>
        <?php foreach ($users as $user) : ?>

            <td> <?= htmlspecialchars($user['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($user['date'], ENT_QUOTES, 'UTF-8') ?></td> 
            <td> <?= htmlspecialchars($user['name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($user['email'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($user['priority'], ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
<?php endforeach; ?>
</table>
</div>