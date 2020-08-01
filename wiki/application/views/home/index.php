<div class="container " style="background-color: black; height: 100%;">

    <!-- Button trigger modal -->
    <div class=" d-flex justify-content-between" style="padding-top: 50px;">
        <div>
            logo
        </div>
        <div>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addHero">
                add Hero
            </button>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addType">
                add Type
            </button>
        </div>
    </div>


    <div class="row" style="padding-top: 50px;">
        <?php foreach ($user as $u) { ?>
            <div class="col-lg-3" style="margin-bottom: 20px ;">
                <div class="card" style="width: 14rem; background-color: #46384d">
                    <img src="<?= base_url('img/') . $u["photo"] ?>" width="100px" height="180px" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: white;"><?= $u["name"] ?></h5>
                        <p class="card-text" style="color: green;"><?= $u["nama"]; ?></p>
                        <a href="<?= base_url('home/detail/'); ?><?= $u['id'] ?>" style="width: 180px;" class="btn btn-success">Detail</a>
                        <a href="<?= base_url('home/edit/'); ?><?= $u['id'] ?>" style="width: 180px;" class="btn btn-warning">Changes</a>
                        <a href="<?= base_url('home/delete/'); ?><?= $u['id'] ?>" style="width: 180px;" class="btn btn-danger" onclick="return confirm('yakin?')" ;>Delete</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="addHero" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD HERO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo form_open_multipart('home/add'); ?>

                <div class="form-group">
                    <label for="game">Games Name</label>
                    <input type="text" class="form-control" id="Game" name="game">
                </div>
                <div class="custom-file col-sm-7">

                    <input type="file" name="image" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose Image</label>

                </div>

                <div class="form-group form-check">
                    <input type="radio" class="form-check-input" id="exampleCheck1" value="1" name="type">
                    <label class="form-check-label" for="exampleCheck1">1</label>
                </div>
                <div class="form-group form-check">
                    <input type="radio" class="form-check-input" id="exampleCheck2" value="2" name="type">
                    <label class="form-check-label" for="exampleCheck2">2</label>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="addType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ADD TYPE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="game">Name Type</label>
                        <input type="text" class="form-control" id="Game" name="nType">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>