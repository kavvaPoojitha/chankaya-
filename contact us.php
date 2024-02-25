<?php
include('admin/connection.php');

if(isset($_POST['submit']))
{

  $sql=mysqli_query($con,"insert into contact(name, email, msg) values('$_POST[name]', '$_POST[email]','$_POST[msg]')");

  if($sql)
  {
    echo '<script> alert("Thankyou! Your query is Submitted"); </script>';
  }
  else
  {
    echo '<script> alert("something went wrong"); </script>';
  }




}


?>
<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
  <meta name=" viewport" content="with=device-width,initial-scale=1.0">
    <title>website for CHANAKYA DEGREE COLLEGE</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <style>
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
       
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins" , sans-serif;
}
body{
  min-height: 100vh;
  width: 100%;
  background: #c8e8e9;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0;
}
.container{
  width: 85%;
  background: #fff;
  border-radius: 6px;
  padding: 20px 60px 30px 40px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.container .content{
  display: flex;
  align-items: center;
  justify-content: space-between;
}
.container .content .left-side{
  width: 25%;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  margin-top: 15px;
  position: relative;
}
.content .left-side::before{
  content: '';
  position: absolute;
  height: 70%;
  width: 2px;
  right: -15px;
  top: 50%;
  transform: translateY(-50%);
  background: #afafb6;
}
.content .left-side .details{
  margin: 14px;
  text-align: center;
}
.content .left-side .details i{
  font-size: 30px;
  color: #3e2093;
  margin-bottom: 10px;
}
.content .left-side .details .topic{
  font-size: 18px;
  font-weight: 500;
}
.content .left-side .details .text-one,
.content .left-side .details .text-two{
  font-size: 14px;
  color: #afafb6;
}
.container .content .right-side{
  width: 75%;
  margin-left: 75px;
}
.content .right-side .topic-text{
  font-size: 23px;
  font-weight: 600;
  color: #3e2093;
}
.right-side .input-box{
  height: 50px;
  width: 100%;
  margin: 12px 0;
}
.right-side .input-box input,
.right-side .input-box textarea{
  height: 100%;
  width: 100%;
  border: none;
  outline: none;
  font-size: 16px;
  background: #F0F1F8;
  border-radius: 6px;
  padding: 0 15px;
  resize: none;
}
.right-side .message-box{
  min-height: 110px;
}
.right-side .input-box textarea{
  padding-top: 6px;
}
.right-side .button{
  display: inline-block;
  margin-top: 12px;
}
.right-side .button input[type="button"]{
  color: #fff;
  font-size: 18px;
  outline: none;
  border: none;
  padding: 8px 16px;
  border-radius: 6px;
  background: #3e2093;
  cursor: pointer;
  transition: all 0.3s ease;
}
.button input[type="button"]:hover{
  background: #5029bc;
}

@media (max-width: 950px) {
  .container{
    width: 90%;
    padding: 30px 40px 40px 35px ;
  }
  .container .content .right-side{
   width: 75%;
   margin-left: 55px;
}
}
@media (max-width: 820px) {
  .container{
    margin: 40px 0;
    height: 100%;
  }
  .container .content{
    flex-direction: column-reverse;
  }
 .container .content .left-side{
   width: 100%;
   flex-direction: row;
   margin-top: 40px;
   justify-content: center;
   flex-wrap: wrap;
 }
 .container .content .left-side::before{
   display: none;
 }
 .container .content .right-side{
   width: 100%;
   margin-left: 0;
 }
}

@import url('https://fonts.googleapis.com/css2?family=Yaldevi:wght@400;600&display=swap');
body{
  margin: 0;
  padding: 0;
  font-family: 'Yaldevi', sans-serif;
}
span{
  color: #fc5c65;
  font-weight:900;
 
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
  color: #001a21;
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
 
.newsletter-form{
  display: flex;
  justify-content: center;
  align-items: center;
  flex-wrap: wrap;
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
    max-width: 1300px;
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
.section{
  width:100%;
  height: 100%;
}
.post-outer {
        width: 100%;
        padding: 15px;
        box-sizing: border-box;
    }
</style>
  </head>
<body>
  <section>
  <div class="header">
    <img  src="images/Chanakya Logo Clor.jpg" align="left" alt="" width="90" height="90" />
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

  <div class="container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Siti cable line</div>
          <div class="text-two">Jammikunta, Karimnagar District-505122</div>
        </div>
        <div class="phone details">
        <a href="tel:08727-255997"><i class="fas fa-phone-alt"></i></a>
          <div class="topic">Phone</div>
          <div class="text-one">08727-255997</div>
          
        </div>
        <div class="email details">
        <a href="mailto:cdcjmkt2004@gmail.com"><i class="fas fa-envelope"></i></a>
          <div class="topic">Email</div>
          <div class="text-one">cdcjmkt2004@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you want more Information about college  </p>
      <form action="#" method="POST">
        <div class="input-box">
          <input type="text" placeholder="Enter your name" name="name" required>
        </div>
        <div class="input-box">
          <input type="email" placeholder="Enter your email" name="email" required>
        </div>
        <div class="input-box message-box" name="msg">
          <textarea name="msg" required> </textarea>
        </div>
        <div class="button">
          <input type="submit" value="Send Now" name="submit">
        </div>
      </form>
    </div>
    </div>
  </div>
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
</section>
</body>
</html>

