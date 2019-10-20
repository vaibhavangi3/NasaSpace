<!Doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
 <link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">

    <title>Hello, world!</title>
    <style>
     
h1{
  color: #fbcf14;
 text-align: center;
 padding:20px;
 letter-spacing: 2px;

 font-family: 'Anton', sans-serif;}
*{
    padding: 0;
    margin: 0%;
}
body{
    background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
    background-attachment: fixed;
  
   font-size:10px;
}


.set{
  color:white;
  padding:20px;
}
li{
  text-decoration: none;
}
    </style>
  </head>
  <body>
    <h1 text="center">Nasa Quiz App</h1>
    <br>
    <div class="set">
    <?php 
$servername = "localhost";
$username = "phpmyadmin";
$password = "Thechamp123#";
$dbname = "nasa";
$conn = mysqli_connect($servername, $username, $password, $dbname);
$sql = "SELECT * FROM questions";
$result = mysqli_query($conn, $sql);
?>
             <div class="set">
              <?php
              $i=1;
              foreach ($result as $key => $value) {
              ?>
              <li class="nav-item active"><h4><?php echo ' '.$value['question']; ?></h2></a></li> 
              <li class="nav-item active" style="padding-left: 10px;"><h6><input type="radio" name="<?php echo ' '.$value['option1']; ?>"><?php echo ' '.$value['option1']; ?></h4></a></li> 
              <li class="nav-item active" style="padding-left: 10px;"><h6><input type="radio" name="<?php echo ' '.$value['option1']; ?>"><?php echo ' '.$value['option2']; ?></h4></a></li> 
              <li class="nav-item active" style="padding-left: 10px;"><h6><input type="radio" name="<?php echo ' '.$value['option1']; ?>"><?php echo ' '.$value['option3']; ?></h4></a></li> 
              <li class="nav-item active" style="padding-left: 10px;"><h6><input type="radio" name="<?php echo ' '.$value['option1']; ?>"><?php echo ' '.$value['option4']; ?></h4></a></li> 
              <br>
              <hr>

              <?php } ?>
            </div>
    <a href="./answer.php"><input type="submit" name="submit" value="SUBMIT" style="margin-left:30%;height: 50px;width:30%;"></a> 
    </div>   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>