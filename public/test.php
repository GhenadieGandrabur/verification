<form action="" method="post">
    <label for="joketext">Type your joke here:
    </label>
    <input id="joketext3" name="joketext33" >
    <input id="joketext2" name="joketext22" >

    <input type="submit" name="submit" value="Add">
</form>

<?php
var_dump($_POST[0]);
echo '<br>';
var_dump($_POST[1]);