<?php
$ar_kota = [
    'Kota :' => 'Jakarta', 'Aceh', 'Malang', 'Medan', 'Bontang', 'Jogja', 'Jakarta', 'Bandung', 'Malang', 'Solo', 'Palembang', 'Bandung'
];
?>
<table>
    <tr>
        <?php foreach($ar_kota as $kota) { ?>
            <td> <?= $kota ?> </td>
        <?php } ?>
    </tr>
</table>
<hr>
<?php
$clear_array = array_unique($ar_kota);
?>
<table>
    <tr>
        <?php foreach($clear_array as $kota) { ?>
            <td> <?= $kota ?> </td>
        <?php } ?>
    </tr>
</table>