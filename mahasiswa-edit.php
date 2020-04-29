<h2>Edit Data Mahasiswa</h2>
 
<?php 
    include 'koneksi.php';
    $id  = $_GET['id'];
    $sql = "SELECT *FROM mahasiswa WHERE id_mahasiswa='$id'";
    $que = mysqli_query($sambungan, $sql);
 
    while ($data=mysqli_fetch_array($que)) 
    {
        $nama   = $data['nama_mahasiswa'];
        $alamat = $data['alamat'];
        $notelp = $data['no_telp'];
        $jekel  = $data['jkel'];
    }
?>
 
<form action="mahasiswa-ubah.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="idm" value="<?php echo"$id"; ?>">
    <p>
        Nama Mahasiswa : <br>
        <input type="text" name="nama" required="" value="<?php echo "$nama"; ?>">
    </p>
 
    <p>
        Alamat : <br>
        <textarea name="alamat" required=""><?php echo "$alamat"; ?></textarea>
    </p>
 
    <p>
        No. Telp : <br>
        <input type="text" name="notelp" required="" value="<?php echo "$notelp"; ?>">
    </p>
 
    <p>
        Jenis Kelamin : <br>
        <?php 
 
            if ($jekel=="Laki-laki") 
            {
                echo
                "
                    <input type='radio' name='jekel' value='Laki-laki' checked=''>Laki-laki
                    <input type='radio' name='jekel' value='Perempuan'>Perempuan
                ";
            }
            else
            {
                echo
                "
                    <input type='radio' name='jekel' value='Laki-laki'>Laki-laki
                    <input type='radio' name='jekel' value='Perempuan' checked=''>Perempuan
                ";
            }
 
        ?>
 
    </p>
 
    <p>
        <input type="submit" value="SIMPAN">
    </p>
</form>