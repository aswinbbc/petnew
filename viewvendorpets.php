<?php
session_start();
$id=$_SESSION['id'];
include 'conn.php';
$query=mysqli_query($conn,"SELECT * FROM pet_tb where login_id='$id'");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .pet{ margin-left:35%;
        
           
        }
        .img{
            height: 500px;
            /* width:100%;  */
        }
        </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PET SPOTTER: </title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="assets/css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
    <link href="assets/css/lib/chartist/chartist.min.css" rel="stylesheet">
    <link href="assets/css/lib/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/lib/themify-icons.css" rel="stylesheet">
    <link href="assets/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/lib/weather-icons.css" rel="stylesheet" />
    <link href="assets/css/lib/menubar/sidebar.css" rel="stylesheet">
    <link href="assets/css/lib/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/lib/helper.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <?php
   include 'header.php';
   ?>
</head>

<body>

    <?php
    include 'sidebar.php';
    ?>
    
    <!-- /# sidebar -->


     <div class="content-wrap">
    
        <!-- <div class="main">
            
            <img src="images/pet3.png" class="img">  
           
             <div class="container-fluid">
                 <div class="row">
                </div>         
            </div> 
             
        </div> -->
        <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>VIEW PETS</h1>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard/View Pets</a></li>
                                   
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# row -->
                <section id="main-content">
                    <form method="POST">
                <div class="row">
                        <div class="col-lg-12">
                           

                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-title">
                                    <h4>View Pets </h4>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover ">
                                            <thead>
                                                <tr>
                                                    <!-- <th>Name</th> -->
                                                    <!-- <th>Contact</th>
                                                    <th>Price</th>
                                                    <th>Images</th> -->
                                                </tr>
                                            </thead>
                                                <?php
                                                while ($row=mysqli_fetch_assoc($query))
                                                {
                                                ?>
                                            <tbody>
                                                <tr>
                                                <td><?php echo $row['owner_name'];?><br>

                                                Mob :<?php echo $row['mobile'];?><br>

                                                Place:<?php echo $row['address'];?><br>

                                                Category :<?php echo $row['category'];?><br>

                                                Breed :<?php echo $row['breed'];?><br>

                                                Age:<?php echo $row['age'];?><br>

                                                Colour:<?php echo $row['colour'];?><br>

                                                Sex:<?php echo $row['sex'];?><br>

                                                Title :<?php echo $row['title'];?><br>
                                                
                                                Information:<?php echo $row['information'];?><br>

                                                Price :<?php echo $row['price'];?><br>
                                               
                                                <?php if($row['status'] == 'Pending'){?>
                                                       <b style="color:green" ><?php echo $row['status'];?></b>
                                                       <?php } 
                                                       else{?><b style="color:red" ><?php echo $row['status'];?></b>
                                                       <?php } ?>
                                                 </td>
                                                <td><img src="images/gallery/<?php echo $row['image']; ?>" height="130px" width="160px"><br>
                                            </td>
                                                </tr>
                                            </tbody>
                                            <?php
                                                }
                                                ?>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>

    </form>
    </section>
    </div>
    </div>

    <!-- jquery vendor -->
    <script src="assets/js/lib/jquery.min.js"></script>
    <script src="assets/js/lib/jquery.nanoscroller.min.js"></script>
    <!-- nano scroller -->
    <script src="assets/js/lib/menubar/sidebar.js"></script>
    <script src="assets/js/lib/preloader/pace.min.js"></script>
    <!-- sidebar -->

    <script src="assets/js/lib/bootstrap.min.js"></script>
    <script src="assets/js/scripts.js"></script>
    <!-- bootstrap -->

    <script src="assets/js/lib/calendar-2/moment.latest.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.calendar.min.js"></script>
    <script src="assets/js/lib/calendar-2/pignose.init.js"></script>


    <script src="assets/js/lib/weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/js/lib/weather/weather-init.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress.min.js"></script>
    <script src="assets/js/lib/circle-progress/circle-progress-init.js"></script>
    <script src="assets/js/lib/chartist/chartist.min.js"></script>
    <script src="assets/js/lib/sparklinechart/jquery.sparkline.min.js"></script>
    <script src="assets/js/lib/sparklinechart/sparkline.init.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="assets/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <!-- scripit init-->
    <script src="assets/js/dashboard2.js"></script>
</body>
</html>