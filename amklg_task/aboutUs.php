<?php 
$title = "aboutus";
include 'header.php'; ?>

<h2>About Us</h2>

<script>

document.write ("hello World")

// Triggering an alert box
window.alert ("This is an alert box")

</script>


<noscript>
    if javascript is not enabled this will be displayed. so users know they need to enable js.
</noscript>

<script>

// document.write but after loading the page
function hello(){
    document.write("This is after the page has loaded")
}

</script>

<button onclick="hello()"> Click me</button>

<button onclick="document.write('This is something')"> Click me</button>