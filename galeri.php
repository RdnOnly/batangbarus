<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@2.39.0/tabler-icons.min.css" rel="stylesheet">

</head>
<body>
<?php
include 'koneksi.php';
?>

<div class="row">
<!-- [ sample-page ] start -->
    <div class="col-sm-12">
        <div class="card">
             <?php
            include 'koneksi.php';
            $aksi=isset($_GET['aksi']) ? $_GET['aksi'] : 'list';
                switch ($aksi) {
                    case 'list':
            ?>

            <div class="card-body"  style=" background: linear-gradient(90deg, #2E7D32 60%, #FFC107 100%);">
                 <a href="TampilanAdmin.php?p=galeri&aksi=input" class="btn btn-primary mb-1"><i class="ti ti-user-plus" style="margin-right: 5px;"></i>Tambah Galeri
                    </a>
                 <h2 style="color:white; text-align: center;">Galeri</h2>
                <div class="card tbl-card">
                    <div class="card-body">
                        <div class="table table-responsive table-bordered">
                            <table class="table table-hover table-borderless mb-0" style="height: 50px;">
                                <thead style="background-color: #003366; color: white;">
                                    <tr style="height: 50px;color: white;">
                                    <th style="width: 40px; color: white;">NO.</th>
                                    <th style="width: 100px;color: white;">Gambar</th>
                                    <th style="width: 40px;color: white;">AKSI</th>
                                    </tr>
                                </thead>
                                  <?php
                
                                    $tampil=mysqli_query($db,"SELECT * FROM galeri ");
                                    $no=1;
                                    while($data=mysqli_fetch_array($tampil)){
                                    

                                
                                ?>
                                <tbody>
                                    <tr>
                                        <td><?php echo $no;?></td>
                                        <td>
                                            <?php if ($data['gambar'] != ''): ?>
                                                <img src="uploads/galeri/<?= $data['gambar'] ?>" width="500">
                                            <?php else: ?>
                                                <span>Tidak ada gambar</span>
                                            <?php endif; ?>
                                        </td>
                                       
                                        <td width="15%" class="text-centered">
                                            <a href="TampilanAdmin.php?p=galeri&aksi=edit&id_edit=<?php echo $data['id']?>" class="btn btn-warning" style="background-color: #007bff; "><i class="ti ti-edit"></i></a>   
                                            <a href="proses_galeri.php?proses=delete&id_hapus=<?php echo $data['id']?>" class="btn btn-danger" onclick="return confirm('Yakin akan menghapus data?')" style="background-color:  #dc3545; "><i class="ti ti-trash"></i></a>   
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
                                    <form action="proses_galeri.php?proses=insert" method="post" enctype="multipart/form-data">
                                       <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">gambar</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" onchange="previewgambar(event)">
                                                <img id="preview" src="#" alt="Preview gambar" style="display:none; margin-top:10px; max-width: 150px;">
                                            </div>
                                        </div>

                                        <script>
                                        function previewgambar(event) {
                                            const reader = new FileReader();
                                            const preview = document.getElementById('preview');
                                            
                                            reader.onload = function(){
                                                preview.src = reader.result;
                                                preview.style.display = 'block';
                                            };

                                            reader.readAsDataURL(event.target.files[0]);
                                        }
                                        </script>

                                        
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
        
                        $sql=mysqli_query($db,"SELECT * FROM galeri WHERE id='$_GET[id_edit]'");
                        $data=mysqli_fetch_array($sql);
                        ?>

                        <div class="container mt-5 mx-4">
                            <div class="row">
                                <div class="col-8">
                                     <form action="proses_galeri.php?proses=update&id_edit=<?= $data['id'] ?>" method="post" enctype="multipart/form-data">


                                        <div class="row mb-3">
                                            <label class="col-sm-3 col-form-label">gambar</label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" name="gambar" id="gambar" accept="image/*" onchange="previewgambar(event)">

                                                <!-- Preview gambar baru -->
                                                <img id="preview" src="#" alt="Preview gambar" style="display:none; margin-top:10px; max-width: 150px;">

                                                <!-- Gambar lama -->
                                                <p class="mt-2" id="oldImageWrapper" style="<?= $data['gambar'] ? '' : 'display:none;' ?>">
                                                    <?php if ($data['gambar']): ?>
                                                        <img id="oldImage" src="uploads/galeri/<?= $data['gambar'] ?>" width="80" alt="Gambar lama">
                                                    <?php else: ?>
                                                        Tidak ada
                                                    <?php endif; ?>
                                                </p>
                                            </div>
                                        </div>

                                        <script>
                                        function previewgambar(event) {
                                            const reader = new FileReader();
                                            const preview = document.getElementById('preview');
                                            const oldImageWrapper = document.getElementById('oldImageWrapper');

                                            reader.onload = function(){
                                                preview.src = reader.result;
                                                preview.style.display = 'block';

                                                // Sembunyikan gambar lama saat preview baru muncul
                                                if (oldImageWrapper) {
                                                    oldImageWrapper.style.display = 'none';
                                                }
                                            };

                                            reader.readAsDataURL(event.target.files[0]);
                                        }
                                        </script>


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