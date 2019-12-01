<?php
	include "./mdb/mdbcdn.html";
?>
		<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark success-color">
<a class="navbar-brand" href="index.php"><img class="rounded-circle" src="images/main_icon.jpg" alt="main icon" height="40" width="60" /></a>
  <a class="navbar-brand" href="doc_home.php">My Home</a>
  <a class="navbar-brand" href="#">Appointments</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="doc_logout.php">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->