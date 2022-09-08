<p><?= $totalCertificates ?> ---</p>
<table>

    <th>ID</th>
    <th>Number</th>
    <th>Owner</th>
    <tr>
        <?php foreach ($certificates as $certificate) : ?>

            <td> <?= htmlspecialchars($certificate['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <?php $date = new DateTime($certificate['jokedate']) ?>
            <td> <?php ?></td>

            <td> <?= htmlspecialchars($certificate['numberplate'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['owner'], ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
<?php endforeach; ?>
</table>