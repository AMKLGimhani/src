<?php 
$title = "Information";
include 'header.php';

$firstname = $_POST["Firstname"];
$lastname = $_POST["Lastname"];
?>

<h3> 
<?php echo "Hello " . $firstname . " " . $lastname . ", You are welcome to my site."; ?>
</h3>

<?php
include 'footer.php'; 
?>