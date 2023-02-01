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
        <a type="button" href="<?= base_url('add_profil') ?>" class="btn  btn-secondary">Tambah Data</a>
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
                                        <th>Nama UMKM</th>
                                        <th>Logo UMKM</th>
                                        <th>Slide</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    $no = 1;
                                        foreach ($profil as $get_profil) { ?>
                                    <tr>
                                       <td><?=$no++?></td>
                                       <td><?=$get_profil['nama_umkm']?></td>
                                       <td><?=$get_profil['logo']?></td>
                                       <td><?=$get_profil['slide_1']?></td>
                                       <td>
                                            <a href="<?= base_url('/edit_profil/'.$get_profil['id_profil']) ?>" class="btn btn-info">Detail</a>
                                            <a href="<?= base_url('/delete_profil/'.$get_profil['id_profil']) ?>" class="btn btn-danger">Hapus</a>
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