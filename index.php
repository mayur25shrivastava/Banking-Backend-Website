<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="statics/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="statics/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="statics/favicon-16x16.png">
    <link rel="manifest" href="statics/site.webmanifest">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Welcome to Sparks Bank</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        #lock{
            display:none;
            position: fixed;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 20;
            background: rgb(255,255,255) center no-repeat;
            text-align:center;
        }
        @media screen (orientation:landscape) {
            #lock{display:none;}
            #container{display:block;}
        }

        @media screen and (orientation:portrait) {
            #lock{display:block;}
            #container{display:none;}
        }
    </style>
</head>

<body  style="background-color:#1414f4;">

<div id="lock"><img src="statics/PngItem_5146697.png" alt="" style="width:50%; margin-top:50%;"><br>
<h1 style="color:black; margin-top: 25px;"><b>Please rotate the device. </b><br>We support only landscape mode.</h1>
</div>

<div id="container">

    <?php include 'spin.php'; ?>


    <style>
        .nav-link:hover {
            text-decoration: underline;
        }

        .mybtn {
            margin-bottom: 10px;
            box-shadow: 2px 2px 10px black;
            border-radius: 30px;
            background-color: white;
            font-weight: bold;
            color: black;
        }

        .mybtn:active {
            background-color: black;
            color: white;
        }
    </style>
    

     <nav class="navbar navbar-expand-lg navbar-dark  fixed fixed-top"
        style="font-family:candara; font-size:18px; box-shadow: 0px 0px 10px 0px black;">
        <div class="container-fluid">

            <a href="index.php"><img src="statics\sparkLogo.png" alt=""
                    style="height: 80px; margin-left:25px; margin-top:10px;"></a>

           


            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <b>
                <ul class="navbar-nav ">
                    <li class="nav-item nav-links" style="margin-left:15px;">
                        <a style="color: rgb(255, 255, 255); font-size: 20px;" class="nav-link active text-nowrap" aria-current="page" href="home.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; ">
                        <a style="color: rgb(255, 255, 255); font-size: 20px;" class="nav-link text-nowrap" href="send_money.php">Send Money</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a style="color: rgb(255, 255, 255); font-size: 20px;" class="nav-link text-nowrap" href="all_cust.php">View All Customers</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a style="color: rgb(255, 255, 255); font-size: 20px;" class="nav-link text-nowrap" href="transactions.php">Transactions</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px;">
                        <a style="color: rgb(255, 255, 255); font-size: 20px;" class="nav-link text-nowrap" href="contact_us.php">Contact Us</a>
                    </li>
                    <li class="nav-item" style="margin-left:15px; margin-right:75px;">
                        <a style="color: rgb(255, 255, 255); font-size: 20px;" class="nav-link text-nowrap" href="about_us.php">About Us</a>
                    </li>
                </ul>
            </b>
        </div>
    </nav> 

    
    
    
    <img src="statics/ribbon.png" alt="" style="width:100%; position:absolute; z-index:-1">
    <div class="container-large" 
    style="color:white; height:500px; width: 100%; padding:8% 2% 2% 2%; background-color:#1414f4;">
    <div class="row">
            <div class="col" style="margin-left: 5%;">
                <br><br>&nbsp;<p class="zoomfont"
                    style="font-size:0px; text-shadow:3px 3px 3px grey; text-align:center;"><b>Welcome to <br> Sparks
                        Bank</b></p>
            </div>
            <div class="col" style="margin:4% 0% 0% 5%; text-align:center;">
                &nbsp;<img src="statics/bank2.png" class="zoomin" alt="" style="width:0px;">
            </div>
        </div>
    </div>
    <!-- <img src="statics/ribbon.png" alt="" style="width:100%; position:absolute; z-index:-1"> -->
    <img src="statics/abstbg2.png" alt="" style="width:100%; position:absolute; z-index:-1">




    <h2 style="text-align:center; margin-bottom: 2px; font-size: 44px; color: antiquewhite;">Our Features</h2>

    <section id="feature" class="section-p1">
        <div class="fe-box" data-aos="fade-up">
            <img src="statics/features/f1.png" alt="">
            <h6>Free Shipping </h6>
        </div>
        <div class="fe-box" data-aos="fade-up">
            <img src="statics/features/f2.png" alt="">
            <h6>Online Services</h6>
        </div>
        <div class="fe-box" data-aos="fade-up">
            <img src="statics/features/f3.png" alt="">
            <h6>Save Money </h6>
        </div>
        <div class="fe-box" data-aos="fade-up">
            <img src="statics/features/f4.png" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box" data-aos="fade-up">
            <img src="statics/features/f5.png" alt="">
            <h6>Happy Sells</h6>
        </div>
        <div class="fe-box" data-aos="fade-up">
            <img src="statics/features/f6.png" alt="">
            <h6>24X7 Support</h6>
        </div>
    </section> 

    <style>
        /* feature section  */

        #feature{
            background-color: white;
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            margin-top: 25px;
            padding: 25px;
        }
        

        #feature .fe-box img{
            width: 100%;
            margin-bottom: 10px;
        }
        #feature .fe-box{
            width: 180px;
            text-align: center;
            padding: 25px 15px;
            box-shadow: 20px 20px 34px rgba(0,0, 0, 0.03);
            border: 1px solid #cce7d0;
            border-radius: 4px;
            margin: 15px 0;
        }

        #feature .fe-box:hover{
            /* box-shadow: 10px 10px 54px rgba(70,64, 221, 0.1); */
            box-shadow: 0px 10px 34px rgba(15, 56, 239, 0.84);
            transition: 0.2s ease;
            cursor: pointer;
        }

        #feature .fe-box h6{
            display: inline-block;
            padding: 9px 8px 6px 8px;
            line-height: 1;
            border-radius: 4px;
            color: white;
            background-color: #0f2ba7;
        }

        #feature .fe-box:nth-child(2) h6{
            background-color: #f703c2;
        }
        #feature .fe-box:nth-child(2):hover{
            box-shadow: 0px 10px 34px rgba(237, 63, 208, 0.84);
        }


        #feature .fe-box:nth-child(3) h6{
            background-color: #43b407;
        }
        #feature .fe-box:nth-child(3):hover{
            box-shadow: 0px 10px 34px rgba(75, 240, 24, 0.84);
        }


        #feature .fe-box:nth-child(5) h6{
            background-color: #b60be5;
        }
        #feature .fe-box:nth-child(5):hover{
            box-shadow: 0px 10px 34px rgba(152, 47, 237, 0.84);
        }


        #feature .fe-box:nth-child(6) h6{
            background-color: #e5870b;
        }
        #feature .fe-box:nth-child(6):hover{
            box-shadow: 0px 10px 34px rgba(255, 141, 70, 0.84);
        }


        @media  (max-width:799px) {
                /* feature section  */
            #feature{
                justify-content: center;
                margin-top: 235px;
                padding: 25px;
            }
            #feature .fe-box{
                margin: 15px 15px;
            }

            #product1 .pro-container{
                justify-content: center;
            }
            #product1 .pro{
                margin: 15px;
            }   
            

        @media (max-width:477px) {

            #feature{
                justify-content: space-between;
                margin-top:235px
            }
            #feature .fe-box{
                width: 155px;
                margin: 0 0 15px 0;
            }
           

        }
    </style>








    <center style="margin:60px 0px 20px 0px;">
        <div class="container"
            style="backdrop-filter: blur(10px); box-shadow:3px 3px 15px black; border-radius:30px; padding:20px 0px 20px 0px; ">
            <h1 style="text-shadow:2px 2px 2px gray; color:white;"><b>Our Awesome Facilities</b></h1>
            <div class="container" style="margin:30px 0px 20px 0px;">
                <div class="row">
                    <div class="col-lg">
                        <div
                            style="background-color:#000; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px; margin:25px">
                            <i class="fas fa-users fa-7x"></i><br><br>
                            <a href="all_cust.php"><button type="button" class="btn btn-outline-light mybtn">View
                                    Customers</button></a><br>
                            <h6>Here, you can watch every customer of the bank.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#000; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px; margin:25px">
                            <i class="fas fa-comments-dollar fa-7x"></i><br><br>
                            <a href="send_money.php"><button type="button" class="btn btn-outline-light mybtn">Transfer
                                    Money</button></a><br>
                            <h6>Here, you can send money from your account.</h6>
                        </div>
                    </div>
                    <div class="col-lg">
                        <div
                            style="background-color:#000; color:white; width: 90%; border-radius:30px; box-shadow:3px 3px 8px gray; padding:20px 10px 20px 10px; margin:25px">
                            <i class="fas fa-coins fa-7x"></i><br><br>
                            <a href="check_blc.php"><button type="button" class="btn btn-outline-light mybtn">Check
                                    Balance</button></a><br>
                            <h6>Here, you can check the remaining balance in your account.</h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </center>


  <!-- footer section  -->
  <section class="bottom">
        <div class="botnav">
            <div class="botnav1">
                <h4>Sparks Bank</h3>
                <img style="height: 15vh;" src="statics/sparkLogo.png" alt="">
                <p>Copyright © 2020</p>
            </div>
            <div class="botnav2">
                <ul>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="send_money.php">Send Money</a></li>
                    <li><a href="all_cust.php">View All Customers</a></li>
                    <li><a href="transactions.php">transactions</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                    <li><a href="about_us.php">About Us</a></li>
                </ul>
            </div>
            <div class="botnav3">
                <a href="#"><i class="fab fa-github fa-2x"></i></a>
                <a href="#"><i class="fab fa-facebook fa-2x"></i></a>
                <a href="#"><i class="fab fa-instagram fa-2x"></i></a>
                <a href="#"><i class="fab fa-twitter fa-2x"></i></a>
            </div>
        </div>
    </section>

    <style>
        /* footer  */
.bottom{
    background-color: #000000;
    color: white;
    padding: 4rem 0;
}
.botnav{
    /* max-width: 1170px; */
    /* margin: 0 auto; */
    overflow: auto;
    padding: 0 40px;
    display: grid;
    gap: 20px;
    justify-content: center;
    align-items: center;
    height: 100%;
    grid-template-columns: repeat(3,1fr);

}
.botnav1 h4{
    font-size: 30px;
}
.botnav2 a{
    color: white;
    list-style: none;
    text-decoration:none
}
.botnav2 li{
    color: white;
    list-style: none;
}
.botnav3 a{
    color: white;

}
    </style>














    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script>
        
        $(document).ready(function () {

            $(".zoomin").animate({
                width: '400px'
            }, '5000', 'linear');
            $(".zoomfont").animate({
                fontSize: '71px'
            }, '5000', 'linear');
        });
    </script>

</div>
</body>

</html>
