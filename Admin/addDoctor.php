<?php
include_once("./header.php");
include_once("./SideBar.php");
?>
<?php
include_once("./config.php");
// add doctor
if (isset($_POST['addDoc_submit'])) {
    $adddoc_fname = $_POST['addDoc_fname'];
    $adddoc_lname = $_POST['addDoc_lname'];
    $adddoc_email = $_POST['addDoc_email'];
    $adddoc_specialist = $_POST['addDoc_specialist'];
    $adddoc_qualification = $_POST['addDoc_Qualification'];
    $addDoc_city = $_POST['addDoc_city'];
    $addoc_password = $_POST['addDoc_password'];
    $addDoc_time = $_POST['addDoc_time'];
    $addDoc_endtime = $_POST['addDoc_endtime'];
    $addDoc_days = $_POST['addDoc_days'];
    $encpPass = password_hash($addoc_password, PASSWORD_DEFAULT);


    // Check if file was uploaded without errors

    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed))
            die("Error: Please select a valid file format.");

        // Verify file size - 1MB maximum
        $maxsize = 1 * 1024 * 1024;
        if ($filesize > $maxsize)
            die("Error: File size is larger than the allowed limit.");
        if (in_array($filetype, $allowed)) {
            // Check whether file exists before uploading it
            if (file_exists("userImages/" . $filename)) {
                echo $filename . " is already exists.";
            } else {
                $path = "userImages/" . uniqid() . $filename;
                $query = "INSERT into doctor (`addDoc_fname`,`addDoc_lname`,`addDoc_email`,`addDoc_specialist`,`addDoc_Qualification`,`pic`,`addDoc_city`,`addDoc_password`,`addDoc_time`,`addDoc_endtime`,`addDoc_days`)
                values ('$adddoc_fname','$adddoc_lname','$adddoc_email','$adddoc_specialist','$adddoc_qualification','$path','$addDoc_city','$encpPass','$addDoc_time','$addDoc_endtime','$addDoc_days')";
                $resultQuery = mysqli_query($config, $query);
                if ($resultQuery === true) {

                    // echo "Data insZerted Successfully";
                    move_uploaded_file($_FILES["photo"]["tmp_name"], $path);
                    // header('location:addDoc.php?msg=Data Inserted Successfully');
                    echo "<script>alert(Data Inserted Successfully)</script>";
                }
            }
        } else {
            // echo "Error".$mysqli->error;
            // header('location:addDoc.php?msg=Data Failed to insert');
            echo "<script>alert(Data Failed to insert)</script>";
        }

        //move_uploaded_file($_FILES["photo"]["tmp_name"], "upload/" . $filename);
        //   echo "Your file was uploaded successfully.";} 
    } else {
        echo "Error: There was a problem uploading your file. Please try again.";
    }
}
?>




<div class="content-wrapper" style="background-color: #223a66; opacity:.9; color: #fff;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">

                    <form action="addDoctor.php" method="POST" enctype="multipart/form-data">
                        <h1 class="Add" style="text-align:center;">Add Doctor</h1>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="addDoc_fname" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="addDoc_lname" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="exampleInputPassword1" name="addDoc_email" required>
                        </div>


                        <div class="mb-3">
                            <label for="specialist"><b>Specialist:</b></label>
                            <select class="text-dark form-control" name="addDoc_specialist" required style="width:100%;" required>

                                <?php
                                include_once("./config.php");
                                $getDepart = "SELECT * from department";
                                $getDepartquery = mysqli_query($config, $getDepart);
                                $Departassoc = mysqli_fetch_assoc($getDepartquery);
                                var_dump($Departassoc);

                                ?>
                                <?php
                                foreach ($getDepartquery as $getdata) {
                                ?>
                                    <option>
                                        <?php /*echo $getdata['id']*/ echo $getdata['depart_Name']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                        </div>

                        </select> <br />

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Qualification</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" name="addDoc_Qualification" required>
                        </div>

                        <div class="mb-3">
                            <label for="specialist"><b>Days</b></label>
                            <select class="text-dark form-control" name="addDoc_days" required style="width:100%;" required>
                                <option>Mon,Tues</option>
                                <option>Wed,Thus</option>
                                <option>Fir,Sat</option>
                            </select>

                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Availability</label>
                            <input type="time" class="form-control" id="exampleInputPassword1" name="addDoc_time" required>
                            To
                            <input type="time" class="form-control" id="exampleInputPassword1" name="addDoc_endtime" required>
                        </div>


                        <label for="exampleInputPassword1" class="form-label">Pic</label>
                        <div class="mb-3">
                            <input type="file" class="form-control" id="exampleInputPassword1" name="photo" required>
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">CITY</label>
                            </br>
                            <select class="form-select form-control" name="addDoc_city" aria-label="Default select example" required>

                                <?php
                                include_once("./config.php");
                                $getcities = "SELECT * FROM city ";
                                $getquery = mysqli_query($config, $getcities);
                                $assoc = mysqli_fetch_assoc($getquery);
                                var_dump($assoc);
                                ?>
                                <?php
                                foreach ($getquery as $getdata) {
                                ?>
                                    <option>
                                        <?php /*echo $getdata['id']*/ echo $getdata['city_name']; ?>
                                    </option>
                                <?php
                                }
                                ?>
                        </div>


                        </select>
                        </br>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="addDoc_password" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="addDoc_submit">Register</button>

                        <?php
                        if (isset($_GET['msg'])) {
                            echo $_GET['msg'];
                        }

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