<?php

$data = json_decode(file_get_contents("php://input"), true);

$file = "komentar.csv";

$nama = $data["nama"];
$komentar = $data["komentar"];
$tanggal = date("Y-m-d H:i:s");

$fp = fopen($file, "a");

fputcsv($fp, [
    $tanggal,
    $nama,
    $komentar
]);

fclose($fp);

echo json_encode([
    "status"=>"success"
]);

?>