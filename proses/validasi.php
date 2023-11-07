<?php
$nik    = $_POST['nik'];
$nama   = $_POST['nama'];

$format = "$nik|$nama";
$data = file("config.txt",FILE_IGNORE_NEW_LINES);
if(in_array($format,$data)){
    session_start();
    $_SESSION['nik'] = $nik;
    $_SESSION['nama'] = $nama;
    header("location:../dashboard.php");
} else {
    echo "<script>
    alert('Maaf, Data yang anda masukkan tidak valid, Silahkan coba lagi!!');
    window.location.assign('../index.php');
    </script>";
}
?>