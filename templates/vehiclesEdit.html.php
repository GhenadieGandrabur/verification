<div class = "lt">
    <h3 class="inputheader">Vehicol edit</h3>
<form action = "" method = "post">

    <div class="col-50"><label for="id">id</label></div>    
    <div class="col-50"><input  id="id" name="vehicle[id]" value = "<?=$vehicle["id"]?>"></div>

    <div class="col-50"><label for="vehicle[date]">Date</label></div>    
    <div class="col-50"><input name="vehicle[date]" value = "<?=$vehicle["date"]?>"></div>

    <div class="col-50"><label for="vehicle">Number</label></div>
    <div class="col-50"><input id="vehicle" name="vehicle" value = "<?=$vehicle["number"]?>"></div>

    <div class="col-50"><label for="vehicle[vin]">VIN</label></div>
    <div class="col-50"><input name="vehicle[vin]" value = "<?=$vehicle['vin']?>"></div>

    <div class="col-50"><label for="vehicle[owner]">Owner</label></div>
    <div class="col-50"><input name="vehicle[owner]" value = "<?=$vehicle["owner"]?>"></div>

    <div class="col-50"><label for="submit"></label></div>    
    <div class="col-50"><input id="submit" type="submit" value="save"></div>
</form>
</div>