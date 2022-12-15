<div class="row">
<div class="col-3 col-s-3"></div>
<div class="col-6 col-s-6">
<h1>Tahograf edit</h1>
<p><button class="button" onclick="newtaho()">New tahograf</button>  <?= $totaltaho ?> tachograps in DB</p>
<table class="fortable">
    
    <th>ID</th>
    <th>Taho number</th>
    <th>Type taho</th>    
    <th>Measurement range</th>    
    <th>Edit</th>
    <th>Delete</th>
    <tr>
        <?php foreach ($tahos as $taho) : ?>
            <td> <?= $taho ->id ?></td>
            <td> <?= $taho->tahonumber ?></td>            
            <td> <?=$tahotitles[$taho->tahotypeId]?? $taho->tahotypeId ?></td>
            <td> <?=$taho->measurementRange?></td>
            <td>
                <a href="/taho/edit?id=<?= $taho->id  ?>"> Edit</a>
            </td>
            <td>
                <form action="/taho/delete" method="post">
                    <input type="hidden" name="id" value="<?= $taho->id  ?>">
                    <input type="submit" value="❌">
                </form>
            </td>
    </tr>
<?php endforeach; ?>
</table>
</div>
<div class="col-3 col-s-3"></div>
</div>