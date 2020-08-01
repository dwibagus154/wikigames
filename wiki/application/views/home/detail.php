<div class="container " style="background-color: black; height: 100%;">


    <div class="row d-flex justify-content-center" style="padding-top: 50px;">
        <div class="col-lg-3 " style="margin-bottom: 20px ;">
            <div class="card" style="width: 14rem; background-color: #46384d">
                <img src="<?= base_url('img/') . $user["photo"] ?>" width="100px" height="180px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: white;"><?= $user["name"] ?></h5>
                    <p class="card-text" style="color: green;"><?= $user["nama"]; ?></p>
                </div>
            </div>
        </div>
    </div>
</div>