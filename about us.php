<!DOCTYPE html>
<html>
<head>
    <meta name=" viewport" content="with=device-width,initial-scale=1.0">
    <title>website for CHANAKYA DEGREE COLLEGE</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fontawesome.bootstrapcheatsheets.com/#">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
   
  
</html>
</head>
 
<body> 
    <section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/Chanakya Logo Clor.jpg"</a>
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
 
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
 
        <!------------------------------------about us---------------------------->
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
                        <a href="" class="hero-btn red-btn">EXPLORE NOW </a>
                </div>
                <div class="about-col">
                    <img src="images/CDC CLB[913].jpg"
                </div>
            </div>
        </section>
 
        <!-----------------------------cards----------------------->
        <section class="card">
            <img src="images/1653637014777[938].JPG" style="width:100%">
            <div class="container">
 
                <h4 style="color:black;">Chiranjeevi Cheerala</h4>
                <p>Principal</p>
 
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
                <ul>
                    <li><a href="gallery.html">JKC</a></li>
                    <li><a href="gallery.html">N.S.S.</a></li>
                    <li><a href="gallery.html">Competetive Exams Guidance</a></li>
                </ul>
 
            </div>
 
        </section>
 
 
        <!----------------------footer------------------>
        <section class="footer">
            <h4 align="center">About Us</h4>
            <p align="center">
                <i class="fa fa-envelope-o" style='color:red'></i>
                &ensp;&ensp;<h align="center">
                    <i class="fa fa-facebook-square" style='color: blue'></i>
                    &ensp;&ensp;<h align="center">
                        <i class="fa fa-youtube-play" style='color:red'></i>
                        &ensp;&ensp;<h align="center"><i class="fa fa-twitter" style='color: #1DA1F2'></i>
            </p>
 
 
 
 
 
            <p align="center"> made with <i class="fa fa-heart-o"></i> by Team KITS[S]</p>
            <p align="center" class="rights-text">© 2022 Created By <b> Team KITS[S]</b> All Rights Reserved.</p>
 
 
 
        </section>
 
 
 
 
        </font>
        </div>
 
 
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
 
Sent from Mail for Windows
 



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
    width:19%;
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
