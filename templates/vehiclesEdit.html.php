
<form action = "" method = "post">
    <label for="id">id</label><input disabled name="id" value = "<?=vehicle["id"]?>" size="2">
    <label for="number">Number</label><input name="number" value = "<?=vehicle["number"]?>" size="4">
    <label for="vin">VIN</label><input name="vin" value = "<?=vehicle["vin"]?>">
    <label for="owner">Owner</label><input name="owner" value = "<?=vehicle["owner"]?>">
    <input type="sibmit" value="save">
</form>