<div class="row">
<div class="col-2 col-s-2"></div>
<div class="col-8 col-s-8">
<h3>Tahograf edit</h3>
<p><button class="button_edit" onclick="newtaho()">New tahograf</button>  <?= $totaltaho ?> tachograps in DB</p>
<table class="fortable">
    
    <th>ID</th>
    <th>Taho number</th>
    <th>Type taho</th>    
      
    <th>Recorder type</th>    
    <th>Measurement</th>    
    <th>Edit</th>
    <th>Delete</th>
    <tr>
        <?php foreach ($tahos as $taho) :?>
            <td> <?= $taho ->id ?></td>
            <td> <?= $taho -> tahonumber ?></td>
            <td> <?=$tahotitles[$taho->tahotypeId]?? $taho->tahotypeId ?></td>
            <td> <?=$tahotitles[$taho->recordertypeId]?? $taho->recordertypeId ?></td>                               
            <td> <?= $taho->measurementRange ?></td>  
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
<div class="col-2 col-s-2"></div>
</div>