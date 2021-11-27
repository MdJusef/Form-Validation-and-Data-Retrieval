<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col md-5 text-center">
          <h2 class="m-5 font-weight-bold">Search Results</h2>
          <?php
          $connection=mysqli_connect('localhost','root','','MyDB');
          if($_SERVER["REQUEST_METHOD"] == "POST")
          {
            $username = mysqli_real_escape_string($connection,$_POST['searchuser']);
            $query="select * from students where username = '$username'";
            $result=mysqli_query($connection,$query);
              if($result)
              {
              if(mysqli_num_rows($result)>0){
                              echo "<table class='col-12 table table-bordered'>
                                  <tr>
                                      <td class='font-weight-bold'>
                                          Username
                                      </td>
                                      <td class='font-weight-bold'>
                                          Email
                                      </td>
                                      <td class='font-weight-bold'>
                                          Address
                                      </td>
                                      <td class='font-weight-bold'>
                                          Web Address
                                      </td>
                                      <td class='font-weight-bold'>
                                          Gender
                                      </td>
                                      <td class='font-weight-bold'>
                                          Date of Birth
                                      </td>
                                      <td class='font-weight-bold'>
                                          Courses
                                      </td>
                                  </tr>
                            
                                  ";
                while($ans=mysqli_fetch_array($result))
                {
                                  echo "<tr>";
                                              echo "<td>". $ans['username'] ."</td>";
                                              echo "<td>". $ans['email'] ."</td>";
                                              echo "<td>". $ans['address'] ."</td>";
                                              echo "<td>". $ans['web'] ."</td>";
                                              echo "<td>". $ans['gender'] ."</td>";
                                              echo "<td>". $ans['dob'] ."</td>";
                                              echo "<td>". $ans['numofcourse'] ."</td>";

                                  echo "</tr>";
                  }

                            echo "</table>";

                }else
                echo "No Result Found";
                }
                  
              }
              mysqli_close($connection);
                             ?>

            <br><br> <a href="index.php"> <button class="btn btn-primary"> GO BACK TO HOME PAGE</button> </a>

        </div>
      </div>
    </div>

  </body>
</html>
