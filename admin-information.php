
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COLLEGES.......</title>
    <script type="text/javascript" src="bootstrap/js/angular.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    
    <script src="bootstrap/js/jquery-1.9.1.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript">
         var myapp = angular.module("app", []);
        myapp.controller("mycontroller", function($scope, $http) {
                    $scope.deleteRecord = function(uid) {
                $http.get("json-del-record-patients.php?uid=" + uid).then(shanti, noshanti);

                function shanti(jsonArray) {

                    alert(jsonArray.data);
                    $scope.doFetchJson();
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }
            }
                   /*  $scope.selRecord;
                     $scope.showValue = function() {
                alert($scope.selRecord.pid + "  " + $scope.selRecord.cdate + "  " + $scope.selRecord.next_date_of_con+" " +$scope.selRecord.path);
            }*/
                      $scope.json;
            $scope.doFetchJson = function() {
                $http.get("json-fetch-all-patients.php").then(shanti, noshanti);
                    
                function shanti(jsonArray) {
                    //alert(JSON.stringify(response.data));
                    $scope.json = jsonArray.data;
                    
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }

            }
            
            
              $scope.deleteRecordd = function(name) {
                $http.get("json-del-record-doctors.php?name=" + name).then(ok, notok);

                function ok(jsonArray) {

                    alert(jsonArray.data);
                    $scope.doFetchJson();
                }

                function notok(jsonArray) {
                    alert(jsonArray.data);
                }
            }
                   /*  $scope.selRecord;
                     $scope.showValue = function() {
                alert($scope.selRecord.pid + "  " + $scope.selRecord.cdate + "  " + $scope.selRecord.next_date_of_con+" " +$scope.selRecord.path);
            }*/
                      $scope.jsond;
            $scope.doFetchJsond = function() {
                $http.get("json-fetch-all-doctors-admin.php").then(ok, notok);
                    
                function ok(jsonArray) {
                    //alert(JSON.stringify(response.data));
                    $scope.jsond = jsonArray.data;
                    
                }

                function notok(jsonArray) {
                    alert(jsonArray.data);
                }

            }
        });
        </script> 
    
</head>

<body ng-app="app" ng-controller="mycontroller">

    <div class="container">

  
      
        <div class="row" >
<div class="col-md-6" style="background-color:bisque;color: black">
        
                  <div class="form-group">
    <label for="formGroupExampleInput">Doctors table</label>
   
    <hr>
         <p>
            <input type="button" ng-click="doFetchJsond();" value="fetch doctors from table">
        </p>
        <table  border=1>
            <tr>
                <th>Sr. No</th>
                  <th>Name</th>
                <th>Qualification</th>
                <th>Mobile</th>
                <th>Experience</th>
                 <th>City</th>
            </tr>
            <tr ng-repeat="doctor in jsond">
                <td>{{$index+1}}</td>
                <td>{{doctor.name}}</td>
                <td>{{doctor.qual}}</td>
                <td>{{doctor.mobile}}</td>
                <td>{{doctor.exp}}</td>
                <td>{{doctor.city}}</td>
                
                
                   <td> <input type="button" ng-click="deleteRecordd(doctor.name);" value="delete doc"></td>
            </tr>
        </table>

                        
                  
                </div>
                  </div>
                  
                  
                  
                  <div class="col-md-6" style="background-color:bisque;color: black">
        
                  <div class="form-group">
    <label for="formGroupExampleInput">Patients table</label>
   
    <hr>
         <p>
            <input type="button" ng-click="doFetchJson();" value="fetch patients from table">
        </p>
        <table  border=1>
            <tr>
                <th>Sr. No</th>
                  <th>Name</th>
                <th>Mobile</th>
                <th>Address</th>
                <th>City</th>
                 <th>Email</th>
            </tr>
            <tr ng-repeat="patient in json">
                <td>{{$index+1}}</td>
                <td>{{patient.name}}</td>
                <td>{{patient.mobile}}</td>
                <td>{{patient.address}}</td>
                <td>{{patient.city}}</td>
                <td>{{patient.email}}</td>
               
                
                   <td> <input type="button" ng-click="deleteRecord(patient.uid);" value="delete pat"></td>
            </tr>
        </table>

                        
                  
                </div>
                  </div>
                 
                  
        </div>
    </div>
</body>

</html>
