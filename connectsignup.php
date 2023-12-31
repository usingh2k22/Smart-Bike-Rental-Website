<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $Name=$_POST['Name'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

$con = new mysqli('localhost', 'root', '', 'smartbike');
if ($con) {
    // echo "Connection Successful";
$sql="insert into `signupdata`(`Name`,`Email`,`Password`)values('$Name','$Email','$Password')";


$result=mysqli_query($con,$sql);

if($result){
    header("Location: login.php");
}
else{
    die(mysqli_error($con));
}

} else {
    die(mysqli_error($con));
}

}
?>