<div class="container " style="background-color: black; height: 100%;">


    <div class="row d-flex justify-content-center" style="padding-top: 50px;">
        <div class="col-lg-3 " style="margin-bottom: 20px ;">
            <div class="card" style="width: 14rem; background-color: #46384d">
                <img src="<?= base_url('img/') . $user["photo"] ?>" width="100px" height="180px" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title" style="color: white;"><?= $user["name"] ?></h5>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#addHero">
                        edit Hero
                    </button>
                </div>
            </div>
        </div>
    </div>
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

</div>
</div>


</div>