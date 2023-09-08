<?php
include_once("./header.php");
include_once("./SideBar.php");
?> 
<?php
include_once("./config.php");
if (isset($_POST['updDoc'])) {
    $id= $_POST['docID'];
    $fname = $_POST['addDoc_fname'];
    $lname = $_POST['addDoc_lname'];
    $email = $_POST['addDoc_email'];
    $Qualification = $_POST['addDoc_Qualification'];

    $updQuery = "UPDATE doctor set addDoc_fname='$fname', addDoc_lname='$lname', addDoc_email='$email', addDoc_Qualification='$Qualification' where docID='$id'";
    $updResult = mysqli_query($config, $updQuery);
    if($updQuery){
        echo "<script>window.location.href='./viewDoctor.php'
        alert('Doctor Record Update Successfully')
        </script>";
    }
    else{
        echo "<script>alert('Doctor Record not Update')</script>";
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
                        <h1 class="Add" style="text-align:center;">Edit Doctor</h1>
                        <?php
                        include_once("./config.php");
                        if (isset($_GET['id'])) {
                            $id = $_GET['id'];

                            $query = "SELECT * from doctor where docID=$id";
                            $run = mysqli_query($config, $query);
                            while ($row = mysqli_fetch_array($run)) {

                                ?>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        name="addDoc_fname" required value="<?php echo $row['addDoc_fname'] ?>">


                                    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                        name="docID" required value="<?php echo $row['docID'] ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1" name="addDoc_lname"
                                        value="<?php echo $row['addDoc_lname'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="exampleInputPassword1" name="addDoc_email"
                                        value="<?php echo $row['addDoc_email'] ?>" required>
                                </div>


                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Qualification</label>
                                    <input type="text" class="form-control" id="exampleInputPassword1"
                                        value="<?php echo $row['addDoc_Qualification'] ?>" name="addDoc_Qualification" required>
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
                        <button type="submit" class="btn btn-primary" name="updDoc">Modify Doctor Details</button>
                        <a href="viewDoctor.php" class="btn btn-primary">Cancel</a>
                    </form>
                </div><!-- /.col -->

            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->



    <?php
    include_once("./footer.php");
    ?>