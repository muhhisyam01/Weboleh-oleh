
 <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css"> 

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
        <a type="button" href="<?= base_url('add_Services') ?>" class="btn  btn-secondary">Tambah Data</a>
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
                            
                        <table id="example" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Services</th>
                                <th>Deskripsi Services</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                                <?php 
                                    $no = 1;
                                        foreach ($Services as $get_services) { ?>
                                    <tr>
                                       <td><?=$no++?></td>
                                       <td><?=$get_services['nama_services']?></td>
                                       <td><?=$get_services['deskripsi_services']?></td>
                                       <td>
                                            <a href="<?= base_url('/detail_services/'.$get_services['id_services']) ?>" class="btn btn-info">Detail</a>
                                            <a href="<?= base_url('/delete_services/'.$get_services['id_services']) ?>" class="btn btn-danger">Hapus</a>
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


<script>
   $(document).ready(function () {
    $('#example').DataTable();
});
</script>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.13.2/js/jquery.dataTables.min.js"></script>
