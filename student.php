<?php include('NavBar.php')?>

<section class="student mt-top">




        <?php

        include('config/connect.php');

        if (isset($_POST['query_student'])) {
            $studentID = $_POST["student_id"];

            $select_query = "SELECT * FROM `student` WHERE student_id ='$studentID'";

$result_query = mysqli_query($con, $select_query);
while ($row = mysqli_fetch_assoc($result_query)) {
    $id = $row['id'];
    $fName = $row['fName'];
    $lName = $row['lName'];
    $dept = $row['dept'];
    $student_id = $row['student_id'];
    $batch = $row['batch'];
    $section = $row['section'];
    $addr = $row['addr'];
    $dob  = $row['dob'];
    $mobile  = $row['mobile'];
    $student_photo  = $row['student_photo'];

        ?>
        <div class="info card p-5" key="<?php echo $id?>">
        <div class="d-flex justify-content-center m-auto w-full mb-3">
        <img class="w-25" src="admin_area/image/student/<?php echo $student_photo; ?>" alt="">
        </div>
        <p class="fs-4 ">Name: <span><?php echo $fName. " ". $lName;?><span></p>
        <p class="fs-4 ">ID: <span><?php echo $student_id;?><span></p>
        <p class="fs-4 ">Mobile: <span><?php echo $mobile;?><span></p>
        <p class="fs-4 ">Batch: <span><?php echo $batch;?><span></p>
        <p class="fs-4 ">Section: <span><?php echo $section;?><span></p>
        <p class="fs-4 ">Dept: <span><?php echo $dept;?><span></p>
        <p class="fs-4 ">Addr: <span><?php echo $addr;?><span></p>
        </div>
        <?php
        }
        } 
        else {
        ?>

    <div class="box">
            <form method="POST">
                <h2>Find Students Information</h2>
                <div class="ibox">
                    <input type="text" required="required" name="student_name">
                    <span>Student Name</span>

                </div>
                <div class="ibox">
                    <input type="ID" required="required" name="student_id">
                    <span>Student ID</span>

                </div>

                <button class="btn btn-student" type="submit" name="query_student">Search</button>
            </form>

            </div>

        <?php
        }

        ?>
</section>	
<?php include('footer.php')?>
