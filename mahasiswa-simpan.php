<?php 
 
    include 'koneksi.php';
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $jekel  = $_POST['jekel'];
 
     
    $sql = "INSERT INTO mahasiswa VALUES('', '$nama', '$alamat', '$notelp', '$jekel')";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='mahasiswa-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal disimpan');
                window.location='mahasiswa-tambah.php';
            </script>
        ";
    }
    //penyimpanan
 
?>