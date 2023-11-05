<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href="frontend.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Document</title>
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
        </li>
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
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
  
    <h1 style="text-align: center;">Form</h1>
 
  <!-- Option 1: Bootstrap Bundle with Popper -->

  <center>
    <form action="index.php" method="POST">
      <!-- Name -->
      <div class="mb-3 w-25">
        <label for="exampleInputName1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleName1" aria-describedby="nameHelp" name="name" placeholder="enter name">
        <div id="emailHelp" class="form-text"></div>
        <!-- Email -->
        <div class="mb-3 w-100">
          <label for="exampleInputEmail1" class="form-label">Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="enter email">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <!-- Gender -->
        <div class="form-check-inline w-100">
          <label>Gender: </label>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
          <input class="form-check-input" type="radio" name="gender" id="RadioDefault1" value="female">
          <label class="form-check-label" for="flexRadioDefault1">female</label>&nbsp;


          <input class="form-check-input" type="radio" name="gender" id="RadioDefault1" value="male">
          <label class="form-check-label" for="flexRadioDefault1">male</label><br><br>
        </div>
        <!-- City -->
        <div class="form-check">
          <label>Select City</label>

          <select class="form-select form-select-sm mb-2 w-100" name="city" value="city" placeholder="city">
            <option value="Kalyan">Kalyan</option>
            <option value="Dombivali">Dombivali</option>
            <option value="Ghatkopar">Ghatkopar</option>
            <option value="Andheri">Andheri</option>
            <option value="Dadar">Dadar</option>
            <option value="Kurla">Kurla</option>
            <option value="Bandra">Bandra</option>
            <option value="Kandivali">Kandivali</option>
          </select>
        </div>
        <br><button type="submit">Submit</button>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </form>
  </center>

</body>
</html>