<?php
$ar_deret = ['Deret Angka :' => 21, 150, 90, 120, 97];
$total = array_sum($ar_deret);
$jml = count($ar_deret);
$max = max($ar_deret);
$min = min($ar_deret);
$rata2 = $total/$jml;
?>
<table>
    <tr>
        <?php foreach($ar_deret as $deret) { ?>
            <td> <?= $deret ?> </td>
        <?php } ?>
    </tr>
</table>
Nilai Maksimal : <?= $max ?>
<br> Nilai Minimal : <?= $min ?>
<br> Rata - Rata : <?= $rata2 ?>