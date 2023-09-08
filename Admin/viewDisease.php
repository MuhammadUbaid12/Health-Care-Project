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
                            <div class="card-header" style="">
                                <h3 class="card-title">Diseases Records
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
                                            <th class="text-center active">Diseases Name</th>
                                            <th class="text-center active">Description</th>
                                            <th class="text-center active">Prevention</th>
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
                                        // if (isset($_REQUEST["submit"])) {
                                        //     $check = $_REQUEST["check"];
                                        //     $save = implode(",", $check);
                                        //     $id = $_GET['id'];
                                        //     $query = "DELETE * from city where id in ($save) ";
                                        //     $run = mysqli_query($config, $query);
                                        // }
                                        $query = "SELECT * FROM diseases";
                                        $run = mysqli_query($config, $query);
                                        while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                            <tr>
                                                <th class="text-center">
                                                    <?php echo $row['dName']; ?>
                                                </th>
                                                <th class="text-center">
                                                    <?php echo $row['description']; ?>
                                                </th>
                                                <th class="text-center">
                                                    <?php echo $row['prevention']; ?>
                                                </th>
                                                <td>
                                                    <div class="btn-group" style="float:right;">
                                                        <a class="btn btn-primary" href="addDisease.php" <i
                                                            class="icon_plus_alt2"></i>ADD</a> &nbsp;

                                                        <a class="btn btn-primary"
                                                            href="editDiseas.php?id=<?php echo $row['d_id']; ?>"> <i
                                                                class="icon_plus_alt2"></i>Modify</a>&nbsp;

                                                        <a class="btn btn-primary"
                                                            href="logic.php?dID=<?php echo $row['d_id']; ?>"> <i
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