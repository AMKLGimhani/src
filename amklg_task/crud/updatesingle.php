<?php
include '../header.php';
include 'db.php';
$a = $_GET['id'];
$result = mysqli_query($conn,"SELECT * FROM studentsinfo WHERE id= '$a'");
$row= mysqli_fetch_array($result);
?>
<h2> Update your information below: </h2>
<form name= "form1" method="post" action="">
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="First name" name="fname" required value="<?php echo $row['first_name']; ?>">
    </div>
    <div class="col">
      <input type="text" class="form-control" placeholder="Last name" name="lname" required value="<?php echo $row['last_name']; ?>" >
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col">
      <input type="text" class="form-control" placeholder="City" name="city" required value="<?php echo $row['city']; ?>">
    </div>

    <div class="col">
      <input type="text" class="form-control" placeholder="GroupID" name="group" required value="<?php echo $row['groupId']; ?>">    
    </div>

  </div>
<br>
  <div class="row">
  <div class="col"><button type="submit" class="btn btn-primary" name="submit">Update your Information</button></div>
  <div class="col"><button type="submit" class="btn btn-primary" name="delete">Delete your Information</button></div>
</div>
</form>
<?php 

if (isset($_POST['submit'])){
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $query = mysqli_query($conn,"UPDATE studentsinfo set first_name='$fname', last_name='$lname', city='$city' where id='$a'");
    if($query){
        echo "<h2>Your information is updated Successfully</h2>";
        
    }
    else { echo "Record Not modified";}
    }

    if (isset($_POST['delete'])){
        $query = mysqli_query($conn,"DELETE FROM studentsinfo where id='$a'");
        if($query){
            echo "Record Deleted with id: $a <br>";
        }
        else { echo "Record Not Deleted";}
        }

$conn->close();
include '../footer.php';
?>