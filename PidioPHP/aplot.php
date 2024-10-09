<form action="" method="post" enctype="multipart/form">

    pilih file :
    <input type="file" name="aplot">
    <input type="submit" name="kirim" value="simpan">

</form>

<?php 

    if (isset($_POST ['kirim'])) {

        $file = $_FILES['aplot'];
        
        //var_dump($_FILES['aplot']);

        foreach ($file as $key => $value) {
            echo $key. '= '.$value;
            echo '<br';
        }

        $name = $_FILES['aplot']['name'];
        $temp = $_FILES['aplot']['temp_name'];

        echo $name ;
    }

?>