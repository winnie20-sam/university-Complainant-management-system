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
    <title>COMPLAINS SYSTEM USER PAGE</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
              background: -webkit-linear-gradient(left, #e6ccff, #ffe6e6);
      }
.contact-form{
    background: #fff;
    margin-top: 10%;
    margin-bottom: 5%;
    width: 70%;
    text-align: center;
    position:relative;
}
.contact-form .form-control{
    border-radius:1rem;
   
}
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    transform: rotate(29deg);
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 8%;
    margin-top: -10%;
    text-align: center;
    color: #0062cc;
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
                <img src="logo.png" />
            </div>
           
            <?php                      
            if(isset($_SESSION["USNAME"]))
            echo '<div class="log"><button><a href="logout.php">LOG OUT</a></button></form></div>';   
           
            ?>
            <?php include_once("dbm.php");?>	
            <form  action="dbm.php" method="post">
                <h3>Reply Complains</h3>
               <div class="row">
                   <?php if(isset($_SESSION["USNAME"]))?>
                    <div class="col-md-6" >            
                        <div class="form-group">
                        <textarea name="txttMsg" class="form-control" placeholder="Your Reply*" style="width: 100%; height: 150px; resize:none;" required ></textarea>
                        </div>
                        <div class="form-group">                           
                            <input type="hidden" value='<?php echo $da;?>' name="cd"/>
                        </div>               
                       <div class="form-group">                           
                            <input type="submit" name="sSubmit" class="btnContact" value="Send" />
                        </div>
                        

                </div>
            </form>
</div>
</body>
</html>