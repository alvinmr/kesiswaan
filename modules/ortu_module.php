<?php 

switch ($_GET['aksi']) {
    case 'tambah':
        $id_siswa = $_POST['nama'];    
        $nama_ayah = $_POST['nama_ayah'];
        $nama_ibu = $_POST['nama_ibu'];
        $ttl_ayah = $_POST['ttl_ayah'];
        $ttl_ibu = $_POST['ttl_ibu'];
        $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
        $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
        $penghasilan_ayah = $_POST['penghasilan_ayah'];
        $penghasilan_ibu = $_POST['penghasilan_ibu'];      
        $no_tlp_ayah = $_POST['no_tlp_ayah'];        
        $no_tlp_ibu = $_POST['no_tlp_ibu'];        


        mysqli_query($koneksi, "INSERT INTO anggota_keluarga VALUES(NULL,'$id_siswa','$nama_ayah', '$nama_ibu', '$ttl_ayah', '$ttl_ibu', '$pekerjaan_ayah', '$pekerjaan_ibu', '$penghasilan_ayah', '$penghasilan_ibu', '$no_tlp_ayah', '$no_tlp_ibu')") or die(mysqli_error($koneksi));

        // var_dump($hasil);
        
        header("location:index.php?page=ortu");
        break;

        case 'edit':
            $id = $_POST['id'];
            $id_siswa = $_POST['nama'];
            $nama_ayah = $_POST['nama_ayah'];
            $nama_ibu = $_POST['nama_ibu'];
            $ttl_ayah = $_POST['ttl_ayah'];
            $ttl_ibu = $_POST['ttl_ibu'];
            $pekerjaan_ayah = $_POST['pekerjaan_ayah'];
            $pekerjaan_ibu = $_POST['pekerjaan_ibu'];
            $penghasilan_ayah = $_POST['penghasilan_ayah'];
            $penghasilan_ibu = $_POST['penghasilan_ibu'];      
            $no_tlp_ayah = $_POST['no_tlp_ayah'];        
            $no_tlp_ibu = $_POST['no_tlp_ibu'];  
    
            mysqli_query($koneksi, "UPDATE anggota_keluarga SET 
            id_anggota_keluarga = '$id',
            id_siswa = '$id_siswa',
            nama_ayah = '$nama_ayah',
            nama_ibu = '$nama_ibu',
            ttl_ayah = '$ttl_ayah',
            ttl_ibu = '$ttl_ibu',
            pekerjaan_ayah = '$pekerjaan_ayah',
            pekerjaan_ibu = '$pekerjaan_ibu',
            penghasilan_ayah = '$penghasilan_ayah',
            penghasilan_ibu = '$penghasilan_ibu',
            no_telepon_ayah = '$no_tlp_ayah',
            no_telepon_ibu = '$no_tlp_ibu' WHERE id_anggota_keluarga = '$id'") or die(mysqli_error($koneksi));
    
            // var_dump($hasil);
            header("location:index.php?page=ortu");
            break;

            case 'hapus' :
                $id = $_GET['id'];
                mysqli_query($koneksi, "DELETE FROM `anggota_keluarga` WHERE `id_anggota_keluarga` = $id") or die(mysqli_error($koneksi));
                header("location:index.php?page=ortu");
            break;

            
}

?>