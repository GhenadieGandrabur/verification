
<form action = "" method = "post">

    <label for="vehicle[id]">id</label>
    <input  name="vehicle[id]" value = "<?=$vehicle["id"]?>">

    <label for="vehicle[number]">Number</label>
    <input name="vehicle[number]" value = "<?=$vehicle["number"]?>">

    <label for="vehicle[vin]">VIN</label>
    <input name="vehicle[vin]" value = "<?=$vehicle['vin']?>">

    <label for="vehicle[owner]">Owner</label>
    <input name="vehicle[owner]" value = "<?=$vehicle["owner"]?>">
    
    <input type="sibmit" value="save">
</form>