<?php
include "db_conn.php";
$id = $_GET["id"];

if (isset($_POST["submit"])) {
  $first_name = $_POST['first_name'];
  $last_name = $_POST['last_name'];
  $email = $_POST['email'];
  $sex = $_POST['sex'];
  $year = $_POST['year'];
  $course = $_POST['course'];

  $sql = "UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`sex`='$sex', `year`='$year', `course`='$course' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: students.php?msg=Data updated successfully");
  } else {
    echo "Failed: " . mysqli_error($conn);
  }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <link rel="icon" href="udlogo.png">
  <link rel="stylesheet" href="style.css">


  <title>University of Darapidap - Edit Account</title>
</head>


<body>



<div class="headershape">
          
        </div>

    <div class="school1">
        <img src="schoolU.jpg" alt="">
    </div>


    <div class="t">
    <h2></h2>
    </div>

    <div class="hlogo">
    <img src="UD.png" alt="">
    </div>

   
   
</div>

</div>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `crud` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
          <div class="col">
            <label class="form-label">First Name:</label>
            <input type="text" class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">
          </div>

          <div class="col">
            <label class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">
          </div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email:</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row['email'] ?>">
        </div>

        <div class="form-group mb-3">
          <label>Gender:</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="sex" id="male" value="male" <?php echo ($row["sex"] == 'male') ? "checked" : ""; ?>>
          <label for="male" class="form-input-label">Male</label>
          &nbsp;
          <input type="radio" class="form-check-input" name="sex" id="female" value="female" <?php echo ($row["sex"] == 'female') ? "checked" : ""; ?>>
          <label for="female" class="form-input-label">Female</label>
        </div>



        <div class="mb-3">
          <label class="form-label">Year Level:</label>
          <input type="year" class="form-control" name="year" value="<?php echo $row['year'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Course:</label>
          <input type="course" class="form-control" name="course" value="<?php echo $row['course'] ?>">
        </div>

        

        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>



  
   
<div class="footerA">


<div class="footer2A">
<a href="index.php"> <img src="UD.png" alt=""> </a>
<div class="abtI">
    <h1>ABOUT</h1>
    <a href="aboutsystem.php">  <p>Student Information System</p> </a>
    <p>Team</p>
   </div>

   <div class="cnctA">
    <h1>CONTACT</h1>
    <p>(+   63) 961 7125654</p>
    <p>Darapidap, Candon City</p>
    <p>ispsccandonforum@edu.ph</p>
   </div>
</div>
</div>



<div class="footer3A">
<p>Copyright © 2024 - Melvin and Friends</p>
  

   

</div>

</div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>