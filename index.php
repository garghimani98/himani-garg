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
        $(document).ready(function() {

            $(document).ajaxStart(function() {
                $("#waitt").show();
            });

            $(document).ajaxStop(function() {
                $("#waitt").hide();
            });
            
             $("#signup").click(function(){
                  $qs2=$("#sfrm").serialize();
               //  alert($qs2);
                $url="ajax-signup-process.php?"+$qs2;
                $.get($url,function(response){       
                    $("#sresult").html(response);      
                    });
             });
            
            $("#suid").blur(function(){
                $suid=$("#suid").val();
                $.get("ajax-check-uid.php?suid="+$suid,function(data,status)
                      {
                        $("#sres").html(data);
                });
                
            });
               $("#login").click(function(){
                $qs=$("#lfrm").serialize();
                // alert($qs);
                $url="ajax-check-luid.php?"+$qs;
                $.get($url,function(response){
                    if(response=="patient")
                        location.href="patient-dashboard.php";
                    else{
                 if (response=="doctor")
                     location.href="doctor-profile.php";
                    else
                        $("#lresult").html(response);}
                       
                                           });
             });
            
             $("#forgot").click(function(){
                $luid=$("#luid").val();
               
               /*  $.get("ajax-recover-password.php?luid="+$luid,function(data,status)
                      {
                       // $("#lres").html(data);
                     $("#lpwd").val(data);
                });*/
                 $.get("forgot-password-sms.php?luid="+$luid,function(data,status){
                     alert(data);
                 });
                
            });
            $("#smobile").blur(function(){
                $smobile=$("#smobile").val();
               $r=/^[7-9]{1}[0-9]{9}$/;
			$bool=$r.test($smobile);
			
			if($bool==true)
         {
             $("#tres").html("correct");
         }
          else
            {
            $("#tres").html("sorrryyy....");
     }
                
            });
            
        });

    </script>
    <style type="text/css">
        #waitt {

            display: none;
        }

    </style>
</head>

<body style="background-image:url(images/story-bg.jpg);background-attachment:fixed;background-postion:center">

   <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <div class="container"  >

        <div class="row" style="width: auto;height:150px">

            <div class="col-md-12" style="background-color:chocolate;color: aliceblue;opacity:0.6">
               
                <div class="logo" style="margin-left:10px;margin-top:10px"><img src="bootstrap/pics/new4.png" ></div>
                
                <div class="text" style=" margin-top:-40px ">
                    <center>
                        <h1>MEDIASSIST</h1>
                    </center>
                </div>
                
            </div>
            
        </div>

       
        <div id="navbar">
           
            <div class="col-md-12 bg-warning" style="opacity:0.8">
               
                <nav class="navbar navbar-expand-lg navbar-dark bg-warning">

                    <nav class="navbar navbar-dark bg-danger" >
                       
                        <a class="navbar-brand" href="#">
    <img src="images/download%20(3).jpg"  width="40" height="40" class="d-inline-block align-top" alt="">
    
  </a>
                    </nav>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                       
                        <ul class="navbar-nav mr-auto">
                           
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">Signup <span class="sr-only">(current)</span>   </a>
                            </li>
                            
                            <li class="nav-item active">
                                <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">Login <span class="sr-only">(current)</span>   </a>
                            </li>
                            
                              
                            <li class="nav-item active">
                                <a class="nav-link" href="doctor-details.php" >Doctor details <span class="sr-only">(current)</span>   </a>
                            </li>
                                                       
                            <li class="nav-item dropup">
                                <a class="nav-link dropup-toggle" href="#" id="navbarDropup" role="button" data-toggle="dropup" aria-haspopup="true" aria-expanded="false">About Us</a>
                                <div class="dropup-menu" aria-labelledby="navbarDropup">
                                    <a class="dropup-item" href="#db">Developed By</a>
                                    <div class="dropup-divider"></div>
                                    <a class="dropup-item" href="#ug">Under Guidance</a>
                                </div>
                            </li>
                            
                            
                             <li class="nav-item dropup">
                                <a class="nav-link dropup-toggle" href="#" id="navbarDropup" role="button" data-toggle="dropup" aria-haspopup="true" aria-expanded="false">Reach Us</a>
                                <div class="dropup-menu" aria-labelledby="navbarDropup">
                                    <a class="dropup-item" href="#lc">Location</a>
                                    <div class="dropup-divider"></div>
                                    <a class="dropup-item" href="#fb">Facebook Page</a>
                                </div>
                            </li>

                            
                        </ul>

                    </div>
                </nav>
            </div>

        </div>

  
    
    
     <div class="row" >

            <div class="col-md-12" >
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" height="fixed">
  <div class="carousel-inner" >
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/collage3.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/collage2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/collage1.jpg" alt="Third slide">
    </div>
  </div>
