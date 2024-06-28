<?php 
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
                    <strong> <?php //echo "Connected Successfully !"; ?> </strong> 
                  </div> -->
                  
                  <script>
                    $(".alert").alert();
                  </script>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="update.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  <div id="main">
    <?php if(isset($_GET['uid'])) {
      
      $id=$_GET['uid'];
      $q4= "SELECT * FROM `appointment` WHERE `id` = '$id'";
      $result = mysqli_query($con,$q4);
      
    }?>
  <?php while($row = mysqli_fetch_assoc($result)) { ?>

  <form method="POST" idn ="<?php echo $id ?>">

        <div class="form-group">
             <label for="">FirstName</label>
             <input type="text" value ="<?php echo $row['Firstname']; ?>" name ="ufname" id="name" class="form-control" placeholder="Please enter your name" aria-describedby="helpId" Required> 
             
        </div>

        <div class="form-group">
             <label for="">LastName</label>
             <input type="text" value ="<?php echo $row['Lastname']; ?>" name ="ulname" id="email" class="form-control" placeholder="Please enter your email" aria-describedby="helpId" Required>
             
        </div>

        <div class="form-group">
             <label for="">Address</label>
             <input type="text" value ="<?php echo $row['address'];  ?>" name ="uadd" id="phone" class="form-control" placeholder="Please enter your phone" aria-describedby="helpId" Required>
            
        </div>

        <div class="form-group">
             <label for="">Phone</label>
             <input type="number" value ="<?php echo $row['phone']; ?>" name ="uphone" id="phone" class="form-control" placeholder="Please enter your phone" aria-describedby="helpId" Required>
            
        </div>

           <input type="submit" name="update1" placeholder="Update">
           
          </form>
        <?php } ?>
        <?php 
        if(isset($_POST['update1'])){
          $idn1 = $id;
          $ufname=$_POST['ufname'];
          $ulname=$_POST['ulname'];
          $uadd=$_POST['uadd'];
          $uphone=$_POST['uphone'];
         
      
          $q10= "UPDATE `appointment` SET `Firstname`='$ufname',`Lastname`='$ulname',`address`='$uadd',`phone`='$uphone' WHERE `id`='$idn1';";
          $result = mysqli_query($con,$q10);
        
          if($con -> query($q10)==true){
          ?>  
              
              <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
                <strong><?php echo"updated successfully !";
      ?></strong> 
              </div>
              
              <script>
                $(".alert").alert();
              </script>
      
          <?php } 
        header("location:reception.php");
          
        }
         
          

        ?>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
<?php 


?>