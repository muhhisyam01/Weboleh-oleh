<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Tambah Profil</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="awal">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Profil</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Input Profil Anda</h4>
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?=base_url('/proses_profil') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_produk">Nama UMKM</label>
                                    <input type="text" class="form-control"   placeholder="Nama UMKM" name="nama_umkm" autofocus required>
                                </div>
                               
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Logo UMKM</label>
                                <input type="file" class="form-control" name="logo" id="logo" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="inputAddress2">Slide Web</label>
                                <input type="file" class="form-control" name="slide" id="slide" >
                            </div> -->
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Slide 1</label>
                                    <input type="file" class="form-control" name="slide_1" id="slide_1" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="slide_2">Slide 2</label>
                                    <input type="file" class="form-control" name="slide_2" id="slide_2" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="slide_3">Slide 3</label>
                                    <input type="file" class="form-control" name="slide_3" id="slide_3" required>
                                </div>
                            </div>
                            <button class="btn btn-info">  Tambah Profil <img src="<?= base_url()?>/assets_admin/assets/icon/send.svg" alt=""></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>