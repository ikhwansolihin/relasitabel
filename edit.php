<?php
include("koneksi.php");
if(!isset($_GET['id_siswa'])){
    header("location:join-table.php?");
}
   $id=$_GET['id_siswa'];
   $sql="SELECT * FROM tb_siswa INNER JOIN
   tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp1 = tb_spp.id_spp1 WHERE tb_siswa.id_siswa='$id'";
   $query= mysqli_query($db, $sql);
   $siswa= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
</head>
<body>
    <h1>Edit Siswa</h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $siswa['id_siswa']?>" />
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama"  value="<?php echo $siswa['nama']?>" />
            </p>

            <p>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas"  value="<?php echo $siswa['kelas']?>"/>
            </p>
            <p>
                <label for="nama_jurusan">Jurusan :</label>
                <input type="text" name="nama_jurusan"  value="<?php echo $siswa['nama_jurusan']?>" /> 
</select></br>
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="number" name="tahun"  value="<?php echo $siswa['tahun']?>"/>
            </p>
            <p>
                <label for="nominal">Nominal :</label>
                <input type="number" name="nominal"  value="<?php echo $siswa['nominal']?>"/>
            </p>
            <p>
                <input type="submit" value="edit" name="edit" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>