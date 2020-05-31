<?php
$bilangan = $_POST['bilangan'];
?>    
<form method="POST">
    <table>   
      <td> <input name="bilangan" type="text" value =" <?= $bilangan ?>"> </td> 
      <td> <input type="submit" name="submit" value="SUBMIT"> </td>
    </table>
    <table>
        <td>
            <?php
                if ($bilangan == "") {
                    echo '';
                } else if ($bilangan % 2 == 0) {
                    echo 'Bilangan Genap';
                } else {
                    echo 'Bilangan Ganjil';
                }
            ?> 
        </td> 
    </table>
</form>