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
                   /* $scope.selRecord;
                    $scope.showValue = function() {
                        alert($scope.selRecord.uid + "  " + $scope.selRecord.pwd + "  " + $scope.selRecord.mob);
                    }*/
    
                    
                    
                    
                     $scope.json;
            $scope.doFetchJson = function() {
                $http.get("json-fetch-doctordetails.php").then(shanti, noshanti);
                    
                function shanti(jsonArray) {
                    //alert(JSON.stringify(response.data));
                    $scope.json = jsonArray.data;
                    
                }

                function noshanti(jsonArray) {
                    alert(jsonArray.data);
                }

            }
        })
            

    </script>
</head>





<body ng-app="app" ng-controller="mycontroller">
 
        <div class="container" style="margin-top:20px;background-color:azure">
           <center>
            <div class="row">
<div class="col-md-12">
                Filter:<input type="text" ng-model="hint">
                <p>
                    <input type="button" ng-click="doFetchJson();" value="fetch json from table" style="margin-left:-40px" class="btn btn-primary">
                </p>
            </div>
            </div>
            </center>
             <center>
            <div class="row">
             
                <div class="col-md-6" ng-repeat="doctor in json| filter:hint" >
                    <div class="card" style="">
                        <img class="card-img-top" src="{{doctor.pic}}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{doctor.name}}</h5>
                            <p class="card-text">
                                <p>{{doctor.qual}}</p>
                                <p>{{doctor.mobile}}</p>
                                <p>{{doctor.exp}}</p>
                                <p>{{doctor.hospital}}</p>
                                <p>{{doctor.spec}}</p>
                                <p>{{doctor.address}}</p>
                                <p>{{doctor.city}}</p>
                                <p>{{doctor.otherdetails}}</p>


                            </p>
                            
                        </div>
                    </div>

                </div>
           
                </div>
               </center>
            </div>
        
   
</body>

</html>
