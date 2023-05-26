<?php
$kelompok = array(
    array("Nama" => "Akhmad Maulana Akhsan", "NIM" => "499991"),
    array("Nama" => "Max Verstappen", "NIM" => "508372"),
    array("Nama" => "Sergio Perez", "NIM" => "492625"),
    array("Nama" => "Fernando Alonso", "NIM" => "503432"),
    array("Nama" => "Lewis Hamilton", "NIM" => "499987")
);

echo "<h2>Anggota Kelompok dan Peran:</h2>";

foreach ($kelompok as $anggota) {
    $nama = $anggota["Nama"];
    $nim = $anggota["NIM"];

    if ($nim % 2 == 0) {
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }

    echo "<p><b>Nama:</b> $nama <br> 
             <b>NIM:</b> $nim <br> 
             <b>Peran:</b> $peran</p>";
}
?>
