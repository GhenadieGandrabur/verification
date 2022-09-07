<p><?= $totalCertificates ?> Certificates quantity</p>


<table>

    <ul>
        <?php foreach ($jokes as $joke) : ?>
            <li> <?= htmlspecialchars($certificate['id'], ENT_QUOTES, 'UTF-8') ?></li>
            <li><?=$date = new DateTime($certificate['date'])?></li>
            <li> <?= htmlspecialchars($certificate['numberplate'], ENT_QUOTES, 'UTF-8') ?></li>
            <li> <?= htmlspecialchars($certificate['owner'], ENT_QUOTES, 'UTF-8') ?></li>            
    </ul>
    <?php endforeach; ?>
</table>