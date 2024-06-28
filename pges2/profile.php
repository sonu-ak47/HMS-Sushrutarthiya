<?php 


session_start();
                
              $server = "localhost";
              $username = "root";
              $password = "";
              $dbname = "hospital_col";
                  $con = mysqli_connect($server,$username,$password,$dbname);
                  if(! $con){
                      die("connection faled due to :");
                  }
                  ?>
                  <!-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                    <strong> <?php echo "Connected Successfully !"; ?> </strong> 
                  </div> -->
                  
                  <script>
                    $(".alert").alert();
                  </script>
                 
                <?php
             

                $profile = $_SESSION['Aus'];

                if($profile == true){

                }
                else{
                  header("location:login admin.php");
                }

                  $que1= "SELECT * FROM `register` WHERE 1";
                  $result1 = mysqli_query($con,$que1);
              
                 
                ?>  
                
                <?php
                  $que2= "SELECT * FROM `appointment` WHERE 1";
                  $result2 = mysqli_query($con,$que2);
              
                  
                ?> 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="profile.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
</head>
<body>
<header>
    <nav class="section__container nav__container">
        <a href="../tips.php" style="text-decoration:none;"><div class="nav__logo">ADMIN DASHBOARD</div></a>
        <a href="../logout_admin.php"><button type="button" class="btn btn-danger" id="logout" style="background-color:red;">Logout</button></a>
    </nav>
</header>

<div class="section__container">
    <div class="alltab">
        <h3>New Registrations</h3>
        <table class="table table-striped" style="margin-right:30px;">
            <thead>
            <tr>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Password</th>
                <th>Created At</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody >
            <!-- PHP code to fetch and display registration data -->
            <tr >
            <?php
              
              while($row = mysqli_fetch_assoc($result1)) { ?>

                <td> <?php  echo  $row['name']; ?> </td>
                <td> <?php  echo $row['phone']; ?> </td>
                <td> <?php  echo $row['email']; ?> </td>
                <td> <?php  echo $row['confirm']; ?> </td>
                <td> <?php  echo $row['created_at']; ?> </td>
                <td><a href="../update_reg.php?uid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning">Update</button></a></td>
                <td><a href="../delete_reg.php?uid=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <?php }?>
            
            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

    <div class="alltab">
        <h3>Appointments</h3>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Created At</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            </thead>
            <tbody>
            <!-- PHP code to fetch and display appointment data -->
            <tr>
            <?php
              
              while($row = mysqli_fetch_assoc($result2)) { ?>

                <td> <?php  echo  $row['Firstname']; ?> </td>
                <td> <?php  echo $row['Lastname']; ?> </td>
                <td> <?php  echo $row['address']; ?> </td>
                <td> <?php  echo $row['phone']; ?> </td>
                <td> <?php  echo $row['created_at']; ?> </td>
                <td><a href="../update_app.php?uid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-warning">Update</button></a></td>
                <td><a href="../delete_app.php?uid=<?php echo $row['id'];?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
            <?php }?>
            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

   
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>