<?php
 $connect=mysqli_connect("localhost","root","","winnie");
if(isset($_POST["signup"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $passw=$_POST["pass"];
    $cpassw=$_POST["re_pass"];
    if($passw!=$cpassw){
        echo"<script>alert('PASSWORD MISS MATCH');location.href='signup.php';</script>";
       }
    else{       
        if($connect){           
            $qua=" SELECT * FROM complains WHERE USNAME='$name' OR USMAIL='$email'";
            $s=mysqli_query($connect,$qua);
            $count=mysqli_num_rows($s);
            if($count){
                echo"<script>alert('YOU ALREADY HAVE AN ACCOUNT OR TRY TO USE OTHER DETAILS TO CREATE ACCOUNT');location.href='signup.php';</script>";
            } 
            else{
                 $inser="INSERT INTO complains (USNAME,USMAIL,USPASS) VALUES ('$name','$email','$passw')";
                 $dd= mysqli_query($connect,$inser);
                 if($dd){
                     echo"<script>alert('ACCOUNT CREATED SUCCESSIFULLY');location.href='login.php';</script>";
                 }
            }
            
        }
        else{
            echo"<script>alert('CONNECTION FAILED');location.href='signup.php';</script>";
            }
    }
    

}
if(isset($_POST["signin"])){
    $name=$_POST["your_name"];
    $passw=$_POST["your_pass"];
    $ch="SELECT * FROM complains";
    $ex=mysqli_query($connect,$ch);
    while($re=mysqli_fetch_assoc($ex)){        
        $na=$re["USNAME"];
        $pas=$re["USPASS"];
        $ma=$re["USMAIL"];
        $mee=$re["Adm/User"];
        if($name==$na && $passw==$pas && $mee==0){
            session_start();
            $_SESSION["USNAME"]=$na;
            $_SESSION["USMAIL"]=$ma;
            header("location:userpage.php");          
           
                }
            elseif($name==$na && $passw==$pas && $mee==1){
            session_start();
            $_SESSION["USNAME"]=$na;
            $_SESSION["USMAIL"]=$ma;
            header("location:adminpag.php");  
            }

    } 
        echo"<script>alert('INVALID LOG IN,TRY AGAIN');location.href='login.php';</script>";

}

    
if(isset($_POST["btnSubmit"])){  
    $p=$_POST["txtPhone"];
    $m=$_POST["txtMsg"];
    $mass=$_POST["txtName"];
    if(isset($_SESSION["USNAME"])){ 
    $ch=$_SESSION["USNAME"];
    $sl="SELECT USCOMPL FROM complains WHERE USNAME='$ch'";
    $r=mysqli_query($connect,$sl);
    while($ee=mysqli_fetch_assoc($r)){
    $de=$ee["USCOMPL"];
    if(empty($de)){
    $q="UPDATE complains SET USCOMPL='$m',USPHON='$p' WHERE USNAME='$ch'";
    $rs=mysqli_query($connect,$q);
    if($rs){
        echo"<script>alert('YOUR COMPLAIN HAS BEEN SUCCESSIFULY SEND👏💕');location.href='userpage.php';</script>";
    }
    else{
        echo"<script>alert('AN ERROR HAS OCCURED,TRY AGAIN😉');</script>";
    } }
    else{
          echo "<script>alert('KINDLY WAIT UNTIL YOUR FIRST COMPLAIN IS PROCCESSED😉');location.href='userpage.php';</script>";
    }

    
   
    }}}

if(isset($_GET["id"])) {          
    $id=$_GET["id"];
    $da=$id;  
}
if(isset($_POST["sSubmit"])){
        $com=$_POST["txttMsg"];         
        $id=$_POST["cd"];      
        $qur="UPDATE complains SET FEEDBACK=' $com' WHERE ID='$id'";
        $exx=mysqli_query($connect,$qur);
        if($exx){
            $qq="UPDATE complains SET USCOMPL='' WHERE ID='$id'";
            $ex=mysqli_query($connect,$qq);
            if($ex){
                echo"<script>location.href='adminpag.php'</script>";
            }         
        }
}