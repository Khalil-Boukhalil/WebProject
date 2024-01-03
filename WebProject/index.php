<?php
include 'config.php';
extract($_POST);

$fromCity=$_POST['flight-from'];
$toCity=$_POST['flight-to'];
$dep=$_POST['departure'];
$return=$_POST['return'];
$search=$_POST['search'];
if(isset($search))
{
    $query="SELECT * FROM Flight WHERE FromCity='$fromCity' ";
    $result=mysqli_query($con , $query);

    if(!$result || mysqli_num_rows($result) == 0)
    {
        header('Location: index.php');
        echo"Failed";
    }
    else
    {
        header('Location: FlightList.html');
        exit;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">

</head>

<body>
    <header class="header">
        <h1>Flight Book</h1>

        <a href="login.php" onclick="openLoginPopup()" id="headerLinks" class="he1">Login</a>

        <a href="SignUp.php" id="headerLinks">SignUp</a>
    </header>


    <div class="container">
        <div class="search-form">
            <h1>Find Flight</h1>
            <form action="" method="post">
                <label for="from">From:</label>

                <select id="myDropdown" name="flight-from" >
                <option value="istanbul" name="cb">Istanbul</option>
                    <option value="beirut" name="cb">Beirut</option>
                    <option value="london" name="cb">London</option>
                    <option value="paris" name="cb">Paris</option>
                    <option value="Hong-Kong" name="cb">Hong-Kong</option>
                    <option value="Ankara" name="cb">Ankara</option>
                    <option value="Berlin" name="cb">Berlin</option>
                    <option value="Vienna" name="cb">Vienna</option>
                </select>

                <label for="to">To:</label>
                <select id="myDropdown" name="flight-to" >
                    <<option value="istanbul" name="cb">Istanbul</option>
                    <option value="beirut" name="cb">Beirut</option>
                    <option value="london" name="cb">London</option>
                    <option value="paris" name="cb">Paris</option>
                    <option value="Hong-Kong" name="cb">Hong-Kong</option>
                    <option value="Ankara" name="cb">Ankara</option>
                    <option value="Berlin" name="cb">Berlin</option>
                    <option value="Vienna" name="cb">Vienna</option>
                </select>

                <label for="departure">Departure Date:</label>
                <input type="date" id="departure" name="departure">

                <label for="return">Return Date:</label>
                <input type="date" id="return" name="return">

                <button name="search" id="btns">Search Flights</button>
            </form>
        </div>
        <h1 class="other">Best Prices!</h1>
        <div class="featured-flights">

            <div class="flight-card">
                <img src="images/istanbul.jpeg" alt="Flight Image">
                <h3>Istanbul</h3>
                <p id="prices">Price: $500</p>
                <p>New Price :400$</p>
                <a href="login.php" id="btns">Book Now</a>
            </div>

            <div class="flight-card">
                <img src="images/egypt.webp" alt="Flight Image">
                <h3>Egypt</h3>
                <p id="prices">Price: $500</p>
                <p>New Price: $350</p>
                <a href="login.php" id="btns">Book Now</a>
            </div>
        </div>
    </div>
    <h1 class="other">Other Flights</h1>
    <div class="flights">
        <div class="flight-box">
            <img src="images/paris.jpg" alt="Destination 1">
            <div class="flight-details">
                <h2>Paris</h2>
                <p class="flight-company">France Airline</p>
                <p>Price:800$</p>
                <a href="login.php" id="book">Book Now!</a>
            </div>
        </div>

        <div class="flight-box">
            <img src="images/london.jpeg" alt="Destination 2">
            <div class="flight-details">
                <h2>London</h2>
                <p class="flight-company">Transavia</p>
                <p>550$</p>
                <a href="login.php" id="book">Book Now!</a>
            </div>
        </div>

        <div class="flight-box">
            <img src="images/sydney.jpg" alt="Destination 3">
            <div class="flight-details">
                <h2>Sydney</h2>
                <p class="flight-company">MEA Airline</p>
                <p>1200$</p>
                <a href="login.php" id="book">Book Now!</a>
            </div>
        </div>

    </div>

</body>

</html>