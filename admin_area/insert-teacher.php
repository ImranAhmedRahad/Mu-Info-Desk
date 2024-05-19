

<?php

include('../config/connect.php');
if(isset($_POST['insert_teac'])){
  $fName = $_POST['fName'];
  $lName = $_POST['lName'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $teacher_id = $_POST['teacher_id'];
  $addr = $_POST['addr'];
  $designation = $_POST['designation'];
  $dept = $_POST['dept'];

  // select data from data base
  $select_query="SELECT * FROM `teacher` WHERE teacher_id='$teacher_id'";
  $result_select= mysqli_query($con, $select_query);
  $number=mysqli_num_rows($result_select);
  if($number>0){
    echo "<script>alert('Same Teacher is present inside the database')</script>";
  }else{

  $insert_query = "INSERT INTO `teacher` ( `teacher_id`, `fName`, `lName`, `email`, `mobile`, `addr`, `designation`, `dept`) VALUES ('$teacher_id','$fName','$lName','$email','$mobile','$addr','$designation','$dept')";
  $result = mysqli_query($con, $insert_query);
  if($result){
    echo "<script>alert('Category has been inserted successfully')</script>";
  }

}}
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
<h2 class="text-center">Insert Teacher</h2>


<div class="container mt-5 m-auto">
    <div class="row justify-content-center">
      <div class="col-md-9 border rounded">
            <form action="" method="POST" class="mb-2 p-5">
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
                <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email">
              </div>
              <div class="form-group mb-2 ">
                <label for="mobile">Mobile</label>
                <input type="tel" class="form-control" id="mobile" placeholder="Enter Mobile Number" name="mobile">
              </div>
              <div class="form-group mb-2 ">
                <label for="teacher_id">Teacher ID</label>
                <input type="text" class="form-control" id="teacher_id" placeholder="Enter Teacher ID" name="teacher_id">
              </div>
              <div class="row">
               <div class="col-6">
               <div class="form-group">
                <label for="fname">Designation</label>
                <input type="text" class="form-control" id="fname" placeholder="Type Designation" name="designation">
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

              <div class="form-group mb-2 mt-2">
                <label for="addr">Address</label>
                <textarea class="form-control" id="addr" rows="3" placeholder="Enter Address" name="addr"></textarea>
              </div>
              <button type="submit" class="btn btn-primary" name="insert_teac">Submit</button>
            </form>
      </div>
    </div>
  </div>

<!--bootstrape Js link-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>