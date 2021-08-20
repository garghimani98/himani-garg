<?php include_once("session.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>COLLEGES.......</title>
     <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
   
   
      
    <script src="bootstrap/js/angular.min.js"></script>
   <script src="bootstrap/js/jquery-1.9.1.js"></script>
   
    <script src="bootstrap/js/bootstrap.js"></script>
    <link rel="stylesheet" href="bootstrap/css/fontawesome-all.css" type="text/css"/>
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
       
                 fillAllhospitals(); 
            function fillAllhospitals() {
                
                $.getJSON("json-fetch-all-hospitals.php", function(jsonArray) {
                   // alert(JSON.stringify(jsonArray));
                    for (i = 0; i < jsonArray.length; i++) {
                        //alert(jsonArray[i].tid);
                        $("#hosp").append("<option value='" + jsonArray[i].hospital + "'>"+ jsonArray[i].hospital +"</option>");
                    }

                });
            }
        
        //=====================================================
        
        $(document).ready(function() {
         $('li').mouseover(function(){
            obj=$(this);
             $('li').removeClass('highlight-stars');
             $('li').each(function(index){
                 $(this).addClass('highlight-stars');
                 if(index==$('li').index(obj)){
                     return false;
                 }
                   });
         });
            
             $('li').mouseleave(function(){
            
             $('li').removeClass('highlight-stars');
             });
             $('li').click(function(){
                 obj=$(this);
                 $('li').each(function(index){
                  $(this).addClass('highlight-stars');
                     $('#star_rating').val((index+1));
                     $('#msg').html('thanks! you have rated this'+(index+1)+'stars.');
                     if(index==$('li').index(obj)){
                         
                         return false;
                     }
                 });
                     
                 });
            $('ul').mouseleave(function(){
                if($('#star-rating').val()){
                    $('li').each(function(index){
                        
                      $(this).addClass('highlight-stars');
                        if((index+1)==$('#star-rating').val()){
                            return false;
                        }
                    });
                }
                
            });

             $("#hosp").change(function(){
                 $hos=$(this).val();
                $.getJSON("json-fetch-all-rdoctors.php?hosp="+$hos, function(jsonArray) {
                    
                  
                    //alert(JSON.stringify(jsonArray));
 
                        $("#rid").append("<option value='" + jsonArray[0].name + "'>"+ jsonArray[0].name +"</option>");
                  
 });
            });  

        });
    </script>
    <style type="text/css">
        ul{
            margin:0;
            padding:0;
        } 
        li{
            font-size:40px;
            color:black;
            display:inline-block;
            text-shadow: 2px 2px  1px green ;
         }
        #msg{
            color: #A6A6A6;
            font-style: italic;
         
            
            
        }
        
         .highlights-stars{
            color:black;
            text-shadow:2px 2px 2px blue; 
            
            
        }
       </style>
       
       
</head>



<body style="background-attachment:fixed;background-size:100%">
    <div class="container" style="opacity:0.8">
    <?php include_once("header.php");?>
    <center>
        <form action="review-process.php"  name="frm" style="background-color:skyblue">
             <div class="form-row">  
          <div class="form-group col-md-12">
           <img src="images/download%20(14).jpg">
              </div>
            </div>
              
            <div class="form-row">
     <div class="form-group col-md-12">
     <label for="disabledSelect">Hospital</label>
      <select id="hosp" name="hosp" class="form-control" style="background-color:lightpink">
        <option>Select</option>
         </select>
       </div>
            </div>
            
            
             <div class="form-row">
    <div class="form-group col-md-12">
      <label for="disabledSelect">Dname</label>
      <select id="rid" name="rid" class="form-control" style="background-color:lightpink">
        <option>Select</option>
      </select>
    </div>
            </div>
            
             <div class="form-row">
    <div class="form-group col-md-12">
      <label style="color:black">Star rating</label>
      <input type="hidden" class="form-control" id="star_rating"  name="star_rating" style="background-color:lightpink">
       <ul >
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                        </ul>
                        <div id="msg" name="msg"></div>
    </div>
 
  
 
          </div>
          
          <div class="form-row"> 
  <div class="form-group col-md-12">
    <label style="color:black" >Reviews</label>
     <textarea row="4" col="25"  name="reviews"  style="background-color:lightpink">
                        </textarea>
  </div>
   </div>
          
          <button type="submit" value="save" name="btn" id="save" class="btn bg-white">SAVE</button>
          
           <!-- <input type="button" value="save" name="save" id="save" style="background-color: black;color: white">-->
                    
                
            
        </form>
    </center>
    </div>
</body>
</html>    
            <!--<div class="form-row"> 
  <div class="form-group col-md-6">
    <label style="color:black" >Reviews</label>
     <textarea row="4" col="50"  name="reviews"  style="background-color:lightpink">
                        </textarea>
  </div>
   </div>
 
  
    <center>
        <form action="review-process.php" method="post" enctype="multipart/form-data">
            <div class="container" style="opacity:0.8">
                <div class="row bg-warning " style="margin-top:30px" width:400px height:400px>
                    <div class="col-md-12">
                       
                           <h3>Hospital:</h3>
                        <select id="hosp"  name="hosp">
                            <option value="select">select</option>
                        </select>
                       <hr>
                       
                         
                          <h2>dname</h2>
                        <select id="rid"  name="rid">
                            <option value="select">select</option>
                        </select>
                        <hr>
                          <h2>Star_Rating</h2>
                        <input id="star_rating" name="star_rating" type="hidden">
                        <ul>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                        </ul>
                        <div id="msg" name="msg"></div>
               <hr>
                       
                            <h3>Reviews</h3>
                            <textarea  name="reviews" `rows="5" cols="50">
                                
                            </textarea>
     <br>
                              <button type="submit" value="save" name="btn" id="save" class="btn bg-white">SAVE</button>
                         <input type="button" value="save" name="save" id="save" style="background-color: black;color: white">
                    </div>
                </div>
            </div>
        </form>
    </center>
</body>
</html>






<body style="background-attachment:fixed;background-size:100%">
  
      <div class="container" style="opacity:0.8">
   
    <center>
        <form action="sugar-process.php"  name="frm" style="background-color:skyblue">
            
          <div class="form-row">  
          <div class="form-group col-md-12">
           <img src="images/download%20(14).jpg">
              </div>
            </div>  
             
<div class="form-row">
     <div class="form-group col-md-12">
    
      <label for="disabledSelect">Hospital</label>
      <select id="hosp" name="hosp" class="form-control" style="background-color:lightpink">
        <option>Select</option>
        
      </select>
       
    </div>-->
          <!--  </div>
            
            
             <div class="form-row">
    <div class="form-group col-md-12">
      <label for="disabledSelect">Dname</label>
      <select id="rid" name="rid" class="form-control" style="background-color:lightpink">
        <option>Select</option>
      
      </select>
    </div>
            </div>
            
            
            
             <div class="form-row">
    <div class="form-group col-md-12">
      <label style="color:black">Star rating</label>
      <input type="hidden" class="form-control" id="star_rating"  name="star_rating" style="background-color:lightpink">
       <ul>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                            <li><i class="fa fa-star fa-fw"></i></li>
                        </ul>
                        <div id="msg" name="msg"></div>
    </div>
 
  
 
          </div>
          
          
          
            <div class="form-row"> 
  <div class="form-group col-md-6">
    <label style="color:black" >Reviews</label>
     <textarea row="4" col="50"  name="reviews"  style="background-color:lightpink">
                        </textarea>
  </div>
   </div>
 
//=========================================
    
  
    
   //=======================================
    
    //===============
    
        
          //===========================================-->
    
    