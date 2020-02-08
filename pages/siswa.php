<?php 
switch ($_GET['aksi']) {
    default:
    ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Para Siswa</h1>
    <a href="?page=siswa&aksi=tambah" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-check"></i>
        </span>
        <span class="text">Tambah Data</span>
    </a>
</div>
<div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Agama</th>
                      <th>NISN</th>
                      <th>Jenis Kelamin</th>
                      <th>NO Ujian</th>
                      <th>Asal Sekolah</th>
                      <th>Alamat Ortu</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>NIS</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Agama</th>
                      <th>NISN</th>
                      <th>Jenis Kelamin</th>
                      <th>NO Ujian</th>
                      <th>Asal Sekolah</th>
                      <th>Alamat Ortu</th>
                      <th>Aksi</th>
                    </tr>
                  </tfoot>
                  </tbody>
                  <?php 
                    $data = mysqli_query($koneksi, "SELECT * FROM siswa");
                    $no = 1;
                    while($row = mysqli_fetch_array($data)){                                        
                        ?>                  
                    <tr>
                      <td><?= $no ?></td>
                      <td><?= $row['nis'] ?></td>
                      <td><?= $row['nama'] ?></td>
                      <td><?= $row['ttl'] ?></td>
                      <td><?= $row['agama'] ?></td>
                      <td><?= $row['nisn'] ?></td>
                      <td><?= $row['jenis_kelamin'] ?></td>
                      <td><?= $row['no_ujian'] ?></td>
                      <td><?= $row['asal_sekolah'] ?></td>
                      <td><?= $row['alamat_orang_tua'] ?></td>
                      <td>
                        <center>
                        <a href="./module.php?module=siswa_module&aksi=hapus&id=<?= $row['id_siswa'];?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-circle btn-sm mb-2"><i class="fas fa-trash"></i></a> 
                        <a href="?page=siswa&aksi=edit&id=<?= $row['id_siswa'];?>" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a> 
                        </center>
                      </td>                      
                    </tr>
                    <?php
                    $no++;
                 } ?>
                  </tbody>
                </table>
              </div>
            </div>
            
            <?php             
            break;
                case 'tambah':
                    ?> 
    <div class="row">
            <div class="col-md-12">                
                    <div class="header">
                        <h4 class="title">Tambah Siswa</h4>
                    </div>

                    <div class="content">
                        <form method="POST" action="./module.php?module=siswa_module&aksi=tambah">
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nomor Induk Siswa</label>
                                        <input type="text" class="form-control" placeholder="NIS" name="nis">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Nama Siswa</label>
                                        <input type="text" class="form-control" placeholder="Nama Siswa" name="nama">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Tempat Tanggal Lahir</label>
                                        <input type="date" class="form-control"  name="ttl">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Agama</label>
                                        <input type="text" class="form-control" placeholder="Agama" name="agama">
                                    </div>
                                </div>

                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>NISN</label>
                                        <input type="text" class="form-control" placeholder="NISN" name="nisn">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>No Ujian</label>
                                        <input type="text" class="form-control" placeholder="No Ujian" name="no_ujian">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Asal Sekolah</label>
                                        <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label>Alamat Orang Tua</label>
                                        <input type="text" class="form-control" placeholder="Asal Sekolah" name="alamat_ortu">
                                    </div>
                                </div>
                            </div>


                            <button type="submit" class="btn btn-success btn-fill pull-left">Simpan</button>
                            <div class="clearfix"></div>
                        </form>                                                
                </div>
            </div>
        </div>
                    <?php
                    break;     
                    
                    case "edit":

                        $id = $_GET['id'];
                        $query = "SELECT * FROM siswa WHERE id_siswa = $id";
                        $data = mysqli_query($koneksi, $query);
                        $row = mysqli_fetch_assoc($data);
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Siswa</h4>
                                </div>
            
                                <div class="content">
                                    <form method="POST" action="./module.php?module=siswa_module&aksi=edit">
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Nomor Induk Siswa</label>
                                                    <input type="text" class="form-control" placeholder="NIS" name="nis"  value="<?= $row['nis'] ?>">
                                                    <input type="hidden" value="<?= $row['id_siswa'] ?>" name="id">
                                                </div>
                                            </div>
            
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Nama Siswa</label>
                                                    <input type="text" class="form-control" placeholder="Nama Siswa" name="nama" value="<?= $row['nama'] ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Tempat Tanggal Lahir</label>
                                                    <input type="date" class="form-control"  name="ttl" value="<?= $row['ttl'] ?>">
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="row">
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Agama</label>
                                                    <input type="text" class="form-control" placeholder="Agama" name="agama" value="<?= $row['agama'] ?>">
                                                </div>
                                            </div>
            
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>NISN</label>
                                                    <input type="text" class="form-control" placeholder="NISN" name="nisn" value="<?= $row['nisn'] ?>">
                                                </div>
                                            </div>
            
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Jenis Kelamin</label>
                                                    <input type="text" class="form-control" placeholder="Jenis Kelamin" name="jenis_kelamin" value="<?= $row['jenis_kelamin'] ?>">
                                                </div>
                                            </div>
                                        </div>
            
                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>No Ujian</label>
                                                    <input type="text" class="form-control" placeholder="No Ujian" name="no_ujian" value="<?= $row['no_ujian'] ?>">
                                                </div>
                                            </div>
            
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Asal Sekolah</label>
                                                    <input type="text" class="form-control" placeholder="Asal Sekolah" name="asal_sekolah" value="<?= $row['asal_sekolah'] ?>">
                                                </div>
                                            </div>
            
                                            <div class="col-md-5">
                                                <div class="form-group">
                                                    <label>Alamat Orang Tua</label>
                                                    <input type="text" class="form-control" placeholder="Asal Sekolah" name="alamat_ortu" value="<?= $row['alamat_orang_tua'] ?>">
                                                </div>
                                            </div>
                                        </div>
            
            
                                        <button type="submit" class="btn btn-success btn-fill pull-left">Edit</button>
                                        <div class="clearfix"></div>
                                    </form>                            
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                        break;
                
            }

            
            ?>
