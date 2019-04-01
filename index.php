<?php
// File json yang akan dibaca (full path file)
$file = "statistik.json";

// Mendapatkan file json
$anggota = file_get_contents($file);

// Mendecode anggota.json
$data = json_decode($anggota, true);

// Membaca data array menggunakan foreach
foreach ($data as $d) {
    echo $d['id']. "<br>";
    echo $d['nama']. "<br>";
    echo $d['kegiatan']. "<br>";
}
