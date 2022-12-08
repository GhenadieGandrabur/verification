<div class="row">
<div class="col-4 col-s-4"></div>
<div class="col-4 col-s-4">
<h5>Tahograf edit</h5>
<p><button class="button" onclick="newtaho()">New tahograf</button>  <?= $totaltaho ?> tachograps in DB</p>
<table class="fortable">
    
    <th>ID</th>
    <th>Taho number</th>
    <th>Type taho</th>    
    <th>Edit</th>
    <th>Delete</th>
    <tr>
        <?php foreach ($tahos as $taho) : ?>
            <td> <?= $taho ->id ?></td>
            <td> <?= $taho->tahonumber ?></td>            
            <td> <?=$taho->tahotypeId ?></td>
            <td>
                <a href="/taho/edit?id=<?= $taho->id  ?>"> Edit</a>
            </td>
            <td>
                <form action="/taho/delete" method="post">
                    <input type="hidden" name="id" value="<?= $taho->id  ?>">
                    <input type="submit" value="X">
                </form>
            </td>
    </tr>
<?php endforeach; ?>
</table>
</div>
<div class="col-4 col-s-4"></div>
</div>