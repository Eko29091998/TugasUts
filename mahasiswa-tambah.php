<h2>Tambah Data Mahasiswa</h2>
                        <!--enctype="multipart/form-data", wajib ada kalo ada upload file-->
<form action="mahasiswa-simpan.php" method="post" enctype="multipart/form-data">
    <p>
        Nama Mahasiswa : <br>
        <input type="text" name="nama" required="">
    </p>
 
    <p>
        Alamat : <br>
        <textarea name="alamat" required=""></textarea>
    </p>
 
    <p>
        No. Telp : <br>
        <input type="text" name="notelp" required="">
    </p>
 
    <p>
        Jenis Kelamin : <br>
        <input type="radio" name="jekel" value="Laki-laki">Laki-laki
        <input type="radio" name="jekel" value="Perempuan">Perempuan
    </p>
 
    <p>
        <input type="submit" value="SIMPAN">
    </p>
</form>