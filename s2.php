<html>
<head><title>personal information</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<form action="connectregi1.php" method="POST">
<li><a href="home.html" style="color:red">Home</a></li> 
<center>
<div class="Complaints-box">

<h1 style="color:purple">  COMPLAINT  REGISTRACTION  FORM </h1>
<br>
<b>Name:</b>
<input type="text" name="name" size="15" maxlength="30" placeholder="Enter your name">
<b>Rollno:</b>
<input type="text" name="rollno" size="15" maxlength="30" placeholder="Enter your name">
<label for="select student faculty"><b> select student faculty:</b></lable><br>
<select name="selectstudentfaculty" multiple">
<br>
       <option value="Bcs">Bcs</option>
	   <option value="Bcom">Bcom</option>
	   <option value="Mcom">Mcom</option>
	   <option value="MBA">MBA</option>
	   <option value="Msc">Msc</option>	  
<br>
</select>
<br><br>
<label for="Type of Complaint"><b> Type of Complaints:</b></lable><br>
<select name="TypeofComplaints" multiple">
<br>
       <option value="Food">Food</option>
	   <option value="Hostel">Hostel</option>
	   <option value="Library">Library</option>
<br>
</select>
<br><br>

<label for="Complaint Description"><b>Complaint Description:</b></lable>
<input type="text" style="font-size: 12pt; height: 40px; width:280px; " name="ComplaintDescription"><br>

<input type="submit" value="submit"> 

</center>
</form>
</body>
</html>
