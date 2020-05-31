<form method="post">
    <input type="text" name="palindrom" placeholder="Masukkan kata">
    <input type="submit" name="submit" value="submit">
</form>
<?php 
if(!empty($_POST['palindrom'])) {
    $kata = $_POST['palindrom'];
    if($kata == strrev($kata)) {
        echo $kata.' '.'merupakan palindrom';
    } else {
        echo $kata.' '.'bukan merupakan palindrom';
    }
}