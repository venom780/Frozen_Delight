<?php
include('header.php');
logcheck();
?>
<?php
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Frozen Delights</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-info">
            <a class="navbar-brand" href="index.php">Frozen Delights</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            
   <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-info" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="view.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <a class="nav-link" href="productform.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Insert Product
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        ADMIN
                    </div>
                </nav>
            </div>
                <div id="layoutSidenav_content">
                <main>

                    <div  class="container-fluid text-center" id="contact" style="background-image: url('Images/bb.png'); padding-top: 20px;">
                        <div class="row">
                            <div class="col-md-6" style="padding-top: 20px;">
                                <h1 class="text-black display-5 bg-warnging" >Product Insert</h1>

                            <form class="" action="#" method="POST" enctype="multipart/form-data">
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-file fa-lg"></span></span>
                                </div>
                                <input type="file" class="form-control" placeholder="Upload image here" name="imageupload" maxlength="30"  />
                                </div><br>
                                <div class="input-group mb-1">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><span class="fa fa-book fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Project Title" name="title" maxlength="30"  />
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
                                    <span class="input-group-text"><span class="fa fa-file fa-lg"></span></span>
                                </div>
                                <input type="text" class="form-control" placeholder="Prize your products" name="price" maxlength="30"  />
                                </div><br>
                                <div class="row" style="padding-bottom: 50px;">
                                <div class="col-1"><br>
                                <button class="btn btn-info" type="submit" style="padding:10px 40px 10px 40px; border: solid gray 1px;" name="productinsert" data-toggle="modal" data-target="#query"><b>Insert</button>
                                </div>
                              </div>
                            </div>
                            </form> 
                    </div>
                    </div>
        </div>
    </div>

    <!-- Insert Products Coding -->

        <?php
        if(isset($_POST['productinsert'])){
            $filename=$_FILES["imageupload"]["name"];
            $filetempname=$_FILES["imageupload"]["tmp_name"];
            $folder="Images/".$filename;
            $title=$_POST["title"];
            $discription=$_POST["discription"];
            $price=$_POST["price"];
            $query="INSERT INTO  products_tbl VALUES (Null,'$folder','$title','$discription','$price')";
            $data=mysqli_query($mycon,$query);
            move_uploaded_file($filetempname, $folder);
            echo "Data Uploaded";

        }
        
    ?>

    <!-- Insert Products Coding End -->

                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <divclass="text-muted">Copyright &copy; Frozen Delight 2021</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>
