<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10"><?= $title; ?></h5>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <a type="button" href="<?= base_url('tambah_produk') ?>" class="btn  btn-secondary">Tambah Data</a>
        <br>
        <br>
        <div class="row">
            <!-- [ basic-table ] start -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Produk</h5>
                        <?php if (session()->getFlashdata()) : ?>
                            <div class="alert alert-primary" role="alert">
                                <?= session()->getFlashdata('pesan');?>
						    </div>
                       <?php endif; ?>
                    </div>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Jenis Produk</th>
                                        <th>Stock Produk</th>
                                        <th>Harga Produk</th>
                                        <th>Gambar Produk</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $no = 1;
                                        foreach ($produk as $get_produk) 
                                        { 
                                    ?>
                                    <tr>
                                       <td><?=$no++?></td>
                                       <td><?=$get_produk['nama_produk']?></td>
                                       <td><?=$get_produk['jenis_produk']?></td>
                                       <td><?=$get_produk['stock']?></td>
                                       <td><?=$get_produk['harga']?></td>
                                       <td><?=$get_produk['gambar']?></td>
                                       <td>
                                            <a href="" class="btn btn-info">Edit</a>
                                            <a href="" class="btn btn-danger">Hapus</a>
                                       </td>
                                    </tr>
                                    
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- [ Main Content ] end -->
    </div>
</section>