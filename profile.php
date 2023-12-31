<?php
session_start();
if(isset($_SESSION["Id"]) && isset($_SESSION['Name'])){

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Now- SmartBike</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Profile.css">
</head>

<body>
    <navbar>
        <div id="nav-left">
            <h2 id="brand-green"> Smart</h2>
            <h2 id="brand-white">Bike</h2>
        </div>

        <div id="nav-right">
            <li class="nav-right-item"><a href="logout.php" id="logout">Logout</a></li>

        </div>

    </navbar>

    <h1 id="personal-head" class="heading">Personal Information: <input type="Submit" name="pinfo" value="Edit Info" id="editInfo"> </h1>
    <div id="personal-info">
        <div>

            <h3>Name: <span id="db-data"><?php echo $_SESSION['Name']; ?></span></h3>
            <h3>Email Id: <span id="db-data"><?php echo $_SESSION['Email']; ?></span></h3>
            <h3>Gender: </h3>
            <h3>Occupation: </h3>
            <h3>City: </h3>
            <h3>State:</h3>

        </div>

    </div>
    <h1 id="history-head" class="heading">Your Ride History:</h1>
    <div id="history">
        <!-- //Ride history -->
    </div>
    <h1 id="balance-head" class="heading">Accounts and Balance:</h1>
    <div id="balance">

        <!-- Payment Gateway -->
    </div>

    </div>


</body>
</html>
<?php 
}

else{
    header("Location: login.php");
    exit();
}
?>