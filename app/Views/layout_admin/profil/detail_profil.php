<div class="pcoded-main-container">
	<div class="pcoded-content">
		<h5>Berikut ini Detail Profil Anda</h5>
		<hr>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
						<h5>Nama UMKM </h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<h5><?= $profil_edit['nama_umkm']?></h5>
					</div>
				</div>
			</div>
        </div>
        
        
        
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Logo UMKM</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <img src="<?= base_url()."/img/profil/".$profil_edit['logo'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>SLide 1</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
						<img src="<?= base_url()."/img/profil/".$profil_edit['slide_1'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>Slide 2</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                        <img src="<?= base_url()."/img/profil/".$profil_edit['slide_2'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-2">
				<div class="card">
					<div class="card-body">
                    <h5>SLide 3</h5>
					</div>
				</div>
			</div>
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <img src="<?= base_url()."/img/profil/".$profil_edit['slide_3'] ?>" alt="" style="width: 150px; height: 150px;">
					</div>
				</div>
			</div>
        </div>
        <div class="form-row">
            <div class="col-md-6 col-xl-4">
				<div class="card">
					<div class="card-body">
                    <a href="<?= base_url('/profil')?>" class="btn btn-info">Kembali</a>
                    <a href="<?= base_url('/delete_profil/'.$profil_edit['id_profil']) ?>" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
        </div>
    </div>
</div>