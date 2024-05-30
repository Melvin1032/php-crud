<?php
include "db_conn.php";
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

  <title>University of Darapidap - Students List</title>
</head>

<body>


<div class="headershape">
          
        </div>

    <div class="school1">
        <img src="schoolU.jpg" alt="">
    </div>


    <div class="t">
    <h2>STUDENTS LIST</h2>
    </div>

    <div class="hlogo">
    <a href="index.php"> <img src="UD.png" alt="">
    </div>

   
   
</div>

</div>



  

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th scope="col">ID</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Email</th>
          <th scope="col">Contact No.</th>
          <th scope="col">Address</th>
          <th scope="col">Sex</th>
          <th scope="col">Year Level</th>
          <th scope="col">Course</th>
          <th scope="col">Action</th>
          
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `crud`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["first_name"] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["email"] ?></td>
            <td><?php echo $row["phone"] ?></td>
            <td><?php echo $row["address"] ?></td>
            <td><?php echo $row["sex"] ?></td>
            <td><?php echo $row["year"] ?></td>
            <td><?php echo $row["course"] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
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