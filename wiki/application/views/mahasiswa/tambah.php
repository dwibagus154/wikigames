<div class="container">
	
	<div class="row mt-3">
		
		<div class="col-md-6">


			<div class="card">
 				 <div class="card-header">
 				   Tambah Data Mahasiswa 
 				 </div>
 				 
 				 <div class="card-body">

 				   	<form action="" method="post">

						<div class="form-group">
   						 	<label for="name">nama</label>
   						 	<input type="text" class="form-control" id="name" name="name" >
   						 	<small  class="form-text text-danger"><?= form_error('name') ?></small>
  						</div>

  						<div class="form-group">
   						 	<label for="nim">NIM</label>
   						 	<input type="text" class="form-control" id="nim" name="nim">
   						 	<small  class="form-text text-danger"><?= form_error('nim') ?></small>
  						</div>

  						<div class="form-group">
   						 	<label for="foto">foto</label>
   						 	<input type="text" class="form-control" id="foto" name="foto">
   						 	<small  class="form-text text-danger"><?= form_error('foto') ?></small>
  						</div>

  						<button type="submit" name="submit" class= "btn btn-primary float-right">Tambah data</button>


					</form>
 				 </div>
			</div>
			
			
		</div>

	</div>

</div>