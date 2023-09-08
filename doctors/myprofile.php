<?php
include_once("./SideBar.php");

?>
<?php
include_once("./config.php");
// Doctor Profile Code

$id = $_SESSION['docID'];
$query = "SELECT * from doctor where docID=$id";
$run = mysqli_query($config, $query);
if ($run) {
    while ($row = mysqli_fetch_array($run)) {
        ?>


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profile</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Doctor Profile</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-3">

                            <!-- Profile Image -->
                            <div class="card card-primary card-outline">
                                <div class="card-body box-profile">
                                    <div class="text-center">
                                        <img class="profile-user-img img-fluid img-circle"
                                            src="../admin/<?php echo $row['pic'] ?>" alt="User profile picture" width="50px"
                                            height="50px">
                                    </div>

                                    <h3 class="profile-username text-center">
                                        <?php echo $row['addDoc_fname'] . " " . $row['addDoc_lname'] ?>
                                    </h3>


                                    <p class="text-muted text-center">Doctor</p>

                                    <ul class="list-group list-group-unbordered mb-3">
                                        <li class="list-group-item">
                                            <b>Followers</b> <a class="float-right">1,322</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Following</b> <a class="float-right">543</a>
                                        </li>
                                        <li class="list-group-item">
                                            <b>Friends</b> <a class="float-right">13,287</a>
                                        </li>
                                    </ul>



                                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                                </div>
                                <!-- /.card-body -->
                            </div>

                            <!-- /.card -->

                            <!-- About Me Box -->
                            <!--  -->
                            <!-- /.card -->
                        </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Edit Profile</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <!-- /.tab-pane -->
                                <div class="tab-pane active" id="timeline">
                                    <!-- The timeline -->
                                    <div class="timeline timeline-inverse">
                                        <!-- timeline time label -->
                                        <div class="time-label">
                                            <span class="bg-danger">
                                                Hello iam Doctor
                                            </span>
                                        </div>
                                        <!-- /.timeline-label -->
                                        <!-- timeline item -->
                                        <div>
                                            <i class="fas fa-envelope bg-primary"></i>

                                            <div class="timeline-item">
                                                <span class="time"><i class="far fa-clock"></i> Bio Data</span>

                                                <h3 class="timeline-header"><span href="#">FirstName : <?php echo $row['addDoc_fname'] ?></span></h3><br>
                                                <h3 class="timeline-header"><span href="#">LastName :  <?php echo $row['addDoc_lname'] ?></span></h3><br>
                                                <h3 class="timeline-header"><span href="#">Email :  <?php echo $row['addDoc_email'] ?></span></h3><br>
                                                <h3 class="timeline-header"><span href="#">Department :  <?php echo $row['addDoc_specialist'] ?></span></h3><br>
                                                <h3 class="timeline-header"><span href="#">Qualification :  <?php echo $row['addDoc_Qualification'] ?></span></h3><br>
                                                <h3 class="timeline-header"><span href="#">City :  <?php echo $row['addDoc_city'] ?></span></h3>
                                            </div>
                                        </div>

                                        <!-- END timeline item -->
                                        <!-- timeline item -->
                                        
                                        <!-- END timeline item -->
                                        <!-- timeline time label -->
                                                                                <!-- END timeline item -->
                                        <div>
                                            <i class="far fa-clock bg-gray"></i>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane" id="settings">
                                    <form class="form-horizontal" action="function.php" method="post"> 
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">First Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName"
                                                    placeholder="Name" name="addDoc_fname" value="<?php echo
                                                    $row['addDoc_fname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Last Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputEmail"
                                                    placeholder="Email" name="addDoc_lname" value="<?php echo
                                                    $row['addDoc_lname'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName2"
                                                    placeholder="Name" name="addDoc_email" value="<?php echo
                                                    $row['addDoc_email'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Department</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2"
                                                    placeholder="Name" name="addDoc_specialist" value="<?php echo
                                                    $row['addDoc_specialist'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Qualification</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                    placeholder="Skills" name="addDoc_Qualification" value="<?php echo
                                                    $row['addDoc_Qualification'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">City</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills"
                                                    placeholder="Skills" name="addDoc_city" value="<?php echo
                                                    $row['addDoc_city'] ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms and
                                                            conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger" name="updateDoctor">Update</button>
                                            </div>
                                        </div>
                                        <?php
                                        if(isset($_GET['msg'])) {
                                            echo $_GET['msg'];
                                        }
                                        ?>
                                    </form>
                                    <?php }} ?>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->