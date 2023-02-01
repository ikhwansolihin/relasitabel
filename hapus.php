<?php
//------------koneksi---------------------//
include("koneksi.php");
//---------------------------------------//
$id = $_GET['id_siswa'];
//--------query------------------------//
$sql= "DELETE FROM tb_jurusan where id_jurusan=$id";
$query = mysqli_query($db, $sql);
//---------------------------------------------------//
$sql= "DELETE FROM tb_spp where id_spp1=$id";
$query = mysqli_query($db, $sql);
//-------------------------------------------------//
$sql= "DELETE FROM tb_siswa where id_siswa=$id";
$query = mysqli_query($db, $sql);
//------------------------------------------------//
if($query){
    header("Location:join-table.php?status=sukses");
}else{
    die("akses dilarang");  
}
?>