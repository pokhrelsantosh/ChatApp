<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php 
include 'index.php';
//get the value
$room = $_POST['room'];
//check room name
if(strlen($room)>20)
{
    $msg="please choose a name between 5 to 20 charactres";
    echo '<script language="javascript">';
     echo 'alert("'.$msg.'");';
    
    echo 'window.location="http://localhost/chatapp"';
    echo '</script>';
}
elseif(strlen($room)<5){
    
     $msg= "ROOM NAME MUST CONTAIN AT LEAST 5 CHARACTERS";
    // echo '<script language="javascript" type="text/javascript">';
    // echo $msg= 'swal({
    //     title: "OOPS...!",
    //     text: "Room name must contain at least 5 characters",
    //     timer:150000,
    //     icon: "error",
    //     button: "Aww yiss!",
    //   });';
    // echo 'window.location="http://localhost/chatapp"';
    // echo '</script>';
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/chatapp"';
    echo '</script>';
    
    
}
//check for alphanumeric name
elseif(!ctype_alnum($room)){
    $msg="choose an alphanumeric room name";
    echo '<script language="javascript">';
    echo 'alert("'.$msg.'");';
    echo 'window.location="http://localhost/chatapp"';
    echo '</script>';

}
else{
    //connect to the database
    include 'db_connect.php';
}
//check if room already exist
$sql = "SELECT * FROM rooms WHERE roomname='$room'";
$result = mysqli_query($conn,$sql);
if($result){
    if(mysqli_num_rows($result) > 0){
        $msg="This room is already booked";
        echo '<script language="javascript">';
        echo 'alert("'.$msg.'");';
        echo 'window.location="http://localhost/chatapp"';
        echo '</script>';
    }
    else{
        $sql="INSERT INTO rooms(roomname, stime) VALUES ('$room',CURRENT_TIMESTAMP);";
        if(mysqli_query($conn,$sql)){
            $msg="Congratulation your room is booked now go and chat";
            echo '<script language="javascript">';
            echo 'alert("'.$msg.'");';
            echo 'window.location="http://localhost/chatapp/rooms.php?roomname='. $room. ' ";';
            echo '</script>';

        }
    }
}
else{
    echo "Error: ".mysqli_error($conn);
}


?>
<div class="container">
<script type="text/javascript"></script>

</div>
