<?php 
    function datadiri($jumlah, $nama, $asal){
        for ($i=0; $i < $jumlah; $i++) { 
            echo ("<br> nama saya ". $nama ." saya berasal dari ". $asal);
        }
    }
    datadiri(3, "Hilmi", "Bojonegoro");
    echo("<br>ini fungsi baru");
    datadiri(3, "Adi", "Surabaya");
    echo("<br>ini fungsi baru");
    datadiri(3, "Roy", "Rembang");
?>