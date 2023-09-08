<?php
// session_start();
include_once('./SideBar.php');
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
                                <!-- <?php
                                if (isset($_GET['msg'])) {
                                    echo $_GET['msg'];
                                }
                                ?> -->

                                <div class="card-tools">
                                    <!-- <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap" style="font-family:  Roboto,
                                    sans-serif;">
                                    <thead>
                                        <tr style="background: #ccc;">
                                            <th class="text-center active">id</th>
                                            <th class="text-center active">Specialist</th>
                                            <th class="text-center active">Doctor Name</th>
                                            <th class="text-center active">Availability</th>
                                            <th class="text-center active">Appointment Date</th>
                                            <th class="text-center active">Patient Name</th>
                                            <th class="text-center active">Patient Number</th>
                                            <th class="text-center active">Messsage</th>
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
                                        if (isset($_SESSION['addDoc_fname'])) {
                                            $doctorName = $_SESSION['addDoc_fname'];
                                            $query = "SELECT * FROM appointment WHERE doctor = '$doctorName'";
                                            $result = mysqli_query($config,$query);
                                       
                                            //   iisko comment kr k bh chl rha h

                                            // if (mysqli_num_rows($result) > 0) {
                                                                                        
                                                while ($appointmentRow = mysqli_fetch_assoc($result)) {
                                            ?>
                                        <tr>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['app_id']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['specialist']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['doctor']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['availability']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['app_date']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['app_name']; ?>
                                            </th>
                                            <th class="text-center">
                                                <?php echo $appointmentRow['app_num']; ?>
                                            </th>

                                            <th class="text-center">
                                                <?php echo $appointmentRow['app_message']; ?>
                                            </th>

                                            <td>
                                                <a class="btn btn-primary"
                                                href="approveAppointment.php?id=<?php echo $appointmentRow['app_id']; ?>"> <i
                                                class="icon_plus_alt2"></i>Approve</a>&nbsp;
                                            </div>
                                            </td>
                                        </tr>
                                        <?php
                                        }}
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