<!DOCTYPE html>
<html>
    <head>
        <title>JOIN TABLE</title>
    </head>
    <body>
    <table border="1">
        <tr>
            <td bgcolor="pink">NO.</td>
            <td  bgcolor="purple">Nama</td>
            <td  bgcolor="green">Kelas</td>
            <td  bgcolor="rainbow">Jurusan</td>
            <td  bgcolor="orange">Tahun</td>
            <td  bgcolor="red">Nominal</td>
            <td  bgcolor="blue">mengubah</td>
        </tr> 
        
        <?php
        include("koneksi.php");
        $query = mysqli_query($db, "SELECT * FROM tb_siswa INNER JOIN
     tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN tb_spp ON tb_siswa.id_spp1 = tb_spp.id_spp1");
        
        while($siswa=mysqli_fetch_array($query)){
            echo "<tr>";
                       echo "<td>".$siswa['id_siswa']."</td>";
                       echo "<td>".$siswa['nama']."</td>";
                       echo "<td>".$siswa['kelas']."</td>";
                       echo "<td>".$siswa['nama_jurusan']."</td>";
                       echo "<td>".$siswa['tahun']."</td>";
                       echo "<td>".$siswa['nominal']."</td>";
                       echo "<td>";
                       echo "<a href='edit.php?id_siswa=".$siswa['id_siswa']."'>Edit</a> |";
                       echo "<a href='hapus.php?id_siswa=".$siswa['id_siswa']."'>hapus</a>";
                       echo "</td>";
            echo "</tr>";
           }
        ?>
  <a href="tambah.php"><input type="button"  name="Tambah"   value="tambah">
  </table>
</body>
</html>