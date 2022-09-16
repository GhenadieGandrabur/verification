  
  <form action="" method="post">
      <input type="" name="holder[id]" value="<?= $holder['id'] ?? '' ?>" placeholder="id">
      <input type="" name="holder[name]" value="<?= $holder['name'] ?? '' ?>" placeholder="date">      
      <input id="codfiscal" name="holder[codfiscal]" placeholder="cod fiscal"><?= $holder['codfiscal'] ?? '' ?>
      <input id="note" name="holder[note]" placeholder="note"><?= $holder['note'] ?? '' ?>     
      <input type="submit" name="submit" value="Save">
  </form>