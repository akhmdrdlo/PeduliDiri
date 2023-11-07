<?php
$id     = $_GET['id'];
$no     = 0;

$data   = file("catatan.txt",FILE_IGNORE_NEW_LINES);
foreach($data as $isi){
    $pisah  = explode("|",$isi);
    $no++;
    if($pisah['0']==$id){
        $garis = $no - 1;
    }
}

unset($data[$garis]);
$hapus = implode("\n",$data);
file_put_contents("catatan.txt",$hapus);

echo "<script>
alert('Data Perjalanan Berhasil DiHapus!!');
window.location.assign('../dashboard.php');
</script>";
?>