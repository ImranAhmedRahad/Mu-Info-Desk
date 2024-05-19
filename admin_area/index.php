<?php
require('header.php');


?>
        <div class="container mb-5 p-5 pe-0  bg-light rounded-lg border border-rounded shadow">
        <!--second child-->
        <div class="bg-light">
            <h3 class="text-center p-2 fs-1 text-uppercase text-secondary">Admin Area</h3>
        </div>
        <!--third child-->
        <div class="row">
            <div class="col-md-12 p-1 d-flex align-items-center">
                <div class="me-5 text-center">
                    <a href="#"><img src="../image/logo.png" alt="" class="admin_image"></a>
                    <p class="text-center mt-2">MU Info Desk</p>
                    <a class="my-3 btn btn-danger w-100 text-light my-1" href="destroySession.php?true=tt">Log Out</a>
                    <a href="change-pwd.php?true=tt" class="text-dark">Change Password</a>
                </div>
                <div class="row gap-1 ml-5 ">
                <a href="all-students.php" class=" text-light  my-1 my-3 btn btn-primary col-md-2">All Students</a>
                <button class="my-3 btn btn-primary col-md-2"><a href="all-teachers.php" class=" text-light my-1">All Teachers</a></button>
                <a href="all-job.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">All Jobs</a>
                <a href="all-event.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">All Events</a>
                <a href="all-courses.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">All Courses</a>
                <a href="all-message.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">All Message</a>

                    <a href="insert-student.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">Insert Student</a>

                    <a href="insert-teacher.php" class=" text-light  my-1 col-2 my-3 btn btn-primary "> Insert Teacher</a>
                    <button class="my-3 btn btn-primary col-md-2"><a href="insert-event.php" class=" text-light  my-1">Insert Events</a></button>

                    <a href="add-courses.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">Add Course</a>

                    <a href="post-job.php" class=" text-light my-1 my-3 btn btn-primary col-md-2">Post Job</a>
                </div>
            </div>
        </div>

    </div>

    <?php
require('footer.php')
?>
