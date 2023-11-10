<?php

if(isset($_POST["submit"])){
    $email=$_POST["email"];
    $password=$_POST["password"];

   
    $conn = new mysqli('localhost', 'root', '', 'comp');
    $sql="SELECT * FROM admin where email='$email' and password='$password'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count= mysqli_num_rows($result);
    if($count==1){
      echo
      "
      <script>alert('Login Sucessfully'); </script>
      ";
     header("location:homeE.php");
    }
    else{
      echo '<script>
      window.location.href="login.php";
      alert("Login Failed. Invalid email or password");
      
      </script>';
    }

}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login Admin</title>
    <link rel="stylesheet" href="admin.css">
    <style>  
  input[type="password"]{
    height:36px;
    width:60%;
    border-radius:6px;
    margin: 10px;
    padding-left: 20px;
    border: none;
    background: rgba(223, 221, 221, 0.822);
  }
  input[type="text"]{
    height:36px;
    width:60%;
    border-radius:6px;
    margin: 10px;
    padding-left: 20px;
    border: none;
    background: rgba(223, 221, 221, 0.822);
  }
    </style>
  </head>
  <body style="background-image: url(pic4.jpg);">
  <h2>Login Admin</h2>
  <hr>
    <fieldset style="background-color: black; color:white">
      
      <form action="" method="post" >
      <div class="bottom-text" style="margin-left:600px;">
                     <a href="index.php" style="list-style-type:none">Employee</a>
        </div>
        <table >
            <tr>
                <td> Email :</td>
                 <td>
                 <input type="text" name="email"required value="">
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                 <td>
                    <input type="password" name="password"required value="">
                </td>
            </tr>
        </table>
        <button type="submit"name="submit">Log in</button>
        <div class="bottom-text">
                    <p>Don't have an account? <a href="emp.php">Sign up</a></p>
        </div>

      </form>
    </fieldset>
  </body>
</html>