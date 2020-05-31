<?php
$angka = $_POST['angka'];
?>    
<form method="POST">
    <table>   
      <td> <input name="angka" type="text" value =" <?= $angka ?>"> </td> 
      <td> <input type="submit" name="submit" value="SUBMIT"> </td>
    </table>
    <table>
        <td>
            <?php
                if ($angka == "") {
                    echo "";
                } else if ($angka <= 59) {
                    echo 'Nilai : ' . $angka . ' <br> Grade : E';
                } else if ($angka >= 60 && $angka <= 69) {
                    echo 'Nilai : ' . $angka . ' <br> Grade : D';
                } else if ($angka >= 70 && $angka <= 79) {
                    echo 'Nilai : ' . $angka . ' <br> Grade : C';
                } else if ($angka >= 80 && $angka <= 89) {
                    echo 'Nilai : ' . $angka . ' <br> Grade : B';
                } else if ($angka >= 90) {
                    echo 'Nilai : ' . $angka . ' <br> Grade : A';
                } 
                else{
                    echo 'Nilai : '. '';
                }
            ?> 
        </td> 
    </table>
</form>