<?php
include_once("session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COLLEGES.......</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <script  src="bootstrap/js/angular.min.js"></script>
   
    
    <script src="bootstrap/js/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
        
         var myapp = angular.module("app", []);
        myapp.controller("mycontroller", function($scope, $http) {
                    $scope.deleteRecord = function(uid) {
                $http.get("json-del-record.php?uid=" + uid).then(shanti, noshanti);

                function shanti(jsonArray) {

                    alert(jsonArray.data);
                    $scope.doFetchJson();
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }
            }
                     $scope.selRecord;
                     $scope.showValue = function() {
                alert($scope.selRecord.pid + "  " + $scope.selRecord.cdate + "  " + $scope.selRecord.next_date_of_con+" " +$scope.selRecord.path);
            }
                      $scope.json;
            $scope.doFetchJson = function() {
                $http.get("json-fetch-all.php").then(shanti, noshanti);
                    
                function shanti(jsonArray) {
                    //alert(JSON.stringify(response.data));
                    $scope.json = jsonArray.data;
                    
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }

            }
        });

 $(document).ready(function() {

            $(document).ajaxStart(function() {
                $("#waitt").show();
            });

            $(document).ajaxStop(function() {
                $("#waitt").hide();
            });
            
             $("#psave").click(function(){
                  $qs2=$("#pfrm").serialize();
               //  alert($qs2);
                $url="ajax-patient-save-process.php?"+$qs2;
                $.get($url,function(response){       
                    $("#presult").html(response);      
                    });
             });
     
       
             $("#pupdate").click(function(){
                 $uid=$["puid"];
                  $qs3=$("#pfrm").serialize();
                // alert($qs3);
                $url="ajax-patient-update-process.php?"+$qs3;
                $.get($url,function(response){       
                    $("#presult").html(response);      
                    });
                 /* $.get("ajax-patient-update-process.php?puid="+$uid,function(data,status)
                      {
                        $("#presult").html(data);
                });*/
                
            });
             
    
     $("#pfetch").click(function(){
                $suid=$("#puid").val();
               
                 $.getJSON("ajax-recover-patientname.php?puid="+$suid,function(jsonArray){
                    if (jsonArray.length != 0) {
                      
                       // $("#lres").html(data);name and mobile are table fiels not the names given to different text fieldss
                     $("#pname").val(jsonArray[0].name);
                     $("#pmobile").val(jsonArray[0].mobile);
                        $("#paddress").val(jsonArray[0].address);
                        $("#pcity").val(jsonArray[0].city);
                        $("#pemail").val(jsonArray[0].email);
                        $("#dis").val(jsonArray[0].disease);
                         $("#pgender").val(jsonArray[0].gender);
                    }
                });
                
            });
     
      $("#auid").blur(function(){
          
       $pid=$("#auid").val();
                $.getJSON("json-fetch-all-doctors-apsc.php?auid="+$pid, function(jsonArray) {
                   // alert(JSON.stringify(jsonArray));

                 
                        $("#adoctor").append("<option value='" + jsonArray[0].doctor + "'>"+ jsonArray[0].doctor +"</option>");
                });
      });
     
     
      $("#pmobile").blur(function(){
                $pmobile=$("#pmobile").val();
               $r=/^[7-9]{1}[0-9]{9}$/;
			$bool=$r.test($pmobile);
			
			if($bool==true)
         {
             $("#mres").html("correct");
            
         }
          else
            {
           
            $("#mres").html("sorrryyy....");
    
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

<body ng-app="app" ng-controller="mycontroller"style="background-image:url(bootstrap/pics/body-bg.jpg)">

    <div class="container">

      <?php include_once("header.php"); ?>
        <div class="row" >

            <div class="col-md-12" style="background-color:bisque;color: black">
            </div>
        </div>
        <div class="row" style="opacity:0.8">

            <div class="col-md-12" style="background-color:burlywood;color: black">
            <div class="text" style=" margin-top:10px  ;font-family: fantasy">
<center>
                    <h1>Patient-Dashboard</h1><br>
                </center>
            </div>
        </div>
            </div>

        <div class="row"  style="opacity:0.7">
            <div class="col-md-12 bg-danger ">
                <div class="row " style="margin-top:30px ">
                    <div class="col-md-3 ">
                       <a href="sugar-front.php"><div class="card ">
                            <img class="card-img-top " src="images/download%20(4).jpg" style="height:140px ">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">Record-sugar</h5>
                                <p class="card-text "> If you have diabetes,self-testing your blood sugar can be an important tool in managing your treatment plan.</p>

                            </div>

                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ">
                       <a href="bp-front.php"> <div class="card ">
                            <img class="card-img-top " src="images/download%20(6).jpg" style="height:140px">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">Blood Pressure</h5>
                                <p class="card-text ">It's also important for managing hypertension that is under control and reducing the risk of complications.</p>

                            </div>

                        </div>
                        </a>
                    </div>
                  
                    <div class="col-md-3 ">
                       <a href="highcharts-sugarrecord.php"> <div class="card ">
                            <img class="card-img-top " src="images/images%20(1).png" style="height:140px">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">Sugar chart</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>

                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ">
                       <a href="highcharts-bprecord.php"> 
                           <div class="card ">
                            <img class="card-img-top " src="images/download.png"  style="height:140px">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">BP Chart</h5>
                                <p class="card-text ">A. Blood pressure is important because the higher your blood pressure is, the higher your risk of health problems</p>

                            </div>

                        </div>
                        </a>
                    </div>

                </div>
                <div class="row " style="margin-top:30px ; opacity:0.7">
                    <div class="col-md-3 ">
                       <a href="consultancy-front.php"> <div class="card ">
                            <img class="card-img-top " src="images/download%20(7).jpg">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">Doc Consultancy</h5>
                                <p class="card-text ">A consultant physician is a senior doctor who practises in one of the medical specialties.

                            </div>

                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#appointment-scheduling-modal"><div class="card ">
                            <img class="card-img-top " src="images/download%20(8).jpg" >
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">App Scheduling</h5>
                                <p class="card-text ">The benefits of scheduling staff and patients and other booking individuals-time. </p>

                            </div>

                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ">
                      <a href="review-front.php">  <div class="card ">
                            <img class="card-img-top " src="images/images5.jpg"  style="height:150px">
                            <div class="card-body ">
                                <h5 class="card-title " style="font-family: fantasy">Doctor reviews</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>

                        </div>
                        </a>
                    </div>
                    <div class="col-md-3 ">
                       <a  class="nav-link" href="#" data-toggle="modal" data-target="#patient-profile-modal"> <div class="card ">
                            <img class="card-img-top " src="images/download%20(9).jpg" style="height:150px">
                            <div class="card-body " style="border: 2px black solid color:pink font family:cursiva ">
                                <h5 class="card-title " style="font-family: fantasy">Patient Profile</h5>
                                <p class="card-text ">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

                            </div>

                        </div>
                        </a>
                    </div>

                </div>


            </div>
        </div>
 <div class="row" style="opacity:0.7">

            <div class="col-md-12" style="background-color:plum; color:aliceblue">
               <center>
                <!--<div class="text" style=" margin-top:10px ;float:left ;font-family: fantasy">-->

    <h5 style="text-shadow:2px 2px 2px blue">COPYRIGHTS</h5>
                    
                 

               <!-- </div>-->
                </center>
            </div>
        </div>


    </div>
    
    
    
     <div class="modal fade" tabindex="-1" role="dialog" id="patient-profile-modal">
        <div class="modal-dialog" role="document">
           <div class="modal-content">
             <div class="modal-header bg-danger">
                    <h5 class="modal-title">PATIENT PROFILE</h5><img id="waitt" src="images/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                 <div class="modal-body">
                   
                    <form  method="get" id="pfrm">
                          
                        <div class="form-group">
                          <label for="formGroupExampleInput">Patient id</label><span class="text-danger" id="pres">*</span>
                            <input type="text" class="form-control" id="puid" name="puid" placeholder="User id" readonly value=<?php echo $_SESSION["uid"]; ?>>
                             <button type="button" class="btn bg-white" name="fetch" id="pfetch" value="fetch">Fetch</button>
                        </div>
                       
                         <div class="form-group">
                             <label for="formGroupExampleInput">Name</label>
                            <input type="text" class="form-control" id="pname" name="gname" placeholder= name_in_capitals>
                        </div>
                      
                         <div class="form-group">
                             <label for="formGroupExampleInput">Mobile</label><span class="text-danger" id="mres">*</span>
                            <input type="text" class="form-control" id="pmobile" name="pmobile" >
                        </div>
                        
                        
                         <div class="form-group">
                             <label for="formGroupExampleInput">Address</label>
                            <input type="text" class="form-control" id="paddress" name="paddress" >
                        </div>
                        
                        
                         <div class="form-group">
                             <label for="formGroupExampleInput">Email</label>
                            <input type="email" class="form-control" id="pemail" name="pemail"  >
                        </div>
                        
                           
                         <div class="form-group">
                             <label for="formGroupExampleInput">City</label>
                            <input type="text" class="form-control" id="pcity" name="pcity"  >
                        </div>
                        
                            <div class="form-group">
                             <label for="formGroupExampleInput">Any Disease</label>
                                <textarea id="dis" rows="2" cols="40" name="dis"></textarea>
                        </div>
                        
                         
                        <div class="form-group">
                             <label for="formGroupExampleInput">Gender</label>
                     
                            <select id="pgender" name="pgender">
                                <option value="select">Select</option>
                                 <option value="male">Male</option>
                                  <option value="female">Female</option>
                            </select>
                        </div>
                        <center><span id="presult" class="text-primary"></span></center>     
                        
                <div class="modal-footer bg-primary">
                <center>
                    <button type="button" class="btn bg-white" name="btn" id="psave" value="save">Save</button>
                    <button type="button" class="btn bg-white" name="btn" id="pupdate" value="update">Update</button>
                   </center>
                </div>
                </form>
            </div>
        </div>
    </div>
 </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="appointment-scheduling-modal">
       <div class="modal-dialog" role="document">
         <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">APPONTMENT SCHEDULES</h5><img id="waitt" src="images/loading9.gif">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                    </button></div>
               <div class="modal-body">
                   <form  method="get" id="afrm">
                              <div class="form-group">
                       <label for="formGroupExampleInput">Patient id</label><span class="text-danger" id="pres">*</span>
                            <input type="text" class="form-control" id="auid" name="auid" placeholder="User id" readonly value=<?php echo $_SESSION["uid"]; ?>>
                            
                        </div>
                      <div class="form-group">
                             <label for="formGroupExampleInput">doctor</label>
                           <select id="adoctor" class="form-control">
                               <option value="select">Select</option>
                             </select>
                             
                        </div>
                         <hr>
                          <div class="form-group">
    <label for="formGroupExampleInput">Appointment table</label>
   
    <hr>
         <p>
            <input type="button" ng-click="doFetchJson();" value="fetch json from table">
        </p>
        <table  border=1>
            <tr>
                <th>Sr. No</th>
                  <th>patient id</th>
                <th>current appointment</th>
                <th>Next appointment</th>
                <th>Reference to precription</th>
                 <th>delete button</th>
            </tr>
            <tr ng-repeat="consultancy in json | filter:hint">
                <td>{{$index+1}}</td>
                <td>{{consultancy.pid}}</td>
                <td>{{consultancy.cdate}}</td>
                <td>{{consultancy.next_date_of_path}}</td>
                <td><a href={{consultancy.path}} target="_blank" >   {{consultancy.path}}</a></td>
                
                   <td> <input type="button" ng-click="deleteRecord(consultancy.pid);" value="delete"></td>
            </tr>
        </table>

                        
                  
                </div>
                  
                   </form>
            </div>
         </div>
    </div>
        </div>
    
</body>

</html>
