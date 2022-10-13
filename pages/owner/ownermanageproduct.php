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

  <title> Product Management </title>


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
    <?php include '../../headers/owner/header.php';?>
    <!-- end header section -->

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
            Product Management
          </h2>
          <p>
            All Info about Products You want to Show to Your Clients
          </p>
        </div>
        <div class="">
          <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="contact_form-container"> 
                  <form method="post">
                  <hr> 
                  <p> Name : Album <p> 
                  <p> Price : Relative <p>  
                  <p> Size : 6x12,11x8,8x11,11x16 </p>   
                  <p> Bg Color : Black, White, Red, Blue </p> 
                  <p> Covers : Simple, Fancy, Retro </p> 
                  <button formaction="ownermanageproduct.php"> Edit </button>
                  <button formaction="ownermanageproduct.php"> Delete </button>
                  <button formaction="ownermanageproduct.php"> Image </button>
                  
                  <hr> <br>

                  <p> Name : Short Film <p> 
                  <p> Price : Relative <p>  
                  <p> Duration : 3,4,5 </p>   
                  <button formaction="ownermanageproduct.php"> Edit </button>
                  <button formaction="ownermanageproduct.php"> Delete </button>
                  <button formaction="ownermanageproduct.php"> Image </button>
                  
                  <hr> <br>
                  
                  <p> Name : Stickers <p> 
                  <p> Price : 30,40,50 <p>  
                  <p> Size : Small, Medium, Large </p>   
                  <button formaction="ownermanageproduct.php"> Edit </button>
                  <button formaction="ownermanageproduct.php"> Delete </button>
                  <button formaction="ownermanageproduct.php"> Image </button>
                  <hr> <br>
                  
                    <p> Name : Frame <p> 
                    <p> Price : 300,400,500 <p>  
                    <p> Size : Small, Medium, Large </p>   
                    <button formaction="ownermanageproduct.php"> Edit </button>
                    <button formaction="ownermanageproduct.php"> Delete </button>
                    <button formaction="ownermanageproduct.php"> Image </button>
                    <hr> <br> <br>
                    <button style="margin-left: 44%;" formaction="ownermanageproduct.php"> New </button>
                    </form>
                    </div>
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