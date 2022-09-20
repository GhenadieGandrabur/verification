<form action="" method="post">
  <div class="container p-5  ">
    <h3>Certificat nr: <input disabled size="4" type="" name="certificate[id]" value="<?= $certificate['id'] ?? '' ?>">
      <input disabled type="" name="certificate[date]" value="<?= date("d.m.Y")  ?? '' ?>">
    </h3>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-4">
        <h3>Vehicol</h3>
        <input id="vehicle" name="certificate[vehicle]" value="<?= $certificate['vehicle'] ?? '' ?>"><br>
        <input id="proprietar" name="certificate[proprietar]" value="<?= $certificate['proprietar'] ?? '' ?>">


      </div>
      <div class="col-sm-4">
        <h3>Tahograf</h3>


      </div>
      <div class="col-sm-4">
        <h3>Verificare</h3>
        <p>K vechi</p>
        <input  id="k_vechi" name="certificate[k_vechi]" value="<?= $certificate['k_vechi'] ?? '' ?>">
        <p>K nou</p>

        <input  id="k_now" name="certificate[k_nou]" value="<?= $certificate['k_now'] ?? '' ?>">

      </div>
    </div>
  </div>
  <hr>
  <p class="text-center p-3">
    <input type="submit" name="submit" value="Save">
  </p>

</form>