<?php
$namaPanggilan = "Akhsan";
$tanggalHariIni = intval(date("d"));

$jumlahHurufNama = strlen($namaPanggilan);



if ($jumlahHurufNama === ($tanggalHariIni - 2)) {
    echo "Berhasil";
} elseif ($jumlahHurufNama < $tanggalHariIni) {
    echo "Sedikit lagi";
} else {
    echo "Coba lagi";
}
?>
