<?php
  include_once("session.php");
?>


<html>
<head>

<title>Untitled Document</title>
<script  type="text/javascript" src="bootstrap/js/jquery-1.9.1.js"></script>
<script src="bootstrap/js/highcharts.js"></script>
 <script src="bootstrap/css/bootstrap.css"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
 <script src="bootstrap/js/exporting.js"></script>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<script type="text/javascript">
    $(document).ready(function(){
fetchdata();
      function fetchdata(){
          // alert("index page function ");
            var options = {
                chart: {
                    
                    type: 'line',
					 //height: 400,
					 //width: 600,
                    marginRight: 130,
                    marginBottom: 25,
					shadow: true
                },
				title:{text:'BP RECORDS'},
				subtitle:{text:'@health care.com'},
				 xAxis: {
					 title: { text: ''},
                      categories: []
						
                },  
				yAxis: {
					   	title: {text: '' }
                	   },
				tooltip: {
                    formatter: function() {
                            return '<b>'+ this.series.name +'</b><br/>'+
                            this.x +': '+ this.y;
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'center',
                    x: 10,
                    y: 100,
                    borderWidth: 0,
					backgroundColor: 'yellow',
			 		borderColor: '#C98657',
            		borderWidth: 3,
					borderRadius:5,
					enabled:true,
					itemHoverStyle: 
					{
                		color: '#FF0000',
					}
                },          
                series: [
							{
							},
							
							{
							}
						]
            }
			
      
	 var url = "getbprecords.php";
    $.getJSON(url,function(json)
          {
			  
			  alert(JSON.stringify(json));
				
		    options.xAxis.categories = json[0]['data'];
			 options.series[0].data = json[1]['data'];
			 options.series[1].data = json[2]['data'];
        
			/*options.xAxis.categories = json[1]['data'];
			options.series[1].data = json[1]['data'];//to show more cols
			*/
			
			options.xAxis.title.text="date of recording";
				
				options.yAxis.title.text="BP Level";//json[1]['count'];
				
               
				options.series[0].name=json[1]['lowl'];
				
				options.series[1].name=json[2]['highl'];
				
                
				
				//alert(json[1].data);
				
               // chart = new Highcharts.Chart(options);
			   $('#container2').highcharts(options);
				
          }); 
			
			}
});
    </script>
  
</head>
<body>
<div class="container">
<?php
  include_once("header.php");  
    ?><div class="row">
    <center>
 <div  class="row col-md-6" id="container2" >**</div>
    </center>
    </div>
    </div>
</body>
</html>