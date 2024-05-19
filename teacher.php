<?php include('NavBar.php')?>
<section class="teacher mt-top">




        <?php

        include('config/connect.php');

        if (isset($_POST['query_teacher'])) {
            $teacherID = $_POST["teacher_id"];

            $select_query = "SELECT * FROM `teacher` WHERE teacher_id ='$teacherID'";

$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $teacher_id = $row['teacher_id'];
    $fName = $row['fName'];
    $lName = $row['lName'];
    $email  = $row['email'];
    $mobile = $row['mobile'];
    $addr = $row['addr'];
    $designation = $row['designation'];
    $dept = $row['dept'];

        ?>
        <div class="info card p-5">
        <p class="fs-4 ">Name: <span><?php echo $fName. " ". $lName;?><span></p>
        <p class="fs-4 ">ID: <span><?php echo $teacher_id;?><span></p>
        <p class="fs-4 ">email: <span><?php echo $email;?><span></p>
        <p class="fs-4 ">Mobile: <span><?php echo $mobile;?><span></p>
        <p class="fs-4 ">Designation: <span><?php echo $designation;?><span></p>
        <p class="fs-4 ">Dept: <span><?php echo $dept;?><span></p>
        <p class="fs-4 ">Addr: <span><?php echo $addr;?><span></p>
        </div>
        <?php
}

        } else {
        ?>
    <div class="box">
            <form method="POST">
                <h2>Find Teachers Information</h2>
                <div class="ibox">
                    <input type="text" required="required" name="teacher_name">
                    <span>Teacher Name</span>

                </div>
                <div class="ibox">
                    <input type="ID" required="required" name="teacher_id">
                    <span>Teacher ID</span>

                </div>

                <button class="btn btn-teacher" type="submit" name="query_teacher">Search</button>
            </form>

            </div>

        <?php
        }



        ?>




  

</section>
<?php include('footer.php')?>
