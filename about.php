<?php
include('admin/connection.php');

$sql=mysqli_query($con,"select * from principle order by id desc limit 1") or die($con);
$about=mysqli_fetch_array($sql);

?> 
<!DOCTYPE html>
<html>
<head>
  <title> Chanakya degree college </title>
    <meta name=" viewport" content="with=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  

    
    <style>
      .sub-header {
    height: 50vh;
    width: 100%;
    background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(images/background.jpg);
    background-position: center;
    background-size: cover;
    text-align:center;
    color:#fff;
}
.sub-header h1{
    margin-top:100px;
}

     .about-us{
    width:80%;
    margin:auto;
    padding-top:80px;
    padding-bottom:50px;
}
.about-col{
    flex-basis:48%;
    padding:30px 2px;
}
.about-col img{
    width:100%;
 
}
.about-col h1{
    padding-top:0;
 
}
.about-col p{
    padding:15px 0 25px;
}
.red-btn{
    border: 1px solid #f44336;
    background:transparent;
    color:#f44336;
}
.red-btn:hover{
    color:#fff;
 
}
.card {
    
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    margin:0 auto;
    width:30%;
    border-radius:5px;
    align-items:center;
}
 
   
.card:hover {
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}
img {
    border-radius: 5px 5px 0 0;
}
 
.container {
    padding: 2px 16px;
    align-items:center;
}
 
/*------------------------------- advisory team------------------------------*/
.management-team {
    width: 80%;
    margin: auto;
    padding-top: 80px;
    padding-bottom: 50px;
}


   @import url('https://fonts.googleapis.com/css2?family=Yaldevi:wght@400;600&display=swap');


 
}
 
footer{
  background: #f1f1f1;
  padding: 90px 0;
}
 
.footer-container{
  max-width: 1300px;
  margin: auto;
  padding: 0 20px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap-reverse;
}
 
.logo{
  width: 180px;
}
 
.social-media{
  margin: 20px 0;
}
 
.social-media a{
  color: red;
  margin-right: 25px;
  font-size: 22px;
  text-decoration: none;
  transition: .3s linear;
}
 
.social-media a:hover{
  color: #fc5c65;
}
 
.right-col h1{
  font-size: 26px;
}
 
.border{
  width: 100px;
  height: 4px;
  background: #fc5c65;
}
 

 
.txtb{
  flex: 1;
  padding: 18px 40px;
  font-size: 16px;
  color: #293043;
  background: #ddd;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  min-width: 260px;
}
 
.btn{
  padding: 18px 40px;
  font-size: 16px;
  color: #f1f1f1;
  background: #fc5c65;
  border: none;
  font-weight: 700;
  outline: none;
  border-radius: 30px;
  margin-left: 20px;
  cursor: pointer;
  transition: opacity .3s linear;
}
 
.btn:hover{
  opacity: .7;
}
 
.page-content{
  min-height: 100vh;
  font-size: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
}
 
@media screen and (max-width:960px) {
  .footer-container{
    max-width: 600px;
  }
  .right-col{
    width: 100%;
    margin-bottom: 60px;
  }
 
  .left-col{
    width: 100%;
    text-align: center;
  }
}
 
 
@media screen and (max-width:700px){
  .btn{
    margin: 0;
    width: 100%;
    margin-top: 20px;
    }
}
* {box-sizing: border-box;}




.header {
  overflow: hidden;
  background-color: #f1f1f1;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px; 
  
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}


.header-right {
  float: right;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  
  .header-right {
    float: none;
  }
}
.center {
  margin: auto;
  width: 60%;
  
  padding: 10px;
}



    </style>
