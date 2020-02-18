<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
$roomname = $_GET['roomname'];
include 'db_connect.php';
//check whether room exists
$sql = "SELECT * FROM rooms WHERE roomname = '$roomname'";
$result = mysqli_query($conn,$sql);
if($result){
 //check if room exist
 if(mysqli_num_rows($result) == 0){
    $msg="This room doesnot exist";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/chatapp"';
    echo '</script>';
 }
}
else{
    echo "Error: ". mysqli_error($conn);
}


?>


<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="product.css" rel="stylesheet">

<link rel="stylesheet" href="css/style.css">

<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/keyboard.jpg');
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
       
}
.santosh{
  background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/keyboard.jpg');
    height: 100vh;
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

.container {
  
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
.myclass{
    height:350px;
    overflow-y:scroll;
}
</style>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark text-white fixed-top" style="background-color:transparent !important;">
  <a href="index.php" class="navbar-brand">
<!-- <img src="images/logo.png"  alt=""> -->
</a>
  <a class="navbar-brand colorchange" href="index.php">Join With Your Friends</a>
  
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-item nav-link " href="index.php" style="color:white;">HOME </a>
      <a class="nav-item nav-link " href="index.php" style="color:white;">ABOUT </a>
      <a class="nav-item nav-link " href="index.php" style="color:white;">MEET-DEVELOPER</a>
      <a class="nav-item nav-link " href="index.php" style="color:white;">CONTACT</a>


      
    </div>
  </div>
</nav>



<h2 style="color:yellow; padding-top:7%; text-decoration:underline;">Chat Messages - <span style="color:red;text-decoration:underline;"><?php echo $roomname; ?></span></h2>


<div class="container" style="">
<div class="myclass">
  
  </div>
</div>


<input type="text" name="usermsg" class="form-control" id="usermsg" placeholder="Add Your Message"><br>
<button class="btn btn-primary btn-lg" name="submitmsg" id="submitmsg">Send</button>

`

<!-- javascript and jquery -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script
src="https://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous">
</script>
<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>

<script type="text/javascript">
//check for new mwssages in every 1 second 
setInterval(runFunction,1000);
function runFunction(){
  $.post("htcont.php",{room:'<?php echo $roomname ?>'},
  function(data,status){
    document.getElementsByClassName('myclass')[0].innerHTML = data;

  }
  )
}

// using enetr key to subbmit msg
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
}); 


//if user submit the form

$("#submitmsg").click(function(){
    var clientmsg = $("#usermsg").val();
  $.post("postmsg.php", {text:clientmsg,room:'<?php echo $roomname?>', ip:'<?php echo $_SERVER['REMOTE_ADDR']?>'},
  function (data,status){
      document.getElementsByClassName('myclass')[0].innerHTML = data;});
      $("#usermsg").val("");
      return false;
});
</script>
</div>
</body>
</html>