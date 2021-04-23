<?php
$blg=($data["bl"]);
?>

<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">My Blogs</h4>
            <p class="card-description"> Edit Blog </p>
            <form id="updateblog">
                <div class="form-group">
                    <label for="exampleInputName1">Hood</label>
                    <input type="text" class="form-control" name="hood" value="<?php echo $blg["hood"]; ?>" placeholder="Pick an impressive headline!  ">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail3">Title</label>
                    <input type="text" class="form-control" name="title" value="<?php echo $blg["title"]; ?>" placeholder="Title for content ">
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <input class=" file-upload-default xfile" name="files[]" type="file" multiple />
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Choose A Picture"/>
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Choose Image</button>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Category</label>
                    <select class="form-control form-control-lg" name="category">
                        <?php
                        $categories = functions::categories();
                        foreach ($categories as $key => $value) {
                            if ($key == $blg["category"]){
                                $se = "selected";
                            }else{
                                $se = "";
                            }
                            echo '<option '. $se .' value="' . $key . '">' . $value . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Status</label>
                    <select class="form-control form-control-lg" name="status">
                        <?php
                        $status = functions::status();

                        foreach ($status as $key => $value) {
                            if ($key == $blg["status"]){
                                $se = "selected";
                            }else{
                                $se = "";
                            }
                            echo '<option '. $se .' value="' . $key . '">' . $value . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Content of Blog</label>
                    <textarea class="form-control" name="content" rows="4"><?php echo $blg["content"]; ?></textarea>
                </div>
                <button type="submit" class="btn btn-gradient-primary mr-2">Update</button>
            </form>
        </div>
    </div>
</div>