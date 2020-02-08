<?php 

switch ($_GET['aksi']) {
    case 'tambah':
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $agama = $_POST['agama'];
        $nisn = $_POST['nisn'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $no_ujian = $_POST['no_ujian'];
        $asal_sekolah = $_POST['asal_sekolah'];
        $alamat_orang_tua = $_POST['alamat_ortu'];

        mysqli_query($koneksi, "INSERT INTO siswa VALUES(NULL,'$nis','$nama','$ttl','$agama','$nisn','$jenis_kelamin','$no_ujian','$asal_sekolah','$alamat_orang_tua') ") or die(mysqli_error($koneksi));
        // var_dump($var);
        header("location:index.php?page=siswa");
        break;

        case 'edit':
            $id = $_POST['id'];
            $nis = $_POST['nis'];
            $nama = $_POST['nama'];
            $ttl = $_POST['ttl'];
            $agama = $_POST['agama'];
            $nisn = $_POST['nisn'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $no_ujian = $_POST['no_ujian'];
            $asal_sekolah = $_POST['asal_sekolah'];
            $alamat_orang_tua = $_POST['alamat_ortu'];
    
            mysqli_query($koneksi, "UPDATE `siswa` SET 
            id_siswa = $id,
            nis = '$nis', 
            nama = '$nama',
            ttl = '$ttl', 
            agama = '$agama',
            nisn = '$nisn',
            jenis_kelamin = '$jenis_kelamin',
            no_ujian = '$no_ujian',
            asal_sekolah =  '$asal_sekolah',
            alamat_orang_tua = '$alamat_orang_tua' WHERE  id_siswa = '$id'");
                
            header("location:index.php?page=siswa");
            break;

            case 'hapus' :
                $id = $_GET['id'];
                mysqli_query($koneksi, "DELETE FROM `siswa` WHERE `id_siswa` = $id") or die(mysqli_error($koneksi));
                header("location:index.php?page=siswa");
            break;

            
}

?>