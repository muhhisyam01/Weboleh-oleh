<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Silahkan Input Produk Anda</h5>
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?=base_url('produk_proses') ?>" method="post">
                  
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nama Produk</label>
                                    <input type="text" class="form-control"  placeholder="Nama Produk" name="nama_produk" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Jenis Produk</label>
                                    <input type="text" class="form-control"  placeholder="Jenis Produk" name="jenis_produk" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Stock Produk</label>
                                <input type="text" class="form-control"  placeholder="Stock Produk" name="stock" required>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Harga</label>
                                <input type="text" class="form-control"  placeholder="Harga Produk" name="harga" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputCity">Gambar Produk</label>
                                    <input type="file" class="form-control" id="inputCity">
                                </div>
                            </div>
                            <button class="btn btn-info">  Tambah Produk <img src="<?= base_url()?>/assets_admin/assets/icon/send.svg" alt=""></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>