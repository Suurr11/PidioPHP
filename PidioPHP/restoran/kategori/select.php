<div style="margin: auto; width:9000px;">

<h4><a href="http://localhost/pidio/restoran/kategori/insert.php">Tambah Data</a></h4>
<?php

    require_once "../function.php";

    $sql = "SELECT id FROM kategori";
    $result = mysqli_query($koneksi, $sql);

$jumlahdata = mysqli_num_rows($result);



$mulai = 0;
$banyak = 5;



$halaman = ceil ($jumlahdata / $banyak);

for ($i=1; $i <= $halaman ; $i++) { 
    echo '<a href="?p='.$i.'">'.$i.'</a>';
    echo '&nbsp';
}

echo '<br> <br>';

if (isset($_GET['p'])) {
    $p=$_GET['p'];
    $mulai = ($p * $banyak) - $banyak;
    //  3  = (2 * 3) - 3
}else {
    $mulai = 0;
}

echo $halaman;

    $sql = "SELECT * FROM kategori LIMIT 0,5";

    $result = mysqli_query($koneksi, $sql);

//    var_dump($result) ;

    $jumlah = mysqli_num_rows($result);
   // echo '<br>';
   // echo $jumlah

   echo '
   
   <table border="1px">
    <tr>
        <th>no</th>
        <th>kategori</th>
    </tr>
   
   
   
   ';
   $no = $mulai;

    if ($jumlah > 0 ) {
        while ($row = mysqli_fetch_assoc( $result)) {
    
            echo '<tr>';
            echo '<td>'.$no++.'</td>';

            echo '<td>'.$row['kategori'].'</td>';
            echo '</tr>';
        }
    }

    echo '</table>';


?>

</div>



