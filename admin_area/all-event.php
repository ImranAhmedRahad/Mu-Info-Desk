<?php
require('header.php');


?>
    <div class="container-fluid mt-3  mb-5 bg-light rounded-lg border border-rounded shadow">

        <h1 class="text-center my-5">All Event</h1>

        <table class="table table-striped ">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Event Title</th>
      <th scope="col">Description</th>
      <th scope="col">Photo</th>
      <th scope="col">Time Stamp</th>

    </tr>
  </thead>
  <tbody>
    <?php  global $con;

    $select_query = "SELECT * FROM event ";

$result_query = mysqli_query($con, $select_query);

$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {
    $id = $row['id'];
    $eventTItle = $row['eventTItle'];
    $description = $row['description'];
    $eventPhoto = $row['eventPhoto'];
    $timtestemp = $row['timtestemp'];
    $timestamp = date("d/m/y",strtotime($timtestemp));
    ?>

    <tr class='product-<?php echo $id;?>'>

      <td><?php echo $no++;?></td>
      <td><?php echo $eventTItle;?></td>
      <td><?php echo $description;?></td>
      <td><img class="w-50" src="image/event/<?php echo $eventPhoto;?>"/></td>
      <td><?php echo $timestamp;?></td>
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
