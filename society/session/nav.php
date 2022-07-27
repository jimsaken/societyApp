<link href="nav.css" rel="stylesheet">
<?php

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin = true;
}
else{
    $loggedin = false;
}
    echo '<nav class="navbar navbar-expand-lg navbar-light bg-lighst">
  <div class="container-fluid" style="background-color: #0082e6; font-family: montserrat">
    <a class="navbar-brand" href="home.php" style="color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 50px;
    font-weight: bold;">Sunflower Housing Society</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
      if($loggedin){
          echo'<li class="nav-item">
          <a class="nav-link" href="/society/session/add_event.php" style="color: white">Add Events</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/society/session/event_list.php" style="color: white">Event List</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/society/session/members.php" style="color: white">Society Members</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/society/session/rent.php" style="color: white">Rent Reciept</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/society/session/profile.php" style="color: white">Profile</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/society/session/edit_profile.php" style="color: white">Edit Profile</a>
        </li> 
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color: white">Logout</a>
        </li>';
      }
        
if(!$loggedin){
    echo   '<li class="nav-item">
          <a class="nav-link" href="login.php" style="color: white">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="signup.php" style="color: white">Signup</a>
        </li>';
}

       

echo      '</ul>

    </div>
  </div>
</nav>';
?>
