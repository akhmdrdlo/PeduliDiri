<?php
session_start();
$id     = rand(0,10000);
$nik    = $_SESSION['nik'];
$nama   = $_SESSION['nama'];
$tgl    = $_POST['tanggal'];
$jam    = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu   = $_POST['suhu'];

$format = "\n$id|$nik|$nama|$tgl|$jam|$lokasi|$suhu";
$data   = file("catatan.txt",FILE_IGNORE_NEW_LINES);
foreach($data as $isi){
    $pisah = explode("|",$isi);
    if($pisah['0']==$id){
        $cek = true;
    }
}

if($cek){
    echo "<script>
    alert('Maaf,ID yang sama telah terdaftar,Mohon Coba Lagi...');
    window.location.assign('../dashboard.php?url=tambah-catatan');
    </script>";
} else {
    error_reporting(0);
    $buka = fopen("catatan.txt","a");
    fwrite($buka, $format);
    fclose($buka);

    echo "<script>
    alert('Data Perjalanan Berhasil Ditambahkan!!');
    window.location.assign('../dashboard.php');
    </script>";
}
?>