
<div class="mt">
<h4>Users</h4>
<p><button class="button" onclick="newauthor()">New author</button> <?= $totalUsers ?> users in DB</p>

<table class="forwindow">

    <th>ID</th><th>Date</th><th>Name</th><th>E-mail<th>Priority</th>
    <tr>
        <?php foreach ($users as $user) : ?>

            <td> <?= $user->id ?></td>
            <td> <?= $user->date ?></td> 
            <td> <?= $user->name ?></td>
            <td> <?= $user->email ?></td>
            <td> <?= $user->priority ?></td>
    </tr>
<?php endforeach; ?>
</table>
</div>