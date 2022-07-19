<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>login Page</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
  <form action="log_db.php" method="post">
  <h1><h1 style="color: white;">Online Exam Panel</h1>
  <div class="container mt-4" style="background-color: white;">
    <div class="row">
      <div class="col-12 col-md-4">
        <img src="img.gif" alt="..." class="img-thumbnail">
      </div>
      <div class="col-12 col-md-8">
        <div  class="form p-2 ">
          <h2>Admin Login Panel</h2>
          <input type="email" name="admin_email" placeholder="Enter Email Here"><br>
          <input type="password" name="password" placeholder="Enter Password Here"><br>
          <input type="submit" style="margin-top: 10px; width:30%; color:white; background-color: #343a40;" class="btn" value="Login">
        </div>
      </div>
    </div>
  </div>
</form>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"></script>
</body>

</html>>