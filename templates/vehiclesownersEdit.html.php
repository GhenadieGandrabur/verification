  
  <form action="" method="post">
    
      <label for="owner[id]">Owner ID</label>
      <input name="owner[id]" value="<?= $owner['id'] ?? '' ?>"><br>
      <label for="owner[name]">Name</label>
      <input name="owner[name]" value="<?= $owner['name'] ?? '' ?>"><br>
      <label for="owner[codfiscal]">codfiscal</label>
      <input name="owner[codfiscal]" value ="<?= $owner['codfiscal'] ?? '' ?>"><br>
      <label for="owner[note]">note</label>
      <input name="owner[note]" value ="<?= $owner['note'] ?? '' ?>"><br>
      <input type="submit" name="submit" value="Save">
  </form>