</head>
<body id="top">
  <div class="header">
    <img  src="images/Chanakya Logo Clor.png" align="left" alt="" width="90" height="90" />
    <div class="header-right">
    <a href="index.php">HOME</a> 
    <a href="about.php">ABOUT</a>
                    <a href="course.php">COURSE OFFERED</a>

                    <a href="gallery.php">GALLERY</a>
                    
                    <a href="faculity.php">FACULITY</a>
                  <a href="hostal.php">HOSTEL</a>
                    <a href="feedback form.php">FEEDBACK FORM</a>
                    <a href="contact us.php">CONTACT US</a>
    </div>
  </div>
  
  
  
  <section class="about-us">
            <div class="row">
                <div class="about-col">
                    <font face="Lato" size="4" align="center">
                        <p>
                            Chanakya Degree College founded in 2004 Regd. No.978/CDC/KU/2004-05 under Kakatiya University.
                            Now it is under Satavahana University Registration 063/CDC/SU/2010-11.
                            Chanakya Institutions also introduced PG College in Jammikunta with M.Sc. Chemistry.
                            In near future going to expand with many courses.
                            Our Moto:
 
                            Chanakya Degree & P.G College desires to create and extend educational opportunities to students of diverse rural and urban backgrounds of the region, strives to adopt effective and innovative teaching methods and to impart knowledge for the intellectual growth and personal development of the student community.
                            Parent's Talk.
                        </p>
                        <a href="index.php" class="hero-btn red-btn">EXPLORE NOW </a>
                  </div>
                 <div class="about-col">
                    <img src="images/CDC FAC (1).JPG">
                  </div>
            </div>
        </section>
 
        <!-----------------------------cards----------------------->
        <section class="card">
            <img src="admin/uploads/<?php echo $about['photo']; ?>" style="width:100%">
            <div class="container">
 
                <h4 style="color:black;"><?php echo $about['name']; ?> </h4>
                <p>Principal</p>
                <p><?php echo $about['qualification']; ?> </p>
                <p><?php echo $about['email']; ?> </p>
 
            </div>
        </section>
 
        <!----------------------management team --------------------->
        <section class="management-team">
 
 
            <h1 style="color:black;">Advisory Team</h1>
            <p>
                Chanakya have the experience of providing quality education for more than two decades. We have successfully contributed to the progress of our country by developing technocrats.
 
                The thirst of Chanakya to contribute to the improvement of the education is unquenchable. Even today our founders, Teaching and Non-Teaching Staff continuously strive to reinvent their efforts and contribute to the development of the student. This undeterred determination is a result of our strong vision and mission statements that have provided us direction.
 
                We have strong advisory team with us to guide, motivate and encourage.
            </p>
 
 
            <img src="images/DR CNU[941].JPG" width="100">
            <img src="images/DR KVR[939].JPG" width="100">
            <img src="images/DR PBR[942].JPG" width="130">
            <img src="images/DR RV[940].JPG" width="80">
            </div>
            </div>
        </section>
 
        <!-----------------------students corner------------------------>
        <p>  </p>
        <section style="color:black;" class=" students corner">
            <div class="holder" align="center">
                <h2>STUDENT'S CORNER</h2>
                <p>Chanakya Degree &amp; PG College always create history in results. Chanakya proved always No.1 in Jammikunta.</p>
                
                    <a href="gallery.php">JKC</a><br><br>
                    <a href="gallery.php">N.S.S.</a><br><br>
                    <a href="gallery.php">Competetive Exams Guidance</a>
                
 
            </div>
 
        </section>
 
    <!.................................footer..............>
  <footer>
    <div class="footer-container">
    <div class="left-col">
      <img src="logo.png" alt="" class="logo">
      <div class="social-media">
      
      <a href="https://twitter.com/cdcjammikunta"><i class="fa fa-twitter"><i class='fab fa-twitter' style='font-size:24px;color:blue'></i></a>
     
        <a href="https://www.youtube.com/v/dOg401Tou3M?""><i class="fab fa-youtube"style="font-size:24px;color:red"></i></a>
        <a href="mailto:cdcjmkt2004@gmail.com"><i class="fa fa-envelope" style="font-size:24px;color:black"></i></a>
        <a href="tel: 08727-255997"><i class="fa fa-mobile-phone" style="font-size:24px;color:green"></i></a>
        <a href="https://www.youtube.com/v/dOg401Tou3M?""><i class="fab fa-facebook-f"style="font-size:24px;color:blue"></i></a>
 
      </div>
     
                    <p align="left" class="rights-text">© 2022 Created By <b> Team KITS Singapur</b> All Rights Reserved.</p>
     
    </div>
   

      <div>
      <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" height="" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=chanakya degree and pg college jammikunta&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://mcpenation.com/">Minecraft Website</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
    </div>
     
    </div>
 </footer>
    
</body>
</html>
 
