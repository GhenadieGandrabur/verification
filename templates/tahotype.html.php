<div class="row">
<div class="col-2 col-s-2"></div>
<div class="col-8 col-s-8">
<h3>Tachographs type</h3>
<p><a href="/tahotype/edit"><button class="button_edit">New</button></a> 
<?= $totaltahotypes ?> types of tachographs in DB</p>

<table class="fortable">
<tr>
<th>ID</th>
<th>Taho tytpe</th>
<th>Recorder type</th> 
<th>Edit</th>
<th>Delete</th>
</tr>
<tr>
<?php foreach($tahotypes as $tahotype) : ?>    
<td> <?= $tahotype->id  ?></td>
<td> <?= $tahotype->typetaho ?></td>                       
<td>
    <?php
if($tahotype->recordertype  == 0){
    echo "analogic";
}else{
    echo "digital";
}             
?></td>
<td>
<a href="/tahotype/edit?id=<?= $tahotype->id  ?>"> Edit</a>
</td>
<td>
<form action="/tahotype/delete" method="post">
<input type="hidden" name="id" value="<?= $tahotype->id  ?>">
<input type="submit" value="X">
</form>
</td>
</tr>

<?php endforeach; ?>
</table>
</div>

<div class="col-2 col-s-2"></div>

</div>
