
<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$post_id = $_GET['id'];

//deleting the row from table
$result = mysqli_query($conn,"DELETE from seat_plan where id=$post_id");

//redirecting to the display page (index.php in our case)
header("Location:booking.php");
?>
