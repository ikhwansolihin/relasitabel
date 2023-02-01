<?php
include("koneksi.php");

if(isset($_POST['edit'])){;
    $id=$_POST['id'];
    $Nama=$_POST['nama'];
    $Kelas=$_POST['kelas'];
    $Nama_Jurusan=$_POST['nama_jurusan'];
    $Tahun=$_POST['tahun'];
    $Nominal=$_POST['nominal'];

//------------------------------------------------------------------------------------------------------//
$sql = "UPDATE tb_siswa SET nama='$Nama' , kelas='$Kelas' WHERE id_siswa=$id";
$query= mysqli_query($db, $sql);

//-----------------------------------------------------------------------------------------------------//
$sql = "UPDATE tb_jurusan SET nama_jurusan='$Nama_Jurusan' WHERE id_jurusan=$id";
$query= mysqli_query($db, $sql);

//-----------------------------------------------------------------------------------------------------//
$sql = "UPDATE tb_spp SET tahun='$Tahun' , nominal='$Nominal' WHERE id_spp1=$id";
$query= mysqli_query($db, $sql);


if($query){
    header('location:join-table.php');
}else{
    die ("gagal mengedit");
}}
else{
    die  ("akses dilarang");
}
?>