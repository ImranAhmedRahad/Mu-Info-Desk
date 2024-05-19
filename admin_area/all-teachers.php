<?php
require('header.php')

?>

    <div class="container-fluid mt-3  mb-5 bg-light rounded-lg border border-rounded shadow">

        <h1 class="text-center my-5">All Teachers</h1>

        <table class="table table-striped border">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">ID</th>
      <th scope="col">Mail</th>
      <th scope="col">Mobile</th>
      <th scope="col">Addr</th>
      <th scope="col">Designation</th>
      <th scope="col">Dept.</th>
    </tr>
  </thead>
  <tbody>
    <?php  global $con;

    $select_query = "SELECT * FROM teacher";

$result_query = mysqli_query($con, $select_query);
$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
    $id = $row['id'];
    $fName = $row['fName'];
    $teacher_id = $row['teacher_id'];
    $lName = $row['lName'];
    $email  = $row['email'];
    $mobile = $row['mobile'];
    $addr = $row['addr'];
    $designation = $row['designation'];
    $dept = $row['dept'];

    ?>

    <tr class='product-<?php echo $id ;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td> <?php echo $fName." ".$lName ;?></td>
      <td> <?php echo $teacher_id ;?></td>

      <td><?php echo $email;?></td>
      <td><?php echo $mobile;?></td>
      <td><?php echo $addr;?></td>
      <td><?php echo $designation ;?></td>
      <td><?php echo $dept;?></td>
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
