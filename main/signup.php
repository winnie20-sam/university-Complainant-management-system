<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>STUDENT  SIGN UP PAGE</title>
   
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
             background: -webkit-linear-gradient(left, #e6ccff, #ffe6e6);
         }
         h2{
             text-align:center;
             font-size:36px;
         }
         .form-group{
             display:block;
             text-align:center;
             
             }
             input[type=text],input[type=password],input[type=email]{
                width: 40%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                 box-sizing: border-box;
             }
             input[type=submit]{
                padding:10px 20px;
                display:inline-block;
                box-sizing: border-box;
                width:150px;
                background-color:#7C83FD;
             }
             .image-container{
                text-align: center;
                margin: 24px 0 12px 0;
                
            }
      </style>
</head>
<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                    <div class="image-container">
                                <img src="kca.jpg" width="120" ,height="70" alt="">
                            </div>
                        <h2 class="form-title">Student Sign up page</h2>
                        <form action="dbm.php" method="post" class="register-form" id="register-form" >
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" required/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" required/>
                            </div>
                            
                            <div class="form-group">                                                  
                            Already a member:<a href="login.php" class="signup-image-link" style="text-align:left;color:blue;">Log In</a>                           
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>                   
                </div>
            </div>
        </section>
  
    </div>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>