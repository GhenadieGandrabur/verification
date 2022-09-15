<br>
<br>

<p><?= $totaltaho ?> tachograps in DB</p>
<table class="forwindow">

    <th>ID</th>
    <th>modele</th>
    <th>Type</th>
    <th>Number</th>
    <tr>
        <?php foreach ($tahos as $taho) : ?>

            <td> <?= htmlspecialchars($taho['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($taho['modele'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($taho['type'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($taho['number'], ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
<?php endforeach; ?>
</table>