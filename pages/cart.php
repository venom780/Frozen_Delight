<?php
session_start();
include ('../admin/dist/connection.php');

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Frozen Delights</title>
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
        <div class="body">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-info fixed-top" id="mainNav">
                    <div class="container">
                        <a class="navbar-brand js-scroll-trigger navbar-info text-dark" href="../index.php">Frozen Delights<sub>.pk</sub></a>
                        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                            Menu
                            <i class="fas fa-bars ml-1"></i>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarResponsive">
                            <ul class="navbar-nav text-uppercase ml-auto text-dark">
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../#products">Products</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../#Services">Services</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="cart.php">Cart</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../#about">About</a></li>
                                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="../#contact">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
            <!-- Masthead-->
            <!-- <header class="masthead">
                <div class="container">
                    <div class="masthead-subheading">Welcome To Our BuyStyle</div>
                    <div class="masthead-heading text-uppercase">It's Nice To Meet You! Let's Start Shoping With Us...!</div>
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#products">Tell Me More</a>
                </div>
            </header> -->
            <!-- products-->

            <section id="cart_items">
                <div class="container">
                    <div class="breadcrumbs">
                        
                    </div>
                    <div class="table-responsive cart_dark">
                        <table class="table table-condensed">
                            <thead>
                                <tr class="cart_menu">
                                    <td class="image">Item</td>
                                    <td class="description"></td>
                                    <td class="price">Price</td>
                                    <td class="quantity">Quantity</td>
                                    <td class="total">Total</td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION as $value) { ?>
                                <tr>
                                    <td class="cart_product">
                                        <a href=""><img width="75px" height="75px" src="../admin/dist/<?php echo $value["image"];?>" alt=""></a>
                                    </td>
                                    <td class="cart_description">
                                        <h4><a href=""><?php echo $value["title"];?></a></h4>
                                        <p>Web ID: <?php echo $value["id"];?></p>
                                    </td>
                                    <td class="cart_price">
                                        <p>PKR <?php echo $value["price"];?></p>
                                    </td>
                                    <td class="cart_quantity">
                                        <div class="cart_quantity_button">
                                            <!-- <a class="cart_quantity_up" href=""> + </a> -->
                                            <input class="cart_quantity_input" type="number" min="0" name="quantity" value="1" autocomplete="off" size="2">
                                            <!-- <a class="cart_quantity_down" href=""> - </a> -->
                                        </div>
                                    </td>
                                    <td class="cart_total">
                                        <p class="cart_total_price">PKR <?php echo $value["price"];?></p>
                                    </td>
                                    <td class="cart_delete">
                                        <form action="deleteFromCart.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $value["id"];?>">
                                            <button type="submit" class="btn btn-warning"> x </button>
                                            <!-- <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a> -->
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section> <!--/#cart_items-->

            <section id="do_action">
                <div class="container">
                    <div></div>
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
                            <a class="mr-3" href="#!">Privacy Policy</a>
                            <a href="#!">Terms of Use</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- Portfolio Modals-->
            <!-- Modal 1-->
            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">BuyStyle</h2>
                                        <p class="item-intro text-muted">Leather Belt.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/Sample/belt.png" alt="" />
                                        <p>Quality Product Of Leather To Define Your Personality. You Can Customize It Also</p>
                                        <ul class="list-inline">
                                            <li>Quality: Cow Leather</li>
                                            <li>Color: Brown</li>
                                            <li>Category: Accessories</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 2-->
            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Wallet</h2>
                                        <p class="item-intro text-muted">Leather Wallet.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/Sample/wal.png" alt="" />
                                        <p>Use This In Your Daily Use You'll Never Be Dissappointed</p>
                                        <ul class="list-inline">
                                            <li>Quality: Cow Leather</li>
                                            <li>Color: Black</li>
                                            <li>Category: Accessories</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 3-->
            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Necklace</h2>
                                        <p class="item-intro text-muted">Silver Plated.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/Sample/sneck.png" alt="" />
                                        <p>Customize Alphabatic Silver Plated Necklace For Your Love Ones</p>
                                        <ul class="list-inline">
                                            <li>Quality: Silver Plated</li>
                                            <li>Color: Silver</li>
                                            <li>Category: Jwellery</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 4-->
            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Coughlings</h2>
                                        <p class="item-intro text-muted">Gold Plated Coughlings.</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/Sample/Cough.png" alt="" />
                                        <p>Gold Plated Customized Coughlings For Your Daily Shirt Wear</p>
                                        <ul class="list-inline">
                                            <li>Quality: Gold Plated</li>
                                            <li>Color: Gold</li>
                                            <li>Category: Jwellery</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 5-->
            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Pen</h2>
                                        <p class="item-intro text-muted">Blue Ink Pen</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/Sample/pen2.png" alt="" />
                                        <p>Customize Pen For You Or For Gifting Someone Such As Your Teacher, Parents, Friends, Seniors etc</p>
                                        <ul class="list-inline">
                                            <li>Quality: Classy</li>
                                            <li>Color: Brown</li>
                                            <li>Category: Accessories</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal 6-->
            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="close-modal" data-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <div class="modal-body">
                                        <!-- Project Details Go Here-->
                                        <h2 class="text-uppercase">Necklace</h2>
                                        <p class="item-intro text-muted">Gold Plated Necklace</p>
                                        <img class="img-fluid d-block mx-auto" src="assets/img/Sample/nack.png" alt="" />
                                        <p>Customize Gold Plated Necklace</p>
                                        <ul class="list-inline">
                                            <li>Quality: January 2020</li>
                                            <li>Color: Window</li>
                                            <li>Category: Photography</li>
                                        </ul>
                                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                                            <i class="fas fa-times mr-1"></i>
                                            Close Product
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="../assets/mail/jqBootstrapValidation.js"></script>
        <script src="../assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
    </body>
</html>
