<?php
	include "./mdb/mdbcdn.html";
?>
		<!--Navbar -->
<nav class="mb-1 navbar navbar-expand-lg navbar-dark info-color">
<a class="navbar-brand" href="index.php"><img class="rounded-circle" src="images/main_icon.jpg" alt="main icon" height="40" width="60" /></a>
  <a class="navbar-brand" href="#">Appointments</a>
  <a class="navbar-brand" href="admin_doctors.php">Doctors</a>
  <a class="navbar-brand" href="admin_pat.php">Patients</a>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="admanage_acc.php">My account</a>
          <a class="dropdown-item" href="admin_logout.php">Log out</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!--/.Navbar -->