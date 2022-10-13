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

  <title> Shah Abhay PhotoGraphy | Album </title>


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
  </div>
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
          Album Info
        </h2>
        <p>
          Choose the Style of Album You want
        </p>
      </div>
      <div class="">
        <div class="row">
          <div class="col-md-8 mx-auto">
              <div class="contact_form-container">
                  <form action="clientcovers.php" method="post"> 
                    <label for="size"> Size </label>
                    <select> 
                        <option> Select </option>  
                        <option value="8×8"> 8×8 </option>
                        <option value="10x10"> 10x10 </option>
                        <option value="12x12"> 12x12 </option>
                        <option value="6x8"> 6x8 </option>
                        <option value="8×11"> 8×11 </option>
                        <option value="11×14"> 11×14 </option>
                        <option value="12×16"> 12×16 </option>
                        <option value="11x8"> 11x8 </option>
                        <option value="14x11"> 14x11 </option>
                        <option value="16x12"> 16x12 </option>
                    </select>
                    <br>
                    <button type="submit"> Covers </button>
                </form>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  

  <!-- Backend 
  <?php
    $user=$_POST['user'];
    $pass=$_POST['pass'];
  
  ?> -->

  <!-- info section -->
  <?php
    include '../../footers/footer.php';
  ?>
  <!-- footer section -->

 
</body>

</html>