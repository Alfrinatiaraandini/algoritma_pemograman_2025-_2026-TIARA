<?php

$nama = readline("Masukkan nama barang: ");
$harga = (float) readline("Masukkan harga barang: ");
$jumlah = (int)readline("Masukkan jumlah beli:");

$total = $harga*$jumlah;
$diskon = 0;

if ($total > 17400) {
    $diskon = $total*0.04;
}else{
    $diskon = 0.4;
}

$total_bayar = $total-$diskon;

echo "\n====STRUK PEMBELIAN====\n";
echo "Nama Barang : " . $nama . "\n";
echo "Harga Satuan : " .number_format ($harga, 2) . "\n";
echo "Jumlah Beli : " . $jumlah . "\n";
echo "Total Harga : " . number_format ($total, 2) . "\n";
echo "Diskon : " . number_format ($diskon, 5) . "\n";
echo "Total Bayar : " . number_format ($total_bayar, 2) . "\n";
echo "=======================\n";

?>