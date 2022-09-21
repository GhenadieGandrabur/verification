  
  <form action="" method="post">
      <input name="owner[id]" value="<?= $owner['id'] ?? '' ?>">
      <input name="owner[name]" value="<?= $owner['name'] ?? '' ?>">      
      <input name="owner[codfiscal]" value ="<?= $owner['codfiscal'] ?? '' ?>">
      <input name="owner[note]" value ="<?= $owner['note'] ?? '' ?>">     
      <input type="submit" name="submit" value="Save">
  </form>