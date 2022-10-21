<?php
  session_start();
  include 'include/connection.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mobile Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
  <body>
    <!-- NavBar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="/">Mobile Store</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Mobile Types
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="samsung.php">Samsung</a></li>
                  <li><a class="dropdown-item" href="xiaomi.php">Xiaomi</a></li>
                  <li><a class="dropdown-item" href="honor.php">Honor</a></li>
                  <li><a class="dropdown-item" href="huawei.php">HUAWEI</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="../">All Types</a></li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="What you looking for?" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

      <div class="container">
        <div class="row">
          <?php
            $sql = "select * from items where category='samsung'";
            $ret = mysqli_query($connection,$sql);
            while($res=mysqli_fetch_assoc($ret)){
              echo '
              <div class="col-lg-4 col-sm-12">
                <center class="thumbnil">
                  <h5><b>'.$res['name'].'</b></h5>
                  <img src="img/'.$res['image'].'" alt="">
                  <hr>';
                  ?>
                  <a type="button" href="mobile-detials.php?id=<?php echo $res['id'] ?>" class="btn btn-primary">Mobile Description</a>
                 <?php echo '</center>
                </div> ';
              }
          ?>
        </div>
      </div>

      <br><br>
      <!-- Footer -->
      
      <footer>
        <div class="container">
          <div class="col-lg-6">
            <br>
            <form class="text-light" action="" method="post">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="user" aria-describedby="emailHelp" placeholder="Put your user name here.">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control"name="pass" id="exampleInputPassword1" placeholder="Put your Password here.">
              </div>
              <input type="submit" name="signin" value="Sign in" class="btn btn-primary">
              <?php
                if(isset($_POST['signin'])) {
                  $user = $_POST['user'];
                  $pass = $_POST['pass'];
                  $sql = "select * from users where user_name = '$user' and password = '$pass' ";
                  $ret = mysqli_query($connection,$sql);
                  while($res = mysqli_fetch_assoc($ret)) {
                    
                    $_SESSION['user'] = $user;
                    echo '<script>window.location.href="welcome.php"</script>';
                  }
                  echo '<br><br><p>Sorry either User or Password is not correct</p>';
                }


              ?>
            </form>
          </div>
          <div class="col-lg-6 map">
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11790.502360324794!2d-71.12681146922506!3d42.37181791969329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377427d7f0199%3A0x5937c65cee2427f0!2sHarvard%20University!5e0!3m2!1sen!2seg!4v1663462427575!5m2!1sen!2seg" width="500" height="275" style="border:0;border-radius: 2%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </footer>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>