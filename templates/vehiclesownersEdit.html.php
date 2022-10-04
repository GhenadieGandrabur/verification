 <div class="lt"> 
  <h3 class="inputheader">Proprietatii edit</h3>
  <form action="" method="post">   
      <div class="col-50"><label for="id">ID</label></div> 
      <div class="col-50"><input id="id" type=""  name="owner[id]" value="<?= $owner['id'] ?? '' ?>"></div>

      <div class="col-50"><label for="owner[name]">Name</label></div>
      <div class="col-50"><input name="owner[name]" value="<?= $owner['name'] ?? '' ?>"></div>

      <div class="col-50"><label for="owner[codfiscal]">Codfiscal</label></div>
      <div class="col-50"><input name="owner[codfiscal]" value ="<?= $owner['codfiscal'] ?? '' ?>"></div>

      <div class="col-50"><label for="owner[note]">Note</label></div>
      <div class="col-50"><input name="owner[note]" value ="<?= $owner['note'] ?? '' ?>"></div>

      <div class="col-50"><input type="submit" name="submit" value="Save">
      
      <input type="submit" formtarget="/vehiclesowners/list"    value="Inapoi">
      <input type="submit" formtarget="/vehiclesowners/delete"    value="Delete"></div>
    </form>
    <hr>
      
  
 </div>
