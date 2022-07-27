<?php
session_start();
include 'connect.php';

$sql = "SELECT * FROM `profile` WHERE user='$_SESSION[username]'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<?php

$showAlert = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $fname = $_POST["fname"];
  $lname = $_POST["lname"];
  $email = $_POST["email"];
  $designation = $_POST["designation"];
  $age = $_POST["age"];
  $phone = $_POST["phone"];
  $flat = $_POST["flat"];

  $sql = "UPDATE `profile` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `designation` = '$designation', `age` = '$age', `phone` = '$phone', `flat` = '$flat' WHERE `profile`.`user` = '$_SESSION[username]'";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;
    header("location: profile.php");
  }
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="home.css" rel="stylesheet">
    
    <title>Edit Profile</title>
  </head>
  <body>
<?php require 'nav.php' ?>

<div class="container">
    <h2 class="text-left" style="margin: 30px 0px 0px -70px; text-decoration: underline;" >Edit Profile</h1>
</div>

<form action="/society/edit_profile.php" method="post" style="margin: 50px">
  <div class="mb-3 col-md-6">
    <label for="fname" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="fname" name="fname" aria-describedby="emailHelp" value="<?php echo $row['fname'];?>" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="lname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" name="lname" aria-describedby="emailHelp" value="<?php echo $row['lname'];?>" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="email" class="form-label">E-mail:</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="<?php echo $row['email'];?>" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="designation" class="form-label">Designation:</label>
    <input type="text" class="form-control" id="designation" name="designation" aria-describedby="emailHelp" value="<?php echo $row['designation'];?>" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="age" class="form-label">Age:</label>
    <input type="text" class="form-control" id="age" name="age" value="<?php echo $row['age'];?>" required>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number:</label>
    <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $row['phone'];?>" required>
  <div class="mb-3">
    <label for="flat" class="form-label">Flat Number:</label>
    <input type="text" class="form-control" id="flat" name="flat" value="<?php echo $row['flat'];?>" required>
  </div>
  <input type="submit" name="submit" value="Submit">
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
  </body>
</html>

