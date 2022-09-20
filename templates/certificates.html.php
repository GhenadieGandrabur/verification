<h3>Certificates of verification</h3>
<p><?= $totalCertificates ?> certificates in DB</p>
<h3><a href="/certificates/edit">New certificat</a></h3>

<table class="forwindow">

    <th>ID</th>
    <th>Date</th>
    <th>Vehicol</th>
    <th>Proprietar</th>
    <th>Autor</th>
    <th>Edit</th>
    <th>Delete</th>


    <?php foreach ($certificates as $certificate) : ?>
        <tr>
            <td> <?= htmlspecialchars($certificate['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?php $date = new DateTime($certificate['date']); echo $date->format('d.m. Y'); ?></td>
            <td> <?= htmlspecialchars($certificate['vehicle'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['proprietar'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td>               
                    <a href="/certificates/edit?id=<?= $certificate['id'] ?>"> Edit</a>
            </td>
            <td>
                    <form action="/certificate/delete" method="post">
                        <input type="hidden" name="id" value="<?= $certificate['id'] ?>">
                        <input type="submit" value="Delete">
                    </form>                    
            </td>
        </tr>
    <?php endforeach; ?>
</table>