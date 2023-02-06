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
                            <li class="breadcrumb-item"><a href="awal">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Silahkan Input Produk Anda</h4>
                        <ul>
                            <li>Inputan jangan dikosongkan untuk : 
                                <ul>
                                    <li>
                                        Nama produk
                                    </li>
                                    <li>
                                        Jenis produk
                                    </li>
                                    <li>
                                        Stock
                                    </li>
                                    <li>
                                        Harga
                                    </li>
                                    <li>
                                        Keterangan
                                    </li>
                                    <li>
                                        Semua Gambar
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <?= $validation->listErrors(); ?> 
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?=base_url('/produk_proses') ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" class="form-control"   placeholder="Nama Produk" name="nama_produk" autofocus required>
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
                                <label for="inputAddress2">Harga Produk</label>
                                <input type="text" class="form-control"  placeholder="Harga Produk" name="harga" required>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Keterangan Produk</label>
                                <!-- <textarea type="text" class="form-control"  placeholder="Keterangan Produk" name="keterangan" required> -->
                                <textarea type="text" class="form-control"  id="keterangan" name="keterangan" cols="30" rows="10" placeholder="Tuliskan Keterangan Produk" required></textarea>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Gambar 1</label>
                                    <input type="file" class="form-control" name="gambar_1" id="gambar_1" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gambar_2">Gambar 2</label>
                                    <input type="file" class="form-control" name="gambar_2" id="gambar_2" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gambar_3">Gambar 3</label>
                                    <input type="file" class="form-control" name="gambar_3" id="gambar_3" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gambar_4">Gambar 4</label>
                                    <input type="file" class="form-control" name="gambar_4" id="gambar_4" required>
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