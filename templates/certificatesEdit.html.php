  <h1></h1>
  <form action="" method="post">
    <input type="hidden" name="verification[id]" value="<?= $verification['id'] ?? '' ?>"><br><br>
    <input type="" name="verification[date]" value="<?= date("d/m/Y")  ?? '' ?>" placeholder="date" cols="20"><br><br>
    <input id="vehicle" name="verification[vehicle]" placeholder="vehiclenumber"><?= $verification['vehicle'] ?? '' ?><br><br>
    <input id="taho" name="verification[taho]" placeholder="taho"><?= $verification['taho'] ?? '' ?><br><br>
    <input type="submit" name="submit" value="Save">
  </form>