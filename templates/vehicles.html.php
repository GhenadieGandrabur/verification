<br>
<br>
<h2>Vehicles</h2>
<p><?= $totalVehicles ?> vehicles in DB</p>
<table class="forwindow">

    <th>ID</th><th>Date</th><th>Number</th><th>Owner</th>
    <tr>
        <?php foreach ($vehicles as $vehicle) : ?>

            <td> <?= htmlspecialchars($vehicle['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($vehicle['date'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($vehicle['number'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($vehicle['owner'], ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
<?php endforeach; ?>
</table>