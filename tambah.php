<html>
<head>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <form action="proses_tambah.php" method="POST">
        <fieldset>
            <p>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" />
            </p>

            <p>
                <label for="kelas">Kelas :</label>
                <input type="text" name="kelas" />
            </p>
            <p>
                <label for="nama_jurusan">Jurusan :</label>
                <input type="text" name="nama_jurusan" /> 
</select></br>
            </p>
            <p>
                <label for="tahun">Tahun :</label>
                <input type="number" name="tahun" />
            </p>
            <p>
                <label for="nominal">Nominal :</label>
                <input type="number" name="nominal" />
            </p>
            <p>
                <input type="submit" value="kirim" name="kirim_bayar" />
            </p>
        </fieldset>
</form>
</center>
</body>
</html>