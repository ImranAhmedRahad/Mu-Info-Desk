<?php
require('header.php')

?>

    <div class="container-fluid mt-3 mt-3 mb-5 bg-light rounded-lg border border-rounded shadow">

        <h1 class="text-center my-5">All Students</h1>

        <table class="table table-striped border">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Student Id</th>
      <th scope="col">Batch</th>
      <th scope="col">Section</th>
      <th scope="col">Dept.</th>
      <th scope="col">Mobile No</th>
    </tr>
  </thead>
  <tbody>
    <?php  
    global $con;

    $select_query = "SELECT * FROM `student` ";

$result_query = mysqli_query($con, $select_query);
$no = 1;
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
    $dob = date("d/m/y",strtotime($dob));
    ?>

    <tr class='product-<?php echo $id;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td>
       
         <?php echo $fName." ".$lName;?>
      </td>
      <td><?php echo $student_id;?></td>
      <td><?php echo $batch;?></td>
      <td><?php echo $section;?></td>
      <td><?php echo $addr ;?></td>
      <td><?php echo $mobile ;?></td>


    </tr>
    <?php
}?>
  </tbody>
</table>

</div>
</div>

<?php
require('footer.php')
?>
