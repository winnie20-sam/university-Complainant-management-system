<?php
session_start();
require_once("dbm.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KCA STUDENT COMPLAINTS USER PAGE</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
              background: -webkit-linear-gradient(left, #e6ccff, #ffe6e6);
      }
      
.contact-form{
    background: #fff;
    margin-top: 5%;
    margin-bottom: 5%;
    width: 70%;
    text-align: center;
    position:relative;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
   
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h2{
    margin-bottom: 8%;
    margin-top: -5%;
    text-align: center;
    color: #0062cc;
}
.contact-form h3{
    font-size:20px;
    font-family:san-serrif.arial;

}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}
.log{
    position:absolute;
    top:0;
    right:0;
}
button{
    background: white;
    border-radius:30px;    
    color:blue;
    border:solid white 2px;
}
    </style>
</head>
<body>
<div class="container contact-form">
            <div class="contact-image">
                <img src="kca.jpg" alt="rocket_contact"/>
            </div>
            <?php if(isset($_SESSION["USNAME"]))
            echo '<div class="log"><button><a href="logout.php">LOG OUT</a></button></form></div>';   
           
            ?>
            <form method="post">
                <h2> Faculty of Computing and Information Management <br><br>
                    Any Complainats? Let Us Know</h2>
                <h3>Please Fill in the form below</h3>
               <div class="row">
                   <?php if(isset($_SESSION["USNAME"]))?>
                    <div class="col-md-6" >
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Your Name *" value="<?php if(isset($_SESSION["USNAME"]));echo $_SESSION["USNAME"]?>" />
                        </div>
                        <div class="form-group">
                            <input type="text" name="txtEmail" class="form-control" placeholder="Your Email *"  value="<?php if(isset($_SESSION["USMAIL"]));echo $_SESSION["USMAIL"]?>" />
                        </div>
                        <div class="form-group">
                            <input type="tel" name="txtPhone" class="form-control" placeholder="Your Phone Number *" required/>
                        </div>
                        <div class="form-group">
                        <textarea name="txtMsg" class="form-control" placeholder="Your Complain*" style="width: 100%; height: 150px; resize:none;" required ></textarea>
                        </div>                 
                       <div class="form-group">                            
                            <input type="submit" name="btnSubmit" class="btnContact" value="Send Message" />
                        </div>
                
                </div>
            </form>
            <div class="res">
                <div class="con">
                    <?php 
                    include_once("dbm.php");
                    if(isset($_SESSION["USNAME"])){
                        $de=$_SESSION["USNAME"];
                        $s="SELECT FEEDBACK FROM complains WHERE USNAME='$de'";
                        $ee=mysqli_query($connect,$s);
                        while($re=mysqli_fetch_assoc($ee)){
                            $f=$re["FEEDBACK"];
                            if(empty($f)){
                                 continue;
                            } 
                            else { ?>
                             <form action="">
                               <div class="feed" style="margin-top:0px; width:100%; height:20%;">
                               <h1>Feedback to your complaints: <style>font-size:36px; font-weight:bold; </style></h1>
                               <?php echo $f; }}}?>                                                            
                               <div>  
                               </form>                  
                        
                    <?php?>
                </div>
            </div>
</div>
</body>
</html>