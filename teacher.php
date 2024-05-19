<?php include('NavBar.php')?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Teacher-Info</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            

        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            /* background: #182225 */
            background-image: url(image/2.222.jpg);
            background-size: cover;
            background-position: 0cap;

        }

        .box {
            font-family: 'Courier New', Courier, monospace;
            position: relative;
            width: 380px;
            height: 420px;
            background: rgb(53, 67, 92);
            border-radius: 7px;
        }

        .box form {
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
            text-align: center;
            letter-spacing: 0.1em;

        }

        .box form .ibox {
            position: relative;
            width: 300px;
            margin-top: 35px;

        }

        .box form .ibox input {
            position: relative;
            width: 100%;
            padding: 20px 10px 10px;
            background: transparent;
            outline: none;
            box-shadow: none;
            color:white; /*rgba(15, 19, 24, 0.5);*/
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
            z-index: 10;

        }

        .box form .ibox span {
            position: absolute;
            left: 0;
            padding: 20px 10px 10px;
            pointer-events: none;
            color: rgb(30, 34, 40);
            font-size: 1em;
            letter-spacing: 0.05em;
            transition: 0.5s;
        }

        .box form .ibox input:valid~span,
        .box form .ibox input:focus~span {
            color: white;
            font-size: 0.75em;
            transform: translateY(-34px);
        }

        .box form .btn-teacher {
            color: aliceblue;
            border: none;
            outline: none;
            padding: 9px 25px;
            background: cornflowerblue;
            cursor: pointer;
            font-size: 0.9em;
            border-radius: 4px;
            font-weight: 600;
            width: 100px;
            margin-top: 10px;

        }

        .box form .ibox .btn-teacher:active {
            opacity: 0.8;
        }
    </style>
</head>

<body>




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




  

</body>

</html>