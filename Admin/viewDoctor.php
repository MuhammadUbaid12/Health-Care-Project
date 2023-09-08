<?php
include_once("./SideBar.php");
?>
<div class="content-wrapper" style="background-color: #223a66; opacity:.9;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <form method="POST">
                            <div class="card-header">
                                <h3 class="card-title">Doctor Records
                                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                </h3>
                                <?php
                                if (isset($_GET['msg'])) {
                                    echo $_GET['msg'];
                                }
                                ?>

                                
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" style="font-family:  Roboto,
                                    sans-serif;">
                                    <thead>
                                        <tr style="background: #ccc;">
                                            <th class="text-center active">First Name</th>
                                            <th class="text-center active">Last Name</th>
                                            <th class="text-center active">Email</th>
                                            <th class="text-center active">Specialist</th>
                                            <th class="text-center active">Qualification</th>
                                            <th class="text-center active">Available Days</th>
                                            <th class="text-center active">Available Time</th>
                                            <th class="text-center active">City</th>
                                            <th class="" style="float:right; margin-right:100px">
                                                Options
                                                <!-- <h2><input class="alert-danger" type="submit" value="Delete"
                                                        name="submit">
                                                </h2> -->
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once("./config.php");
                                        $query = "SELECT * FROM doctor";
                                        $run = mysqli_query($config, $query);
                                        while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                        <tr>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_fname']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_lname']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_email']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_specialist']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_Qualification']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_days']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['addDoc_time'].' TO '.$row['addDoc_endtime']; ?>
                                            </th>
                                            
                                            <th class="text-center">
                                                <?php echo $row['addDoc_city']; ?>
                                            </th>

                                            <td>
                                                <div class="btn-group" style="float:right;">
                                                    <a class="btn btn-primary" href="addDoct.php" <i class="icon_plus_alt2"></i>ADD</a> &nbsp;

                                                    <a class="btn btn-primary"
                                                        href="editDoctor.php?id=<?php echo $row['docID']; ?>"> <i
                                                            class="icon_plus_alt2"></i>Modify</a>&nbsp;

                                                    <a class="btn btn-primary"
                                                        href="logic.php?docid=<?php echo $row['docID']; ?>"> <i
                                                            class="icon_plus_alt2"></i>Delete</a>&nbsp;
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
    <!-- /.content-header -->