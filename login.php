<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <style>
    body {
      background-image: url('bgimg.jpg');
      background-size: cover;
    }

    form {
      background-color:#fff;
      margin-top: 8em;
      margin-left: 30em;
      margin-right: 10em;
      margin-bottom: 4em;
      padding: 30px;
          }
  </style>
  <title>Login</title>
</head>

<body>
  <div class="container">
    <form action = "config.php" method = "POST">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      <input type="submit" class="btn btn-primary" value = "login" name="login">
      <br>
      <center>Not Registered? <br><a href="register.php">Sign Up</a></center>
    </form>
  </div>
</body>

</html>