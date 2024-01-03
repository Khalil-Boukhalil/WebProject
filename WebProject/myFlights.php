<?php
include "config.php"; 
echo "</br> </br>" ;
echo "<center>" ;   
echo "<table border = '3' width ='70%'>";
echo "<th > id </th>";
echo "<th > FromCity </th>";
echo "<th > To City  </th>";
echo "<th > DepartureDate  </th>";    
echo "<th  >ReturnDate  </th>";
echo "<th> Credit Id</th>";
//echo "<th > Book </th>";

$result = mysqli_query($con, "Select * From BookedFlights ");
if ($result)
{
    while ($row = mysqli_fetch_object($result)) 
    {
       echo "<tr > ";
       echo "<td > $row->id </td>";
       echo "<td > $row->FromCity </td>";      
       echo "<td> $row->ToCity </td>"; 
       echo "<td> $row->DepartureDate </td>"; 
       echo "<td> $row->ReturnDate </td>"; 
       echo "<td>$row->CreditBank</td>";
       echo "</tr>";
    }
}
echo "</table> </center>";

?>



    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            background: url(images/254367.png);
            background-size:cover;
            background-position: center;
            background-repeat: no-repeat;
            min-height: 90vh;
        }

        h2 {
            color: #333;
        }
        th{
            color: black;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: transparent;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            color: white;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
