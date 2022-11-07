<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <title>  LOG IN PAGE</title>
   
      
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">   
    <link rel="stylesheet" href="css/style.css">
    <style>
        body{
           background: -webkit-linear-gradient(left, #e6ccff, #ffe6e6);
            }
            h2{
                text-align:center;
                font-size:36px;
                font-family:san-serrif,arial;

            }
            .form-group{
                text-align:center;
            }
            input[type=text],input[type=password]{
                width: 40%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                 box-sizing: border-box;
            }   
            input[type=submit]{
                padding:12px 20px;
                display:inline-block;
                box-sizing: border-box;
                width:150px;
                background-color:#7C83FD;
            }
                 .image-container{
                text-align: center;
                margin: 24px 0 12px 0;
                
            }
            .form-group p{
                font-size:18px;
            }
            </style>
</head>
<body>

    <div class="main">      
        <!-- Log in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">                 
                    <div class="signin-form">
                    <div class="image-container">
                                <img src="kca.jpg" width="120" ,height="70" alt="">
                            </div>
                        <h2 class="form-title"> Login Page</h2>
                        <form action="dbm.php" method="POST" class="register-form" id="login-form">
                            
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="your_name" id="your_name" placeholder="Your Name" required/>
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="your_pass" id="your_pass" placeholder="Password" required/>
                            </div>
                            <div class="form-group">
                            <p>Dont have an account:<a href="signup.php" class="signup-image-link" style="text-align:left;color:blue;">Create one</a></p>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
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