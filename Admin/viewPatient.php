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
                        <form method="POST" action="">
                            <div class="card-header" style="">
                                <h3 class="card-title">Patient Records
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
                                <table class="table table-hover text-nowrap" style="font-family: " Roboto",
                                    sans-serif;">
                                    <thead>
                                        <tr style="background: #ccc;">
                                            <th class="text-center active">First Name</th>
                                            <th class="text-center active">Last Name</th>
                                            <th class="text-center active">Address</th>
                                            <th class="text-center active">Phone</th>
                                            <th class="text-center active">Gender</th>
                                            <th class="text-center active">Age</th>
                                            <th class="" style="float:right; margin-right:100px">
                                                Options
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include_once("./config.php");
                                        $query = "SELECT * FROM patient_details";
                                        $run = mysqli_query($config, $query);
                                        while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                        <tr>
                                            <th class="text-center">
                                                <?php echo $row['p_fname']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['p_lname']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['p_address']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['p_phone']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['p_gender']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $row['P_age']; ?>
                                            </th>

                                            <td>

                                                <a class="btn btn-primary"
                                                    href="logic.php?Patient_id=<?php echo $row['id']; ?>"> <i
                                                class="icon_plus_alt2" style=""></i>Delete</a>&nbsp;
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