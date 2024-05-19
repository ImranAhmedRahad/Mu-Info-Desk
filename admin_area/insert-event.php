<?php
require('header.php');

if(isset($_POST['insert_event']) )
{
$title = $_POST['eventTItle'];
$description = $_POST['description'];
$eventPhoto = $_FILES['eventPhoto']['name'];
$tmp_name_eventPhoto = $_FILES['eventPhoto']['tmp_name'];

$set = move_uploaded_file($tmp_name_eventPhoto,"./image/event/$eventPhoto");


$insert = "INSERT INTO `event`(`eventTItle`, `description`, `eventPhoto`) VALUES ('$title','$description','$eventPhoto')";

$runUpQuery = mysqli_query($con,$insert);


if($runUpQuery){
    echo "<script>alert('Successfully insert the products')</script>";
}else
{
    echo "Error: " . mysqli_error($con);
}


}

?>


<div class="container mb-5 px-5">

        <!--second child-->
            <h3 class="text-center p-2">Post Event</h3>

            <form method="POST"  enctype="multipart/form-data">

            <div class="mb-3">
  <label for="formFile" class="form-label">Event Photo</label>
  <input class="form-control" type="file" id="formFile"  name="eventPhoto" required>
</div>

<div class="mb-3">
    <label for="" class="form-label">Event Title</label>
    <input
        type="text"
        class="form-control"
        name="eventTItle"
        id=""
        aria-describedby="helpId"
        placeholder=""
        required
    />
</div>

<div class="mb-3 my-2">
<div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 200px" name="description" required></textarea>
  <label for="floatingTextarea">Description</label>
</div>




  <button type="submit" class="btn btn-primary my-3" name="insert_event">Submit</button>
</form>
            </div>
        </div>
        </div>



    






<?php
require('footer.php')
?>
