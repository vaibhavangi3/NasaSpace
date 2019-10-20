<!DOCTYPE html>
<html>
    <head>
            <title>Signup</title>
            <link rel="stylesheet" href="./css/style2.css">
            <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
</script>
<style>
  {
    padding:0;
    margin:0;
}
.main{
    height:800px;
    background-image:url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg'); 
}
.stylish-form 
    {
      padding:10px;
    }
    
    .stylish-form h2 {
      color:#6732f9;
      margin-top:50px;
      
    }
    .font_white {
      color:#fff !important;
    }
    .mar20 
    {
      margin:20px;
    }
    .inner-section {
      background-color:#32baf9;
      width:350px;
      display:block;
      margin:0 auto;
    }
    .inside-form{
      border-radius:8px;
      padding-top:30px;
      padding-bottom:30px;
    }
    .inside-form h2 {
      font-weight:700;
    }
    .inside-form ul {
      list-style-type:none;
      text-align:center;
      margin-top:30px;
    }
    .inside-form ul >li {
      display:inline-block;
    }
    .inside-form ul >li > i {
      margin-top:18px;
    }
    .icon-holder {
      background: #fff;
      border-radius: 50%;
      vertical-align: middle;
      height: 50px;
      width: 50px;
      text-align: center;
      margin-right: 20px;
    }

    .dsp-flex {
      display: -webkit-box; /* OLD - iOS 6-, Safari 3.1-6 */
      display: -moz-box; /* OLD - Firefox 19- (buggy but mostly works) */
      display: -ms-flexbox; /* TWEENER - IE 10 */
      display: -webkit-flex; /* NEW - Chrome */
      display: flex; /* NEW, Spec - Opera 12.1, Firefox 20+ */
      align-items: center;
      -webkit-align-items: center;
      justify-content: center
    }
    .input-group, .form-group {
      margin-bottom: 10px;
    }
    .input-group-addon {
      background-color: rgba(255, 255, 255, 0.1);
      border: none;
      color: #FFFFFF;
      border-radius:25px;
    }
    .form-control,.form-control:focus,.form-control:hover
    {
      background-color: rgba(255, 255, 255, 0.1);
      color: #FFFFFF;
      border-radius:25px;
      border:none;
      font-size:14px;
    }
    ::-webkit-input-placeholder { /* Chrome/Opera/Safari */
      color: #fff !important;
    }
    ::-moz-placeholder { /* Firefox 19+ */
      color: #fff !important;
    }
    :-ms-input-placeholder { /* IE 10+ */
      color: #fff !important;
    }
    :-moz-placeholder { /* Firefox 18- */
      color: #fff !important;
    }
    .footer {
      margin-top:40px;
      margin-bottom:40px;
    }
    input::placeholder {
      color: #fff !important;
    }
    .btn-lg {
      font-size: 1em;
      border-radius: 0.25rem;
      padding: 15px 48px;
    }
    .btn-round {
      border-width: 1px;
      border-radius: 30px !important;
      padding: 11px 23px;
    }
    .btn-neutral,.btn-neutral:focus,.btn-neutral:hover {
      background-color: #FFFFFF;
      color: #f96332;
    }
    .remove{
      border:none;
      transition: none;
    }
</style>
    </head>
    <body>
      <form action="#" method="post">
            <div class='main'>
            <script src="https://use.fontawesome.com/1dec14be15.js"></script>
                <div class="container-fluid stylish-form">
              
                  <div class="row mar20" >
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="inner-section">
                        <form method="POST" action="https://google.co.in">
                          <div class="mar20 inside-form">
                            <h2 class="font_white text-center">SIGN UP</h2>
                            <ul>
                              <li class="icon-holder dsp-flex">
                                <i class="fa fa-facebook "></i>
                              </li>
                              <li class="icon-holder dsp-flex">
                                <i class="fa fa-twitter "></i>
                              </li>
                              <li class="icon-holder dsp-flex">
                                <i class="fa fa-instagram "></i>
                              </li>
                            </ul>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-pencil "></i></span>
                              <input type="text" class="form-control"  placeholder="Username" name="username" required>
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-envelope "></i></span>
                              <input type="email" class="form-control"  placeholder=" Email..." name="email" required="must need">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon"><i class="fa fa-lock "></i></span>
                              <input type="password" class="form-control"  placeholder=" Password..." name="passcode" required="comp">
                            </div>
                            <div class="btn btn-neutral btn-round btn-lg">
                                       <a href="./main.html">    <input type="submit" name="sub" value="GET REGISTER" class="remove"></a>
                                           <a href="LOGIN.php">Login</a>
                            </div>
                              
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
                </div>
              </form>
</body>
</html>
<?php
if(isset($_POST['sub']))
{
  include"connection2.php";
  $name=$_POST['username'];
  $pass=$_POST['passcode'];
  $email=$_POST['email'];
  $sql="insert into datanasa values('$name','$email','$pass')";
  $query=mysqli_query($cont,$sql);
}

?>
