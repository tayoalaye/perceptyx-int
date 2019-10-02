<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$dbname = 'perceptyx';
$dbuser = 'candidate';
$dbpass = 'password';
$dbhost = 'localhost';

$link = mysqli_connect($dbhost, $dbuser, $dbpass);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt select query execution
$sql= "select * from perceptyx.employee where hiredate > '1990-01-01' and birthdate = '1965-02-01' and sex ='MALE'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>id</th>";
                echo "<th>sex</th>";
                echo "<th>name</th>";
                echo "<th>birthdate</th>";
                echo "<th>hiredate</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['sex'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";                
                echo "<td>" . $row['birthdate'] . "</td>";                
                echo "<td>" . $row['hiredate'] . "</td>";                
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>
