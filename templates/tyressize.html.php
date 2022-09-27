
<div class="lt">
<h4>Marime anvelopelor</h4>
<p><button class="button" onclick="newtyresize()">New tyressize</button> <?= $totalTyres  ?> sizes in DB</p>
<table class="forwindow">
    <th>ID</th>
    <th>Size</th>
    <th>Edit</th>
    <tr>
        <?php foreach ($tyres as $tyre) : ?>
            <td> <?= htmlspecialchars($tyre['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($tyre['size'], ENT_QUOTES, 'UTF-8') ?></td> 
             <td>               
                    <a href="/tyres/edit?id=<?= $tyre['id'] ?>"> Edit</a>
                           
            </td>            
    </tr>
<?php endforeach; ?>
</table>
</div>