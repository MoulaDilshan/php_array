 <style>
        table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
  
       
  
        td {
            background-color: darkslateblue;
            border: 1px solid black;
            color: white;
        }
   
  
        th,td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
         
        }
  
        td {
            font-weight: lighter;
        }
    </style>


<?php
// PHP code to establish connection
// with the localserver

  
// Username is root
$user = 'root';
$password = ''; 
  
// Database name is first
$database = 'second'; 
  
// Server is localhost 
$servername='localhost';
$mysqli = new mysqli($servername, $user, 
                $password, $database);
  
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' . 
    $mysqli->connect_errno . ') '. 
    $mysqli->connect_error);
}
  
// SQL query to select data from database
$sql = "SELECT * FROM students ";
$result = $mysqli->query($sql);
$mysqli->close(); 
?>

<table>
            <tr>
                <th>Id</th>
                <th>User Name</th>
                <th>Father Name</th>
                <th>Mother Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Mobile Number</th>
                <th>Alternative Mobile NUmber</th>
                <th>Gender</th>
                <th>Matial Status</th>
                <th>Religion</th>
                
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['id'];?></td>               
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['fname'];?></td>
                <td><?php echo $rows['mname'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['dob'];?></td>
                <td><?php echo $rows['mnum'];?></td>
                <td><?php echo $rows['amnum'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['ms'];?></td>
                <td><?php echo $rows['rel'];?></td>
            </tr>
            <?php
                }
             ?>
        </table>