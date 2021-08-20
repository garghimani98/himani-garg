<?php
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Doctor Consultance</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/angular.min.js"></script>
    <script src="bootstrap/js/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        function showpreview(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
      
    </script>
    </head>
  
    <body style="background-attachment:fixed;background-size:100%">
      <div class="container" style="opacity:0.8;background-color:azure">
    <?php include_once("header.php");?>
    <center>
      <form action="doctor-process.php" method="post" enctype="multipart/form-data" name="bfrm" >
 <input type="hidden" id="hdn" name="hdn">
          
  <div class="custom-file">
    <img id="prev" width="100" height="100"  style="margin-top:50px;border-color:black">
    <input type="file" class="custom-file-input" name="profile" id="validatedCustomFile" onchange="showpreview(this);" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
   
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">Doctor name</label>
      <input type="text" class="form-control" id="dname" name="dname" placeholder="name" style="background-color:lightpink">
      
    </div>
    <div class="form-group col-md-6">
      <label style="color:black">Qualification</label>
      <input type="text" class="form-control" id="qual"  name="qual" placeholder="qualification" style="background-color:lightpink">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Mobile number</label>
    <input type="text" class="form-control" id="mob" name="mob" placeholder="mobile number" style="background-color:lightpink">
  </div>
  <div class="form-group col-md-6">
    <label style="color:black" >Experience</label>
    <input type="text" class="form-control" id="exp" name="exp" placeholder="Experience" style="background-color:lightpink">
  </div>
    </div>
     <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Hospital</label>
    <input type="text" class="form-control" id="hos" name="hos" placeholder="hospital" style="background-color:lightpink">
  </div>
  <div class="form-group col-md-6">
    <label style="color:black">Specialization</label>
    <input type="text" class="form-control" id="spec" name="spec" placeholder="Specialization" style="background-color:lightpink">
  </div>
    </div>
       <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Hospital Address</label>
    <input type="text" class="form-control" id="add" name="add" placeholder="hospital address" style="background-color:lightpink">
  </div>
  <div class="form-group col-md-6">
    <label style="color:black">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="city" style="background-color:lightpink">
  </div>
    </div>
       <div class="form-row">
   <div class="form-group col-md-6">
    <label style="color:black">Other information</label>
    <input type="text" class="form-control" id="oi"  name="oi" style="background-color:lightpink" >
  </div>
    </div>
  
  <button type="submit" value="save" name="btn" id="dsave" class="btn btn-secondary">Save</button>
    <button type="submit"  value="update" name="btn" id="dupdate" class="btn btn-secondary">update</button>
   
</form>
       
    </center>
     </div>
    </body>
</html>


<!--<form action="doctor-process.php" method="post" enctype="multipart/form-data" name="bfrm">
 <input type="hidden" id="hdn" name="hdn">
            <div class="container" style="opacity:0.8">
  <div class="custom-file">
    <img id="prev" width="100" height="100" style="margin-top:20px">
    <input type="file" class="custom-file-input" name="profile" onchange="showpreview(this);" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
   
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>Doctor name</label>
      <input type="text" class="form-control" id="dname" name="dname" placeholder="name">
    </div>
    <div class="form-group col-md-6">
      <label>Qualification</label>
      <input type="text" class="form-control" id="qual"  name="qual" placeholder="qualification">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label>Mobile number</label>
    <input type="text" class="form-control" id="mob" name="mob" placeholder="mobile number">
  </div>
  <div class="form-group col-md-6">
    <label >Experience</label>
    <input type="text" class="form-control" id="exp" name="exp" placeholder="Experience">
  </div>
    </div>
     <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">Hospital</label>
    <input type="text" class="form-control" id="hos" name="hos" placeholder="hospital">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">Specialization</label>
    <input type="text" class="form-control" id="spec" name="spec" placeholder="Specialization">
  </div>
    </div>
       <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress2">Hospital Address</label>
    <input type="text" class="form-control" id="add" name="add" placeholder="hospital address">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">City</label>
    <input type="text" class="form-control" id="city" name="city" placeholder="city">
  </div>
    </div>
       <div class="form-row">
   <div class="form-group">
    <label for="inputAddress2">Other information</label>
    <input type="text" class="form-control" id="oi"  name="oi" >
  </div>
    </div>
  
  <button type="submit" value="save" name="dbtn" id="dsave" class="btn btn-primary">Save</button>
    <button type="submit"  value="update" name="dbtn" id="dupdate" class="btn btn-primary">update</button>
    </div>
</form>-->