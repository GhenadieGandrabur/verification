<h5 style="text-align:center">Certificate de verificare a tahografului</h5>

<div class="d-flex justify-content-between">
    <p><a class="button" href="/certificates/edit">New certificate</a> <?= $totalCertificates ?> certificate in BD</p>

    <ul class="smart-table-hint">
        <li><kbd>↑</kbd> - previous row</li>
        <li><kbd>↓</kbd> - next row</li>
        <li><kbd>i</kbd> - edit selected row</li>
    </ul>
</div>


<table class="forwindow smart-table" data-controller="certificates">
    <th>ID</th>
    <th>Date</th>
    <th>Vehicol</th>
    <th>Proprietar</th>
    <th>Autor</th>
    <th>Print</th>
    <th>Delete</th>

   

    <?php foreach ($certificates as $certificate) : ?>
        <tr data-id="<?= $certificate['id'] ?>">
            <td> <?= htmlspecialchars($certificate['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?php $date = new DateTime($certificate['date']); echo $date->format('d.m. Y H:i:s'); ?></td>
            <td> <?= htmlspecialchars($certificate['vehicle'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['proprietar'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($certificate['name'], ENT_QUOTES, 'UTF-8') ?></td>
            <td><a href="/certificates/print?id=<?= $certificate['id'] ?>" target="_blank">🖨</a></td>
            <td>
                <form action="/certificate/delete" method="post">
                    <input type="hidden" name="id" value="<?= $certificate['id'] ?>">
                    <input type="submit" value="X">
                </form>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    window.addEventListener('keydown', function (event) {
        if (["TEXTAREA", "INPUT", "SELECT"].includes(event.target.tagName)) {
            return;
        }

        if (event.code === "Insert") {
            event.preventDefault();
            document.location.href = '/certificates/edit';
        }
    });

    document.querySelectorAll('.smart-table').forEach(table => new SmartTable(table));
</script>