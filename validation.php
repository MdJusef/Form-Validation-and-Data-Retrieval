<?php
//form fill up code.........................
    $username=$password=$email=$dob=$address=$webadd=$numofcourse=$gender=$usererr=$passerr=$emailerr=$doberr=$adderr=$weberr=$gendererr=$numerr="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
      //code for username.....................................................
      if(empty($_POST["username"]))
      {
        $usererr= "<label class='text-danger'>* Username is Required</label>";
      }
      else
      {

        if(strlen($_POST["username"])<5 or strlen($_POST["username"])>20)
        {
          $usererr= "* Username Should not be lower than 5 characters or Exceed 20 characters ";
        }
        else
        {
          $username= test_input($_POST["username"]);
        }
      }
      //code for password validation
      if(empty($_POST["password"]))
      {
        $passerr= "<label class='text-danger'>* Password is Required</label>";
      }
      else
      {

        if(!empty($_POST["password"]) && $_POST["password"] != "" ){

          if (strlen($_POST["password"]) <= '4') {
              $passerr .= "<label class='text-danger'>* Your Password Must Contain At Least 4 strings !</label>";
          }
          elseif(!preg_match("#[0-9]+#",$_POST["password"])) {
              $passerr .= "<label class='text-danger'>* Your Password Must Contain At Least 1 Number !</label>";
          }
          elseif(!preg_match("#[A-Z]+#",$_POST["password"])) {
              $passerr .= "<label class='text-danger'>* Your Password Must Contain At Least 1 Capital Letter !<label>";
          }
          elseif(!preg_match("#[a-z]+#",$_POST["password"])) {
              $passerr .= "<label class='text-danger'>* Your Password Must Contain At Least 1 Lowercase Letter !</label>";
          }
          elseif(!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $_POST["password"])) {
              $passerr .= "<label class='text-danger'>* Your Password Must Contain At Least 1 Special Character !</label>";
          }
      }
    }
      //code for email validation
      if(empty($_POST["email"]))
      {
        $emailerr= "<label class='text-danger'>* Email is Required</label>";
      }
      else
      {
        $email= test_input($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
          $emailerr= "<label class='text-danger'>* Email is not Valid. Type a valid email</label>";
        }

      }
      //code for address validation...............................
      if(empty($_POST["address"]))
      {
        $adderr= "<label class='text-danger'>* Address is Required</label>";
      }
      else
      {
        $address= test_input($_POST["address"]);

      }
      //code for web address validation
      if(empty($_POST["webadd"]))
      {
        $weberr="<label class='text-danger'>* Web Address is Required</label>";
      }
      else
      {
        $webadd= test_input($_POST["webadd"]);
        if(!filter_var($webadd, FILTER_VALIDATE_URL))
        {
          $weberr= "<label class='text-danger'>* Web address must follow the standard url</label>";
        }

      }
      //code for date of birth validation
      if(empty($_POST["dob"]))
      {
        $doberr= "<label class='text-danger'>* Date of Birth is Required</label>";
      }
      else
      { //else part check user age is greater than 18 or not
        $date1 = new DateTime($_POST["dob"]);
        $date2 = new DateTime("now");
        $interval = $date1->diff($date2);
        $age = $interval->y;
        if($age<18)
        $doberr= "<label class='text-danger'>* You are not adult</label>";
       else
        $dob= test_input($_POST["dob"]);

      }
      //code for gender validation
      if(empty($_POST["gender"]))
      {
        $gendererr= "<label class='text-danger'>* Gender field is Required</label>";
      }
      else
      {
        $gender= test_input($_POST["gender"]);

      }
      //code for number of course enrolled validation
      if(empty($_POST["numofcourse"]))
      {
        $numerr= "<label class='text-danger'>* Number of Courses field is Required</label>";
      }
      else
      {
        $numofcourse= test_input($_POST["numofcourse"]);
        if((is_int($numofcourse)) && (int)$numofcourse > 0 )
        {
          $numerr="<label class='text-danger'>* Typed value is not positive integer</label>";
        }

      }
      if(empty($usererr)&&empty($passerr)&&empty($emailerr)&&empty($adderr)&&empty($weberr)&&empty($gendererr)&&empty($doberr)&&empty($numerr))
      {
        $insert= "insert into students values('$username','$password','$email','$address','$webadd','$dob','$gender','$numofcourse')";
        if(mysqli_query($connection, $insert))
          {
            echo 
            
            "<p class='text-center font-weight-bold m-5'>!!!!!!!!Registered Successfully!!!!!!!!!!</p>";

          }
      }
      else
      {
        echo "<p class='text-center font-weight-bold m-5'>!!!!!!!!!Some problem facing in entity!!!!!!!!!!</p>";;
      }
    }

    function test_input($data)
    {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
    mysqli_close($connection);
    }
?>