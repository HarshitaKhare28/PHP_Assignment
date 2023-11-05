<?php 
require_once "functions.php";
require_once "User.php";
$pdo = connectToDb();
$datas = selectAll($pdo,'data','User'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="frontend.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Welcome</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Contact Us</a>
        </li>
          </ul>
      <ul class = "navbar-nav ms-auto mb-2 mb-lg-0" >
      <li class="nav-but">
          <a class="btn btn-outline-light" href="#">Sign Up</a>
        </li>
        <li class="nav-but">
          <a class="btn btn-outline-light" href="#">Log In</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 style="text-align: center;">Database Table</h1>
     <!-- table -->
    <table border=5 cellpadding=10 cellborder=5 align='center' style="margin-top: 3%;">
        <thead>
        <tr>
            <th>Sr.no</th>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>City</th>
        </tr>
        <?php foreach($datas as $value): ?>
                    <tr>
                        <td><?= $value->id; ?></td>
                        <td><?= $value->name; ?></td>
                        <td><?= $value->email; ?></td>
                        <td><?= $value->gender; ?></td>
                        <td><?= $value->city; ?></td>
                    </tr>
                    <?php  endforeach; ?>
                   
    </table><br>   
    <center><a class="btn btn-primary" href="form.php" role="button">Back to form </a></center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
