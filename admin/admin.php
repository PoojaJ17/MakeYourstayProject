<!DOCTYPE html>
<html>
<head>
    <title>Make Your Stay</title>
    <style>
.modal-window {
  position: fixed;
  background-color: rgba(200, 200, 200, 0.75);
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 999;
  opacity: 0;
  pointer-events: none;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
}

.modal-window:target {
  opacity: 1;
  pointer-events: auto;
}

.modal-window>div {
  width: 400px;
  position: relative;
  margin: 10% auto;
  padding: 2rem;
  background: #fff;
  color: #444;
}

.modal-window header {
  font-weight: bold;
}

.modal-close {
  color: #aaa;
  line-height: 50px;
  font-size: 80%;
  position: absolute;
  right: 0;
  text-align: center;
  top: 0;
  width: 70px;
  text-decoration: none;
}

.modal-close:hover {
  color: #000;
}

.modal-window h1 {
  font-size: 150%;
  margin: 0 0 15px;
}
input[type=text], input[type=password],select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #F4D258;
	color:#000000;
}
input[type=reset] {
    width: 100%;
    background-color:#000000;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=reset]:hover {
    background-color: #F4D258;
	color:#000000;
}


.box{
  background:white;
  width:300px;
  border-radius:6px;
  margin: 0 auto 0 auto;
  padding:0px 0px 70px 0px;
  border: #2980b9 4px solid; 
}
</style>
    <link rel="stylesheet" type="text/css" href="css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    <script>
 
</script>
    </head>
<body>
<div id="main">
    <nav id="navid">
        <img src="img/logo2.jpg" class="av" width="100" height="90" >
        <ul>

            <li><img src="img/message-2-512.png" height='20' width='20' name='mail'>  <a href="contact1.php">Have Question?</a></li>
            <!--   <li><a href="#">Help</a></li>-->
        </ul>
    </nav>
     <div class="text-block">
        
         <font face="verdana,Arial,sans-serif" color="white"font size="40">Make Your Stay</font><br><br>
            <p><font color="white">Discover a hotel that defines a
                new dimension of luxury</font></p><br><br><br><br>
         <button class="btn-book"><a href="#open-modal"><font color="white">Login</font></a></button>
    </div>
    				
<div id="open-modal" class="modal-window">
  <div>
    <a href="#modal-close" title="Close" class="modal-close">close &times;</a>
        <p><form action="proc.php" method="post">
	<h2><center>Login </center></h2>
	<label for="fname">E-mail</label>
    <input type="text" id="user" name="user" placeholder="Your name E-mail.." required >

    

    <label for="country">Password</label>
  <input type="password" id="pass" name="pass" placeholder="Enter Password.." required >

  

<input type="submit" value="LOGIN" >
       <?php
                    if(isset($_SESSION["error"])){
                        $error = $_SESSION["error"];
                        echo "<span>$error</span>";
                    }
                ?>  
</form>
      
       
  </div>    </div>
    </div>
    <div class="imgcontainer">
         <img class="back" src="img/1128.jpg" name="Rotate"  >
    </div>
    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section About">
                    <h2 class="logo-text"><span>About</span>Us</h2><br>
                    <p>Where ever you go, 
                    live at a space with an amenity-laden experience for 
                    prices you wouldn’t have imagined possible before
                    </p><br>
                <div class="Contact">
                    <span><i class="fa fa-phone"></i> &nbsp; 123-456-786</span><br>
                    <span><i class="fa fa-envelope"></i> &nbsp; info@makeyourstay.com</span></div>
                <div class="socials">
                    <a href="https://www.facebook.com/login.php"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/?hl=en"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-youtube"></i></a>
                </div>
                </div>
                
                <div class="footer-section contact-form">
                    <h2>Contact Us</h2><br>
                    <form action="index.html" method="post">
                    <input type="email"name="email" class="text-input contact-input" placeholder="Your email address..."><br>
                    <textarea name="message" class="text-input contact-input" placeholder="Your message..."></textarea><br>
                    <button type="submit" class="btn btn-big">
                    <a href="#"><i class="fa fa-envelope"></i></a>
                     Send
                     </button>
                    </form>
                      </div>
                </div>
             <div class="footer-bottom">
              &copy; Makeyourstay.com |Designed by </div>
                    </div>      
    </footer>  
    
</body>
</html>
<?php
    unset($_SESSION["error"]);
?>
