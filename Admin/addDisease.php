<?php
include_once("./header.php");
include_once("./SideBar.php");
?>

<div class="content-wrapper" style="background-color: #223a66; opacity:.9; color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <form action="./logic.php" method="POST" enctype="multipart/form-data">
                        <h1 class="Add" style="text-align:center;">Add Disease</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="Dname" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea class="form-control" name="desc"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Prevention</label>
                            <textarea name="preven" class="form-control"></textarea>
                        </div>


                        <!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pic</label>
                            <input type="file" class="form-control" id="exampleInputPassword1" name="photo" required>
                        </div> -->

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>

                        </div>
                        <button type="submit" class="btn btn-primary" name="addDS">Register</button>
                        <?php
                        // if(isset($_GET['msg'])) {
                        //     echo $_GET['msg'];
                        // }
                        ?>
                    </form>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <?php
    include_once("./footer.php");
    ?>