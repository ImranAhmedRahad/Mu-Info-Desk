<?php include('NavBar.php')?>

<div class="job mt-top">
    <div class="container mt-3 mb-5 bg-light rounded-lg border border-rounded shadow">

        <h1 class="text-center my-5">All Jobs</h1>

        <table class="table table-striped border">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Job Title</th>   
      <th scope="col">Job Desc</th>
      <th scope="col">Contact INFO </th>
      <th scope="col">Time Stamp</th>
    </tr>
  </thead>
  <tbody>
    <?php  global $con;
    $select_query = "Select * from `jobs`"; //limit 0,12, HOW may product in display in home
$result_query = mysqli_query($con, $select_query);
$no = 1;
while ($row = mysqli_fetch_assoc($result_query)) {

    $job_id = $row['job_id'];
    $jobTitle = $row['jobTitle'];
    $jobDesc = $row['jobDesc'];
    $contactInfo = $row['contactInfo'];
    $timtestemp = $row['timtestemp'];
    $timestamp = date("d/m/y",strtotime($timtestemp));
    ?>
    <tr class='product-<?php echo $product_id;?>'>
      <th scope="row"><?php echo $no++;?></th>
      <td><pre><a href=""><?php echo $jobTitle;?></a></pre></td>
      <td><pre><?php echo $jobDesc;?></pre></td>
      <td><pre><?php echo $contactInfo;?></pre></td>
      <td ><pre><?php echo $timestamp;?></pre></td>
    </tr>
    <?php
}?>
  </tbody>
</table>

</div>
</div>

<?php include('footer.php')?>