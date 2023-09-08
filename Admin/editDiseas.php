<?php
include_once("./header.php");
include_once("./SideBar.php");
?>
<?php
include_once("./config.php");
if (isset($_POST['updDS'])) {
    $id= $_POST['d_id'];
    $dname = $_POST['dName'];
    $descrip = $_POST['DSdescrip'];
    $preven = $_POST['prevention'];

    $updQuery = "UPDATE diseases set dName='$dname', description='$descrip', prevention='$preven' where d_id='$id'";
    $updResult = mysqli_query($config, $updQuery);
    if($updQuery){
        echo "<script>window.location.href='./viewDisease.php'
        alert('Disease Record Update Successfully')
        </script>";
    }
    else{
        echo "<script>alert('Disease Record not Update')</script>";
    }
}
?>



<div class="content-wrapper" style="background-color: #223a66; opacity:.9; color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <form action="" method="POST" enctype="multipart/form-data">
                        <h1 class="Add" style="text-align:center;">Edit Diseases</h1>
                        <?php
                        include_once("./config.php");
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $query = "SELECT * from diseases where d_id=$id";
                            $run = mysqli_query($config, $query);
                            while ($row = mysqli_fetch_array($run)) {

                                ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Diseases Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        name="dName" required value="<?php echo $row['dName'] ?>">


                                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        name="d_id" required value="<?php echo $row['d_id'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="DSdescrip"
                                        value="<?php echo $row['description'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Prevention</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="prevention"
                                        value="<?php echo $row['prevention'] ?>" required>
                                </div>


                                <!-- <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Pic</label>
                            <input type="file" class="form-control" id="exampleInputPassword1"
                                name="photo" required>
                        </div> -->

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <?php
                            }
                        } ?>
                        <button type="submit" class="btn btn-primary" name="updDS">Modify Doctor Details</button>
                        <a href="viewDisease.php" class="btn btn-primary">Cancel</a>
                    </form>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <?php
    include_once("./footer.php");
    ?>