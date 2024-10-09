<?php

$hari = 20;

    switch ($hari) {
        case 1:
            echo 'minggu';
            break;
        
        case 2:
            echo 'snin';
            break;
        
        case 3:
            echo 'slasa';
            break;
        
        case 4:
            echo 'rabu';
            break;
        
        case 5:
            echo 'kamsi';
            break;
        
        case 6:
            echo 'jumat';
            break;
        
        default:
            echo 'kosong';
            break;
    }

    echo '<br>';

    $test = 'tambah';

    switch ($test) {
        case 'tambah':
            echo 'y';
            break;
        
        case 'ubah':
            echo '?';
            break;
        
        case 'haupus':
            echo 'hapus';
            break;
        
        default:
            echo 'ea';
            break;
    }


?>
