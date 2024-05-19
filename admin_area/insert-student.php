<?php
include('../config/connect.php');

if(isset($_POST['insert_student'])){

    $fName=$_POST['fName'];
    $lName=$_POST['lName'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $dept=$_POST['dept'];
    $student_id=$_POST['student_id'];
    $batch=$_POST['batch'];
    $section=$_POST['section'];
    $addr=$_POST['addr'];
    $mail=$_POST['mail'];
    $student_photo=$_FILES['student_photo']['name'];
    $tmp_student_photo=$_FILES['student_photo']['tmp_name'];

    $set = move_uploaded_file($tmp_student_photo,"./image/student/$student_photo");

        $insert_products = "INSERT INTO `student`(`fName`, `lName`, `mobile`, `dob`, `dept`, `student_id`, `batch`, `section`, `addr`, `student_photo`,`mail`) VALUES ('$fName','$lName','$mobile','$dob','$dept','$student_id','$batch','$section','$addr','$student_photo','$mail')";

        $result_query = mysqli_query($con, $insert_products);

        if ($result_query) {
            echo "<script>alert('Successfully insert the products')</script>";
        } else {
            echo "Error: " . mysqli_error($con);
     }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert products-Admin Dashboad</title>
    <!--bootstrape CSS ling-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!--font awesome link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--CSS file-->
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-light">


<h2 class="text-center">Insert Student</h2>


<div class="container mt-5 m-auto">
    <div class="row justify-content-center">
      <div class="col-md-9 border rounded">
            <form action="" method="POST" class="mb-2 p-5" enctype="multipart/form-data">
            <div class="mb-3">
            <label for="formFile" class="form-label">Student Photo</label>
            <input class="form-control" type="file" id="formFile"  name="student_photo" required>
          </div>


               <div class="row">
               <div class="col-6">
               <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fName">
              </div>
             
               </div>
               <div class="col-6">
               <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lName">
              </div>
               </div>
               </div>
              <div class="form-group mb-2 mt-2">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="mail">
              </div>
              <div class="form-group mb-2 ">
                <label for="mobile">Mobile</label>
                <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
              </div>
              <div class="form-group mb-2 ">
                <label for="student_id">Student ID</label>
                <input type="text" class="form-control" id="student_id" placeholder="Enter Student ID" name="student_id">
              </div>
              <div class="row">
               <div class="col-6">
               <div class="form-group">
                <label for="Batch">Batch</label>
                <input type="text" class="form-control" id="batch" placeholder="Type Designation" name="batch">
              </div>
             
               </div>
               <div class="col-6">
               <div class="form-group">
                <label for="lname">Department</label>
                  <select class="form-select" aria-label="Default select example" name="dept">
                  <option selected>Open this select dept.</option>
                  <option value="CSE">CSE</option>
                  <option value="Eco">Eco</option>
                  <option value="English">English</option>
                  <option value="English">EEE</option>
                  <option value="English">BBA</option>
                </select>
               </div>
               </div>
               </div>

               <div class="row mt-2">
               <div class="col-6">
               <div class="form-group">
                <label for="lname">Department</label>
                  <select class="form-select" aria-label="Default select example" name="section">
                  <option selected>Open this select Section</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                  <option value="D">D</option>
                  <option value="E">E</option>
                  <option value="F">F</option>
                  <option value="G">G</option>
                </select>
               </div>
               </div>
               <div class="col-6">
               <div class="form-group">
                <label for="dob">Birth Certificate No:</label>
                <input type="text" class="form-control" id="dob" placeholder="Type Designation" name="dob">
              </div>
             
               </div>
              
               </div>



              <div class="form-group mb-2 mt-2">
                <label for="addr">Address</label>
                <textarea class="form-control" id="addr" rows="3" placeholder="Enter Address" name="addr"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="insert_student">Submit</button>
            </form>
      </div>
    </div>
  </div>


<!--bootstrape Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>