<?php
include('admin/connection.php');

$sql=mysqli_query($con,"select * from news") or die($con);
$news=mysqli_fetch_array($sql);

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
   
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <meta name=" viewport" content="with=device-width,initial-scale=1.0">
    <title>website for CHANAKYA DEGREE COLLEGE</title>
   

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        
        .imageHolder {
      position: relative;
      width: 285px;
      height: 175px;
    }
    .imageHolder .caption {
      position: absolute;
      width: 283px;
      height: 50px;
      bottom: 0px;
      left: 0px;
      color: #ffffff;
      background: green;
      text-align:center;
      font-weight:bold;
      opacity:0.7;
    }
        </style>
</head>

<body>
    <section class="header">
        <nav>
            <a href="index.php"><img src="images/Chanakya Logo Clor.jpg"</a>
            <div class="nav-links" id="navLinks">
               <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="course.php">COURSE OFFERED</a></li>

                    <li><a href="gallery.php">GALLERY</a></li>
                    
                    <li><a href="faculity.php">FACULITY</a></li>
                    <li><a href="hostal.php">HOSTEL</a></li>
                    <li><a href="feedback form.php">FEEDBACK FORM</a></li>
                    <li><a href="contact us.php">CONTACT US</a></li>
                    <li><a href="admin/index.php">LOGIN</a></li>

                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <div class="text-box">
            <h1>Chanakya Degree College </h1>
            <h3>Affiliated to Satavahana University & Approved by TSCHE <br>Jammikunta, Karimnagar District, Telangana, INDIA - 505122</h3>
            <p>WE ASSURE YOU THE QUALITY EDUCATION</p>
            <a href="about.php"class="hero-btn"> VISIT US TO KNOW MORE </a>
        </div>
        </section>
        <p>    </p>
 
    <div class="container">
        <div class="ticker">
            <div class="title"><h5> &ensp; &ensp; Breaking News</h5></div>
            <div class="news">
                <marquee scrollamount="15" >
                    <?php
                    $sql=mysqli_query($con,"select * from news order by id desc limit 2 ");
                    while($news=mysqli_fetch_array($sql))
                    {
                    ?>
                    <p><?php echo $news['news']; ?></p>
                        <?php } ?>
                </marquee>

        <!------------------course-------------------->
        <section class="course">
         <h1> COURSES WE OFFER</h1>
                    

            <div class="row">
                <div class="course-col">

                    <h3>Degree</h3>
                    <p>Since 2004</p>
                </div>
                <br>
                <div >
                    <p>We believe that education should also helps to build their careers in life. Our experienced faculty also give the best guidance in various exams like B.Ed., ICET, CA,etc. along with degree.</p>
                    <br> <br>
                  <p>  Acquiring knowledge & skills to compete in today's world become very difficult for students. Our JKC center fills this gap and gives the best tool to adapt the new technologies & knowledge</p>

    
                </div>
            </div>

        </section>

    <!------------------------ campus------------------->
    <section class="campus">
        <h1>OUR CAMPUS</h1>
        <div class="row">
            <div class="campus-col">
                <img src="images/01.jpg">
               <div class="layer">
                   <h3>college</h3>                
                </div>
            </div>
            <div class="campus-col">
                <img src="images/CDC FAC (1).JPG">
               <div class="layer">
                   <h3>class</h3>                  
                </div>
            </div>
            <div class="campus-col">
                <img src="images/CDC LIB.JPG">
               <div class="layer">
                   <h3>library</h3>                  
                </div>
            </div>
        </div>

