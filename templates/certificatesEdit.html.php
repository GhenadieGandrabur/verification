  <h1></h1>
  <form action="" method="post">
      <input type="" name="joke[id]" value="<?= $joke['id'] ?? '' ?>" placeholder="id">
      <input type="" name="joke[date]" value="<?= date("Y/m/d")  ?? '' ?>" placeholder="date">      
      <input id="numberplate" name="joke[numberplate]" placeholder="numer"><?= $joke['numberplate'] ?? '' ?>
      <input id="owner" name="joke[owner]" placeholder="owner"><?= $joke['owner'] ?? '' ?>     
      <input type="submit" name="submit" value="Save">
  </form>