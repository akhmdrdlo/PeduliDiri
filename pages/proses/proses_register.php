<?php
$nik    = $_POST['nik'];
$nama   = $_POST['nama'];

$format = "\n$nik|$nama";
$data = file("config.txt",FILE_IGNORE_NEW_LINES);
foreach($data as $isi){
    $pisah = explode("|",$isi);
    if($pisah['0']==$nik){
        $cek = true;
    }
}

if($cek){
    echo "<script>
    alert('Maaf,NIK yang anda gunakan telah terdaftar,Coba lagi!!');
    window.location.assign('../register.php');
    </script>";
} else {
    $buka =  fopen("config.txt","a");
    fwrite($buka,$format);
    fclose($buka);
    
    echo "<script>
    alert('Pendaftaran Berhasil,Silahkan Login!!');
    window.location.assign('../login.php');
    </script>";
}
?>