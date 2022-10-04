<div class = "lt">
    <h3 class="inputheader">Vehicol edit</h3>
<form action = "" method = "post">

    <div class="col-50"><label for="id">id</label></div>    
    <div class="col-50"><input type="hidden" id="id" name="vehicle[id]" value = "<?=$vehicle["id"]?>"></div>

    <div class="col-50"><label for="date">Date</label></div>    
    <div class="col-50"><input id="date" name="vehicle[date]" value = "<?=$vehicle["date"]?>"></div>

    <div class="col-50"><label for="vehicle">Number</label></div>
    <div class="col-50"><input id="vehicle" name="vehicle[numberplate]" value = "<?=$vehicle["numberplate"]?>"></div>

    <div class="col-50"><label for="vin">VIN</label></div>
    <div class="col-50"><input id="vin" name="vehicle[vin]" value = "<?=$vehicle['vin']?>"></div>
    
    <div class="col-50"><label for="tahoId">Taho ID</label></div>
    <div class="col-50"><input id="tahoId" name="vehicle[tahoId]" value = "<?=$vehicle['tahoId']?>"></div>

    <div class="col-50"><label for="owner">Owner</label></div>
    <div class="col-50"><input id="owner" name="vehicle[owner]" value = "<?=$vehicle["owner"]?>"></div>
    
    <div class="col-50"><label for="tyresze">Tyreize</label></div>
    <div class="col-50"><input id="tyresize" name="vehicle[tyresize]" value = "<?=$vehicle["tyresize"]?>"></div>

    <div class="col-50">--</div>    
    <div class="col-50"><input id="submit" type="submit" value="save"></div>
</form>
</div>