</div>
            
         </div>
        </div>
    
     <div class="row">
            <div class="col-md-12 bg-danger ">
                <div class="row " style="margin-top:30px ">
                    <div class="col-md-4 ">
                   <div class="card ">
                            <img class="card-img-top " src="images/download%20(15).jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy;color:purple">Record-sugar and blood pressure</h5>
                                <p class="card-text "> If you have diabetes,self-testing your blood sugar can be an important tool in managing your treatment plan.</p>

                            </div>

                        </div>
                        
                    </div>
               
              
                    <div class="col-md-4 ">
                   <div class="card ">
                            <img class="card-img-top " src="images/images.jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy;color:purple">Appointment details & doctor consultations</h5>
                                <p class="card-text "> It's also important for managing hypertension reducing the risk of complications.high bp means more health issuesand heart problems
                                </p>
                       </div>
                        </div>
                    </div>
                                
                    <div class="col-md-4 ">
                   <div class="card ">
                            <img class="card-img-top " src="images/images%20(1).jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy;color:purple">Doctor profiles</h5>
                                <p class="card-text ">A. Blood pressure is important because the higher your blood pressure is, the higher your risk of health and heart problems.</p>

                            </div>

                        </div>
                        
                    </div>
                </div>
         </div>
        </div>
            
             
                <div class="row">
            <div class="col-md-12 bg-danger ">
                <div class="row " style="margin-top:30px ">
              
                    <div class="col-md-4 ">
                   <div class="card ">
                            <img class="card-img-top " src="images/download%20(7).jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy;color:purple">Chart wise Analysis</h5>
                                <p class="card-text ">A consultant physician is a senior doctor who practises in one of the medical specialties.
</p>

                            </div>

                        </div>
                        
                    </div>
                    
                     <div class="col-md-4 ">
                   <div class="card ">
                            <img class="card-img-top " src="images/download%20(16).jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy;color:purple">Reviews for doctors</h5>
                                <p class="card-text ">The benefits of scheduling staff and patients and other booking individuals-time savings.High bp means more health issues and heart problems ..
</p>

                            </div>

                        </div>
                        
                    </div>
                    
                    
                    <div class="col-md-4 ">
                   <div class="card ">
                            <img class="card-img-top " src="images/download%20(14).jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy;color:purple">Daily maintainence of records</h5>
                                <p class="card-text "> To keep it that way, use these tips to avoid developing high blood pres.High blood pres can lead to heart attack and stroke.........
