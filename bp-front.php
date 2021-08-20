<?php include_once("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BP records</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/angular.min.js"></script>
    <script src="bootstrap/js/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
      
       /* $(document).ready(function(){
            $("#bsave").click(function() {
               // alert();
                $uid = $("#buid").val();  
               /* $low = $("#low").val();
                $high = $("#high").val();
               
                $date = $("#bdate").val();
                $time = $("#btime").val();
                $qs3 = "uid=" + $uid + "&lowl=" + $low + "&highl=" + $high + "&date=" + $date +  "&time=" + $time;*/
              /*  $.get("bp-process.php?uid=" + $uid, function(response) {
                    $("#bresult").html(response);
                });
            });

        });*/
    </script>
</head>



<body style="background-attachment:fixed;background-size:100%">
    <div class="container" style="opacity:0.8">
   <?php include_once("header.php"); ?>
    <center>
        <form  action="bp-process.php"  style="background-color:skyblue" name="bfrm">
           <div class="form-row">  
          <div class="form-group col-md-12">
           <img src="images/download%2015.jpg">
              </div>
            </div>
               
               <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">patient uid</label>
      <input type="text" class="form-control" id="buid" name="buid" placeholder="uid" value=<?php echo $_SESSION["uid"]; ?>  style="background-color:lightpink">
    </div>
    
     
  <div class="form-group col-md-6">
    <label style="color:black" >Dilstolic level</label>
    <input type="text" class="form-control" id="low" name="low" placeholder="low level" style="background-color:lightpink">
  </div>
   </div>
   
   <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">Systolic level</label>
      <input type="text" class="form-control" id="high" name="high" placeholder="high level "  style="background-color:lightpink">
    </div>
    
    <div class="form-group col-md-6">
      <label style="color:black">Date </label>
      <input type="date" class="form-control" id="bdate" name="bdate"  style="background-color:lightpink">
    </div>
</div>
  
   <div class="form-row">

    <div class="form-group col-md-6 ">
      <label style="color:black">Time of recording</label>
      <input type="time" class="form-control" id="btime" name="btime"  style="background-color:lightpink">
    </div>
       
</div>
   <!-- 
     <div class="form-row">
    <div class="form-group col-md-12">
      <span id="bresult" style="color:black">*</span>
    
    </div>
</div>-->
   
    <button type="submit" value="save" name="bbtn" id="bsave" class="btn btn-secondary">Save</button>
      </form>
    </center>
                </div>
</body>
</html>