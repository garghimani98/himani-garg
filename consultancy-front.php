<?php include_once("session.php"); ?>

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
                    $('#cprev').attr('src', e.target.result);
                }
                reader.readAsDataURL(file.files[0]);
            }
        }
        $(document).ready(function() {
          
           
         
               /* $pid=$("#cuid").val();
                $.getJSON("json-fetch-all-doctors.php?pid="+$pid, function(jsonArray) {
                    //alert(JSON.stringify(jsonArray));

                    for (i = 0; i < jsonArray.length; i++) {
                        //alert(jsonArray[i].tid);
                        $("#doctor").append("<option value='" + jsonArray[i].doctor + "'></option>");
                    }

                });*/
            
             /*$("#fetch").click(function() {
                // alert();
                $uid = $("#cuid").val();
                $.getJSON("json-fetch-one-recordh.php?tid=" + $uid, function(jsonArray) {
                    //alert(JSON.stringify(jsonArray));
                    if (jsonArray.length != 0) {
                        
                        
                        
                    }*/
            $("#fetch").click(function(){
               // fillAlldoctorIds(); 
                  $pid=$("#cuid").val();
                $.getJSON("json-fetch-all-doctors.php?cuid="+$pid, function(jsonArray) {
                   // alert(JSON.stringify(jsonArray));

                 
                        $("#doctor").append("<option value='" + jsonArray[0].doctor + "'>"+ jsonArray[0].doctor +"</option>");
                     $("#doctor").val(jsonArray[0].doctor);
                 $("#hdn").val(jsonArray[0].path);
                           $("#cprev").attr('src', jsonArray[0].path);
                     $("#cdate").val(jsonArray[0].cdate);
                     $("#inst").val(jsonArray[0].instructions);
                        $("#ndate").val(jsonArray[0].next_date_of_con);  
                      
                    });

                });
            });

    
    </script>
</head>



<body style="background-attachment:fixed;background-size:100%">
   <div class="container" style="opacity:0.8">
   <?php include_once("header.php"); ?>
    <center>
       
        <form action="consultancy-process.php" method="post" enctype="multipart/form-data" style="background-color:skyblue"  name="cfrm">
           <input type="hidden" id="hdn" name="hdn">
          
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">Uid</label>
      <input type="text" class="form-control" id="cuid" name="cuid" placeholder="name" value=<?php echo $_SESSION["uid"]; ?> style="background-color:lightpink">
         </div>
        <div class=" col-md-1" style="margin-top:30px">
        <button type="button"   value="fetch" name="fetch" id="fetch" class="btn btn-secondary">Fetch</button>
        </div>
  
    </div>
   
      
       <center>
     <div class="form-row">
    <div class="form-group col-md-12">
  
      <label style="color:black  margin-top:-10px">Doctor</label>
          <!--<input list="doctor" name="tid" id="tid" style="background-color:lightpink">
                <select id="doctor" name="tid">
                    <option>select</option>
           </select>-->
      <input list="doctor" name="tid" id="tid" style="background-color:lightpink">
      <datalist id="doctor" name="tid">
       <option>select</option>
        </datalist>
      
       
    </div>
  </div>
            </center>
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Date</label>
    <input type="date" class="form-control" id="cdate" name="cdate" placeholder="date" style="background-color:lightpink">
  </div>
   </div>
   
    <div class="custom-file">
    <img id="cprev" width="100" height="100"  style="margin-top:50px;border-color:black">
    <input type="file" class="custom-file-input" name="profile" id="validatedCustomFile" onchange="showpreview(this);" >
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
   
  </div>
   
   <div class="form-row">
  <div class="form-group col-md-12">
    <label style="color:black" >Instructions by doctor</label>
      <textarea row="4" col="50" id="inst" name="inst"  style="background-color:lightpink">
                        </textarea>
  </div>
</div>
    
    
     <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Next Date Of Consultation</label>
    <input type="date" class="form-control" id="ndate" name="ndate" placeholder="" style="background-color:lightpink">
  </div>
  </div>
 
  <button type="submit" value="save" name="btn" id="csave" class="btn btn-secondary">Save</button>
    <button type="submit"  value="update" name="btn" id="update" class="btn btn-secondary">update</button>
   
                
        </form>
    </center>
    </div>
 </body>
</html>








<!--<input type="hidden" id="hdn" name="hdn">
          
 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label style="color:black">Uid</label>
      <input type="text" class="form-control" id="cuid" name="cuid" placeholder="name" value=<?php echo $_SESSION["uid"]; ?>, style="background-color:lightpink">
       <button  value="fetch" name="fetch" id="fetch" class="btn btn-secondary">Fetch</button>
    </div>
    <div class="form-group col-md-6">
      <label style="color:black">doctor</label>
          <input list="doctor" name="tid" id="tid" style="background-color:lightpink">
                <datalist id="doctor" name="tid">
                    <option value="select"></option>
           </datalist>
      
      
    </div>
  </div>
  
  
  <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Date</label>
    <input type="text" class="form-control" id="cdate" name="cdate" placeholder="date" style="background-color:lightpink">
  </div>
   </div>
   
    <div class="custom-file">
    <img id="cprev" width="100" height="100"  style="margin-top:50px;border-color:black">
    <input type="file" class="custom-file-input" name="profile" id="validatedCustomFile" onchange="showpreview(this);" required>
    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
   
  </div>
   
   <div class="form-row">
  <div class="form-group col-md-12">
    <label style="color:black" >Instructions by doctor</label>
      <textarea row="4" col="50" id="inst" name="inst"  style="background-color:lightpink">
                        </textarea>
  </div>
</div>
    
    
     <div class="form-row">
  <div class="form-group col-md-6">
    <label style="color:black">Next Date Of Consultation</label>
    <input type="date" class="form-control" id="ndate" name="ndate" placeholder="" style="background-color:lightpink">
  </div>
  </div>-->
 <!-- <div class="form-group col-md-6">
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
  -->
 <!-- <button type="submit" value="save" name="btn" id="csave" class="btn btn-secondary">Save</button>
    <button type="submit"  value="update" name="btn" id="update" class="btn btn-secondary">update</button>
   -->