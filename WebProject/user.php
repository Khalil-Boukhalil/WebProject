<?php
include "config.php";
extract ($_POST);
$FromCity=$_POST['fromCity'];
$toCity=$_POST['toCity'];
$departure=$_POST['departureDate'];
$return=$_POST['returnDate'];
$cred=$_POST['Credit'];
$done=$_POST['done'];
$usr=123;
if(isset($done)){
    $query="INSERT INTO BookedFlights (FromCity ,ToCity ,DepartureDate ,ReturnDate , CreditBank ,UserName )  
    Values ('$FromCity','$toCity' ,'$departure' ,'$return','$cred' ,'$usr')";
    $result=mysqli_query($con , $query);
    
    if(!$result ){
      die('Record not added ...' . mysqli_error($con)); 
    }
    else{
      header('Location: user.php');
    }
  
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Flight Booking System</title>
  <link rel="stylesheet" href="user.css">
</head>

<body>

  <div class="container" id="overlay">
    <div class="login-container">
    <h2>Book New Flight</h2>
    <form  method="post" class="login-form" action="">
      <label for="fromCity">From City:</label>
       <select id="myDropdown" name="fromCity" >
                    <option value="istanbul" name="cb">Istanbul</option>
                    <option value="beirut" name="cb">Beirut</option>
                    <option value="london" name="cb">London</option>
                    <option value="paris" name="cb">Paris</option>
                    <option value="Hong-Kong" name="cb">Hong-Kong</option>
                    <option value="Ankara" name="cb">Ankara</option>
                    <option value="Berlin" name="cb">Berlin</option>
                    <option value="Vienna" name="cb">Vienna</option>
                </select>

      <label for="toCity">To City:</label>
     <select id="myDropdown" name="toCity" >
                    <option value="istanbul" name="cb">Istanbul</option>
                    <option value="beirut" name="cb">Beirut</option>
                    <option value="london" name="cb">London</option>
                    <option value="paris" name="cb">Paris</option>
                    <option value="Hong-Kong" name="cb">Hong-Kong</option>
                    <option value="Ankara" name="cb">Ankara</option>
                    <option value="Berlin" name="cb">Berlin</option>
                    <option value="Vienna" name="cb">Vienna</option>
                </select>


      <label for="departureDate">Departure Date:</label>
      <input type="date" id="departureDate" name="departureDate" required>

      <label for="ReturnDate">Return Date:</label>
      <input type="date" id="returnDate" name="returnDate" required>

      <label for="price">Credit id:</label>
      <input type="number" id="price" name="Credit" required>

      <button type="submit" name="done">Book Flight</button>
      <a href="myFlights.php" >Show My BookedFlighs</a>
    </form>
    
</div>
  </div>

</body>

</html>
