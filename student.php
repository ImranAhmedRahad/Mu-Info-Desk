<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<title>Student-Info</title>
	<style>
*{ 
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Courier New', Courier, monospace;
   
}
body{ 
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
       /* background: #182225 */
   background-image: url(image/2.222.jpg);
   background-size:cover; 
   background-position: 0cap; 
 
}
.box{ 
    position: relative;
    width: 380px;
    height: 420px;
    background: rgb(53, 67, 92);
    border-radius: 7px;
}
.box form{
    position: absolute;
    inset: 4px;
    padding: 50px 40px;
    border-radius: 8px;
    z-index: 2;
    display: flex;
    flex-direction: column;
}
.box form h2 { 
    color: white;
    font-weight: 500;
    text-align: center ;
    letter-spacing: 0.1em;

} 
.box form .ibox{
    position: relative;
    width: 300px;
    margin-top: 35px;

}
.box form .ibox input{
    position:relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent ;
    outline: none;
    box-shadow: none;
    color: rgba(15, 19, 24,0.5);
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index:10;
    
}
.box form .ibox span{ 
    position: absolute;
    left: 0;
    padding: 20px 10px 10px;
    pointer-events: none;
    color:rgb(93, 120, 168);
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
}
.box form .ibox input:valid~span,
.box form .ibox input:focus~span
{
    color: white;
    font-size: 0.75em;
    transform:translateY(-34px);
}

.box form .btn-student
{
    border:none;
    outline: none;
    padding :9px 25px;
    background :cornflowerblue;
    cursor: pointer;
    font-size: 0.9em;
    border-radius: 4px;
    font-weight: 600;
    width: 100px;
    margin-top: 10px;

}
.box form .ibox .btn-student:active
{
    opacity: 0.8;
}

</style>
</head>
<body>
<body>




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

        } else {
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




  

</body>

	
</body>
</html>
