

<!DOCTYPE html>
<html>
   <head>
      <title>User Profile</title>
   </head>
   <body>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
      <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <div class="container" style="padding-top: 60px;">
         <h1 class="page-header">Your Profile</h1>
         <div class="row">
            <!-- left column -->
            <div class="col-md-4 col-sm-6 col-xs-12">
               <div class="text-center">
                  <img src="https://fb-s-b-a.akamaihd.net/h-ak-xfa1/v/t1.0-1/c9.0.160.160/p160x160/420257_10151474103567424_1224916620_n.jpg?oh=0932a7be9adb74fd949d0211d9128ad7&oe=58BA7A17&__gda__=1488564886_feb0fc02d6307304a3d43aecff5a804a" class="avatar img-circle img-thumbnail" alt="avatar">
                  <h6>Upload a different photo...</h6>
                  <input type="file" class="text-center center-block well well-sm">
               </div>
            </div>
            <!-- edit form column -->
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
               <div class="alert alert-info alert-dismissable">
                  <a class="panel-close close" data-dismiss="alert">×</a> 
                  <i class="fa fa-coffee"></i>
                  This is an <strong>.alert</strong>. Use this to show important messages to the user.
               </div>
               <h3>Personal info</h3>
               <form class="form-horizontal" role="form">
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Account Type:</label>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-body"><?php
                              $accountType=$_SESSION['accountType'];
                              echo"$accountType";
                              ?></div>
                        </div>
                     </div>
                  </div>
                  <!--accountType-->
                  <div class="form-group">
                     <label class="col-lg-3 control-label">First name:</label>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-body"><?php $fname=$_SESSION['firstName'];
                              echo"$fname";
                              ?></div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Last name:</label>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-body"><?php
                              $Lname=$_SESSION['lastName'];
                              echo"$Lname";
                              ?> </div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Username:</label>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-body"><?php
                              $userid=$_SESSION['username'];
                              echo"$userid";
                              ?></div>
                        </div>
                     </div>
                  </div>
                  <div class="form-group">
                     <label class="col-lg-3 control-label">Email:</label>
                     <div class="col-lg-8">
                        <div class="panel panel-default">
                           <div class="panel-body"><?php
                              $email=$_SESSION['email'];
                              echo"$email";
                              ?></div>
                        </div>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </body>
</html>

