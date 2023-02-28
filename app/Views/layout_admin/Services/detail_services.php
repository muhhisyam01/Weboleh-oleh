<div class="pcoded-main-container">
	<div class="pcoded-content">
		<h5>Berikut ini Detail Kegiatan Anda</h5>
		<hr>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h5>Nama Services </h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<h5><?= $detail_Services['nama_services']?></h5>
					</div>
				</div>
			</div>
        </div>
        
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    	<h5>Deskripsi Services</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    	<h5><?= $detail_Services['deskripsi_services']?></h5>
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Foto</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<img src="<?= base_url()."/img/services/".$detail_Services['foto'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <a href="<?= base_url('/Services_admin')?>" class="btn btn-info">Kembali</a>
                    <a href="<?= base_url('/delete_services/'.$detail_Services['id_services']) ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>