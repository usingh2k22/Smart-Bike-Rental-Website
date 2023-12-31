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
    <link rel="stylesheet" href="Book.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Geologica:wght@700&family=Mooli&family=Mynerve&family=Nunito+Sans:wght@700&family=Open+Sans:ital,wght@1,300&family=Phudu&family=Poppins:wght@500&family=Satisfy&family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <navbar>
        <div id="nav-left">
            <h2 id="brand-green"> Smart</h2> 
                <h2 id="brand-white">Bike</h2>
        </div>

        <div id="nav-right">
            <li class="nav-right-item" ><a href="profile.php"><i class="fa-regular fa-user fa-xl" style="color: #95c113;"></i></a></li>
            <li class="nav-right-item" ><a href="index.html" id="logout">Logout</a> </li>
        </div>

    </navbar>

    <div id="body-1">
        <h1 id="user-name">Hello, <?php echo $_SESSION['Name']; ?></h1>
        
        <h1 id="user-heading"> RENT NOW</h1>
    </div>

    <div id="body-2">
        <h1>Rental Charges - &#8377 50 per hour/-</h1>
    </div>

    <div id="body-3">
        <h1>Please select your starting and destination point.</h1>
    </div>

    <div id="formm">
        <form>
            <div>
                <label for="starting" id="starting-tag">Choose Starting Point :</label>
                <select name="starting-point" id="starting">
                    <option value="" class="dropdown-1">Boys Hostel(Entry Point)</option>
                    <option value="" class="dropdown-1">Sukhna Hostel</option>
                    <option value="" class="dropdown-1">Tagore Hostel</option>
                    <option value="" class="dropdown-1">Govind Hostel</option>
                    <option value="" class="dropdown-1">Gate 2</option>
                    <option value="" class="dropdown-1">Gate 1</option>

                </select>
            </div>


            <div>

                <label for="destination" id="destination-tag"> Choose Destination :</label>
                <select name="Destination" id="destination">
                    <option value="" class="dropdown-2">Boys Hostel(Entry Point)</option>
                    <option value="" class="dropdown-2">Sukhna Hostel</option>
                    <option value="" class="dropdown-2">Tagore Hostel</option>
                    <option value="" class="dropdown-2">Govind Hostel</option>
                    <option value="" class="dropdown-2">Gate 2</option>
                    <option value="" class="dropdown-2">Gate 1</option>
                </select>

            </div>

        </form>
    </div>

    <div id="confirm">
        <button onclick="clickConfirm()" type="button" id="confirm-button">CONFIRM</button>
    </div>

    <div id="after-confirm">
        <div>
            <p id="bike-id-label">Enter the Bike No to Unlock the Bike: </p>
            <input type="text" id="bike-id">
        </div>

        <div>
            <p id="bike-id-note">**See Bike Number Plate</p>
        </div>
        <div id="unlock">
            <button type="button" id="unlock-button">UNLOCK BIKE</button>
        </div>

    </div>

    <div id="map-container">
        <div id="map-left">
            <h3>Find Bike Stations Nearby: </h3>
        </div>
        <div id="map"></div>
    </div>

    <div id="map-route">
        <h3 ><a href="map.php" id="map-text">CLICK HERE TO CHECK ROUTE</a></h3>
    </div>


    <footer>
        <div class="row">
            <div class="col">
                <h1>SmartBike</h1>
            </div>
            <div class="col">
            <h3>office <div class="underline"><span></span></div></h3>
            <p>Itpl Road</p>
            <p>Whitefield, Bangalore</p>
            <p>Karnataka, pin 560066, india</p>
            <p class="email-id">avinashdm@outlook.com</p>
            <h4>+91 - 012345</h4>
        </div>
            <div class="col">
            <h3>Links<div class="underline"><span></span></div></h3>
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">About Us</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Contacts</a></li>
            </ul>
            </div>
            <div class="col">
                <h3>Newsletter<div class="underline"><span></span></div></h3>
                <form id=form>
                    <i class="fa-solid fa-envelope"></i> 
                    <input type="email" placeholder="Enter your email id" required>
                    <button type="submit"><i class="fa-solid fa-arrow-right"></i></button>
                </form>
                <div class="social-icons">
                    <i class="fa-brands fa-facebook"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-whatsapp"></i>
                    <i class="fa-brands fa-pinterest"></i>

                  </div>
            </div>
        </div>
    
        <p class="copyright">Easy Tutorials 2023 - ALL Rights Reserved</p>
    </footer>  




    <script defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf3XPFXjTzYK8HA4gjf8dKyzVynZWyPZU&callback=initMap"></script>
    <script src="BookNow.js"></script>



    

</body>




</html>
<?php 
}

else{
    header("Location: login.php");
    exit();
}
?>