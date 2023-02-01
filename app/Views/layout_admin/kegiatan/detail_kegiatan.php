<div class="pcoded-main-container">
	<div class="pcoded-content">
		<h5>Berikut ini Detail Kegiatan Anda</h5>
		<hr>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h5>Nama Kegiatan </h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<h5><?= $detail_kegiatan['nama_kegiatan']?></h5>
					</div>
				</div>
			</div>
        </div>
        
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    	<h5>Deskripsi Kegiatan</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    	<h5><?= $detail_kegiatan['deskripsi']?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Foto 1</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<img src="<?= base_url()."/img/kegiatan/".$detail_kegiatan['foto_1'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Foto 2</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                        <img src="<?= base_url()."/img/kegiatan/".$detail_kegiatan['foto_2'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <a href="<?= base_url('/kegiatan')?>" class="btn btn-info">Kembali</a>
                    <a href="<?= base_url('/delete_kegiatan/'.$detail_kegiatan['id_kegiatan']) ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>