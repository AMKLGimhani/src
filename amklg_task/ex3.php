<?php 
$title = "Exercise3: Variable, Strings & Operators";
include 'header.php'; ?>

<body>

<h3>3.1: Create a file (ex3.php): Create a file named ex3.php in your exercise folder. 
  Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h3><br>

<h3>3.2: Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement 
    to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an <h3> tag.</h3>

<form action="process1.php" method="post">
    <div class="mb-3"> 
        First Name: <input type="text" name="Firstname" required> 
    </div>
    <div class="mb-3">
        Last Name: <input type="text" name="Lastname" required> 
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form> <br>

<h3>3.3: Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your <head> tag.</h3><br>

<h3>3.4: HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. 
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table. </h3>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N</th>
      <th scope="col">Name</th>
      <th scope="col">Grade</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>John</td>
      <td>5</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Alice</td>
      <td>4</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Bob</td>
      <td>5</td>
    </tr>
  </tbody>
</table> <br>

<h3>3.5: String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";).
     Join them together and print the length of the string.</h3>

<?php
$str1 = "Hello";
$str2 = "World";
$stringJoin = $str1." ".$str2;
 
echo strlen($stringJoin);
?> <br><br>

<h3>3.6: Number Addition: Write a script to add up the numbers: 298, 234, 46. 
    Use variables to store these numbers and an echo statement to output your answer.</h3>

<?php
$number1 = 298;
$number2 = 234;
$number3 = 46;

$sum = $number1 + $number2 + $number3;
$direct_text = "The sum is: ";

echo ($direct_text . $sum);

?> <br><br>

<h3>3.7: Browser Detection: Write a PHP script to detect the browser being used to view your pages. 
    (Hint: Use predefined variables: $_SERVER)</h3>

<?php
  echo $_SERVER['SERVER_NAME'];
?><br><br>

<h3>3.8: File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. 
  Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time </h3>
  <br><br>

</body>

<?php include 'footer.php'; ?>