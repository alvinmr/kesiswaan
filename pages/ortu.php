<?php 
switch ($_GET['aksi']) {
    default:
    ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Data Orang Tua</h1>
    <a href="?page=ortu&aksi=tambah" class="btn btn-success btn-icon-split">
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
                        <th><center>No</center></th>
                        <th><center>NIS</center></th>
                        <th><center>Nama</center></th>
                        <th><center>NISN</center></th>
                        <th><center>Nama Ayah</center></th>
                        <th><center>Nama Ibu</center></th>
                        <th><center>TTL Ayah</center></th>
                        <th><center>TTL Ibu</center></th>
                        <th><center>Pekerjaan Ayah</center></th>
                        <th><center>Pekerjaan Ibu</center></th>
                        <th><center>Penghasilan Ayah</center></th>
                        <th><center>Penghasilan Ibu</center></th>
                        <th><center>No Telpon Ayah</center></th>
                        <th><center>No Telpon Ibu</center></th>                              
                        <th><center>Aksi</center></th>                              
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th><center>No</center></th>
                        <th><center>NIS</center></th>
                        <th><center>Nama</center></th>
                        <th><center>NISN</center></th>
                        <th><center>Nama Ayah</center></th>
                        <th><center>Nama Ibu</center></th>
                        <th><center>TTL Ayah</center></th>
                        <th><center>TTL Ibu</center></th>
                        <th><center>Pekerjaan Ayah</center></th>
                        <th><center>Pekerjaan Ibu</center></th>
                        <th><center>Penghasilan Ayah</center></th>
                        <th><center>Penghasilan Ibu</center></th>
                        <th><center>No Telpon Ayah</center></th>
                        <th><center>No Telpon Ibu</center></th>                              
                        <th><center>Aksi</center></th>     
                    </tr>
                  </tfoot>
                  </tbody>
                  <?php 
                $data = mysqli_query($koneksi, "SELECT *, siswa.nama,siswa.nis,siswa.nisn FROM anggota_keluarga JOIN siswa ON anggota_keluarga.id_siswa = siswa.id_siswa");
                $no = 1;
                while($row = mysqli_fetch_array($data)){                                        
                    ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $row['nis']; ?></td>
                        <td><?= $row['nama']; ?></td>
                        <td><?= $row['nisn']; ?></td>
                        <td><?= $row['nama_ayah']; ?></td>
                        <td><?= $row['nama_ibu']; ?></td>
                        <td><?= $row['ttl_ayah']; ?></td>
                        <td><?= $row['ttl_ibu']; ?></td>
                        <td><?= $row['pekerjaan_ayah']; ?></td>
                        <td><?= $row['pekerjaan_ibu']; ?></td>
                        <td><?= $row['penghasilan_ayah']; ?></td>
                        <td><?= $row['penghasilan_ibu']; ?></td>
                        <td><?= $row['no_telepon_ayah']; ?></td>
                        <td><?= $row['no_telepon_ibu']; ?></td>     
                      <td>
                        <center>
                        <a href="./module.php?module=ortu_module&aksi=hapus&id=<?= $row['id_anggota_keluarga'];?>" onclick="return confirm('Yakin ingin menghapus?')" class="btn btn-danger btn-circle btn-sm mb-2"><i class="fas fa-trash"></i></a> 
                        <a href="?page=ortu&aksi=edit&id=<?= $row['id_anggota_keluarga'];?>" class="btn btn-warning btn-circle btn-sm"><i class="fas fa-edit"></i></a> 
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
                        <h4 class="title">Tambah Data Keluarga</h4>
                    </div>

                    <div class="content">
                        <form method="POST" action="./module.php?module=ortu_module&aksi=tambah">
                            <div class="row">
                                <div class="col-md-2">
                                <div class="form-group">
                                        <label>Nama</label>                                        
                                        <select name="nama" class="form-control">
                                        <?php 
                                            $data = mysqli_query($koneksi, "SELECT * FROM siswa");
                                            while($row = mysqli_fetch_array($data)){  ?>                                      
                                                <option value="<?= $row['id_siswa']; ?>"><?= $row['nama'] ?></option>                                        
                                            <?php } ?>                                         
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-2">                                
                                    <div class="form-group">
                                        <label>ID Siswa</label>
                                        <input type="text" class="form-control" placeholder="ID Siswa" name="id_siswa">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" class="form-control" placeholder="Nama Ibu" name="nama_ibu">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                            <div class="col-md-2">
                                    <div class="form-group">
                                        <label>TTL Ayah</label>
                                        <input type="date" class="form-control" name="ttl_ayah">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>TTL Ibu</label>
                                        <input type="date" class="form-control"  name="ttl_ibu">
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" class="form-control" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" class="form-control" placeholder="Pekerjaan Ayah" name="pekerjaan_ibu">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Penghasilan Ayah</label>
                                        <input type="text" class="form-control" placeholder="Penghasilan Ayah" name="penghasilan_ayah">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Penghasilan Ibu</label>
                                        <input type="text" class="form-control" placeholder="Penghasilan Ibu" name="penghasilan_ibu">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>No Telpon Ayah</label>
                                        <input type="text" class="form-control" placeholder="No Telpon Ayah" name="no_tlp_ayah">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>No Telpon Ibu</label>
                                        <input type="text" class="form-control" placeholder="No Telpon Ibu" name="no_tlp_ibu">
                                    </div>
                                </div>                                                        
                            </div>


                            <button type="submit" class="btn btn-success btn-fill pull-left">Simpan</button>                            
                        </form>                                                
                </div>
            </div>
        </div>
        <?php
        break;     
        
        case "edit":

            $id = $_GET['id'];
            $data = mysqli_query($koneksi, "SELECT * FROM anggota_keluarga WHERE id_anggota_keluarga = $id");            
            $row_ortu = mysqli_fetch_assoc($data);
            $id_siswa = $row_ortu['id_siswa'];

        ?>
        <div class="row">
            <div class="col-md-12">                
                    <div class="header">
                        <h4 class="title">Edit Orang Tua</h4>
                    </div>

                    <div class="content">
                        <form method="POST" action="./module.php?module=ortu_module&aksi=edit">
                            <div class="row">  

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama</label>       
                                                                       
                                        <select name="nama" class="form-control">
                                        <?php 
                                            $data_siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa = $id_siswa");
                                            $row_siswa = mysqli_fetch_array($data_siswa);
                                            
                                            $nama_siswa = mysqli_query($koneksi, "SELECT * FROM siswa");
                                            while($row = mysqli_fetch_array($nama_siswa)){  ?>                                      
                                                <option value="<?= $row['id_siswa']; ?>" <?= $row['nama'] == $row_siswa['nama'] ? 'selected' : '' ?> ><?= $row['nama'] ?></option>                                        
                                            <?php } ?>                                         
                                        </select>
                                        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
                                    </div>
                                </div>   
 

                                <div class="col-md-3">                                    
                                    <div class="form-group">
                                        <label>Nama Ayah</label>
                                        <input type="text" value="<?= $row_ortu['nama_ayah'] ?>" class="form-control" placeholder="Nama Ayah" name="nama_ayah">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Nama Ibu</label>
                                        <input type="text" value="<?= $row_ortu['nama_ibu'] ?>" class="form-control" placeholder="Nama Ibu" name="nama_ibu">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>TTL Ayah</label>
                                        <input type="date" value="<?= $row_ortu['ttl_ayah'] ?>" class="form-control" name="ttl_ayah">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>TTL Ibu</label>
                                        <input type="date" value="<?= $row_ortu['ttl_ibu'] ?>" class="form-control"  name="ttl_ibu">
                                    </div>
                                </div>
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Pekerjaan Ayah</label>
                                        <input type="text" value="<?= $row_ortu['pekerjaan_ayah'] ?>" class="form-control" placeholder="Pekerjaan Ayah" name="pekerjaan_ayah">
                                    </div>
                                </div>     
                                
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label>Pekerjaan Ibu</label>
                                        <input type="text" value="<?= $row_ortu['pekerjaan_ibu'] ?>" class="form-control" placeholder="Pekerjaan Ayah" name="pekerjaan_ibu">
                                    </div>
                                </div> 

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>No Telpon Ayah</label>
                                        <input type="text" value="<?= $row_ortu['no_telepon_ayah'] ?>" class="form-control" placeholder="No Telpon Ayah" name="no_tlp_ayah">
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>No Telpon Ibu</label>
                                        <input type="text" value="<?= $row_ortu['no_telepon_ibu'] ?>" class="form-control" placeholder="No Telpon Ibu" name="no_tlp_ibu">
                                    </div>
                                </div>   
                            </div>            
                                        

                            <div class="row">                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Penghasilan Ayah</label>
                                        <input type="text" value="<?= $row_ortu['penghasilan_ayah'] ?>" class="form-control" placeholder="No Telpon Ibu" name="penghasilan_ayah">
                                    </div>
                                </div>  
                                
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Penghasilan ibu</label>
                                        <input type="text" value="<?= $row_ortu['penghasilan_ibu'] ?>" class="form-control" placeholder="No Telpon Ibu" name="penghasilan_ibu">
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
                
            }

            
            ?>
