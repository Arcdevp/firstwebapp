<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
      </head>
      <body>
      <div class="container">
      <h3 class="text-center"> Create New Account </h3>

      <form action="controller/users_controller.php" method="POST">
      <div class="form-group">
      <label class="form-label"> Fullname </label>
      <input name="fullname" type="text" class="form-control mb-1">
      </div>
      <div class="form-group">
      <label class="form-label"> Email </label>
      <input name="email" type="text" class="form-control mb-1">
      </div>
      <div class="form-group">
      <label class="form-label"> Username </label>
      <input name="username" type="text" class="form-control mb-1">
      </div>
      <div class="form-group">
      <label class="form-label"> Password </label>
      <input name="password" type="text" class="form-control mb-1">
      </div>
      <button name="register"class="btn btn-success w-100 mt-1 mb-1"> Sign Up </button>
      <div class="d-grid">
      <a href="login.php"> Already have an account
      </div>
      </form>
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>