</section>
</section>
<section class="wrapper row3">
    <div id="container" class="clear">
        <!-- ####################################################################################################### -->
        <h4 class="title"></h4>
        <div>
            <p>  </p>
            <p>  </p>

            <h2 align="center">DECADE CELEBRATIONS</h2>
            <marquee scrollamount="3" loop="-1" align="left" behavior="alternate">


                <p>  </p>
                <p>  </p>

                <img class="imgholder" src="images/decade1.jpg" />

                <img class="imgholder" src="images/decade2.jpg" />

                <img class="imgholder" src="images/decade3.jpg" />

            </marquee>

            <div class="toppers">
                <p>  </p>
                <p>  </p>
                <h2 align="center">TOPPERS OF THE COLLEGE</h2>
                <p>  </p>
                <p>  </p>
                <marquee width=80%" direction="left" height="35%" scrollamount="15">
                <?php
                $toppers=mysqli_query($con,"select * from toppers");
                while($result=mysqli_fetch_array($toppers))
                {
                ?>  


                <img src="admin/uploads/<?php echo $result['img']; ?>" width="150px" alt="" />
  

                <?php } ?>

                </marquee>
            </div>

            <!-----------------------------promo-------------->
            <div display="inline-block">
            <div id="column">
                <div class="holder">
                    <p>  </p>
                    <p>  </p>
                    <h2 align="center">PROMO OF COLLEGE</h2>
                    <p>  </p>
                    <p>  </p>
                    <!-- Begin Flash Here - This is the correct method for W3C validation -->
                    <object classid="clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA" width="300" height="250">
                        <param name="movie" value="https://www.youtube.com/v/dOg401Tou3M?version=3&amp;hl=en_US&amp;rel=0" />
                        <param name="allowFullScreen" value="true" />
                        <param name="allowscriptaccess" value="always" />
                    </object>

                    <embed src="https://www.youtube.com/v/dOg401Tou3M?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="300" height="250" allowscriptaccess="always" allowfullscreen="true"></embed>
                    &ensp; &ensp; &ensp;
                    
                    <embed src="https://www.youtube.com/v/LYkrd_KYt28?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="300" height="250" allowscriptaccess="always" allowfullscreen="true"></embed>
                    </object>
                    <div>
                   

                    <!--------------------------------promo end------------------>
                  
                    <!-- End Flash Here -->
                    <p align="center">What we promise, we achieved.</p> 
                    <p> <br />It has proven many times and continuesly trying to improve the our standards and facilities to give the Chanakya as best choice to the students. </p>
                    Jammikunta, Karimnagar District, Telangana, INDIA - 505122
                   
                </div>
                </div>


  
         
            <div class="row">
            <div >
            <h3> Contact us</h3>
                <p><b>Chanakya degree college <br>Affiliated to Satavahana University & Approved by TSCHE</p>

<p>Siti Cable Lane</p>

<p>Jammikunta, Karimnagar District-505122</p>

      <p>contact@chanakyadegreepgcollege.com</p>

   <p>Tel: 08727-255997</p>
   <h3> college management </h3>
   <p>Chanakya have the experience of providing quality education for more than two decades. We have successfully contributed to the progress of our country by developing technocrats.
<br>
The thirst of Chanakya to contribute to the improvement of the education is unquenchable. Even today our founders, Teaching and Non-Teaching Staff continuously strive to reinvent their efforts and contribute to the development of the student. This undeterred determination is a result of our strong vision and mission statements that have provided us direction.
<br> <br>  We have strong advisory team with us to guide, motivate and encourage.</p>
         <img src="images/DR CNU[941].JPG" width="100">
            <img src="images/DR KVR[939].JPG" width="100">
            <img src="images/DR PBR[942].JPG" width="130">
            <img src="images/DR RV[940].JPG" width="80">
                </div>
                <br>
                <div >
                <a class="twitter-timeline" href="https://twitter.com/cdcjammikunta" data-widget-id="374872287133966336">Tweets by @cdcjammikunta</a>
         <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>  

    
                </div>
            </div>
  

  <footer>
    <div class="footer-container">
      <div class="left-col">
        <img src="logo.png" alt="" class="logo">
        <div class="social-media">
        <a href="mailto:cdcjmkt2004@gmail.com">  <h><i class="fa fa-envelope-o" style='color:red'></i>
                        &ensp;&ensp;<h ></a>
                        
                            <a href="https://www.youtube.com/v/dOg401Tou3M?"> <i class="fa fa-youtube-play" style='color:red'></i></a>
                                &ensp;&ensp;<h ><a href="https://twitter.com/cdcjammikunta"><i class="fa fa-twitter" style='color: #1DA1F2'></i></a>
                                <a href="https://www.youtube.com/v/dOg401Tou3M?""><i class="fab fa-facebook-f"style="font-size:24px;color:blue"></i></a>
 
        </div>
       
        <p > made with <i class="fa fa-heart-o" style='color:red'></i> by Team KITS Singapur</p>
                    <p align="left" class="rights-text">© 2022 Created By <b> Team KITS Singapur</b> All Rights Reserved.</p>
      </div>
      <div>
      <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" height="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=chanakya degree and pg college jammikunta&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">Minecraft Website</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </div>
     
    </div>
 </footer>
  <!-------------JavaScript toggle menu-->
  <script>
                    var navLinks = document.getElementById("navLinks");
                    function showMenu() {
                        navLinks.style.right = "0";
                    }
                    function hideMenu() {
                        navLinks.style.right = "-200px";
                    }
                </script>


</body>

</html>

   