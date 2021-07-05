
<!--
Author:W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Electricity bill payment</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Baggage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->
    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
    <link href="//fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet">
    <!-- //Fonts -->
    <style type="text/css">
        .margin-left{
            margin-left: 200px;
        }
    </style>

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="adminhome.php"><span class="log-w3pvt">E</span>lectricity</a> <label class="sub-des">bill payment</label></h1>
                    </div>
                    <div class="forms ml-auto">
                        <a href="logout.php" class="btn"><span class="fa fa-user-circle-o"></span> Sign Out</a>
                    </div>                    
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="adminhome.php">Home</a></li>
                            <li><a href="adabout.php">About Us</a></li>
                            

                            
                            <li><a href="acontact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->
</div>

        <!-- //banner-->
    <!--/login -->
        <section class="banner-bottom py-5">
        <div class="container">
            <head><h1>UPDATE BILL DETAILS</h1></head>
            <div class="content-grid">
              <!--  <div class="text-center icon">
                    <span class="fa fa-unlock-alt"></span>
                </div>-->

                <div class="content-bottom">
                    <form method="post" >
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="text1" id="text1" type="text" value="" placeholder="User ID" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="text2" id="text2" type="text" value="" placeholder="Units Consumed" required="">
                            </div>
                        </div>
                         <div class="content-input-field">
                            <button type="submit" class="btn" name="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
<?php
//session_start();
if(isset($_POST["button"]))
{ 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "electricity";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $id = $_POST['text1'];
    $unit = $_POST['text2'];       
    $up = "UPDATE consumption set units = $unit where cid = $id;";
    $up1 = "UPDATE consumption set bilamt = $unit*4 where cid = $id ";
    $up2 = "UPDATE consumption set status='NP' where cid = $id;";
    $sel = "SELECT * from consumption where cid = $id;";
   
    $exe1 = mysqli_query($conn, $up) or die(mysqli_error($conn));
    $exe2 = mysqli_query($conn, $up1) or die(mysqli_error($conn));
     $exe3 = $conn->query($sel);
    if (mysqli_num_rows($exe3) == 1)
{
    $row = mysqli_fetch_row($exe3);
    $r1 = $row[4];
    $r2 = $row[5];
    //echo $r1;
    $r4 = $row[2];
    $r5 = $row[3];
    $r3=($r1+$r2);
    $r6 = ($r4+$r5);
}
 $tot = "UPDATE consumption set totamt = '$r3' where cid = $id and status = 'NP';";
    $tot1 = "UPDATE consumption set totamt = $r1 where cid = $id and status = 'P';";
    $tot2 = "UPDATE consumption set totunits = '$r6' where cid = $id and status = 'NP';";
    $tot3 = "UPDATE consumption set totamt = $r4 where cid = $id and status = 'P';";
    $exe4 = mysqli_query($conn, $tot2) or die(mysqli_error($conn));
    $exe5 = mysqli_query($conn, $tot3) or die(mysqli_error($conn));
    $exe7 = mysqli_query($conn, $tot1) or die(mysqli_error($conn));
    $exe8 = mysqli_query($conn, $tot) or die(mysqli_error($conn));
    $exe6 = mysqli_query($conn, $up2) or die(mysqli_error($conn));
    echo "Records Updated Successfully....";
}

?>

 <!-- footer -->
    <div class="footer_agileinfo_topf py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-3 footer_wthree_gridf mt-lg-5">
                    <h2><a href="adminhome.php"><span>E</span>lectricity
                        </a> </h2>
                    <label class="sub-des2">bill payment</label>
                </div>
                <!--<div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-4">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="index.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Home</a>
                        </li>
                        <li>
                            <a href="about.html"><span class="fa fa-angle-right" aria-hidden="true"></span> About</a>
                        </li>
                        

                    </ul>
                </div>
                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        
                        <li>
                            <a href="contact.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 footer_wthree_gridf mt-md-0 mt-sm-4 mt-3">
                    <ul class="footer_wthree_gridf_list">
                        <li>
                            <a href="login.html"><span class="fa fa-angle-right" aria-hidden="true"></span> Login </a>
                        </li>

                        <li>
                            <a href="register.html"><span class="fa fa-angle-right" aria-hidden="true"></span>Register</a>
                        </li>
                        

                    </ul>
                </div>
            </div>

            
            <div class="move-top text-center mt-lg-4 mt-3">
                <a href=""><span class="fa fa-angle-double-up" aria-hidden="true"></span></a>
            </div>-->
        </div>
    </div>
    <!-- //footer -->
</div>
</body>
</html>
