<?php
    $connection=mysqli_connect('localhost','root','','MyDB');

   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
<!-- css design -->
  <style>
    label{
      font-weight:bold;
    }
  </style>
    <!-- Link with Bootstrap for responsive design -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <!-- Nav var design start -->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">LOGO</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="font-weight-bold text-white nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="font-weight-bold text-white nav-link" href="#">Registration</a>
      </li>
      <li class="nav-item">
        <a class="font-weight-bold text-white nav-link" href="data.php">Show User Data</a>
      </li>  
      
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search.php" method="post">
      <input class="form-control mr-sm-2" name="searchuser" type="search" placeholder="Search" aria-label="Search">
      <button class="font-weight-bold text-white btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- Nav var design finish -->

<br><br>
<!-- Form Validation Check -->
<?php
  include 'validation.php';
?>
    <!-- Form Design for Registration -->

    <div class="container">
      <div class="row">
        <div class="col md-5">

        <!-- Registration Form Design Start -->
          <form class="form-group" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
          
          <div class="form-group text-center btn-primary p-3">
            <h2> Registration Form</h2>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Username</label>
              <input type="text"name="username" placeholder="Type Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted"class="error"> <?php echo $usererr;?></small>
          </div>
            
          <div class="form-group">
              <label for="exampleInputEmail1">Password</label>
              <input type="password"name="password" placeholder="Type password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted"class="error"> <?php echo $passerr;?></small>
          </div>

          <div class="form-group">
              <label for="exampleInputEmail1">Email</label>
              <input type="text"name="email" placeholder="Type your Valid Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              <small id="emailHelp" class="form-text text-muted"class="error"> <?php echo $emailerr;?></small>
          </div>

          <div class="form-group">
              <label for="">Address</label>
              <input type="text"name="address" placeholder="Type your Address" class="form-control" id="" aria-describedby="" placeholder="Enter email">
              <small id="" class="form-text text-muted"class="error"> <?php echo $adderr;?></small>
          </div>

          <div class="form-group">
              <label for="">Web Address</label>
              <input type="text"name="webadd" placeholder="Type your Web Address" class="form-control" id="" aria-describedby="" placeholder="Enter email">
              <small id="" class="form-text text-muted"class="error"> <?php echo $weberr;?></small>
          </div>

          <div class="form-group">
              <label for="">Date of Birth</label>
              <input type="date"name="dob" placeholder="Type Date of Birth" class="form-control" >
              <small id="" class="form-text text-muted"class="error"> <?php echo $doberr;?></small>
          </div>

          <div class="form-group">
              <label for="">Gender</label> <br>
              <input type="radio"name="gender" value="male" >Male
              <input type="radio"name="gender" value="Female" >Female
              <input type="radio"name="gender" value="Others" >Others
              <small id="" class="form-text text-muted"class="error"> <?php echo $gendererr;?></small>
          </div>

          <div class="form-group">
              <label for="">Number of Course Enrolled</label>
              <input type="text"name="numofcourse" placeholder="Type Number of Courses Enrolled" class="form-control" >
              <small id="" class="form-text text-muted"class="error"> <?php echo $numerr;?></small>
          </div>

              <input type="submit" name="submit" value="Register Now" class="btn btn-primary">

          </form>
          <!-- Registration Form Design End -->
        </div>

        <!-- To see User Data -->
        <div class="col md-5">
          <a href="data.php"> <button class="btn btn-primary"> To See User data, click Here</button> </a>
          <br><br>
          <!-- For searching -->
          <h2>Search Here</h2>

          <form class="form-group" action="search.php" method="post">
            <div class = "form-group">
                <label for="searchuser"></label>
                <input type="text" name="searchuser" placeholder="Search User"class="form-control">
                <input type="submit" name="search" value="Search" class="btn btn-secondary mt-3">
            </div>
                
          </form>

        </div>
        </div>

      </div>

    </div>

  </body>
</html>
