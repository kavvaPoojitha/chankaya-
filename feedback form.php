<?php
include('admin/connection.php');

if(isset($_POST['submit']))
{

  $sql=mysqli_query($con,"insert into feedback(name,mobile, email, feedback) values('$_POST[name]','$_POST[mobile]', '$_POST[email]','$_POST[msg]')");

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
<html>    
<head>    
<meta name="viewport" content="width=device-width, initial-scale=1">  
<meta name=" viewport" content="with=device-width,initial-scale=1.0">
    <title>website for CHANAKYA DEGREE COLLEGE</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">  
<style> 
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
* {    
  box-sizing: border-box;    
}    
    
input[type=text], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
input[type=email], select, textarea {    
  width: 100%;    
  padding: 12px;    
  border: 1px solid rgb(70, 68, 68);    
  border-radius: 4px;    
  resize: vertical;    
}    
    
label {    
  padding: 12px 12px 12px 0;    
  display: inline-block;    
}    
    
input[type=submit] {    
  background-color: rgb(37, 116, 161);    
  color: white;    
  padding: 12px 20px;    
  border: none;    
  border-radius: 4px;    
  cursor: pointer;    
  float: right;    
}    
    
input[type=submit]:hover {    
  background-color: #45a049;    
}    
    
.container {    
  border-radius: 5px;    
  background-color: #f2f2f2;    
  padding: 20px;    
}    
    
.col-25 {    
  float: left;    
  width: 25%;    
  margin-top: 6px;    
}    
    
.col-75 {    
  float: left;    
  width: 75%;    
  margin-top: 6px;    
}    
    
/* Clear floats after the columns */    
.row:after {    
  content: "";    
  display: table;    
  clear: both;    
} 
@import url('https://fonts.googleapis.com/css2?family=Yaldevi:wght@400;600&display=swap');
body{
  margin: 0;
  padding: 0;
  font-family: 'Yaldevi', sans-serif;
  overflow-x: hidden;
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
    
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */    
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

<script>
function check()
{

    var mobile = document.getElementById('mobile');
   
    
    var message = document.getElementById('message');

   var goodColor = "#0C6";
    var badColor = "#FF9B37";
  
    if(mobile.value.length!=10){
       
        mobile.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "required 10 digits, match requested format!"
    }}
  </script>
</head>    
<body>    
<h2>FEED BACK FORM</h2>    
<div class="container">    
   <form action="#" method="POST">  
    <div class="row">    
      <div class="col-25">    
        <label for="fname">First Name</label>    
      </div>    
      <div class="col-75">    
        <input type="text" id="fname" name="name" placeholder="Your name.." required>    
      </div>    
    </div>    
    <div class="row">    
      <div class="col-25">    
        <label for="lname">mobile</label>    
      </div>    
      <div class="col-75">    
        <input type="number" id="mobile" name="mobile" placeholder="enter your mobile number.." onkeyup="check(); return false;" required>  
        <span id="message"></span>  
      </div>    
    </div>    
    <div class="row">    
        <div class="col-25">    
          <label for="email">Mail Id</label>    
        </div>    
        <div class="col-75">    
          <input type="email" id="email" name="email" placeholder="Your mail id.." required>    
        </div>    
      </div>    
        
    <div class="row">    
      <div class="col-25">    
        <label for="feed_back">Feed Back</label>    
      </div>    
      <div class="col-75">    
        <textarea id="subject" name="msg" placeholder="Write something.." style="height:200px" required></textarea>    
      </div>    
    </div>    
    <div class="row">    
      <input type="submit" value="Submit" name="submit">    
    </div>    
  </form>    
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
        <a href=><i class="fab fa-facebook-f"style="font-size:24px;color:blue"></i></a>
 
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