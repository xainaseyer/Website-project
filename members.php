<?php
session_start();
if(empty($_SESSION['name']))
{
	header('location:index1.php');
}
?>
<html>
<head>
	<title>Dashboard</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="dashboard.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-lock fa-fw me-3"></i><span>Dashboard</span></a
        >
        <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Members</span>
        </a>
        <a href="index1.php" class="list-group-item list-group-item-action py-2 ripple"
          ><i class="fas fa-chart-line fa-fw me-3"></i><span>Log out</span></a
        >
      </div>
    </div>
  </nav>
  <!-- Sidebar -->

  <!-- Navbar -->
  <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Toggle button -->
      <button
        class="navbar-toggler"
        type="button"
        data-mdb-toggle="collapse"
        data-mdb-target="#sidebarMenu"
        aria-controls="sidebarMenu"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <i class="fas fa-bars"></i>
      </button>

      <!-- Brand -->
      <a class="navbar-brand" href="#">
        <img
          src="assets/upraxis.png"
          height="50"
          alt="upraxis"
          loading="lazy"
        />
      </a>
  </nav>
  <!-- Navbar -->
</header>
<!--Main Navigation-->

<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Authorized Personnel</th>
      <th scope="col">Role</th>
      <th scope="col">ID Number</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include('connection.php');

    $sql = "SELECT * FROM `tbl_members`;";

   $result = $connection->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
    <tr>
      <td>".$row["name"]."</td>
      <td>".$row["role"]."</td>
      <td>".$row["id"]."</td>
      <td><a href=\"edit.php?id=".$row["id"]."&name=".$row["name"]."&role=".$row["role"]."\" class='btn btn-success'>edit</a></td>
      <td><a href=\"sqlHelper_delete.php?id=".$row["id"]."\" class='btn btn-danger'>delete</a></td>
    </tr>";
  }
} else {
  echo "0 results";
}
$connection->close();

    ?>
    <tr>
  </tbody>
</table>
<a href="add.php">Add +</a>
  </div>
</main></body>
<!--Main layout--></html>