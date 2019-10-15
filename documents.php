<?php


error_reporting(0);
session_start();

include 'fileupload.php';   
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <link type="text/css" rel="stylesheet" href="css/admform.css"></link>
        
        <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
         <link rel="stylesheet" href="bootstrap/bootstrap-theme.min.css">
       <script src="bootstrap/jquery.min.js"></script>
        <script src="bootstrap/bootstrap.min.js"></script>

        <!-- //added -->
        <script src= 
        "https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
        </script>


 

        <!-- ADDED -->
    
        
        <script type="text/javascript">
            
            function send()
            {
                if(document.getElementById('dec').checked)
                    {
                        window.location='admsnreport.php';
                        return false;
                    }
                    return true;
            }
        </script>
    </head>
    <body style="background-image:url('./images/white.jpg');">
        <form id="docup" enctype="multipart/form-data" name="docup" action="documents.php" method="post">
            <div class="container-fluid">    
                <div class="row">
                  <div class="col-sm-12">
                        <img src="images/cutm.jpg" width="100%" style="box-shadow: 1px 5px 14px #999999; "></img>
                  </div>
                 </div>    
             </div>
            <div class="container" style="margin-left:100px;">
            <table class="table table-striped">
                            <thead>
                                       <tr>
                                           <th >
                                       <font style=" font-family: Verdana;  font-size:19px;"> 
                                       Upload Your Documents </font>
                                       <font color = "red" > (File size : 2MB) </font>
                                           </th>
                                        </tr>   
                                                
                            </thead>
                            <tbody>
                            <tr>
                                 <td>Passport Size Image </td>
                                <td>
                                    <p id="GFG_UP1" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                    </p> 

                                    <input type="file" id="fpic" name="fpic" ><br>

                                    <p id="GFG_DOWN1" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP1').text("Choose file from system to get the fileSize"); 
                                        $('#fpic').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN1').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                </td>

                            </tr> 
                           
                             <tr>
                                <td>10th Mark Sheet </td>
                                <td>
                                <p id="GFG_UP2" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                </p>

                                     <input type="file" id="ftndoc" name="ftndoc"><br>
                                     <p id="GFG_DOWN2" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP2').text("Choose file from system to get the fileSize"); 
                                        $('#ftndoc').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN2').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                 </td>
                             </tr>
                             
                             <tr>
                                 <td>
                                     10th Certificate 
                                 </td>
                                 <td>
                                 <p id="GFG_UP3" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                </p>
                                     <input type="file" id="ftcdoc" name="ftcdoc"><br>

                                     <p id="GFG_DOWN3" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP3').text("Choose file from system to get the fileSize"); 
                                        $('#ftcdoc').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN3').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                 </td>
                             </tr>
                              
                             <tr>
                                 <td>
                                     12th/Diploma Mark Sheet 
                                 </td>
                                    
                            
                                 <td>
                                 <p id="GFG_UP4" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                </p>
                                     <input type="file" id="fdmdoc" name="fdmdoc"><br>
                                     <p id="GFG_DOWN4" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP4').text("Choose file from system to get the fileSize"); 
                                        $('#fdmdoc').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN4').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                 </td>
                             </tr>
                             <tr>
                                <td>
                                    12th/Diploma Certificate 
                                </td>
                             
                                <td>
                                <p id="GFG_UP5" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                </p>

                                <input type="file" id="fdcdoc" name="fdcdoc"><br>

                                <p id="GFG_DOWN5" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP5').text("Choose file from system to get the fileSize"); 
                                        $('#fdcdoc').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN5').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                 </td>
                             </tr>
                             
                            <tr>
                                <td>
                                    Aadhar Card 
                                </td>
                            
                                 <td>
                                 <p id="GFG_UP6" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                </p>
                                    <input type="file" id="fide" name="fide"><br>
                                    <p id="GFG_DOWN6" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP6').text("Choose file from system to get the fileSize"); 
                                        $('#fide').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN6').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                </td>
                            </tr> 
                            
                            <tr>
                                <td>
                                    Signature
                                </td>
                            
                                 <td>
                                 <p id="GFG_UP7" style= 
                                        "font-size: 12px; font-weight: bold;"> 
                                </p>
                                    <input type="file" id="fsig" name="fsig"><br>
                                    <p id="GFG_DOWN7" style= 
                                        "color:green; font-size: 15px; font-weight: bold;"> 
                                    </p>
                                    <script> 
                                        $('#GFG_UP7').text("Choose file from system to get the fileSize"); 
                                        $('#fsig').on('change', function() { 
                                            if (this.files[0].size > 2097152) { 
                                                alert("Try to upload file less than 2MB!"); 
                                            } else { 
                                                $('#GFG_DOWN7').text(this.files[0].size + "bytes"); 
                                            } 
                                        }); 
                                    </script>
                                </td>
                            </tr>
                            
                            <tr>
                                
                                <td colspan="2"><input type="submit" id="fpicup" name="fpicup" class="toggle btn btn-primary"></td>
                            </tr>
                           
                           </tbody>
                       </table>
        </div>
            <div class="container">
              <center> <div class="jumbotron" style="width:100%; box-shadow: -3px 3px 10px #999999;   margin-top:10px;">
                      <h3>
                          <b> <font style=" font-family: Verdana;  font-size:19px;"> Declaration By The Applicant</font></b>
                      </h3>
                           <p><font style=" font-family: Verdana;font-size:medium">
                                    I hereby solemnly declare that all the particulars given in this form are true to the best of my knowledge
                                    and belief. I shall abide by the rules and regulations laid down by the College from time to time.
                                    In case the particulars furnished by me are found false, my admission stands cancelled.
                          
                                </font></p>
                           
                           <input type="checkbox" id="dec" name="dec" value="I accept" onclick="send()"><font style=" font-family: Verdana;font-size:medium">
                           I accept</font>
                               
                           
                         
                  </div>
            </div>
        </form>
    </body>
</html>
