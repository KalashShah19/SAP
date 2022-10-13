<!DOCTYPE html>
<html>
   
<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title> Shah Abhay PhotoGraphy | Cart </title>


  <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="../../css/bootstrap.css"/>

<!-- fonts style -->
<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="../../css/style.css" rel="stylesheet" />
<!-- responsive style -->
<link href="../../css/responsive.css" rel="stylesheet" />
</head>

<body class="sub_page">
  <div class="hero_area">
    <!-- header section strats -->
    <?php include '../../headers/client/header.php';?>
    <!-- end header section -->
</div>

    <section class="contact_section layout_padding">
      <div class="bg-img1">
        <img src="../../images/bg-img-1.png" alt="">
      </div>
      <div class="bg-img2">
        <img src="../../images/bg-img-2.png" alt="">
      </div>
      <div class="container">
        <div class="heading_container">
          <h2>
            Cart
          </h2>
          <p>
            Confirm Your Orders and Proceed to Pay
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
              <div class="contact_form-container">
                <div class="row">
                  <div class="column">
                    <div class="img-box b-1">
                      <div class="img-box b-1">
                        <img src="../../products/album.jpg" alt="Cup">
                        <br> <br> <p> Size : 12x8 <br> </p>
                        <p> Price : 12000 /- Rs <br> </p>
                      </div>
                    </div>
                  </div>
        
                  <div class="column">
                    <div class="img-box b-1">
                      <div class="img-box b-1">
                        <img src="../../products/cup.jpg" alt="Cup">
                        <br> <br> <p> Size : Medium <br> </p>
                        <p> Price : 300 /- Rs <br> </p>
                      </div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="img-box b-1">
                      <div class="img-box b-1">
                        <img src="../../products/stickers.jfif" alt="Cup">
                        <br> <br> <p> Size : Small  <br> </p>
                        <p> Price : 50 /- Rs <br> </p>
                      </div>
                    </div>
                  </div>

                  <div class="column">
                    <div class="img-box b-1">
                      <div class="img-box b-1">
                        <img src="../../products/frame.jfif" alt="Cup">
                        <br> <br> <p> Size : Small <br> </p>
                        <p> Price : 200 /- Rs <br> </p>
                      </div>
                    </div>
                  </div>
                  </div>

        

              <div class=" d-flex justify-content-center ">
                <form action="clientpayment.php" method="post">
                      <p> Total Amount = 12550 </p>
                       <button type="submit" name="submit">
                        Confirm And Pay
                      </button> 
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->


</body>

</html>