<?php
require_once "config.php";
if(!isset($_SESSION["user_id"])){
    header("Location: index.html");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>IT 2600</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">IT 2600</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="schedule.php">Schedule  </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="sections.php">Sections</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="add-section.php">Add Section</a>
            </li>
          </ul>
          <?php
          if(!isset($_SESSION["user_id"])){
          ?>
          <form class="d-flex">
            <a href="signup.php" class="btn btn-outline-primary btn-sm me-2">Sign up</a>
            <a href="login.php" class="btn btn-primary btn-sm">Login</a>
          </form>
          <?php }else{ ?>
          <form class="d-flex">
            <a href="logout.php" class="btn btn-primary btn-sm">Logout</a>
          </form>
            <?php }?>
        </div>
      </div>
    </nav>

    <div class="container py-5">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="mb-4">Sections</h2>
          <div class="card p-2 bg-light border p-5">
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Add Class</th>
                    <th scope="col">Crn</th>
                    <th scope="col">Course ID</th>
                    <th scope="col">Semester</th>
                    <th scope="col">Room</th>
                    <th scope="col">Days</th>
                    <th scope="col">Times</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $sql = mysqli_query($conn, "SELECT * FROM sections");
                    if(mysqli_num_rows($sql) > 0){
                      while($row = mysqli_fetch_array($sql)){
                  ?>
                    <tr>
                      
                    <td><a href="addclass.php?crn=<?php echo $row["crn"]; ?>&semester=<?php echo $row["semester"]; ?>" class="btn btn-primary btn-sm">Add Class</a></td>
                    <td><?php echo $row["crn"]; ?></td>
                    <td><?php echo $row["course_id"]; ?></td>
                    <td><?php echo $row["semester"]; ?></td>
                    <td><?php echo $row["room"]; ?></td>
                    <td><?php echo $row["days"]; ?></td>
                    <td><?php echo $row["times"]; ?></td>
                    </tr>
                    <?php 
                      }
                    }
                    ?>
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
