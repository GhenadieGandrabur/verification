<h3>Vehicles owners</h3>
<p><?= $totalVehiclesowners ?> Owners in DB</p>
<table class="forwindow">

    <th>ID</th>
    <th>Denumire</th>
    <th>Cod fiscal</th>    
    <th>Note</th>
    <tr>
        <?php foreach ($holders as $holder) : ?>
            <td> <?= htmlspecialchars($holder['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($holder['name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($holder['codfiscal'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($holder['note'], ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
<?php endforeach; ?>
</table>