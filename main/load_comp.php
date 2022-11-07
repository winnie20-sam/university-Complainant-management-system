<script src="scrip.js"></script>
<style>
        
.stylec{
    border:solid 0.5px  #ffcccc;
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
</style>

<?php   
         include_once("dbm.php");
        $newcomen=$_POST["newcomment"];         
         $qu="SELECT * FROM complains LIMIT $newcomen ";
         $ex=mysqli_query($connect,$qu);
         while($re=mysqli_fetch_assoc($ex)){
                $r=$re["USCOMPL"];
                if(empty($r)){
                    continue;
                 }
                else{
                echo "<p class='stylec'>";                            
                echo "From: ".$re["USNAME"]."";
                echo "<br>";
                echo $re["USCOMPL"];
                ?>
                 <a href="adminre.php?id=<?php echo $re["ID"]?>">Reply</a>                         
                </p>                   
                                                   
             <?php }}?>
                            
        
