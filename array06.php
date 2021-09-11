<?php
$negara = array (
    array ('Jawa Barat', 'Bandung', 'Depok', 'Bogor' ),
    array ('Jawa Tengah', 'Madiun', 'Surabaya', 'Malang'),
    array ('Jawa Timur', 'Semarang', 'Tegal', 'Solo')
);
?>

<ul>
    <?php foreach ($negara as $key => $value) : ?>
        <li>Kota - kota di <?= $value[0] ?> adalah 
        <?= $value [1].', '.$value[2].', '.$value[3] ?></li>
    <?php endforeach ?>
</ul>