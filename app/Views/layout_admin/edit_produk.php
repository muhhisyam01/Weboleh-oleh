<section class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Halaman Edit Produk</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Home</a></li>
                            <li class="breadcrumb-item"><a href="#!">Edit Produk</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Edit Produk Anda</h4>
                        
                       
                    </div>
                    <div class="card-body">
                        <form role="form" action="<?=base_url('/produk_proses/'. $produk_edit['id_produk']) ?>" method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_produk">Nama Produk</label>
                                    <input type="text" value="<?= $produk_edit['nama_produk'] ?>" class="form-control"   placeholder="Nama Produk" name="nama_produk" autofocus >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Jenis Produk</label>
                                    <input type="text" value="<?= $produk_edit['jenis_produk'] ?>" class="form-control"  placeholder="Jenis Produk" name="jenis_produk" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress">Stock Produk</label>
                                <input type="text" value="<?= $produk_edit['stock'] ?>" class="form-control"  placeholder="Stock Produk" name="stock" >
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Harga Produk</label>
                                <input type="text" value="<?= $produk_edit['harga'] ?>" class="form-control"  placeholder="Harga Produk" name="harga" >
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Keterangan Produk</label>
                                <!-- <textarea type="text" class="form-control"  placeholder="Keterangan Produk" name="keterangan" required> -->
                                <textarea type="text"  class="form-control"  id="keterangan" name="keterangan" cols="30" rows="10" placeholder="Tuliskan Keterangan Produk"><?= $produk_edit['keterangan'] ?></textarea>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2">Gambar dari depan</label>
                                    <input type="file" value="<?= $produk_edit['gambar_dp'] ?>" class="form-control" name="gambar_dp" id="gambar_dp" >
                                </div>
                                <!-- <div class="form-group col-md-6">
                                    <label for="gambar_bk">Gambar Depan Belakang</label>
                                    <input type="file" class="form-control" name="gambar_bk" id="gambar_bk" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gambar_kr">Gambar Depan Kiri</label>
                                    <input type="file" class="form-control" name="gambar_kr" id="gambar_kr" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gambar_kn">Gambar Depan Kanan</label>
                                    <input type="file" class="form-control" name="gambar_kn" id="gambar_kn" >
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gambar_isi">Gambar Depan Isi</label>
                                    <input type="file" class="form-control" name="gambar_isi" id="gambar_isi" >
                                </div> -->
                            </div>
                            <button class="btn btn-info">  Tambah Produk <img src="<?= base_url()?>/assets_admin/assets/icon/send.svg" alt=""></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>