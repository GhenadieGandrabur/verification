<div class="row">
<div class="col-2 col-s-2"></div>
<div class="col-8 col-s-8">
<h5>Tachographs type edit</h5>
<p><button class="button" onclick="newtahotype()">New tahotype</button> 
<?= $totaltahotypes ?> types of tachographs in DB</p>

<table class="fortable">

<th>ID</th>
<th>Taho tytpe</th>
<th>Recorder type</th> 
<th>Edit</th>
<th>Delete</th>

<tr>
<?php foreach($tahotypes as $tahotype) : ?>    
<td> <?= htmlspecialchars($tahotype['id'], ENT_QUOTES, 'UTF-8') ?></td>
<td> <?= htmlspecialchars($tahotype['typetaho'], ENT_QUOTES, 'UTF-8') ?></td>                       
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

<div class="col-2 col-s-2"></div>

</div>
