
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
        .row{
            margin-top: 50px;
            margin-left: 150px;
        }
        .left{
            margin-bottom: 50px;
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
                        <h1> <a href="conhome.php"><span class="log-w3pvt">E</span>lectricity</a> <label class="sub-des">bill payment</label></h1>
                    </div>

                    
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="conhome.php">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            

                            
                            <li><a href="ccontact.php">Contact</a></li>
                        </ul>
                    </nav>
                    <!-- //nav -->
                    
                    <div class="clearfix"></div>
                </div>
            </div>
        </header>
        <!-- //header -->

    </div>
    <div class="row">
        <head><h3>Get Bill Details</h3></head>
    <section class="banner-bottom py-4">
        <div class="container">
            <div class="content-grid">
                <div class="content-bottom">
                    <form  method="post">
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="text1" id="text1" type="text" value="" placeholder="User ID" required="">
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
    session_start();
    if(isset($_POST["button"]))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "electricity";
        $conn = new mysqli($servername, $username, $password, $dbname);
        $text=$_POST['text1'];
        $check = "SELECT * FROM consumption WHERE cid = ".($text).";";
        $result = $conn->query($check);
        if (mysqli_num_rows($result) == 1)
        {
            $row = mysqli_fetch_row($result);
            $cid_new = $row[1];
            $_SESSION['cid']= $cid_new;
            ?>
            <script type="text/javascript">
            //window.alert("Enter a Valid User ID");
            window.location=("bdetails.php");
            </script>
            <?php
        }

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