<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
</head>

<body>
    <?php
    include_once("./SideBar.php");
    include_once("./config.php");
    if (isset($_POST['addcity'])) {
        $addcities = $_POST['city'];
        $insertquery = "INSERT INTO city (`city_name`) values ('$addcities')";
        $addquery = mysqli_query($config, $insertquery);
        // header('locaction:add_city.php?mssg=city Added Successfully');
        // echo "<script>alert('City added Successfuly') </script>";
    }
    //  else {
    //     header('locaction:add_city.php?msg=city not Added');
    // }
    ?>

    <div class="content-wrapper" style="background-color: #223a66; opacity:.9; color: #fff;">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <form method="post" action="">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Add city</label>
                                <?php
                                // if (isset($_GET['mssg'])) {
                                //     echo $_GET['mssg'];
                                // }
                                ?>
                                <input type="text" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="city" required>

                            </div>

                            <button type="submit" class="btn btn-primary" name="addcity">Add</button>
                            <a href="viewCity.php" class="btn btn-secondary">Go to list</a>

                        </form>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

    </div>
</body>

</html>