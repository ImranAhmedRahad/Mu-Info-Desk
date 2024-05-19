<?php include('NavBar.php')?>
<br>

<div class="container-fluid mt-3  mb-5 bg-light rounded-lg border border-rounded shadow">

<h1 class="text-center my-5">All Courses</h1>

<table class="table table-striped ">
<thead>
<tr>
<th scope="col">No</th>
<th scope="col">Dept.</th>
<th scope="col">Batch NO</th>
<th scope="col">Teacher ID</th>
<th scope="col">Section</th>
<th scope="col">Course Name</th>
<th scope="col">Course Code</th>
<th scope="col">Course Credit</th>


</tr>
</thead>
<tbody>
<?php  global $con;

$select_query = "SELECT * FROM `course` ";

$result_query = mysqli_query($con, $select_query);

$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
$id = $row['id'];
$dept = $row['dept'];
$batchNo = $row['batchNo'];
$teacher_id = $row['teacher_id'];
$section = $row['section'];
$course_name = $row['course_name'];
$course_code = $row['course_code'];
$course_credit = $row['course_credit'];

?>

<tr class='product-<?php echo $id;?>'>

<td><?php echo $no++;?></td>
<td><?php echo $dept;?></td>
<td><?php echo $batchNo;?></td>
<td><?php echo $teacher_id;?></td>
<td><?php echo $section;?></td>
<td><?php echo $course_name;?></td>
<td><?php echo $course_code;?></td>
<td><?php echo $course_credit;?></td>
</tr>
<?php
}?>
</tbody>
</table>

</div>
</div>
<?php include('footer.php')?>