</p>

                            </div>

                        </div>
                        
                    </div>
                    
                </div>
         </div>
        </div>
        <div class="row" style="background-color:red">
        <div class="col-md-12">
           <center>
            <h2>About us</h2>
            </center>
            </div>
        </div>
        
         <div class="row"  style="background-color:skyblue">
        <div class="col-md-6" id="db">
            
            <div class="row" style="background-color:blue ;color:black">
        <!--<div class="col-md-6">-->
            <center>
                <h2>About developer</h2>
             </center
         <!-- </div>-->
            </div>
             
            <center>
                
               <img src="images/IMG_20171008_030916_458.JPG" style="height:100px;box-shadow:2px 2px 2px blue" >
           
               </center>
                 <div class="card-body" style="background-color:light grey;color:purple">
                     <p class="card-text">Himani garg(angularJS developer)<br>pursuing btech in computer science from thapar university.I am always curious to learn about new technologies and new .I love to do programming in JAVA and C++...</p>
                   </div>
              
           
             </div>
             
              <div class="col-md-6" id="ug">
              <!--  <div class="row" style="background-color: green">
       -->
               <center>
                <h2 style="color:brown;font-family:fantasy;background-color: green">Under the Guidance</h2>
                    </center>
           <!-- </div>-->
             
             <center>
        
                
               <img src="images/sir_project.png" style="box-shadow:2px 2px 2px blue;border-radius:50%">
               
                 </center>
             
                 <div class="card-body" style="color:purple">
                     <p class="card-text ">Rajesh K. Bansal (SCJP-Sun Certified Java Programmer)
