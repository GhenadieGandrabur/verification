<div class = "lt">
    <h3 class="inputheader">Vehicol edit</h3>
<form action = "" method = "post">

    <div class="col-50"><label for="id">id</label></div>    
    <div class="col-50"><input readonly type="number" id="id" name="vehicle[id]" value = "<?=$vehicle["id"]?>"></div>

  <div class="col-50"><label for="date">Date</label></div>    
    <div class="col-50"><input type="date" id="date" name="vehicle[date]" value = "<?=$vehicle["date"]?>"></div>

    <div class="col-50"><label for="number">Number</label></div>
    <div class="col-50"><input autofocus tabindex="1" id="number" required="XXX" name="vehicle[numberplate]" value = "<?=$vehicle["numberplate"]?>"></div>

    <div class="col-50"><label for="vin">VIN</label></div>
    <div class="col-50"><input id="vin" tabindex="2" name="vehicle[vin]" value = "<?=$vehicle['vin']?>"></div>
    
    <div class="col-50"><label for="tahoId">Taho ID</label></div>
    <div class="col-50"><input id="tahoId" tabindex="3" name="vehicle[tahoId]" value = "<?=$vehicle['tahoId']?>"></div>

    <div class="col-50"><label for="owner">Owner</label></div>
    <div class="col-50"><input tabindex="4" id="owner" name="vehicle[owner]" value = "<?=$vehicle["owner"]?>"></div>
    
    <div class="col-50"><label for="tyresize">Tyreize</label></div>
    <div class="col-50"><input tabindex="5" id="tyresize" name="vehicle[tyresize]" value = "<?=$vehicle["tyresize"]?>"></div>

    <div class="col-50">--</div>    
    <div class="col-50"><input id="submit" type="submit" value="save"></div>

</form>
</div>