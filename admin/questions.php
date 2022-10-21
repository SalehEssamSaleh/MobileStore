<?php
  session_start();
  include '../include/connection.php';
  if($_SESSION['checkadmin'] == 0) {
    header("Location:index.php");
  }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Visitors Questions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
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
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="What you looking for?" aria-label="Search">
              <button class="btn btn-outline-warning" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
      
      <br>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            
              <br>
              <table class="table table-striped table-dark table-bordered border-warning align-middle text-center">
                  <tr>
                    <td>No.</td>
                    <td>User Name</td>
                    <td>Question</td>
                    <td>Answer</td>
                  </tr>
                  <?php
                    $sql = "select * from question";
                    $ret = mysqli_query($connection,$sql);
                    while($res=mysqli_fetch_assoc($ret)) {
                      echo '<tr>
                              <td>'.$res['id'].'</td>
                              <td>'.$res['user_name'].'</td>
                              <td>'.$res['question'].'</td>'
                    ?>
                    <td>
                      <a type="button" href="answer.php?id=<?php echo $res['id'] ?>" class="btn btn-primary">Answer</a>
                    </td>
                    <?php
                          echo '</tr>';
                    }
                  ?>
                  

                  <?php
                    
                  ?>
              </table>

          </div>
        </div>
      </div>

      <br><br>
      <!-- Footer -->
      
      <footer>
        <div class="container">
          <div class="col-lg-6">
            <br>
            <form class="text-light">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>
          <div class="col-lg-6 map">
            <br>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11790.502360324794!2d-71.12681146922506!3d42.37181791969329!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e377427d7f0199%3A0x5937c65cee2427f0!2sHarvard%20University!5e0!3m2!1sen!2seg!4v1663462427575!5m2!1sen!2seg" width="500" height="250" style="border:0;border-radius: 2%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </footer>
      

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>