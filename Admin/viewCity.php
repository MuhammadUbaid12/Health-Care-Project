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
                                <h3 class="card-title">City Records &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
                                <?php
                                if(isset($_GET['msg'])) {
                                    echo $_GET['msg'];
                                }
                                ?>

                                <div class="card-tools">
                                    <div class="input-group input-group-sm" style="width: 150px;">
                                        <input type="text" name="table_search" class="form-control float-right"
                                            placeholder="Search">

                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-default">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center active">City Name</th>
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
                                        $query = "SELECT * FROM city";
                                        $run = mysqli_query($config, $query);
                                        while ($row = mysqli_fetch_array($run)) {
                                            ?>
                                            <tr>
                                                <th class="text-center">
                                                    <?php echo $row['city_name']; ?>
                                                </th>
                                                <td>
                                                    <div class="btn-group" style="float:right;">
                                                        <a class="btn btn-primary" href="logic.php?id=<?php echo $row['id']; ?>"> <i
                                                                class="icon_plus_alt2"></i>Delete</a>
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