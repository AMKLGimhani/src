<?php 
$title = "Exercise3: Variable, Strings & Operators";
include 'header.php'; ?>

<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement 
    to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag.</h1>

<form action="process1.php" method="post">
    First Name: <input type="text" name="Firstname" required> <br><br>
    Last Name: <input type="text" name="Lastname" required> <br><br>
    <input type="submit" name="Submit" required> <br><br>
</form>


<?php include 'footer.php'; ?>