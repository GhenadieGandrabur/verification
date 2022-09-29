<div class="mt">
<h5>Tachographs type edit</h5>
<p><button class="button" onclick="newtahotype()">New tahotypegraf</button>  <?= $totalTahotypes ?> types of tachographs in DB</p>
<table class="forwindow">

    <th>ID</th>
    <th>Type</th>
    <th>Recorder type</th> 
    <th>Edit</th>
    <th>Delete</th>
  
    <tr>
        <?php foreach ($tahotypes as $tahotype) : ?>
            <td> <?= htmlspecialchars($tahotype['id'], ENT_QUOTES, 'UTF-8') ?></td>
            <td> <?= htmlspecialchars($tahotype['type'], ENT_QUOTES, 'UTF-8') ?></td>                  
            <td >
            <?php
            if(htmlspecialchars($tahotype['recordertype'], ENT_QUOTES, 'UTF-8') == 0){
                echo "analogic";
            }else{
                echo "digital";
            }             
             ?></td>            
            
            <td>
                <a href="/tahotype/edit?id=<?= $tahotype['id'] ?>"> Edit</a>
            </td>
            <td>
                <form action="/tahotype/delete" method="post">
                    <input type="hidden" name="id" value="<?= $tahotype['id'] ?>">
                    <input type="submit" value="X">
                </form>
            </td>
    </tr>
<?php endforeach; ?>
</table>
</div>