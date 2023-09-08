

<section class="page-title bg-1">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <?php
      include_once("Admin/config.php");
      $query = "SELECT * FROM doctor where docID = " . $_GET['id'];
      $result = mysqli_query($config, $query);
      while ($row = mysqli_fetch_array($result)) {

        ?>
        <div class="col-md-12">
          <div class="block text-center">
            <span class="text-white">Doctor Details</span>
            <h1 class="text-capitalize mb-5 text-lg">
              <?php echo $row['addDoc_fname'] . '' . $row['addDoc_lname'] ?>
            </h1>
          </div>
        </div>
      <?php } ?>
    </div>
  </div>
</section>


<section class="section doctor-single">
  <div class="container">
    <div class="row">
      <?php
      $result1 = mysqli_query($config, $query);
      while ($row1 = mysqli_fetch_array($result1)) {

        ?>
        <div class="col-lg-4 col-md-6">
          <div class="doctor-img-block">
            <img src="Admin/<?php echo $row1['pic'] ?>" alt="" class="img-fluid w-100">

            <div class="info-block mt-4">
              <h4 class="mb-0">
                <?php echo $row1['addDoc_fname'] . '' . $row1['addDoc_lname'] ?>
              </h4>
              <p>
                <?php echo $row1['addDoc_specialist'] ?>
              </p>

              <ul class="list-inline mt-4 doctor-social-links">
                <li class="list-inline-item"><a href="#"><i class="icofont-facebook"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icofont-twitter"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icofont-skype"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icofont-linkedin"></i></a></li>
                <li class="list-inline-item"><a href="#"><i class="icofont-pinterest"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="col-lg-8 col-md-6">
        <div class="doctor-details mt-4 mt-lg-0">
          <h2 class="text-md">Introducing to myself</h2>
          <div class="divider my-4"></div>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam tempore cumque voluptate beatae quis
            inventore sapiente nemo, a eligendi nostrum expedita veritatis neque incidunt ipsa doloribus provident ex,
            at ullam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, perferendis officiis esse quae,
            nobis eius explicabo quidem? Officia accusamus repudiandae ea esse non reiciendis accusantium voluptates,
            facilis enim, corrupti eligendi?</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo recusandae veritatis minus optio quod
            obcaecati laborum temporibus, deleniti vero perferendis molestias, ducimus facilis, sunt minima. Tempora,
            amet quasi asperiores voluptas?</p>

          <a href="Patient/UserLogin.php" class="btn btn-main-2 btn-round-full mt-3">Make an Appoinment<i
              class="icofont-simple-right ml-2"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>