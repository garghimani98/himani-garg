<?php include_once("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COLLEGES.......</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script src="bootstrap/js/angular.min.js"></script>
    <script src="bootstrap/js/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" >
        function showpreview(file) {
            if (file.files && file.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#prev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
     /*   $(document).ready(function() {
            $("#save").click(function(response) {
              $("#result").html(response)
            });

        })*/
    </script>
</head>



<body style="background-attachment:fixed;background-size:100%">
  
      <div class="container" style="opacity:0.8">
    <?php include_once("header.php");?>
    <center>
        <form action="sugar-process.php"  name="frm" style="background-color:skyblue">
            
          <div class="form-row">  
          <div class="form-group col-md-12">
           <img src="images/download%20(5).jpg">
              </div>
            </div>  
             
<div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">patient uid</label>
      <input type="text" class="form-control" id="uid" name="uid" placeholder="uid" value=<?php echo $_SESSION["uid"]; ?>  style="background-color:lightpink">
    </div>
    
     
  <div class="form-group col-md-6">
    <label style="color:black" >Recording Time</label>
    <input type="time" class="form-control" id="time" name="time"  style="background-color:lightpink">
  </div>
   </div>
    
   
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="disabledSelect">SugarType:</label>
      <select id="branch" name="features" class="form-control" style="background-color:lightpink">
        <option>Select</option>
        <option>Urine</option>
        <option>Blood</option>
      </select>
    </div>
    
     <div class="form-group col-md-6">
      <label for="disabledSelect">Category:</label>
      <select id="cat" name="cat" class="form-control" style="background-color:lightpink">
        <option>Select</option>
        <option>Random</option>
        <option>Fasting</option>
      </select>
    </div>
          </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">Sugar level</label>
      <input type="text" class="form-control" id="level"  name="level" placeholder="sugar level" style="background-color:lightpink">
    </div>
 
  
  <div class="form-group col-md-6">
    <label style="color:black">Date</label>
    <input type="date" class="form-control" id="date" name="date"  style="background-color:lightpink">
  </div>
          </div>
  
 <!--
  <div class="form-row">
  <div class="form-group col-md-12">
    <span id="result"style="color:black">*</span>
   
  </div>
  </div>
  -->
  
  <button type="submit" value="save" name="btn" id="save" class="btn btn-secondary">Save</button>
</form>
    </center>
    </div>
</body>
</html>


              <!--  <div class="row bg-danger" style="margin-top:30px" width:400px height:400px>
                    <div class="col-md-12">
                        <img id="prev" width="100" height="100" style="margin-top:20px"><br>
                        <input type="file" name="profile" onchange="showpreview(this);"><br>
                        <hr>
                        <h2>Uid</h2>
                        <input type="text" name="uid" id="uid"><br>
                        <hr>
                        <h3>Sugar type:</h3>
                        <select name="features" id="branch">
     
       <option value="urine">URINE
       <option value="blood">BLOOD
       </select>
                        <hr>
                        <h3>Category:</h3>
                        <select name="cat" id="cat">
       <option value="random">RANDOM
        <option value="fasting">FASTING
        </select>
                        <hr>
                        <h3>Sugar Level</h3>
                        <input type="text" name="level" id="level"><br>
                        <hr>
                        <h3>Date</h3>
                        <input type="date" name="date" id="date"><br>
                        <hr>
                        <h3>Date</h3>
                        <input type="time" name="time" id="time"><br>
                        <hr>
                        <span id="result">*</span>
                        <button type="submit" value="save" name="btn" id="save" class="btn bg-white">SAVE</button>
                         <input type="button" value="save" name="save" id="save" style="background-color: black;color: white">
                    </div>
                </div>
            </div>
        
   


<div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">patient uid</label>
      <input type="text" class="form-control" id="uid" name="uid" placeholder="uid" style="background-color:lightpink">
    </div>
    
     
  <div class="form-group col-md-6">
    <label style="color:black" >Recording Time</label>
    <input type="text" class="form-control" id="time" name="time"  style="background-color:lightpink">
  </div>
   </div>
    
   
    
    <div class="form-group">
      <label for="disabledSelect">SugarType:</label>
      <select id="branch" name="features" class="form-control">
        <option>Urine</option>
        <option>Blood</option>
      </select>
    </div>
    
     <div class="form-group">
      <label for="disabledSelect">Category</label>
      <select id="cat" name="cat" class="form-control">
        <option>Random</option>
        <option>Fasting</option>
      </select>
    </div>
    
    <div class="form-row"
    <div class="form-group col-md-6">
      <label style="color:black">Sugar level</label>
      <input type="text" class="form-control" id="level"  name="level" placeholder="sugar level" style="background-color:lightpink">
    </div>
 
  
  <div class="form-group col-md-6">
    <label style="color:black">Date</label>
    <input type="date" class="form-control" id="date" name="date"  style="background-color:lightpink">
  </div>
  </div>
  
 
  <div class="form-row"
  <div class="form-group col-md-6">
    <span id="result"style="color:black">*</span>
    <input type="text" class="form-control" id="hos" name="hos" placeholder="hospital" style="background-color:lightpink">
  </div>
  </div>
  
  
  <button type="submit" value="save" name="btn" id="save" class="btn btn-secondary">Save</button>-->
   
   