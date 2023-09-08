<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <style>
    *{
        font-family: sans-serif;
    }
    .section-title{
        text-align: center;
        margin: 20px;
        position: relative;
        margin-bottom: 50px
    }
    .nav-item1 {
        margin-left: 50px;
        padding-top: 100px;
        background-color: #f4f9fc;
        text-align: center;
    }
    .nav-item1 .nav-link{
        color: #223a66;
        font-weight: 600;
    }
    .container1{
        /* background-color: #ddd; */
        padding: 20px;
    }
    .tab-content{
        margin-top: 20px;
    }
  </style>
</head>
<body>

    

<!-- ======= Departments Section ======= -->
<section id="departments" class="departments">
      <div class="container container1">

        <div class="section-title">
          <h2>Departments</h2>
          <p>At Care we have the following departments covered up and we will add more departmemts later.</p>
        </div>
      
        <div class="row">
          <div class="col-lg-3">
            <ul class="nav  flex-column">
            <?php
            require_once('Admin/config.php');
            $query= "SELECT DISTINCT * FROM department ";
              
            $result = mysqli_query($config,$query);
            while($row= mysqli_fetch_array($result))
             {
         
            ?>
       <?php }?>       
            </ul>
          </div>
          <div class="col-lg-12 mt-4 mt-lg-0">
          <?php
            $result1 = mysqli_query($config,$query);
          while($row1=mysqli_fetch_array($result1))
             {
              
            ?>
            <div class="tab-content">
              <div class="tab-pane active show" id="tab<?php echo $row1['dID']?>">
                <div class="row">
                  <div class="col-lg-8 details order-2 order-lg-1">
                    <h3><?php echo $row1['depart_Name'];?></h3>
                    <p class="font-italic"><?php echo $row1['depart_desc'];?></p>
                  </div>
                  <div class="col-lg-4 text-center order-1 order-lg-2">
                  <img src="images/service/service-1.jpg" alt="" class="img-fluid w-100">
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </section>
  <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</body>
</html>