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
        <!-- [ breadcrumb ] end -->
        <!-- [ Main Content ] start -->
        <div class="row">
            
            <!-- [ form-element ] start -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Silahkan Input Produk Anda</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nama Produk</label>
                                    <input type="text" class="form-control" id="inputEmail4" placeholder="Nama Produk">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Jenis Produk</label>
                                    <input type="text" class="form-control" id="inputPassword4" placeholder="Jenis Produk">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Stock Produk</label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Stock Produk">
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Harga</label>
                                <input type="text" class="form-control" id="inputAddress2" placeholder="Harga Produk">
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
            <!-- [ form-element ] end -->
        </div>
        <!-- [ Main Content ] end -->

    </div>
</section>