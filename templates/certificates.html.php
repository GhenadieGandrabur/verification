
<h3>Certificates of verification</h3>
<p><?= $totalCertificates ?> certificates in DB</p>
<table class="forwindow">

    <th>ID</th><th>Date</th><th>Vehicol</th><th>Tahograf</th><th>Autor</th>
    <tr>
        <?php foreach ($certificates as $certificate) : ?>
            <td> <?= htmlspecialchars($certificate['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['date'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['vehicle'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['taho'], ENT_QUOTES, 'UTF-8') ?></td>           
            <td> <?= htmlspecialchars($certificate['authorId'], ENT_QUOTES, 'UTF-8') ?></td>           
            
    </tr>
<?php endforeach; ?>
</table>