<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html
   xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>BINAKARIR || TEST ONLINE </title>
      <link  rel="stylesheet" href="css/bootstrap.min.css"/>
      <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
      <link rel="stylesheet" href="css/main.css">
      <link  rel="stylesheet" href="css/font.css">
      <script src="js/jquery.js" type="text/javascript"></script>
      <script src="js/bootstrap.min.js"  type="text/javascript"></script>
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
      <?php if(@$_GET['w'])
         {echo'
         <script>alert("'.@$_GET['w'].'");</script>';}
         ?>
      <script>
         function validateForm() {var y = document.forms["form"]["name"].value;  var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
            var dotpos = x.lastIndexOf(".");if (atpos
                      <1 || dotpos
                        <atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length
                          <5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
         var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
         </script>
   </head>
   <body>
      <div class="container">
      <!--container start-->
      <div class="row">
      <div class="col-md-12">
         <div style="border-radius:10px;overflow:hidden;margin-top:30px;border:solid 1px #ddd;background:#fff;-webkit-box-shadow: -1px 11px 24px 0px rgba(50, 50, 50, 0.23);
            -moz-box-shadow:    -1px 11px 24px 0px rgba(50, 50, 50, 0.23);
            box-shadow:         -1px 11px 24px 0px rgba(50, 50, 50, 0.23);padding:10px 30px 50px;">
            <div style="text-align:center;padding-top:10%;">
               <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
               <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;
               <span class="title1">
               <b>Masuk</b>
               </span>
               </a>
            </div>
         </div>
      </div>
      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
         <div class="modal-dialog">
            <div class="modal-content title1">
               <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
                  <h4 class="modal-title title1">
                     <span style="color:orange">Masuk</span>
                  </h4>
               </div>
               <div class="modal-body">
                  <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                     <fieldset>
                        <!-- Text input-->
                        <div class="form-group">
                           <label class="col-md-3 control-label" for="username"></label>
                           <div class="col-md-6">
                              <input id="username" name="username" placeholder="Enter your username" class="form-control input-md" type="text">
                           </div>
                        </div>
                        <!-- Password input-->
                        <div class="form-group">
                           <label class="col-md-3 control-label" for="password"></label>
                           <div class="col-md-6">
                              <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
                           </div>
                        </div>
               </div>
               <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               <button type="submit" class="btn btn-primary">Log in</button>
               </fieldset>
               </form>
               </div>
            </div>
            <!-- /.modal-content -->
         </div>
         <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      <!--sign in modal closed-->
   </body>
</html>
