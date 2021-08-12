<?php
include ('admin/dist/connection.php');
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
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <div class="body">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-info fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand js-scroll-trigger navbar-info text-dark" href="#page-top">Frozen Delights<sub>.pk</sub></a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                        Menu
                        <i class="fas fa-bars ml-1"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav text-uppercase ml-auto text-dark">
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#products">Products</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Services">Services</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pages/cart.php">Cart</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                            <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- Masthead-->
            <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading text-dark">Frozen Delights</div>
                    <div class="masthead-heading text-uppercase text-dark">Try the best frozen food with the best quality.</div>
                    <a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="#products">Tell Me More</a>
                </div>
            </header>
            <!-- products-->
            <section class="page-section" id="products">
                <div class="container">
                    <p>Products</p>
                    <h2>Ready to Cook</h2> 
            <div class="row">
                <?php
                    $query="SELECT * FROM products_tbl";
                    $data=mysqli_query($mycon,$query);
                    $total=mysqli_num_rows($data);
                        
                    if($total!=0) {
                        while ($rows=mysqli_fetch_assoc($data)) {
                            
                        ?>
                        <div class="col-lg-4 mt-20pk">
                        <div class="card shadow bg-white rounded border-info" >
                        <div class="card-body cd " style="height: 500px;">
                            <img src=" admin/dist/<?php echo $rows['product_image'];?> " width="" height="200px;" class="card-img-top" alt="Products Image"/>
                            <h4 class="card-title text-center"><?php echo "<br>".$rows['product_title'];?></h4>
                            <p class="car-text text-center"><?php echo $rows['product_discription'];?></p>
                            <h4 class="card-title text-center"><?php echo "<br> $".$rows['product_price'];?></h4>
                            <form action="pages/addToCart.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $rows["product_id"];?>">
                                <button type="submit" name="order" class="btn btn-info btn-block">Add To Cart</button>
                            </form>
                        </div>
                        </div>
                        </div>
                        <?php
                        
                        }
                    }
                    else{
                        echo "";
                    }
                ?>

            </div><!--row end-->
        </div><!--container-end-->
            </section>
            <!-- Portfolio Grid-->
            <section class="page-section" id="Services">
                <div class="offer">
                    <p>Offering</p>
                    <h1>Our Amazing Services</h1>
                    <table>
                        <tr>
                            <th>Excellent Food</th>
                            <th>Fast Food</th>
                            <th>Delivery</th>
                        </tr>
                        <tr>
                            <td>We offer our clients excellent quality services for many years, with the best and delicious food in the city.</td>
                            <td>We offer our clients excellent quality services for many years, with the best and delicious food in the city.</td>
                            <td>We offer our clients excellent quality services for many years, with the best and delicious food in the city.</td>
                        </tr>
                    </table>
                </div>
            </section>
            
            
            <!-- Contact-->
            <section class="page-section" id="contact">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">Contact Us</h2>
                        <h3 class="section-subheading text-muted">Frozen Delights</h3>
                    </div>
                    <!-- CONTACT US FORM -->
                    <form id="contactForm" method="POST" name="sentMessage" novalidate="novalidate" action="#contactus">
                        <div class="row align-items-stretch mb-5">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" name="cusname" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" name="cusemail" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group mb-md-0">
                                    <input class="form-control" id="phone" type="tel" name="cusphone" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-group-textarea mb-md-0">
                                    <textarea class="form-control" id="message" name="cusmsg" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="text-center">
                            <div id="success"></div>
                            <input class="btn btn-info btn-xl text-uppercase" id="sendMessageButton" type="submit" name="submit" value="Send Message">
                        </div>
                    </form>
                </div>
            </section>
            <?php 
                if (isset($_POST['submit'])) {
                $name = $_POST['cusname'];
                $email = $_POST['cusemail'];
                $number = $_POST['cusphone'];
                $message = $_POST['cusmsg'];
                $qry = "insert into message values (null, '$name', '$email', '$number', '$message')";
                if ($result = $mycon -> query($qry)) {
                    echo '<div style="text-align:center" class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Message Sent!</strong>   
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>';
                }
                else{

                    echo "Not Inserted";

                }
                }
                ?>
                <!-- About -->
            <section class="page-section" id="about">
                <div class="container">
                    <div class="text-center">
                        <h2 class="section-heading text-uppercase">About</h2>
                    </div>
                    <ul class="timeline">
                        <li>
                            <!-- <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div> -->
                            <div class="timeline-panel">
                                <h6>We deliver the best <br> frozen foods</h6>
                                <p>We provide our customers the best frozen food in the entire city, with
                                excellent customer service, the best meals and at the best price, visit us.</p>
                            </div>
                        </li>
                    </ul>
                    <img src="img/FROZEN DELIGHT.png" alt="" class="about__img">
                </div>
            </section>
            <!-- Footer-->
            <footer class="footer py-4">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-4 text-lg-left">Copyright © Frozen Delights 2021</div>
                        <div class="col-lg-4 my-3 my-lg-0">
                            <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/buystylepk/"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/BuyStyle.PK"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-whatsapp"></i></a>
                        </div>
                        <div class="col-lg-4 text-lg-right">
                            <a class="mr-3" href="#">   Privacy Policy</a>
                            <a href="#!">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
            
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
