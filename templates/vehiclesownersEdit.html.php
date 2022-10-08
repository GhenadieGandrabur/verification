 <div class="lt forform"> 
  <h3>Proprietatii edit</h3>
  <form action="" method="post">   
      <label for="id">ID</label> 
      <input id="id" type=""  name="owner[id]" value="<?= $owner['id'] ?? '' ?>">

      <label for="owner[name]">Name</label>
      <input name="owner[name]" value="<?= $owner['name'] ?? '' ?>">

      <label for="owner[codfiscal]">Codfiscal</label>
      <input name="owner[codfiscal]" value ="<?= $owner['codfiscal'] ?? '' ?>">

      <label for="owner[note]">Note</label>
      <input name="owner[note]" value ="<?= $owner['note'] ?? '' ?>">

      <input type="submit" name="submit" value="Save">
      
      
    </form>
    
      
  
 
