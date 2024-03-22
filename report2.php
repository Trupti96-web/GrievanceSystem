<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$database = "clgdb1";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM complain_regi";

$result = $conn->query($sql);

if ($conn->query($sql) == TRUE){ 
?>


<html>
<head>
 <title>complain</title>
 <li><a href="home.html" style="color:red">Home</a></li>  
<div class="title">
	<h4>complain</h4>
	<hr class="colorgraph"><br>
</div>		
<table class="center" border="1" style="color:#30415D"> 
<?php 
    if ($result->num_rows > 0) { ?>
        
            <tr>
			    <th>name</th>
                <th>rollno</th>
				<th>selectstudentfaculty</th>
				<th>TypeofComplaints</th>
                <th>ComplaintDescription</th>
            </tr>
        <?php while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $row["name"] ?></td>
				<td><?php echo $row["rollno"] ?></td>
                <td><?php echo $row["selectstudentfaculty"] ?></td>
				<td><?php echo $row["TypeofComplaints"] ?></td>
                <td><?php echo $row["ComplaintDescription"] ?></td>
            </tr>
        <?php
            }
        } 
		else
			{
              echo "0 results";
            }
?>
</table>

</body>
</html>

<?php

}
 else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>