17 Years experience in Training & Development. Founder of realJavaOnline.com, loves coding in Java(J2SE, J2EE), C++ AngularJS, Android.</p>
                   </div>
              
                                        
             
        </div>
        </div>
        <div class="row" style="background-color:red">
        <div class="col-md-12">
           <center>
            <h2>Reach us</h2>
            </center>
            </div>
        </div>
    
    <div class="row" >
        <div class="col-md-6" id="lc">
          <center>
           <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124399.31426244756!2d77.5599113261604!3d13.005167633247291!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbanglore+coaching+education!5e0!3m2!1sen!2sin!4v1531244888950" frameborder="0" style="border:0;height:100%;width:100%" allowfullscreen></iframe> 
            </center>
            
        </div>
        <div class="col-md-6" id="fb">
           <center>
            <div class="fb-page" data-href="https://www.facebook.com/Medicist-1825016337808142/?modal=admin_todo_tour" data-tabs="timeline"  data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Medicist-1825016337808142/?modal=admin_todo_tour" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Medicist-1825016337808142/?modal=admin_todo_tour">Medicist</a></blockquote></div>
            </center>
        </div>
        
    </div>
    <div class="row" style="width: auto;height:60px">

            <div class="col-md-12" style="background-color:plum; color:aliceblue">
               <center>
                <!--<div class="text" style=" margin-top:10px ;float:left ;font-family: fantasy">-->

    <h3 style="margin-top:10px;text-shadow:2px 2px 2px blue">COPYRIGHTS</h3>
                    
                 

               <!-- </div>-->
                </center>
            </div>
        </div>
     </div> 
     <div class="modal fade" tabindex="-1" role="dialog" id="signup-modal">
       
        <div class="modal-dialog" role="document">
           
            <div class="modal-content">
               
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">SIGNUP FORM</h5><img id="waitt" src="images/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                
                <div class="modal-body">
                   
                    <form  method="get" id="sfrm">
                          
                        <div class="form-group">
                          <label for="formGroupExampleInput">User id</label><span class="text-danger" id="sres">*</span>
                            <input type="text" class="form-control" id="suid" name="suid" placeholder="User id">
                        </div>
                       
                         <div class="form-group">
                             <label for="formGroupExampleInput">Password</label>
                            <input type="text" class="form-control" id="spwd" name="spwd" placeholder="Password">
                        </div>
                      
                         <div class="form-group">
                             <label for="formGroupExampleInput">Mobile</label><span class="text-danger" id="tres">*</span>
                            <input type="text" class="form-control" id="smobile" name="smobile" placeholder="mobile" >
                        </div>
                        <div class="form-group">
                             <label for="formGroupExampleInput">User type</label>
                          

                        <input type="radio"  name="pay" id="patient" checked value="patient">PATIENT
                        <input type="radio"  name="pay"  id="doctor" value="doctor">DOCTOR
                            
                        </div>
                        <center><span id="sresult" class="text-primary"></span></center>     
                        
                <div class="modal-footer bg-primary">
                <center>
                    <button type="button" class="btn bg-white" name="btn" id="signup" value="signup">Signup</button>
                   </center>
                </div>
                </form>
            </div>
        </div>
    </div>
 </div>
   
   
    <div class="modal fade" tabindex="-1" role="dialog" id="login-modal">
       
        <div class="modal-dialog" role="document">
           
            <div class="modal-content">
               
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">LOGIN FORM</h5><img id="waitt" src="images/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                
                <div class="modal-body">
                   
                    <form name="lfrm" id="lfrm">
                          
                        <div class="form-group">
                          <label for="formGroupExampleInput">User id</label><!--<span class="text-danger" id="lres">*</span>-->
                            <input type="text" class="form-control" id="luid" name="luid" placeholder="User id">
                        </div>
                       
                         <div class="form-group">
                             <label for="formGroupExampleInput">Password</label>
                            <input type="password" class="form-control" id="lpwd" name="lpwd" placeholder="Password">
                        </div>
                    
                        <center><span id="lresult" class="text-primary"></span></center>
               
                <div class="modal-footer bg-primary">
                
                     <button type="button" class="btn bg-white" name="btn" id="login" value="login">Login</button>
                    <button type="button" class="btn bg-white" name="btn" id="forgot" value="forgot">Forgot password</button>
                   
                </div>
                </form>
            </div>
        </div>
    </div>
 </div>
   
   
   
    <div class="modal fade" tabindex="-1" role="dialog" id="doctor-modal">
       
        <div class="modal-dialog" role="document">
           
            <div class="modal-content">
               
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">DOCTOR PROFILE</h5><img id="waitt" src="images/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                
                <div class="modal-body">
                   
                    <form action="doctor-process.php" method="post"  enctype="multipart/form-data" name="dfrm" id="dfrm">
                           <input type="hidden" name="hdn" id="hdn">
                       
                           
                        
                          <div class="form-group">
                          <label for="formGroupExampleInput">Profile Pic</label><span class="text-danger" id="lres">*</span>
                          <img id="prev" width="100" height="100" style="margin-top:20px"><br>
                           <input type="file" name="profile" onchange="showpreview(this);" class="form-control">
                        </div>
                          
                        <div class="form-group">
                          <label for="formGroupExampleInput">Doctor Name</label><span class="text-danger" id="lres">*</span>
                           <input type="text" name="dname" id="dname" class="form-control">
                        </div>
                       
                         <div class="form-group">
                             <label for="formGroupExampleInput">Qualification</label>
                            <input type="text" name="qual" id="qual" class="form-control">
                        </div>
                     <div class="form-group">
                             <label for="formGroupExampleInput">Mobile number</label>
                                                    <input type="text" name="mob" id="mob" class="form-control">

                        </div>
                         <div class="form-group">
                             <label for="formGroupExampleInput">Experience</label>
                            <input type="text" name="exp" id="exp" class="form-control">
                        </div>
                         <div class="form-group">
                             <label for="formGroupExampleInput">Hospital</label>
                           <input type="text" name="hos" id="hos" class="form-control">
                        </div>
                         <div class="form-group">
                             <label for="formGroupExampleInput">Specialization</label>
                         <input type="text" name="spec" id="spec" class="form-control">
                        </div>
                        <div class="form-group">
                             <label for="formGroupExampleInput">Hospital Address</label>
                            <input type="text" name="add" id="add" class="form-control">
                        </div>
                        <div class="form-group">
                             <label for="formGroupExampleInput">City</label>
                           <input type="text" name="city" id="city" class="form-control">
                        </div>
                        <div class="form-group">
                             <label for="formGroupExampleInput">Other Information</label>
                            <textarea row="5" column="60" id="oi" name="oi" class="form-control"></textarea>
                        </div>
                        <center><span id="lresult" class="text-primary"></span></center>
               
                <div class="modal-footer bg-primary">
                
                     <button type="submit" class="btn bg-white" name="btn" id="dsave" value="save">Save</button>
                    <button type="submit" class="btn bg-white" name="btn" id="dupdate" value="update">Update</button>
                   
                </div>
                </form>
            </div>
        </div>
    </div>
 </div>                                                               
                                
                                   
                                    
</body>

</html>
