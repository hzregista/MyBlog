<div class="page-header">
    <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white mr-2">
            <i class="mdi mdi-home"></i>
        </span> MY BLOGS (ALL) </h3>
    <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">
                <a href="<?php echo MAIN_DIRECTORY ?>admin/myblogs/new" >
                    <button type="button" class="btn btn-gradient-primary btn-md">ADD NEW BLOG</button>
                </a>
            </li>
        </ul>
    </nav>
</div>

<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> Title </th>
                                <th> Category </th>
                                <th> Status </th>
                                <th> Date </th>
                                <th> View </th>
                                <th> Edit </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data["bl"] as $value) {
                                $categories = functions::categories();
                                $status = functions::status();
                                ?>
                                <tr>
                                    <td>
                            <img src="<?php echo SOURCE ?>images/<?php echo $value["images"] ?>" class="mr-2" alt="image"/> <?php echo $value["title"]; ?> </td>
                            <td> <?php echo $categories[$value["category"]] ?> </td>
                            <td>
                                <label class="badge badge-gradient-success"><?php echo $status[$value["status"]] ?></label>
                            </td>
                            <td> <?php echo functions::date("now", $value["date"]); ?> </td>
                            <td> <?php echo $value["view"] ?> </td>
                            <td> <a href="<?php echo MAIN_DIRECTORY ?>admin/myblogs/<?php echo $value["id"] ?>"><button type="button" class="btn btn-gradient-info btn-rounded btn-sm">EDIT</button></a> </td>     
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
