<?php
include('config/connect.php')
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MU INfo Desk</title>
    <link rel="stylesheet" href="css/style.css">
     
    <!--icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
     
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body >
    <header id="Home" >

     <!--nav bar start-->

     <nav class="navbar navbar-expand-lg fixed-top " >
        <div class="container-fluid">
          <a class="navbar-brand ps-5 ms-4" href="#"><img src="image/image-1.jpg"width="80" height="40"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse " id="navbarNavDropdown">

            <ul class="navbar-nav m-auto pe-5 fs-5 text-center" id="sd">
              <li class="nav-item ">
                <a class="nav-link active text-primary pe-3  " aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-3 text-white" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link pe-3 text-white" href="#Team">Team</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pe-3e text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Services
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="teacher.php">Teacher Info</a></li>
                  <li><a class="dropdown-item" href="student.php">Student Info</a></li>
                  <li><a class="dropdown-item" href="courses.php">Course Distribution</a></li>
                  <li><a class="dropdown-item" href="job.php">Job Info</a></li>
                </ul>
              </li>
               <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle pe-3 text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Activities
                </a>
                <ul class="dropdown-menu">
                  
                  <li><a class="dropdown-item" href="event.php">Campus Event</a></li>
                  <li><a class="dropdown-item" href="blog.php">Personal Blog</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link text-white" href="#contactus">Contact</a>
              </li>
              
            </ul>
            
                <a class="nav-logo me-5 pe-4 " href="https://metrouni.edu.bd/"><img src="image/image-2.jpg" height="38"></a>

          </div>
        </div>

      </nav>
     
    </header>