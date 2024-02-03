<?php 
$title = "Exercise4";
include 'header.php'; ?>

<body>
    
<h3><br>4.2: If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age,
 decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting).</h3>

<form method="post" name="IFELSE_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

<div class="col-4">   
    Name : <input type="text" name="username"  class="form-control"> 
</div>
<div class="col-4">   
    Age : <input type="number" name="userage"  class="form-control" required> <br>
</div>
<button type="submit" name= "ex4Form1" class="btn btn-primary">Submit</button><br><br>

</form>


<?php

$userage = 0;
$username = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ex4Form1'])){

    $userage = $_POST["userage"];
    $username = $_POST["username"];

        if ($userage >= 18){
            echo "You are " . $userage . " years old. You are eligible for voting.";
        }
        else {
            echo "You are " . $userage . " years old. You are not eligible for voting.";
        }
    }
}
?><br><br>

    
<h3>4.3: Switch Case: Write a PHP script that gets the current month and prints one of the following responses, 
    depending on whether it's August or not:

It's August, so it's still holiday.
Not August, this is Month-name so I don't have any holidays</h3><br>

<?php

$month = date("F");

switch ($month){

    case "August": 
        echo "It's August, so it's still holiday.";
        break;
    default:
        echo "Not August, this is " . $month . ". So I don't have any holidays" ;
}
?><br><br>

<h3>4.4: For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h3>

<form method="post" name="forLoop_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

<div class="col-4">   
   Enter the number : <input type="number" name="number1"  class="form-control" required> <br>
</div>
<button type="submit" name= "ex4Form2" class="btn btn-primary">Submit</button><br><br>

</form>

<?php
$number1 = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['ex4Form2'])){
        $number1 = $_POST["number1"];

        for ($i = 1; $i <= 10; $i++) {
            echo "$number1 x $i = " . ($number1* $i) . "<br>" ;
        }
    }


}
?> <br><br>



<h3>4.5: While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h3>

<form method="post" name="WhileLoop_form" action=<?php echo htmlspecialchars ($_SERVER['PHP_SELF']); ?>>

<div class="col-4">   
    Number : <input type="number" name="number2"  class="form-control" required> <br>
</div>
<button type="submit" name= "ex4Form3" class="btn btn-primary">Submit</button><br><br>

</form>

<?php
$number2 = 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['ex4Form3'])){
        $number2 = $_POST["number2"];

        $i = 1;
        while($i <= $number2)
        {
            echo "The number is: ".$i. "<br>";
            $i++;
        }
    }
}

?><br><br>

<h3>4.6: Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript")</h3>

<?php
$myarray=array("HTML", "CSS", "PHP", "JavaScript") ;
foreach ($myarray as $array) {
    echo $array . "<br/>";
}
?>

</body>


<?php include 'footer.php'; ?>