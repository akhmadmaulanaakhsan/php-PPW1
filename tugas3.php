<?php
$namaDepan = "Akhsan"; 

$kota = array(
    "Lampung",
    "Riau",
    "Jambi",
    "Bengkulu",
    "Makassar",
    "Kendari",
    "Gorontalo",
    "Samarinda",
    "Papua",
    "Nusa Tenggara Barat"
);

$kotaTujuan = "Jawa Timur"; // Kota default

$namaDepanLength = strlen($namaDepan);
$kotaCount = count($kota);

for ($i = 0; $i < $namaDepanLength; $i++) {
    $hurufDepan = strtolower($namaDepan[$i]);

    for ($j = 0; $j < $kotaCount; $j++) {
        $hurufPertamaKota = strtolower($kota[$j][0]);

        if ($hurufDepan === $hurufPertamaKota) {
            $kotaTujuan = $kota[$j];
            break 2; // keluar dari 2 perulangan
        }
    }
}

echo "Kota tujuan KKN : $kotaTujuan";
?>

