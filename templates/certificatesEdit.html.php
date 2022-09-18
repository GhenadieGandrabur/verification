<form action="" method="post">
  <div class="container p-5  ">
    <h3>Certificat nr: <input disabled size="4"  type="" name="certificate[id]" value="<?= $certificate['id'] ?? '' ?>">
      <input disabled type="" name="certificate[date]" value="<?= date("d.m.Y")  ?? '' ?>">
    </h3>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <h3>Vehicol</h3>
        Certificat numar:<br>

      </div>
      <div class="col-sm-4">
        <h3>Tahograf</h3>
        <h5>Vehicol:</h5>
        <input id="vehicle" name="certificate[vehicle]" value="<?= $certificate['vehicle'] ?? '' ?>"><br>
        <input id="taho" name="certificate[taho]" value="<?= $certificate['taho'] ?? '' ?>">

      </div>
      <div class="col-sm-4">
        <h3>Verificare</h3>
        <input type="submit" name="submit" value="Save">
      </div>
    </div>
  </div>

</form>