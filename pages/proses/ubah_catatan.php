<?php
session_start();
$id     = $_POST['id'];
$nik    = $_SESSION['nik'];
$nama   = $_SESSION['nama'];
$tgl    = $_POST['tanggal'];
$jam    = $_POST['jam'];
$lokasi = $_POST['lokasi'];
$suhu   = $_POST['suhu'];
$no     = 0;

$format = "$id|$nik|$nama|$tgl|$jam|$lokasi|$suhu";
$data   = file("catatan.txt",FILE_IGNORE_NEW_LINES);
foreach($data as $isi){
    $no++;
    $pisah = explode("|",$isi);
    if($pisah['0']==$id){
        $garis = $no - 1;
    }
}

$data[$garis] = $format;
$edit = implode("\n",$data);
file_put_contents("catatan.txt",$edit);

echo "<script>
alert('Data Perjalanan Berhasil Diubah!!');
window.location.assign('../dashboard.php');
</script>";
?>