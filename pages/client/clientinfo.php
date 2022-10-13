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

  <title> Shah Abhay PhotoGraphy | Product Info </title>


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
            Product Information
          </h2>
          <p>
            Know what It Is and Select Your Style
          </p>
        </div>
        <div class="">
            <div class="row">
              <div class="col-md-8 mx-auto">
                <div class="contact_form-container">
                  <div class="row">
                    <div class="column">
                      <div class="img-box b-1">
                      <form action="clientcart.php" method="post">
                          <img src="../../products/keychain.jpg" alt="Cup">
                        </div>
                      </div>
                    
                      <div class="column">
                        <div class="img-box b-1">
                           <label for="size"> Size : </label>

                          <select id="size">
                            <option value="Small"> Small </option>
                            <option value="Medium"> Medium </option>
                            <option value="Large"> Large </option>
                          </select>
                          
                          <br>
                          <label for="color"> Color : </label>
                          <select id="color">
                            <option value="blue"> Blue </option>
                            <option value="Black"> Black </option>
                            <option value="Red"> Red </option>
                            <option value="White"> White </option>
                            <option value="Grey"> Grey </option>
                          </select> 
                            
                          <br>
                          <p> Price : 300 /- Rs <br> </p>
                        </div>
                      </div>
                    </div>
                <div class=" d-flex justify-content-center ">
                    <button type="submit">
                    Add to Cart
                </button> 
            </div>
        </div>
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