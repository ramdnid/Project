<!DOCTYPE html>
<html>
<head>
  <title> Login Admin </title>

    <!-- /* ---- CSS Bootstrap ---- */ -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- /* ---- CSS Baru ---- */ -->
  <link rel="stylesheet" type="text/css" href="../css2.css">

</head>
<body>

<div class="container">
  <div class="login">

      <form method="post" action="proses_login.php">
        <h2 class="text-center"> Login Admin</h2>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Masukkan Username">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan Password Password">
        </div>
        <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
      </form>
      <footer>
        <div class="container text-center">
          <div class="footer">
            <div class="col-sm-12">
              
              <p> &copy;Copyright 2019 | built by. <a href="http://instagram.com/ramdn_b"> Ramadhan Boedi </a> </p>

            </div>
          </div>
        </div>
        </div>
       </div> 

</footer>

    <!--      Java Script Boostrap                -->
    <!--      Optional JavaScript                 -->
      <!--      jQuery first, then Popper.js, then Bootstrap JS   -->

    <script src="../bootstrap/jquery/jquery-3.3.1.slim.min.js"></script>
      <script src="../bootstrap/jquery/popper.min.js"></script>
      <script src="../bootstrap/jquery/bootstrap.min.js"></script>





</body>
</html>



<!-- <!DOCTYPE html>
<html lang="en">

  <head>

  <title>Login Admin</title>

  </head>

  <body class="bg-dark">

    <div class="container">
      <form method="post" action="proses_login.php">
              <table>
                <tr>
                  <td><label for="username">Username</label></td>
                  <td>:</td>
                  <td><input type="text" name="username" id="username" placeholder="Masukkan Username"></td>
                </tr>
                <tr>
                  <td><label for="password">Password</label></td>
                  <td>:</td>
                  <td><input type="password" name="password" id="password" placeholder="Masukkan Password"></td>
                </tr>
                <tr>
                  <td></td>
                  <td></td>
                  <td><button type="submit" name="submit" id="submit">Login!</button></td>
                </tr>
              </table>
      </form>
  </body>

</html> -->


