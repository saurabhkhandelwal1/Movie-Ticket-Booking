<html>
    <head>
          <meta charset="utf-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1">
  
          <title>demo Example</title>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="css\bootstrap.min.css">
          <link rel="stylesheet" href="css\font-awesome.min.css">
          <link rel="stylesheet" href="css\style.css">
          <script src="js\jquery-2.2.3.min.js"></script>
          <script src="js\bootstrap.min.js"></script>
          <script src="js\angular.js"></script>
          <script src="js\controller.js"></script>
          <style>
            .carousel-inner > .item > img,
                  .carousel-inner > .item > a > img {
                      width: 90%;
                      height: 90%;
                      margin: auto;
                      margin-top: 0%;
                  }
                label{
                   color: red;
                   text-align: right;
                }
                input[type=radio] {
                    height: 2em;
                }
                
                
          </style>
  </head>
  
  <body style="background-color:currentColor" ng-app="myapp">
  
    <!--End -->
  <nav class="navbar navbar-inverse">
      <div style="padding: 4px"></div>
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" data-toggle="modal" data-target="#city"> Book your show here... </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li ><a href="index.html">HOME</a></li>
                <li ><a href="promos.html">PROMOS</a></li>
                <li ><a href="offers.html">OFFERS</a></li>
                <li ><a href="feedback.html">FEEDBACK</a></li>
				<li class="active"><a href="contact.php">CONTACT</a></li>
            </ul>
  
      </div>
    </nav>
      
   
    <div class="col-sm-4">
          
    </div>
    <div class="box2 col-sm-4" style="margin-top: 70px">
      <form class="form-horizontal" name="contact" action="contact.php" method="post" role="form" novalidate>
              <div class="form-group">
                <label style="text-align: right;" class="col-sm-4" for="Name">Name :</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" ng-model="g_name" name="g_name" id="g_name" placeholder="Enter Name" required>
                  <span style="color:whitesmoke" ng-show="contact.$submitted ||contact.g_name.$dirty">
                    <span ng-show="contact.g_name.$error.required">Username is required.</span>
                </span>
                </div>
              </div>
              <div class="form-group">
                  <div class="col-sm-2"></div>
                <label class="control-label col-sm-2"  for="gender">Male</label>
                <div class="col-sm-2"> 
                  <input type="radio" value="male" ng-model="g_gender" name="gender" class="form-control" id="pwd"  checked>
                </div>

                <label class="control-label col-sm-2" for="gender">Female</label>
                <div class="col-sm-2"> 
                  <input  type="radio" value="female" ng-model="g_gender" name="gender" class="form-control" id="pwd" >
                </div>
              </div>
              <div class="form-group">
                <label style="text-align: right;" class="col-sm-4" for="Mobile">Mobile No:</label>
                <div class="col-sm-8">
                  <input type="number" class="form-control" name="g_mob"  maxlength="10" data-ng-minlength="10"  ng-model="g_mob" id="g_mob" placeholder="Enter Mobile No" required>
                  <span style="color:whitesmoke" ng-show="contact.$submitted || contact.g_mob.$dirty">
                    <span data-ng-show="contact.g_mob.$error.required">Mobile no is required.</span>
                    <span data-ng-show="contact.g_mob.$error.minlength">must 10 </span>
                    <span data-ng-show="contact.g_mob.$error.maxlength">must 10 </span>
                </span>
                </div>
              </div>
              <div class="form-group">
                <label style="text-align: right;" class="col-sm-4" for="email">Email:</label>
                <div class="col-sm-8">
                  <input type="email" class="form-control" ng-model="g_email" name="g_email" id="g_email" placeholder="Enter email" required>
                  <span style="color:whitesmoke" ng-show="contact.$submitted ||contact.g_email.$dirty">
                    <span ng-show="contact.g_email.$error.email">Invalid Email.</span>
                </span>
                </div>
              </div>

              <div class="form-group">
                <label style="text-align: right;" class="col-sm-4" for="Subject">Select Subject :</label>
                <div class="col-sm-8">
                  <select class="form-control" name="subject">
                    <!-- <option value="Select Your Batch" disabled>Select Your Batch</option> -->
                    <option value="Quaries" >Quaries</option>
                    <option value="About Daiet">About Daiet</option>
                    <option value="Feed-back">Feed-back</option>
                    <option value="Message">Message</option>
                </select>
                </div>
              </div>

              <div class="form-group">
                <label style="text-align: right;" class="col-sm-4" for="Message">Message:</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" ng-model="g_message" name="g_message" id="message" style=" height: 70px;"  name="msg" placeholder="Write Message Here" required>
                  <span style="color:whitesmoke" ng-show="contact.$submitted ||contact.g_message.$dirty">
                    <span ng-show="contact.g_message.$error.required">Message is required.</span>
                </span>
                </div>
              </div>
              
              <div class="form-group"> 
                <div class="col-sm-12">
                  <center><button type="submit" style="padding-top: 20px ;margin-top: 20px" class="btn btn-danger btn-block">Submit</button></center>
                </div>
              </div>
      </form>
</div>


  </body>
</html>


<?php     
include 'Config.php';

$name = $_POST['g_name'];
$gender = $_POST['gender'];
$mob = $_POST['g_mob'];
$email = $_POST['g_email'];
$subject = $_POST['subject'];
$msg = $_POST['g_message'];
//$ip = $_SERVER['REMOTE_ADDR'];

  echo $msg;

{
$query ="INSERT INTO contact (name, gender, mob, email, subject, msg) VALUES ('$name', '$gender', '$mob', '$email', '$subject', '$msg')";
$result = mysqli_query($link, $query); 

if($query == 1){
    header("Location: contact.php");
}

}
?>




<div  class="footer">
  <a style="float: right;" href="https://www.facebook.com/vipul.wani.98"><img src="img/facebook.png" alt="facebook" style="height: 45px; width: 45px"></a>
  <a style="float: right;" href="https://www.instagram.com/vipul_wani/"><img src="img/blkinsta.png" alt="instagram" style="height: 45px; width: 45px"></a>
</div>

</body>
</html>