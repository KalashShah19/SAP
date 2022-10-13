<!DOCTYPE html>
<html>
  <script>
    var path = window.location.pathname;
    var page = path.split("/").pop();
    
</script>
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

  <title> Shah Abhay PhotoGraphy | My Orders </title>


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
              My Orders 
            </h2>
            <p>
              Orders List
            </p>
          </div>
          <div class="">
            <div class="row">
              <div class="col-md-8 mx-auto">
                  <div class="contact_form-container"> <hr> 
                    <p> Order : Frame, Cup <p> 
                    <p> Amount : 500 </p>
                    <p> Status : Delivering </p>
                    <form action="clientcart.php">
                      <button type="submit"> Cancel </button>
                    </form>
                    <hr> <br>
  
                    <p> Order : Phone Cover <p> 
                    <p> Amount : 300 </p>
                    <p> Status : Delivering </p>
                    <form action="clientcart.php">
                      <button type="submit"> Cancel </button>
                    </form>
                    <hr> <br>
  
                    <p> Order : Photo Frame <p> 
                    <p> Amount : 250 </p>
                    <p> Status : Deliered </p>
                    <hr> <br>
  
                    <p> Order : Cushion <p> 
                    <p> Amount : 150 </p>
                    <p> Status : Deliered </p>
                    <hr> <br>
  
                    <p> Order : Bedshhet <p> 
                    <p> Amount : 200 </p>
                    <p> Status : Deliered </p>
                    <hr> <br>
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