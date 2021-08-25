
<h1 style="color: darkred;">Online Appointment Booking</h1>
 <h2 style="color: darkred;"></h2>
</head>
<a href="http://localhost/project/index.php">
    <button>Home</button>
    </a>
    
	<a href="http://localhost/project/retrieve.php">
    <button>Retrieve</button>
    </a>

	<a href="http://localhost/project/update.php">
    <button>Update</button>
    </a>
	<a href="http://localhost/project/delete.php">
    <button>Delete</button>
    </a>
    <br><br>

    <style>
   body {
            background-image: url('https://www.maketecheasier.com/assets/uploads/2016/09/settings-app-not-working-featured.jpg');
			position: center;
        }
     </style>
<?php
include_once 'database.php';
$sql = "DELETE FROM record WHERE Adhaar_Number='" . $_GET["Adhaar_Number"] . "'";
if (mysqli_query($conn, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>