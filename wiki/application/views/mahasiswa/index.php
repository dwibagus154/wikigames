<!-- buat tambah data -->
<div class="container">

	<div class="row mt-5">
		<div class="col-md-6">
			<a href="<?= base_url() ?>mahasiswa/tambah" class= "btn btn-primary">Tambah Data Mahasiswa</a>
		</div>

	</div>
</div>

<!-- buat flasher -->
<?php if ($this->session->flashdata('flash')){ ?>
		<div class="container">
			<div class="row mt-3">
				
				<div class="col-md-10">
					
					<div class="alert alert-success alert-dismissible fade show" role="alert">
					  data <strong>berhasil </strong> <?= $this->session->flashdata('flash'); ?>
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>

				</div>

			</div>
		</div>
<?php } ?>

<!-- buat tombol pencarian  -->
<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">	
		
		<form action="" method = "post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Cari Nama Mahasiswa" id="keyword" name="keyword" autocomplete="off">
         <div class="input-group-append">
           <button class="btn btn-primary" type="submit" id="submit">cari</button>
         </div>
        </div>
        </form>

       </div>
    </div>
</div>

<!-- buat body -->
<div class="container mt-2">
	<div class="col-lg-6">
		<h3>Daftar Mahasiswa</h3>
		<ul class="list-group">
			<?php foreach ($mahasiswa as $mhs ) {?>
  			<li class="list-group-item">
  				<?= $mhs['nama'] ?>
  				<a href="<?= base_url() ?>/mahasiswa/hapus/<?= $mhs['id'] ?>" class= "badge badge-danger float-right"  onclick= "return confirm ('yakin?')";>hapus </a>
  				<a href="<?= base_url() ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class= "badge badge-primary float-right mr-2">ubah </a>
  				<a href="<?= base_url() ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class= "badge badge-success float-right mr-2">detail </a>
  			</li>

  			<?php } ?>
		</ul>
	</div>
</div>