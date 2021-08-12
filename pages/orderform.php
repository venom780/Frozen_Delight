<?php
include ('../admin/dist/connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>BuyStyle</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="../css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-dark" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">BuyStyle</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../index.php">Home</a></li>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <?php
              if (isset($_POST['orderconfirm'])) {

                echo "<div id='orders' class='alert alert-success' role='alert'>
                <p id='order'> <i  class='far fa-check-circle'></i>&nbsp;Thank You. Your Order has been Received!</p>
              </div>";
              }

        ?>

        <div class="container py-5">
                            <h1 align="center">Billing Information</h1>
                            if (isset($_GET['id'])) {
                                  $did = $_GET['id'];
                                $query = "SELECT * FROM product_details WHERE Pro_ID = $did";
                                 $data  = $mycon-> query($query);
                                 $myrow = $data-> fetch_assoc();
                                ?>
                            <form action="#" method="POST" enctype="multipart/form-data">
                               
                                <div class="input-group mb-1">
                                <img src="abc.jpg" alt=""/>Image Here...
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-address-book fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Product ID" name="name" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Name" name="name" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Bill To" name="bo=illto" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-phone fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Contact" name="contact" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-envelope fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Email" name="email" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-home fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Address" name="address" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-home fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your City" name="city" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Your Customizing Name" name="customname" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-list-ul fa-lg"></span></span>
                                </div><br>
                                <textarea name="discription"  class="form-control" placeholder="Message (max 300 characters)" rows="3" maxlength="300"></textarea>
                                <div class="input-group-prepend"><br>
                                        <span class="input-group-text">0</span>
                                </div>      
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Prize your products" name="price" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-user fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" value="200Pkr (Cash on delivery)" name="deliverycharges" maxlength="30" readonly="200Pkr (Cash on delivery)" />
                                </div><br>
                                <div class="row" style="padding-bottom: 50px;">
                                <div class="col-1"><br>
                                <button class="btn btn-warning" type="submit" style="padding:10px 40px 10px 40px; border: solid gray 1px;" name="orderconfirm"><b>Confirm</button>
                                </div>
                              </div>
                            </div>
                            </form> 
        </div>


          
                 
        <!-- Footer-->
        <div class="container-fluid bg-dark text-warning">
        <footer class="footer py-4">
            <div class="container bg-dark">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">Copyright © BuyStyle 2020</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/buystylepk/"><i class="fab fa-instagram"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/BuyStyle.PK"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        </div>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets/mail/jqBootstrapValidation.js"></script>
        <script src="assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
