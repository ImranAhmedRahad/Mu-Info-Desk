<?php
 include('../config/connect.php');

    if(isset($_POST["add_course"]))
    {
        $dept  = $_POST["dept"];
        $batchNo  = $_POST["batchNo"];
        $teacher_id  = $_POST["teacher_id"];
        $section  = $_POST["section"];
        $course_name  = $_POST["course_name"];
        $course_code  = $_POST["course_code"];
        $section  = $_POST["section"];
        $course_credit  = $_POST["course_credit"];

        $insertQuery = "INSERT INTO `course`(`dept`, `batchNo`, `teacher_id`, `section`, `course_name`, `course_code`, `course_credit`) VALUES('$dept','$batchNo','$teacher_id','$section','$course_name','$course_code','$course_credit')";
        $result_query = mysqli_query($con, $insertQuery);

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
    <title>Courses</title>
<style>
    *{
    margin: 0;
    padding: 0;
}
body{
    background-color:rgb(199, 219, 240);
}
.heading{
    width: 30%;
    font-size: 25px;
    color: rgb(56, 35, 35);/* rgb(38, 77, 64);*/
    margin:40px;
    margin-left: 70px;
}
.container{
    width: 70%;
    height: 425px;
    background-color:#fff;
    padding: 20px 10px;
    margin:10px;
    margin-left: 120px;
    box-shadow: 0px 0 5px 1px #b3aeae;
    display: flexbox;
    justify-content: center;
    align-items: center;

}

#department{
    width:80%;
    height: 25px;
    color: rgb(31, 92, 145);
    margin: 10px;
    
}
.batch{
    width: 200px;
    height: 20px;
    font-size: 14px;
}
#facality{
    width:40%;
    height: 25px;
    display: flow-root;
    justify-content: center;
    align-items: center;
}
.section{
    width: 200px;
    height: 20px;
    font-size: 14px;
}
.course{
    width: 200px;
    height: 20px;
    font-size: 14px;
}
.course-code{
    width: 210px;
    height: 20px;
    font-size: 14px;
}
.credit{
    width: 200px;
    height: 20px;
    font-size: 14px;
}
.btn{
    width:15%;
    height: 30px;
    font-size: 20px;
    margin-top: 15px;
    color:#fff;
    box-shadow: 0px 0 5px 1px #f6f3f3;
    transition: .4s;
    background: #6278df;
    border-radius: 6px; 
}
.btn:hover{
    background: #6278df;
    color: black;
    cursor: pointer;
    transition: .4s;
}



</style>
</head>
<body>

    
        <div class="heading">
        <h1>Add Courses</h1>
    </div>
    </br>

    <div class="container">
    <form method="POST"> 
        <label for="department"> Select Department:</label>
        <select id="department" name="dept" required>
            <option value="ee">Chosose Department</option>
            <option value="cs">CSE</option>
            <option value="ee">SE</option>
            <option value="ee">EEE</option>
            <option value="ee">BBA</option>
            <option value="ee">ECO</option>
            <option value="ee">LLB</option>
            <option value="ee">ENG</option>
        </select>
    </br>
    </br>
    </br>

    <label for="batch"> Batch No:</label>
    <input class="batch" placeholder="Batch Number" name="batchNo" required/>
    </br></br>
    <label for="facality"> Facality:</label>
        <select id="facality" name="teacher_id" required>
            <option value="ee">Facality</option>
            <?php 
            
            $select_query = "SELECT `teacher_id`, `fName`, `lName` FROM `teacher`";
            $runUpQuery = mysqli_query($con,$select_query);
            
            while ($row = mysqli_fetch_assoc($runUpQuery)) {
                echo $row;
                $teacher_id = $row['teacher_id'];
                $fName = $row['fName'];
                $lName = $row['lName'];
            ?>
            <option value="<?php echo $teacher_id; ?>"><?php echo $fName." ".$lName; ?></option>
           
            <?php  }?>
        </select>
    </br>
    </br>

    <label for="section"> Section:</label>
    <input class="section" placeholder="Type Section Name" name="section" required/>
   </br><br/>

    <label for="course"> Course Name:</label>
    <input class="course" placeholder="Course Name" name="course_name" required/></br></br>

    <label for="course-code">Course Code:</label>
    <input class="course-code" placeholder="Course Code" name="course_code" required/></br></br>

    <label  for="credit">Course Credit:</label>
    <input class="credit" placeholder="Course Credit" name="course_credit" required/></br></br>

    
    <button class="btn"type="submit" name="add_course">Submit</button>
    

    </form>
    </div>

</body>
</html>