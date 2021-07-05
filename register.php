
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

</head>

<body>
    <div class="main-sec inner-page">
        <!-- //header -->
        <header class="py-sm-3 pt-3 pb-2" id="home">
            <div class="container">
                <!-- nav -->
                <div class="top-w3pvt d-flex">
                    <div id="logo">
                        <h1> <a href="home.php"><span class="log-w3pvt">E</span>lectricity</a> <label class="sub-des">bill payment</label></h1>
                    </div>

                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="home.php">Home</a></li>
                            <li><a href="hoabout.php">About Us</a></li>
                            

                            
                            <li><a href="contact.php">Contact</a></li>
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
            <div class="content-grid">
                <div class="text-center icon">
                    <span class="fa fa-user-circle-o"></span>
                </div>
                <div class="content-bottom">
                    <form  method="post">
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="text1" id="text1" type="text" value="" placeholder="User ID" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                            <input name="text2" id="text2" type="text" value="" placeholder="User First Name" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                            <input name="text3" id="text3" type="text" value="" placeholder="User Last Name" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                            <input name="text4" id="text4" type="text" value="" placeholder="User Meter Number" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="text5" id="text5" type="email" value="" placeholder="User Email" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                                <input name="text6" id="text6" type="text" value="" placeholder="User Phone" required="">
                            </div>
                        </div>
                        <div class="field-group">

                            <div class="content-input-field">
                            <input name="text7" id="text7" type="text" value="" placeholder="User Branch ID" required="">
                            </div>
                        </div>
                        <div class="field-group">
                            <div class="content-input-field">
                                <input name="psw" id="myInput" type="Password" placeholder="Password">
                            </div>
                        </div>
                        <div class="content-input-field">
                            <button type="submit" class="btn" name="button">Sign Up</button>
                        </div>
                        <div class="list-login-bottom text-center mt-lg-5 mt-4">

                            



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- /login -->
    

 <?php
    if(isset($_POST["button"]))
{
            
        $con=mysqli_connect("localhost","root","","electricity") or die(mysqli_error($con));
        $id = $_POST['text1'];
        $fname = $_POST['text2'];
        $lname = $_POST['text3'];
        $mtr = $_POST['text4'];
        $bid = $_POST['text7'];
        $email = $_POST['text5'];
        $phno = $_POST['text6'];
        //$usname = $_POST['usn'];
        $pas = $_POST['psw'];
        $user_reg = "insert into consumer values ($id, '$fname', '$lname', '$mtr', '$email','$phno', '$bid', '$pas' );";
        //die($user_reg);
        //$user_login = "insert into login values ( '$usname', '$pas' , $lid);";
        $user_con = "insert into consumption values ('$bid',$id, 0, 0, 0, 0, 'NP' );";
        $user_sub = mysqli_query($con, $user_reg) or die(mysqli_error($con));
        $user_creg = mysqli_query($con, $user_con) or die(mysqli_error($con));
        echo "<b>User successfully inserted!!!</b>";
        //header('Refresh: 3;url=home.php');
}   
        ?>   
 <!-- footer -->
    <div class="footer_agileinfo_topf py-5">
        <div class="container py-md-5">
            <div class="row">
                <div class="col-lg-3 footer_wthree_gridf mt-lg-5">
                    <h2><a href="home.php"><span>E</span>lectricity
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
