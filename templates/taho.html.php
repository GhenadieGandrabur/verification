<div class="mt">
<h5>Tahograf edit</h5>
<p><button class="button" onclick="newtaho()">New tahograf</button>  <?= $totaltaho ?> tachograps in DB</p>
<table class="forwindow">

    <th>ID</th>
    <th>modele</th>
    <th>Type</th>
    <th>Number</th>
    <th>Edit</th>
    <th>Delete</th>
    <tr>
        <?php foreach ($tahos as $taho) : ?>
            <td> <?= htmlspecialchars($taho['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($taho['modele'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($taho['type'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($taho['number'], ENT_QUOTES, 'UTF-8') ?></td>
            <td>
                <a href="/taho/edit?id=<?= $taho['id'] ?>"> Edit</a>
            </td>
            <td>
                <form action="/taho/delete" method="post">
                    <input type="hidden" name="id" value="<?= $taho['id'] ?>">
                    <input type="submit" value="X">
                </form>
            </td>
    </tr>
<?php endforeach; ?>
</table>
</div>