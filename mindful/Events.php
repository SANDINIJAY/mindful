<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['email'])) {

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindful</title>
    <link rel="stylesheet" href="style.css" >

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>

<body>
  <div class="container1">
    <h1 class="font-weight-bold container1 text-center header3 " style="margin-bottom: 90px;"> Upcoming Events</h1>
   
</div>

<div class="container my-5 " >

 <section class="dark-grey-text ">
    
  
    <p class=" w-responsive mx-auto mb-5 font-weight-bold header2 word "><span>Popular Groups</span></p>

    <div class="row">

   
      <div class="col-lg-3 col-md-6 mb-4">
      
        <div class="card divcon">
         
          <div class="view view-cascade overlay">
            <img src="Images/im1.jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
        
          <div class="card-body card-body-cascade  pb-3">
            
            <h5 class="card-title mb-1">
              <strong>
               Beach Cleanup With Friends
              </strong>
            </h5>
            
           
            
            <p class="">Organized By Habitat Friends
            </p>
            <div >
              <div class="row">
                
                  <i class="iconclr fa fa-calendar ml-3"> </i> 
                  <p style="margin-left: 15px; font-size: 12px;">13th August</p>
                
          
              </div>
              <div class="row">
                <i class="iconclr fa fa-users  ml-3"> </i>
                <p style="margin-left: 15px; font-size: 12px;">4PM - 6PM</p>
              </div>  

             <div class="row">
               <i class="iconclr fa fa-clock-o  ml-3"> </i>
               <p style="margin-left: 15px; font-size: 12px;">12 Seats</p>
             </div>
              
            </div>


            <div >
              <span class="float-left font-weight-bold desc">
                <p>Rs 2000</p>
              </span>
              <span class="float-right">
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fa fa-eye grey-text ml-3"></i>
                </a>
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fa fa-heart grey-text ml-3"></i>
                </a>
              </span>
            </div>
          </div>
        
        </div>
       
      </div>
    

  
      <div class="col-lg-3 col-md-6 mb-4">
      
        <div class="card divcon">
         
          <div class="view view-cascade overlay">
            <img src="Images/im2.jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
         
          <div class="card-body card-body-cascade  pb-3">
            
            <h5 class="card-title mb-1">
              <strong>
               Beach Cleanup With Friends
              </strong>
            </h5>
          
          
            <p class="card-text">Organized By Habitat Friends
            </p>

            <div class="row">
                
              <i class="iconclr fa fa-calendar ml-3"> </i> 
              <p style="margin-left: 15px; font-size: 12px;">13th August</p>
            
      
          </div>
          <div class="row">
            <i class="iconclr fa fa-users  ml-3"> </i>
            <p style="margin-left: 15px; font-size: 12px;">4PM - 6PM</p>
          </div>  

         <div class="row">
           <i class="iconclr fa fa-clock-o  ml-3"> </i>
           <p style="margin-left: 15px; font-size: 12px;">12 Seats</p>
         </div>
         
            <div class="">
              <span class="float-left font-weight-bold desc">
                <p>Free</p>
              </span>
              <span class="float-right">
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fa fa-eye grey-text ml-3"></i>
                </a>
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fa fa-heart grey-text ml-3"></i>
                </a>
              </span>
            </div>
          </div>
        
        </div>
     
      </div>
     

  
      <div class="col-lg-3 col-md-6 mb-4">
    
        <div class="card divcon">
    
          <div class="view view-cascade overlay">
            <img src="Images/im1.jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
         
          <div class="card-body card-body-cascade pb-3">
        
            <h5 class="card-title mb-1">
              <strong>
                Beach Cleanup With Friends
              </strong>
            </h5>
          
           
        
            <p class="card-text">Organized By Habitat Friends
            </p>

            <div class="row">
                
              <i class="iconclr fa fa-calendar ml-3"> </i> 
              <p style="margin-left: 15px; font-size: 12px;">13th August</p>
            
      
          </div>
          <div class="row">
            <i class="iconclr fa fa-users  ml-3"> </i>
            <p style="margin-left: 15px; font-size: 12px;">4PM - 6PM</p>
          </div>  

         <div class="row">
           <i class="iconclr fa fa-clock-o  ml-3"> </i>
           <p style="margin-left: 15px; font-size: 12px;">12 Seats</p>
         </div>
       
            <div class="">
              <span class="float-left font-weight-bold desc">
                <p>Rs 2000</p>
              </span>
              <span class="float-right">
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fa fa-eye grey-text ml-3"></i>
                </a>
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fa fa-heart grey-text ml-3"></i>
                </a>
              </span>
            </div>
          </div>
   
        </div>
   
      </div>
      

      
      <div class="col-lg-3 col-md-6 mb-4">
   
        <div class="card divcon">
     
          <div class="view view-cascade overlay">
            <img src="Images/im3.jpg" class="card-img-top"
              alt="sample photo">
            <a>
              <div class="mask rgba-white-slight"></div>
            </a>
          </div>
        
         
          <div  class="card-body card-body-cascade  pb-3">
          
            <h5 class="card-title mb-1">
              <strong>
                Beach Cleanup With Friends
              </strong>
            </h5>
            
            
            
            <p class="card-text">Organized By Habitat Friends
            </p>

            <div class="row">
                
              <i class="iconclr fa fa-calendar ml-3"> </i> 
              <p style="margin-left: 15px; font-size: 12px;">13th August</p>
            
      
          </div>
          <div class="row">
            <i class="iconclr fa fa-users  ml-3"> </i>
            <p style="margin-left: 15px; font-size: 12px;">4PM - 6PM</p>
          </div>  

         <div class="row">
           <i class="iconclr fa fa-clock-o  ml-3"> </i>
           <p style="margin-left: 15px; font-size: 12px;">12 Seats</p>
         </div>
       
            <div class="">
              <span class="float-left font-weight-bold desc">
                <p>Free</p>
              </span>
              <span class="float-right">
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                  <i class="fa fa-eye grey-text ml-3"></i>
                </a>
                <a class="material-tooltip-main" data-toggle="tooltip" data-placement="top" title="Add to Wishlist">
                  <i class="fa fa-heart grey-text ml-3"></i>
                </a>
              </span>
            </div>
          </div>
       
        </div>
       
      </div>
    

    </div>
 

  </section>
  <!--Section: Content-->


</div>

</body>
<html>
<?php
}else{
    header("Location: Events.php");
    exit();
}
?>
