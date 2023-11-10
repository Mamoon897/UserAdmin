<?php
    $conn = new mysqli('localhost', 'root', '', 'comp');
    $sql="SELECT * FROM employee";
    $result=mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        table{
            margin:0 auto;
            font-size:large;
            border:1px solid black;
        }
        h1{
            text-align:center;
            color:green;
            font-size:xx-large;
            font-family:'Gill Sans','Gill Sans MT','Calibri','Trebuchet MS','sans-serif';
        }
        td{
            background-color:#E4F5D4;
            border:1px solid black;
        }
        th,td{
            font-weight:bold;
            border:1px solid black;
            padding: 10px;
            taxt-align: center;
        }
        td{
            font-weight:lighter;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item" >
        <a class="nav-link" href="homeE.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="loginA.php">Logout</a>
      </li>
    </ul>
    <!-- <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form> -->
  </div>
</nav>
   
    <section>
   
    <h1 >Employee Details</h1>
        <table >
            <th>Name</th>
            <th>Age</th>
            <th>Mobile No.</th>
            <th>Email</th>
            <th>Joining Date</th>
            <th>Country</th>
            <th>Gender </th>
            <th>Job Role </th>
            <th>Password</th>
            <?php
            while($rows=$result->fetch_assoc())
            {
                ?>

                <tr>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['age'];?></td>
                <td><?php echo $rows['contact'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['joiningdate'];?></td>
                <td><?php echo $rows['country'];?></td>
                <td><?php echo $rows['gender'];?></td>
                <td><?php echo $rows['jobrole'];?></td>
                <td><?php echo $rows['password'];?></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </section>
</body>
</html>