<?php
    error_reporting(0);
$getid= $_GET["id"];
$con=mysqli_connect("localhost","root","","oas");
if(!isset($con))
{
    die("Database Not Found");
}


$q=mysqli_query($con,"select s_name from t_user_data where s_id='".$getid."'");
$n=  mysqli_fetch_assoc($q);
$stname= $n['s_name'];

$result = mysqli_query($con,"SELECT * FROM t_user WHERE s_id='".$getid."'");
                    
                    while($row = mysqli_fetch_array($result))
                      {

?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        
         <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>
        
        <script type="text/javascript">
            function printpage()
            {
            var printButton = document.getElementById("print");
            printButton.style.visibility = 'hidden';
            window.print()
             printButton.style.visibility = 'visible';
             }
        </script>
        
    </head>
    <body style="background-image:url(./images/white.jpg) ">
      <form id="adminac" action="adminac.php" method="post">
            
          <div class="container-fluid">
                            <div class="row">
                               <div class="col-sm-12">
      <center>  <table class="table table-bordered" style="font-family: Verdana">
                
                <tr>
                 <td style="width:3%;"><img src="./images/logov.jpg" width="50%"> </td>
                 <td style="width:8%;"><center><font style="font-family:Arial Black; font-size:20px;">
                    Veermata Jijabai Technological Institute,Matunga,Mumbai - 400 019, MAHARASHTRA</font></center>
                
                <center><font style="font-family:Verdana; font-size:18px;">
                    Phone : (+91-22)24198102, Email : dean_ap@vjti.ac.in
                    </font></center>
                
                <br>
                <br>
                <center><font style="font-family:Arial Black; font-size:20px;">
                   Admission form 2019-20</font></center>
                </td>
                    <td colspan="2" width="3%" >
                        <?php
                  
                    $picfile_path ='studentpic/';
                    
                    $result1 = mysqli_query($con,"SELECT * FROM t_userdoc where s_id='".$getid."'");
             
                    while($row1 = mysqli_fetch_array($result1))
                      {                  
                        $picsrc=$picfile_path.$row1['s_pic'];
                        
                        echo "<img src='$picsrc.' class='img-thumbnail' width='180px' style='height:180px;'>";
                        echo"<div>";
                      }
                   ?>
                        </td>
                 </tr> 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Start Date of college</font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                        27 July 2019</font> </td>
                 </tr>
                 
                 <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Time </font> </td>
                    <td style="width:8%;" colspan="3"> <font style="font-family: Verdana; font-weight: bold">
                        9.00 AM - 5.15 PM </font></td>
                 </tr>
                 
                <tr>
                    <td> <font style="font-family: Verdana;">Registration No. </font> </td>
                    <td colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $getid ?></font> </td>
                </tr>
                
                <tr>
                 <td style="width:4%;"> <font style="font-family: Verdana;">Name  </font> </td>
                    <td style="width:8%;" colspan="3"><font style="font-family: Verdana; font-weight: bold">
                     <?php echo $stname;?></font> </td>
                 </tr>
                 
                 <tr>
                     <td style="width:4%;"> <font style="font-family: Verdana;">Address of the college </font> </td>
                    <td style="width:8%;" colspan="3">
                       <font style="font-family: Verdana; font-weight: bold">Veermata Jijabai Technological Institute<br>
                        Venue - Matunga<br>
                        
                        District : Mumbai <br>
                        Pin code : 400 019<br>
                        Maharashtra, India<br>
                        Phone: (+91-22)24198102<br>
                        </font>
                    </td>
                 </tr>
                <?php
                }
                ?>
                 
                    </table>
                </div>
             </div>
          </div>
          <center>
                <tr>
                    <td> 
                             <a href="admin.php">Back </a>
                    </td>
                    
                </tr></center>
          
      </form>
    </body>
</html>
