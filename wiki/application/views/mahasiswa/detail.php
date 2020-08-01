
<div class="container mt-4">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Detail Mahasiswa</h5>
    <p class="card-text">teridiri dari nama nim dan foto</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $mahasiswa['nama'] ?></li>
    <li class="list-group-item"><?= $mahasiswa['nim'] ?></li>
    <li class="list-group-item"><?= $mahasiswa['foto'] ?></li>
  </ul>
  <div class="card-body">
    <a href="<?= base_url() ?>mahasiswa" class="card-link">Back</a>
  </div>
</div>
</div>