
<h1 style="color: darkred;">Online Appointment Booking</h1>
 <h2 style="color: darkred;"></h2>
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
