




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

  <div  class="container my-5">

    <section>
      
      <div class="card mb-4">
        
        <div class="row">
  
          <div class="col-md-6">
            <img class="img-fluid rounded-left" src="Images/img7.jpg" alt="image">
          </div>
  
          <div class="col-md-6 p-5 align-self-center" >
  
            <div id="frm" class="container m-5"  >
              
              <div>
                
                <h4 class="font-weight-normal  dark-grey-text  text-uppercase"><strong> Welcome to </strong></h4>
                <h1 class="font-weight-normal  dark-grey-text   pb-5"><strong> Mindful </strong></h1>
                
              </div>

              <form action="Process.php" method= "POST">

                <?php if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

                <div class="user-input-wrp">
                <br/>
                <input type="text" name="email" id="email" class="inputText" required>
                <span class="floating-label"> <i class="fa fa-user prefix"> </i> Email Address</span>
              </div><br>

              <div class="user-input-wrp pb-5">
                <br/>
                <input type="password" name="password" id="password" class="inputText" required>
                <span class="floating-label"> <i class="fa fa-lock prefix"> </i> Password</span>
              </div>
            
              <input type="checkbox">
              <label class="pb-5" style="font-size: 13px; font: weight 300;" >Remember me</label><br>


              <div style="width: 90%;" >
                <button type="submit" name="save" style="background-color: black; color: rgb(255, 255, 255);" id="btn" class="button">Sign In</button>
              
              </div>
            </form>
  
              <div style="margin-top: 30px; font-size: 13px; width: 90%;"  > 
  
                <a  href="#"><i>Forgot Password ?</i> </a>
                <a style="float: right;" href="#" ><i>Don't have an Account ?  Sign up</i> </a>
  
              </div>



            </div>
           
            
            
  
          </div>
  
        </div>
  
      </div>
  
    </section>
  
  </div>

</body>
</html>
  