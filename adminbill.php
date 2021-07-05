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
                        <h1> <a href="index.html"><span class="log-w3pvt">E</span>lectricity</a> <label class="sub-des">bill payment</label></h1>
                    </div>

                    <div class="forms ml-auto">
                        <a href="logout.php" class="btn"><span class="fa fa-user-circle-o"></span> Sign Out</a>
                        <!--<a href="register.php" class="btn"><span class="fa fa-pencil-square-o"></span> Sign Up</a>-->
                    </div>
                </div>
                <div class="nav-top-wthree">
                    <nav>
                        <label for="drop" class="toggle"><span class="fa fa-bars"></span></label>
                        <input type="checkbox" id="drop" />
                        <ul class="menu">
                            <li class="active"><a href="adminhome.php">Home</a></li>
                            <li><a href="about.html">About Us</a></li>
                            

                            
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
            <head><h1>GET DETAILS</h1></head>
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
                         <div class="content-input-field">
                            <button type="submit" class="btn" name="button">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
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
        $check = "SELECT * FROM consumer WHERE cid = ".($text).";";
        $result = $conn->query($check);
        //echo "$result";
        if (mysqli_num_rows($result) == 1)
        {
            //echo "Successful login. Redirecting to the home page in 3 seconds.\n";
            $row = mysqli_fetch_row($result);
            $cid_new = $row[0];
            //$username_new = $row[1];
            $_SESSION['cid']= $cid_new;
            //echo $_SESSION['cid'];
            //$_SESSION['username']= $username_new;
            header('Refresh: 3;url=details.php');
        }
        else
        {   echo "Enter Valid User ID.";
            header('Refresh: 3;url=home.php');
        }
    }
?>

</body>
</html>