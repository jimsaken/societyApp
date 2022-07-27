<?php



?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
      <?php require 'nav.php' ?>

<form action="add_event.php" method="post" style="margin: 50px">
  <div class="mb-3 col-md-6">
    <label for="event_name" class="form-label">Name of Event:</label>
    <input type="text" class="form-control" id="event_name" name="event_name" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="event_desc" class="form-label">Description of Event:</label>
    <input type="text" class="form-control" id="event_desc" name="event_desc" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="event_dt" class="form-label">Date of Event:</label>
    <input type="date" class="form-control" id="event_date" name="event_date" aria-describedby="emailHelp" required>
  </div>
  <div class="mb-3 col-md-6">
    <label for="event_fund" class="form-label">Funds Used:</label>
    <input type="text" class="form-control" id="event_fund" name="event_fund" required>
  <div class="mb-3">
    <label for="event_loc" class="form-label">Location of Event:</label>
    <input type="text" class="form-control" id="event_loc" name="event_loc" required>
  </div>
  <input type="submit" name="submit" value="Submit">
</form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>