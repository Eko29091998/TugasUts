<?php 
 
    include 'koneksi.php';
    $id     = $_POST['idm'];
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $notelp = $_POST['notelp'];
    $jekel  = $_POST['jekel'];
 
    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE mahasiswa SET nama_mahasiswa='$nama', alamat='$alamat', no_telp='$notelp', jkel ='$jekel' WHERE id_mahasiswa='$id'";
     
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='mahasiswa-data.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='mahasiswa-edit.php?id=$id';
            </script>
        ";
    }
    //penyimpanan