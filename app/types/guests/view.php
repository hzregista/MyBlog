<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="modal-body">
                <h2 class="text-uppercase"><?php echo $data["bl"]["hood"] ?></h2>
                <p class="item-intro text-muted"><?php echo $data["bl"]["title"] ?></p>
                <img class="img-fluid d-block mx-auto" src="<?php echo SOURCE ?>images/<?php echo $data["bl"]["images"] ?>" alt="">
                    <p><?php echo ($data["bl"]["content"]) ?> </p>
                    <ul class="list-inline">
                        <li>Date: <?php echo functions::date("now", $data["bl"]["date"]) ?></li>

                        <li>Category: <?php echo functions::categories()[$data["bl"]["category"]]; ?></li>
                    </ul>
                    <a href="<?php echo MAIN_DIRECTORY ?>"> <button class="btn btn-success"  type="button">Back</button></a>
            </div>
        </div>
    </div>
</div>