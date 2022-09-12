<br>
<br>
<h3>Certificates of verification</h3>
<p><?= $totalCertificates ?> certificates in DB</p>
<table>

    <th>ID</th><th>Date</th><th>Number</th><th>Owner</th>
    <tr>
        <?php foreach ($certificates as $certificate) : ?>

            <td> <?= htmlspecialchars($certificate['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['date'], ENT_QUOTES, 'UTF-8') ?></td>
          

            <td> <?= htmlspecialchars($certificate['numberplate'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['owner'], ENT_QUOTES, 'UTF-8') ?></td>
    </tr>
<?php endforeach; ?>
</table>