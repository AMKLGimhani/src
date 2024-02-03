<?php 
$title = "Exercise4";
include 'header.php'; ?>

<body>
    
<h3><br>4.2: If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
 decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h3>

<form method="post" name="IFElSE_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

<div class="mb-3">   
    Name : <input type="text" name="username"  class="form-control" required> 
</div>
<div class="mb-3">   
    Age : <input type="number" name="userage"  class="form-control" required> 
</div>
<button type="submit" name= "ex4Form" class="btn btn-primary">Submit</button><br><br>

</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$userage = $_POST["userage"];
$username = $_POST["username"];
}

if ($userage >= 18){
    echo $username . ", you are " . $userage . " years old. You are eligible for voting.";
}

else {
    echo $username . ", you are " . $userage . " years old. You are not eligible for voting.";
}

?><br><br>


<h3>4.3: Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h3>



</body>


<?php include 'footer.php'; ?>