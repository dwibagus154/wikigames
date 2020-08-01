<div class="container">
	<br>
	<h3>LIST OF PEOPLES</h3>
	<!-- tombol cari -->
	<div class="row mt-3">
		<div class="col-md-6">	
		
		<form action="<?= base_url('peoples') ?>" method = "post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="find people" id="keyword" name="keyword" autocomplete="off" autofocus>
         <div class="input-group-append">
         	<input class="btn btn-primary" type="submit" name="submit">
           <!-- <button class="btn btn-primary" type="submit" id="submit" name="submit">cari</button> -->
         </div>
        </div>
        </form>

       </div>
    </div>
    <?php if ($this->input->post('submit')){ ?>
    	<h5>result: </h5> <?= $total  ?>
    <?php } ?>



    <?php if (empty($peoples)) {?>
    	<div class="alert alert-danger" role="alert">
		  data tidak ada
		</div>
    <?php } ?>

	<div class="row mt-3">
		<div class="col-md-10">
			<table class="table">

				<thead>
					<tr>
						<th>#</th>
						<th>nama</th>
						<th>email</th>
						<th>action</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					// $i = 1;
					foreach ($peoples as $people ) { ?>
					<tr>
						<th><?= ++$start ?></th>
						<td><?= $people['name'] ?></td>
						<td><?= $people["email"] ?></td>
						<td>
							<a href="" class="badge badge-danger">hapus</a>
							<a href="" class="badge badge-warning">detail</a>
							<a href="" class="badge badge-success">ubah</a>
						</td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
			<?php echo $this->pagination->create_links(); ?>
			



		</div>
	</div>
</div>