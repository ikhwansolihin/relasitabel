<?php
include("koneksi.php");
if(isset($_POST['kirim_bayar'])){
    $Nama=$_POST['nama'];
    $Kelas=$_POST['kelas'];
    $Nama_Jurusan=$_POST['nama_jurusan'];
    $Tahun=$_POST['tahun'];
    $Nominal=$_POST['nominal'];

    $sql="INSERT INTO tb_jurusan(nama_jurusan) VALUES ('$Nama_Jurusan' )";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(id_jurusan) AS jurusan_id FROM tb_jurusan LIMIT 1";
    $query=mysqli_query($db, $sql);

    $sql="INSERT INTO tb_spp(tahun, nominal) VALUES ('$Tahun','$Nominal' )";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(id_jurusan) AS jurusan_id FROM tb_jurusan LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data = mysqli_fetch_array($query);
    $as = $data ['jurusan_id'];

    $sql="SELECT max(id_spp1) AS spp2_id FROM tb_spp LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data = mysqli_fetch_array($query);
    $das = $data ['spp2_id'];

   $sql="INSERT INTO tb_siswa(nama, kelas, id_jurusan, id_spp1 ) VALUES ('$Nama','$Kelas','$as','$das' )";
    $query=mysqli_query($db, $sql);


    if($query){
        header('location:join-table.php?status:sukses');
    }else{
        header('location:join-table.php?status:gagal'); 
    }
}
?>