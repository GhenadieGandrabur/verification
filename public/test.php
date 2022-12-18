<!DOCTYPE html>
<html>
<body>
     
   

<form method="POST" id="form-pass">
Password1: <input type="text" id ="so"><br>
Password2: <input type="text"  name ="Id">
<input type="submit" value="Submit">
</form>

<script>
document.querySelector('input[id=so]').value = 'So';
document.querySelector('input[name=Id]').value = 'changed Value';

</script>

</body>
</html>