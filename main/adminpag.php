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
    <title>KCA STUDENT COMPLAINANT SYSTEM USER PAGE</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.6.0.min.js"  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/8a49ed70c5.js" crossorigin="anonymous"></script>
    <script src="scrip.js"></script>
    <style>
        body{
              background: -webkit-linear-gradient(left, #e6ccff, #ffe6e6);
      }
     a .icon{
          float:top-left;
          position:absolute;

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
    margin-top: 8%;
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
.log{
    position:absolute;
    top:30px;
    right:0;
}
.stylec{
    border:solid 0.5px #ffcccc;
    background:#ffe6e6;
    width:100%;    
    margin:8px 80px;
    padding: 1px 4px;
    position:relative;
    
}
a{
    position:absolute;
    bottom: 2px;
    right:2px;
    border:solid 1px #ff4d94;    
    background:#ff4d94;
    color:white;
    
}
.main{
    background:#ffe6e6;
    width: 100%;
    position:absolute;
    display:none;
}
textarea{  
    resize:none;
    border:solid 1px white:
}
.two{
    background:#cc00ff;
    border-radius:30px;
}
.one{
    background: white;
    border-radius:30px;    
    color:blue;
    border:solid white 2px;
}

</style>
<script>
    $(document).ready(function(){
        var cou=1;
        $("button").click(function(){
            cou=cou+2;
            $("#comment").load("load_comp.php",{
                newcomment: cou
            })
        })
    })   
</script>
</head>
<body>
    <div class="header">
    <div class="header-image">
        <img src="kca.jpg" width="120" height="100" alt="">
          <a class="icon" href="https://twitter.com/kcauniversity?lang=en" target="_blank" rel="nofollow"><i class="footer-icons fab fa-twitter"  aria-hidden="true"></i></a>      
         <a class="icon" href="https://www.facebook.com/KCAUniversityOfficial/" target="_blank" rel="nofollow"><i class="footer-icons fab fa-facebook-f"></i></a>
        <a class="icon" href="https://www.instagram.com/kca_university/"  target="_blank" rel="nofollow"><i class="footer-icons fab fa-instagram"></i></a>


    </div>
    </div>
<div class="container contact-form">
            <div class="contact-image">
                
                </div>            
            <?php if(isset($_SESSION["USNAME"])){
             echo '<div class="log"><button class="one"><a href="logout.php">LOG OUT</a></button></form></div>';
                } 
           
            ?>
             
            <h3>Reply Complains</h3>
               <div class="row">
                    <div class="col-md-6" >
                    <div class="form-group " id="comment">
                         <?php
                         include_once("dbm.php");
                         $qu="SELECT * FROM complains LIMIT 1";
                         $ex=mysqli_query($connect,$qu);
                         while($re=mysqli_fetch_assoc($ex)){
                             $r=$re["USCOMPL"];
                             if(empty($r)){
                                 continue;
                              }
                             else{
                             echo "<p class='stylec'>";                            
                             echo "From: ".$re["USNAME"]."";
                             echo "</br>";
                             echo $re["USCOMPL"];
                             ?>                                                 
                             <a href="adminre.php?id=<?php echo $re["ID"]?>">Reply</a>                         
                             </p>                    
                                                   
                         <?php }}?>
                        </div>                
                       <div class="form-group">                            
                            <button class="btnContact" class="two">Show Complain</button>
                        </div>                
                </div>
            
</div>
</body>
</html>