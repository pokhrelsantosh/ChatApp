

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Pokhrel-chat room</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/product/">
    <link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap core CSS -->
<link href="/docs/4.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <style>
    
    


      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }
      .colorchange{
    animation: colorchangesantosh 1s infinite;

}
@keyframes colorchangesantosh {
    0%{color:greenyellow;}
    25%{color:#bf55ec;}
    50%{color:white;}
    75%{color: yellow;}
    100%{color: royalblue;}
}

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">

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
      <a class="nav-item nav-link " href="developer.php" style="color:white;">MEET-DEVELOPER</a>
      <a class="nav-item nav-link " href="index.php" style="color:white;">CONTACT</a>


      
    </div>
  </div>
</nav>











<div class="position-relative overflow-hidden  text-center  ">

  <div class="col-md-6 p-lg-6 mx-auto my-7">
    <h1 class="display-4 font-weight-normal colorchange" style="text-transform:uppercase;">Pokhrel Chat Room</h1>
    <p class="lead font-weight-normal" style="text-transform:uppercase;">Chat and enjoy with your friends</p>

<!-- form -->
<div class="login-form col-md-6 offset-md-3">
<form action="claim.php" method="POST">

<span class="mylink "><h5>pokhrelchatroom.com/</h5></span><input type="text" name="room" class="form-control room-name">
<br>

<button class="btn btn-outline-secondary room-create-btn" href="#" >claim room</button>

</form>
    </div>
</div>

<!-- endform -->
<div class="developer">
  <h3>DEVELOPED BY: SANTOSH POKHREL</h3>
</div>





    
  

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<script>
$('.room-create-btn').click(function(e) {
  e.preventDefault();
  var room_name = $('.room-name').val();
  if(room_name.length < 5) {
    swal({
        title: "OOPS...!",
        text: "Room name must contain at least 5 characters",
        timer:150000,
        icon: "error",
        button: "Aww yiss!",
      });
  }
});
</script>
      
</html>
