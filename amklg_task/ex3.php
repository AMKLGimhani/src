<?php 
$title = "Exercise3: Variable, Strings & Operators";
include 'header.php'; ?>

<h1>Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement 
    to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag.</h1>

<form action="process1.php" method="post">
    <div class="mb-3"> 
        First Name: <input type="text" name="Firstname" required> 
    </div>
    <div class="mb-3">
        Last Name: <input type="text" name="Lastname" required> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<h1>HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table. </h1>


<?php include 'footer.php'; ?>