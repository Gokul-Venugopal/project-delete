<h1 style="color: darkred;">Online Appointment Booking</h1>
 <h2 style="color: darkred;">Delete</h2>
</head>
<a href="https://projectinsert.herokuapp.com/">
    <button>Home</button>
    </a>
    
	<a href="https://projectvieww.herokuapp.com/">
    <button>Retrieve</button>
    </a>

	<a href="https://projectupdates.herokuapp.com/">
    <button>Update</button>
    </a>
	<a href="https://projectdelete.herokuapp.com/">
    <button>Delete</button>
    </a>
    <br><br>

<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM record");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete  data</title>

</head>
<body>

<style>
   body {
            background-image: url('https://www.maketecheasier.com/assets/uploads/2016/09/settings-app-not-working-featured.jpg');
			position: center;
        }
     </style>
<table>
	
  <tr>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b> Age </b></td>
    <td><b>AdhaarNumber </td>
    <td> <b>Previous Health Condition</b></td>
    <td><b> Present Health Condition </b></td>
    <td><b>phonenumber</b></td>
    <td><b>Doctor Specialization</b></td>
    <td><b>DateofAppointment</b></td>
    <td><b>TimeSlot</b></td>
  </tr>
  
  	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
    <td><?php echo $row["firstname"]; ?></td>
    <td><?php echo $row["lastname"]; ?></td>
    <td><?php echo $row["Age"]; ?></td>
    <td><?php echo $row["Adhaar_Number"]; ?></td>
    <td><?php echo $row["Previous_Health_Condition"]; ?></td>
    <td><?php echo $row["Present_Health_Condition"]; ?></td>
    <td><?php echo $row["phonenumber"]; ?></td>
    <td><?php echo $row["specs"]; ?></td>
    <td><?php echo $row["Date_of_Appointment"]; ?></td>
    <td><?php echo $row["Time_Slot"]; ?></td>
	<td><a href="delete-process.php?Adhaar_Number=<?php echo $row["Adhaar_Number"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>
