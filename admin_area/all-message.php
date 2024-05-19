<?php
require('header.php')

?>

    <div class="container-fluid mt-3 mt-3 mb-5 bg-light rounded-lg border border-rounded shadow">

        <h1 class="text-center my-5">All Message</h1>

        <table class="table table-striped border">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subejct</th>
      <th scope="col">Message</th>
      <th scope="col">Time Stamp</th>

    </tr>
  </thead>
  <tbody>
    <?php  
    global $con;

    $select_query = "SELECT * FROM `mess` ";

$result_query = mysqli_query($con, $select_query);
$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
    $mess_id = $row['mess_id'];
    $name = $row['name'];
    $subject = $row['subject'];
    $email = $row['email'];
    $message = $row['message'];
    $timeStamp = $row['timeStamp'];

    $time = date("d/m/y",strtotime($timeStamp));
    ?>

    <tr class='product-<?php echo $mess_id;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td><?php echo $name;?></td>
      <td><?php echo $email;?></td>
      <td><?php echo $subject;?></td>
      <td><?php echo $message ;?></td>
      <td><?php echo $timeStamp ;?></td>


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
