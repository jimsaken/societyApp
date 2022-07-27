<?php
session_start();
$showAlert = false;

if($_SERVER["REQUEST_METHOD"] == "POST"){
  include 'connect.php';
  
  $ename = $_POST["ename"];
  $description = $_POST["description"];
  $date = $_POST["date"];
  $funds = $_POST["funds"];
  $location = $_POST["location"];

  $sql = "INSERT INTO `events` (`ename`, `description`, `date`, `funds`, `location`) VALUES ('".addslashes($ename)."', '$description', '$date', '$funds', '$location')";
  $result = mysqli_query($conn, $sql);
  if($result){
    $showAlert = true;
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
    
    <title>Add Events</title>
  </head>
  <body>
      <?php require 'nav.php' ?>
<?php
  if($showAlert){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong> Event added succesfully.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
}
?>
<div class="container">
    <h2 class="text-left" style="margin: 30px 0px 0px -70px; text-decoration: underline;" >Add Events</h1>
</div>
<form action="/society/add_event.php" method="post" style="margin: 50px">
  <div class="mb-3 col-md-6">
    <label for="ename" class="form-label">Name of Event:</label>
    <input type="text" class="form-control" id="ename" name="ename" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="description" class="form-label">Description of Event:</label>
    <input type="text" class="form-control" id="description" name="description" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="date" class="form-label">Date of Event:</label>
    <input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="funds" class="form-label">Funds Used:</label>
    <input type="text" class="form-control" id="funds" name="funds" required>
  <div class="mb-3">
    <label for="location" class="form-label">Location of Event:</label>
    <input type="text" class="form-control" id="location" name="location" required>
  </div>
  <input type="submit" name="submit" value="Submit">
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>