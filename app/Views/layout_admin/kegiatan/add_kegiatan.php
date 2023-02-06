<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Kegiatan</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Kegiatan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Input Kegiatan Anda</h4>
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?=base_url('/proses_kegiatan') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_kegiatan">Nama Kegiatan</label>
                                    <input type="text" class="form-control"   placeholder="Nama Kegiatan" name="nama_kegiatan" autofocus required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Deskripsi Kegiatan</label>
                                <textarea type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Kegiatan" id="deskripsi" cols="30" rows="10" required></textarea>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Foto 1</label>
                                    <input type="file" class="form-control" name="foto_1" id="foto_1" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="foto_2">Foto 2</label>
                                    <input type="file" class="form-control" name="foto_2" id="foto_2" required>
                                </div>
                            </div>
                            <button class="btn btn-info">  Tambah Kegiatan <img src="<?= base_url()?>/assets_admin/assets/icon/send.svg" alt=""></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>