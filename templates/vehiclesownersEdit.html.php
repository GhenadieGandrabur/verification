 <div class="lt"> 
  <h3 class="inputheader">Proprietatii edit</h3>
  <form action="" method="post">    
      <div class="col-50"><label for="owner[id]">Owner ID</label></div>
      <div class="col-50"><input disabled name="owner[id]" value="<?= $owner['id'] ?? '' ?>"></div>
      <div class="col-50"><label for="owner[name]">Name</label></div>
      <div class="col-50"><input name="owner[name]" value="<?= $owner['name'] ?? '' ?>"></div>
      <div class="col-50"><label for="owner[codfiscal]">Codfiscal</label></div>
      <div class="col-50"><input name="owner[codfiscal]" value ="<?= $owner['codfiscal'] ?? '' ?>"></div>
      <div class="col-50"><label for="owner[note]">Note</label></div>
      <div class="col-50"><input name="owner[note]" value ="<?= $owner['note'] ?? '' ?>"></div>
      <input type="submit" name="submit" value="Save">
  </form>
 </div>
