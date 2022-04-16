<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="todoliststyle.css">
</head>
<body>

<div id="myDIV" class="header">
  <h2 style="margin:5px">My To Do List</h2>
  <input type="text" id="myInput" placeholder="Title...">
  <span onclick="newElement()" class="addBtn">Add</span>
  <a href="./draw.html"><h1> click to draw </h1></a>
</div>

<ul id="myUL">
  <li>20IT127</li>
  <li>Hutish Seju</li>
  <li>CSPIT-IT</li>
  <li>SGP-SEM-04(WRITE-BOARD)</li>
</ul>
<?php
    

            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "logindatabase";

            $email = $_POST["email"];
            $password = $_POST["password"];

            //echo "Email :- ". $email. "<br>";

            $conn = mysqli_connect($servername, $username, $password, $database);

            if(!$conn)
            {
                //die("Failed to connect!". mysqli_connect_error());
                //echo "<br>";
            }
            else
            {
                //echo "Connection sucessfull.";
                //echo "<br>";
            }

            $sql = "INSERT INTO `logindatabase` (`E-mail`, `Password`) VALUES ('$email', '$password');";
            if(mysqli_query($conn, $sql))
            {
                //echo "Sucessful insert";
                //echo "<br>";
            }
            else
            {
                //echo "Failed to insert". mysqli_error($conn);
            }

            mysqli_close($conn);
        
        
    ?>
</body>
<script src="./todolist.js"></script>
</html>
