<?php
include 'connection.php';
if(isset($_POST['daftar'])){
    // menyimpan data kedalam variabel
    $nama                   = $_POST['nama'];
    $kelamin                 = $_POST['kelamin'];
    $tempat_lahir           = $_POST['tempat_lahir'];
    $tanggal_lahir        = $_POST['tanggal_lahir'];
    $alamat              = $_POST['alamat'];
    $telepon              = $_POST['telepon'];
    $line                = $_POST['line'];
    $asal_sekolah         = $_POST['asal_sekolah'];
    $kelas               = $_POST['kelas'];
    $nama_ayah            = $_POST['nama_ayah'];
    $telpon_ayah          = $_POST['telpon_ayah'];
    $pekerjaan_ayah          = $_POST['pekerjaan_ayah'];
    $telpon_ibu             = $_POST['telpon_ibu'];
    $pekerjaan_ibu         = $_POST['pekerjaan_ibu'];
    $alamat_ortu         = $_POST['alamat_ortu'];
    $kode_pos         = $_POST['kode_pos'];
    $email_ortu         = $_POST['email_ortu'];
    $program_les         = $_POST['program_les'];
    $biaya_pendidikan         = $_POST['biaya_pendidikan'];
    $jenis_pembayaran         = $_POST['jenis_pembayaran'];
    $jumlah_pembayaran         = $_POST['jumlah_pembayaran'];
    $batas_lunas         = $_POST['batas_lunas'];
    $foto_siswa         = $_POST['foto_siswa'];
    $keterangan         = $_POST['keterangan'];
    // query SQL untuk insert data  
    //$query="INSERT INTO registrasiku SET  nama='$nama', kelamin='$kelamin',tempat_lahir='$tempat_lahir',tanggal_lahir='$tanggal_lahir',alamat='$alamat',telepon='$telepon',line='$line',asal_sekolah='$asal_sekolah',kelas='$kelas',nama_ayah='$nama_ayah',telpon_ayah='$telpon_ayah',pekerjaan_ayah='$pekerjaan_ayah',telpon_ibu='$telpon_ibu',pekerjaan_ibu='$pekerjaan_ibu',alamat_ortu='$alamat_ortu',kode_pos='$kode_pos',email_ortu='$email_ortu',program_les='$program_les,biaya_pendidikan='$biaya_pendidikan,jenis_pembayaran='$jenis_pembayaran,jumlah_pembayaran='$jumlah_pembayaran,batas_lunas='$batas_lunas,foto_siswa='$foto_siswa',keterangan='$keterangan'";
    $sql = "INSERT INTO registrasiku (nama,kelamin,tempat_lahir,tanggal_lahir,alamat,telepon,line,asal_sekolah,kelas,nama_ayah,telpon_ayah,pekerjaan_ayah,telpon_ibu,pekerjaan_ibu,alamat_ortu,kode_pos,email_ortu,program_les,biaya_pendidikan,jenis_pembayaran,jumlah_pembayaran,batas_lunas,foto_siswa,keterangan) VALUE ('$nama','$kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$telepon','$line','$asal_sekolah','$kelas','$nama_ayah','$telpon_ayah','$pekerjaan_ayah','$telpon_ibu','$pekerjaan_ibu','$alamat_ortu','$kode_pos','$email_ortu','$program_les','$biaya_pendidikan','$jenis_pembayaran','$jumlah_pembayaran','$batas_lunas','$foto_siswa','$keterangan')";
   
   // $sql = "INSERT INTO registrasiku (nama, kelamin,tempat_lahir,tanggal_lahir,alamat,telepon,line,asal_sekolah,kelas,nama_ayah,telpon_ayah,pekerjaan_ayah,telpon_ibu,pekerjaan_ibu,alamat_ortu,kode_pos,email_ortu,program_les,biaya_pendidikan,jenis_pembayaran,jumlah_pembayaran,batas_lunas,foto_siswa,keterangan) VALUE ('$nama','$kelamin','$tempat_lahir','$tanggal_lahir','$alamat','$telepon','$line','$asal_sekolah','$kelas','$nama_ayah','$telpon_ayah','$pekerjaan_ayah','$telpon_ibu','$pekerjaan_ibu','$alamat_ortu','$kode_pos','$email_ortu','$program_les','$biaya_pendidikan','$jenis_pembayaran','$jumlah_pembayaran,'$batas_lunas,'$foto_siswa','$keterangan')";
        $query = mysqli_query($db, $sql);

        // apakah query simpan berhasil?
        if( $query ) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
            header('Location: registration.php?status=sukses');
        } else {
            // kalau gagal alihkan ke halaman indek.php dengan status=gagal
            header('Location: registration.php?status=gagal');
        }


} else {
    die("Akses dilarang...");
}

?>


