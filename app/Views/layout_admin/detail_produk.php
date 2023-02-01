<div class="pcoded-main-container">
	<div class="pcoded-content">
		<h5>Berikut ini Detail Produk Anda</h5>
		<hr>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h5>Nama Produk </h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<h5><?= $produk_edit['nama_produk'] ?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Jenis Produk </h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <h5><?= $produk_edit['jenis_produk'] ?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Stock Produk</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <h5><?= $produk_edit['stock'] ?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Harga</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <h5><?= $produk_edit['harga'] ?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Keterangan</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <h5><?= $produk_edit['keterangan'] ?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Gambar 1</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<img src="<?= base_url()."/img/produk/".$produk_edit['gambar_1'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Gambar 2</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                        <img src="<?= base_url()."/img/produk/".$produk_edit['gambar_2'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Gambar 3</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <img src="<?= base_url()."/img/produk/".$produk_edit['gambar_3'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Gambar 4</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <img src="<?= base_url()."/img/produk/".$produk_edit['gambar_4'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <a href="<?= base_url('/produk')?>" class="btn btn-info">Kembali</a>
                    <a href="<?= base_url('/delete/'.$produk_edit['id_produk']) ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>