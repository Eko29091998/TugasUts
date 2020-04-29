<h2>Data Mahasiswa</h2>
 
<a href="mahasiswa-tambah.php">Tambah Baru</a>
 
<table border="1" width="600">
    <tr>
        <th>No.</th>
        <th>Nama Mahasiswa</th>
        <th>Alamat</th>
        <th>No. Telp</th>
        <th>Jenis Kelamin</th>
        <th>Aksi</th>
    </tr>
 
    <?php 
 
        include 'koneksi.php';
        $sql = "SELECT *FROM mahasiswa";
        $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
        $no=1;
        while ($data=mysqli_fetch_array($que)) 
        {
            //deklarasi database
            //var      //wajib sama dengan yg di database
            $idm    = $data['id_mahasiswa'];
            $nama   = $data['nama_mahasiswa'];
            $alamat = $data['alamat'];
            $notelp = $data['no_telp'];
            $jkel   = $data['jkel'];
 
            echo
            "
                <tr>
                    <td align='center'>$no</td>
                    <td>$nama</td>
                    <td>$alamat</td>
                    <td>$notelp</td>
                    <td>$jkel</td>
                    <td>
                        <a href='mahasiswa-edit.php?id=$idm'>Edit</a>
                        <a href='mahasiswa-hapus.php?id=$idm'>Hapus</a>
                    </td>
                </tr>
            ";
            $no++;
        }
 
    ?>
</table>