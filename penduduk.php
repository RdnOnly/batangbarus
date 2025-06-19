<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.39.0/tabler-icons.min.css" rel="stylesheet">

</head>
<body>



<div class="row">
<!-- [ sample-page ] start -->
    <div class="col-sm-12"  >
        <div class="card">
            
            <?php
            include 'koneksi.php';
            $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
                switch ($aksi) {
                    case 'list':
            ?>

            <div class="card-body"  style=" background: linear-gradient(90deg, #2E7D32 60%, #FFC107 100%);" >
                <div class="text-end mb-3" style="margin-top: 20px;">
                   

                </div>
                 <a href="TampilanAdmin.php?p=penduduk&aksi=input" class="btn btn-primary mb-1"><i class="ti ti-user-plus" style="margin-left: 5px;"></i>Tambah Penduduk
                    </a>
                 <h2 style="text-align: center;color:white;">Data Penduduk</h2>
                <div class="card tbl-card">

                    <div class="card-body">
                        <div class="table table-responsive table-bordered">
                            <table class="table table-hover table-borderless mb-0" style=" background-color: linear-gradient(90deg, #2E7D32 60%, #FFC107 100%);" >
                                <thead style="background-color: #003366; color: white; ">
                                    <tr>
                                    <th style="color: white;">NO.</th>
                                    <th style="color: white;">NAMA PENDUDUK</th>
                                    <th style="color: white;">NIK</th>
                                    <th style="color: white;">JENIS KELAMIN</th>
                                    <th style="color: white;">UMUR</th>
                                    <th style="color: white;">PEKERJAAN</th>
                                    <th style="color: white;">PENDIDIKAN TERAKHIR</th>
                                    <th style="color: white;">STATUS</th>
                                    <th style="color: white;">ALAMAT</th>
                                    <th style="color: white;">JORONG</th>
                                    <th style="color: white;">AKSI</th>
                                    </tr>
                                </thead>
                                  <?php
                
                                    $tampil=mysqli_query($db,"SELECT * FROM masyrakat ");
                                    $no=1;
                                    while($data=mysqli_fetch_array($tampil)){
                                    

                                
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td><?php echo $data['nama'];?></td>
                                        <td><?php echo $data['nik'];?></td>
                                        <td><?php echo $data['jenis_kelamin'];?></td>
                                        <td><?php echo $data['umur'];?></td>
                                        <td><?php echo $data['pekerjaan'];?></td>
                                        <td><?php echo $data['pendidikan_terakhir'];?></td>
                                        <td><?php echo $data['status'];?></td>
                                        <td><?php echo $data['alamat'];?></td>
                                        <td><?php echo $data['jorong'];?></td>
                                       
                                        <td width="15%" class="text-centered">
                                           <a href="TampilanAdmin.php?p=penduduk&aksi=edit&id_edit=<?php echo $data['nik']?>" class="btn btn-warning" title="Edit" style="background-color: #007bff; "><i class="ti ti-edit"></i></a>   
                                            <a href="proses_penduduk.php?proses=delete&id_hapus=<?php echo $data['nik']?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')" title="Hapus" style="background-color:  #dc3545; "><i class="ti ti-trash"></i></a>
 
                                        </td>
                                    </tr>

                                     <?php
                                        $no++;
                                        }
                                    ?>
                                    
                                </tbody>
                            </table>

                        </div>

                        <?php
                                break;
                            
                            case 'input':
                        ?>  
                        
                        <div class="container mt-5 mx-4">
                            <div class="row">
                                <div class="col-8">
                                    <form action="proses_penduduk.php?proses=insert" method="post">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Nama Penduduk</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">NIK</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nik">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <div class="form-check">
                                                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Umur</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="umur">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="pekerjaan">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="pendidikan_terakhir">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                <select name="status" class="form-select">
                                                    <option value="">--Pilih Status--</option>
                                                    <option value="Belum Kawin">Belum Kawin</option>
                                                    <option value="Kawin">Kawin</option>
                                                    <option value="Pelajar">Pelajar</option>
                                                    <option value="Mahasiswa/i">Mahasiswa/i</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Jorong</label>
                                            <div class="col-sm-8">
                                                <select name="jorong" class="form-select">
                                                    <option value="">--Pilih Jorong--</option>
                                                    <option value="Kayu Jao"> Jorong Kayu Jao</option>
                                                    <option value="LubukS elasih">Jorong Lubuk Selasih</option>
                                                    <option value="Kayu Aro">Jorong Kayu Aro</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                    

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-8">
                                                <textarea name="alamat" class="form-control" rows="5"></textarea>
                                            </div>
                                        </div>


                                        
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-8">

                                                <input type="submit" name="submit" class="btn btn-primary">
                                                <button type="reset" name="reset" class="btn btn-warning">Reset</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>

                        <?php
                            break;
                        
                        case 'edit':
                        ?>  

                        <?php
        
                        $sql=mysqli_query($db,"SELECT * FROM masyrakat WHERE nik='$_GET[id_edit]'");
                        $data=mysqli_fetch_array($sql);
                        ?>

                        <div class="container mt-5 mx-4">
                            <div class="row">
                                <div class="col-8">
                                     <form action="proses_penduduk.php?proses=update" method="post">
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Nama Penduduk</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nama" value="<?= $data['nama']?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">NIK</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="nik" value="<?= $data['nik']?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-8">
                                                <div class="form-check">
                                                     <input type="radio" name="jenis_kelamin" value="Laki-laki" <?= ($data['jenis_kelamin'] == 'Laki-laki') ? 'checked' : '' ?>> Laki-laki
                                                    <input type="radio" name="jenis_kelamin" value="Perempuan" <?= ($data['jenis_kelamin'] == 'Perempuan') ? 'checked' : '' ?>> Perempuan
                                                </div>
                                                
                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Umur</label>
                                            <div class="col-sm-8">
                                                <input type="number" class="form-control" name="umur" value="<?= $data['umur']?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Pekerjaan</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="pekerjaan" value="<?= $data['pekerjaan']?>">
                                            </div>
                                        </div>
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Pendidikan Terakhir</label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" name="pendidikan_terakhir" value="<?= $data['pendidikan_terakhir']?>">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Status</label>
                                            <div class="col-sm-8">
                                                <select name="status" class="form-select">
                                                    <option value="">--Pilih Status Perkawinan--</option>
                                                    <option value="Belum Kawin" <?= ($data['status'] == 'Belum Kawin') ? 'selected' : '' ?>>Belum Kawin</option>
                                                    <option value="Kawin" <?= ($data['status'] == 'Kawin') ? 'selected' : '' ?>>Kawin</option>
                                                    <option value="Pelajar" <?= ($data['status'] == 'Pelajar') ? 'selected' : '' ?>>Pelajar</option>
                                                    <option value="Mahasiswa/i" <?= ($data['status'] == 'Mahasiswa/i') ? 'selected' : '' ?>>Mahasiswa/i</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Jorong</label>
                                            <div class="col-sm-8">
                                                <select name="jorong" class="form-select" required>
                                                    <option value="">--Pilih Jorong--</option>
                                                    <option value="Kayu Jao" <?= ($data['jorong'] == 'Kayu Jao') ? 'selected' : '' ?>>Jorong Kayu Jao</option>
                                                    <option value="Lubuk Selasih" <?= ($data['jorong'] == 'Lubuk Selasih') ? 'selected' : '' ?>>Jorong Lubuk Selasih</option>
                                                    <option value="Kayu Aro" <?= ($data['jorong'] == 'Kayu Aro') ? 'selected' : '' ?>>Jorong Kayu Aro</option>
                                                    
                                                </select>
                                            </div>
                                        </div>

                                    

                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">Alamat</label>
                                            <div class="col-sm-8">
                                                 <textarea name="alamat" class="form-control" rows="5"><?= $data['alamat'] ?></textarea>
                                            </div>
                                        </div>


                                        
                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label"></label>
                                            <div class="col-sm-8">

                                                <button type="submit" name="submit" class="btn btn-primary">Update</button>
                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                        </div>
                        
                    </div>
                </div>
            </div>

            <?php
                        break;
                }

            ?>

        </div>
           

        
    </div>

    
<!-- [ sample-page ] end -->
</div>
</html>