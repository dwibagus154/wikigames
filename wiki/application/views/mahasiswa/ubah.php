<div class="container">
	
	<div class="row mt-3">
		
		<div class="col-md-6">


			<div class="card">
 				 <div class="card-header">
 				   Tambah Data Mahasiswa 
 				 </div>
 				 
 				 <div class="card-body">

 				   	<form action="" method="post">
 				   		<input type="hidden" name="id" value="<?= $mahasiswa['id'] ?>" >

						<div class="form-group">
   						 	<label for="name">nama</label>
   						 	<input type="text" class="form-control" id="name" name="name" value="<?= $mahasiswa['nama'] ?>" >
   						 	<small  class="form-text text-danger"><?= form_error('name') ?></small>
  						</div>

  						<div class="form-group">
   						 	<label for="nim">NIM</label>
   						 	<input type="text" class="form-control" id="nim" name="nim" value="<?= $mahasiswa['nim'] ?>">
   						 	<small  class="form-text text-danger"><?= form_error('nim') ?></small>
  						</div>

  						<div class="form-group">
   						 	<label for="foto">foto</label>
   						 	<input type="text" class="form-control" id="foto" name="foto" value="<?= $mahasiswa['foto'] ?>">
   						 	<small  class="form-text text-danger"><?= form_error('foto') ?></small>
  						</div>

  						<button type="submit" name="submit" class= "btn btn-primary float-right">Ubah Data</button>


					</form>
 				 </div>
			</div>
			
			
		</div>

	</div>

</div>