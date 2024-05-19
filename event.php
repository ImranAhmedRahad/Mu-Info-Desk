<?php include('NavBar.php')?>
<br>
<br>
<br>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
      
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    
<style>
    *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #f9eaea;
    font-family: 'Poppins', sans-serif;
}

.part{
    padding: 0 10px 30px 10px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px,1fr));
}
.heading{
    background-color: brown;
    color: #fff;
    margin-bottom: 30px;
    padding: 30px 0;
    grid-column: 1/-1;
    text-align: center;

}
.heading h1{
    font-weight: 500;
    font-size:30px ;
    font-weight: bold;
    letter-spacing: 10px;
    margin-bottom: 10px;
    text-shadow: 3px 3px 5px hsl(330, 70%, 64%),hsl(197, 71%, 73%);
}
.heading h2{
    font-weight: 600;
    font-size: 22px;
    letter-spacing: 5px;
    text-shadow: 3px 3px 5px hsl(120, 69%, 64%),hsl(197, 71%, 73%);

}
.mybtn{
    width:180px;
    height: 50px;
    border-radius: 10PX;
    font-size: 20px;
    color: #fff;
    margin: 20px 100px;
    background-color: rgb(46, 46, 139);
    transition: all 0.5s ease;
}
.mybtn:hover{
    background-color: rgba(212, 183, 170, 0.658);
    cursor: pointer;
}




.box{
    font-size: 2.1rem;
    font-family: "Dongle-bold";
    margin-bottom: 40px;
    margin: 40px 80px;
    text-align: center;
}
h2{
    text-shadow: 3px 3px 5px hsl(0, 76%, 46%),-3px -3px 5px hsl(135, 83%, 45%);
}
.box h2{
    margin-bottom: 40px;
}
.box-grid{
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-gap: 40px;
    }
.box-item img{
    width: 100%;
    height: 210px;
    object-fit: cover;
}
.box-item {
    width: 90%;
    text-align: left;
    margin: 10px;
    box-shadow: 2px 2px 4px;
    padding: 30px;
}
.box-item:hover{
    background-color: whitesmoke;
    transition: 1s all ease;
    transform: scale(1.10);
}
.box-item h3{
    font-weight: bolder;
    font-size: 1.6rem;
    line-height: 2;
    color:  #680f0f;
}
.box-item p{
    font-size: 1.1rem;
    line-height: 1;
    font-family: "Dongle-regular";
}

.center-btn{
    text-align: center;
    margin-top: 4rem;
}
</style>

</head>
<body>

    <div class="part">
        <div class="heading">
            <h1 class="animate__animated animate__bounce animate__slideInLeft animate__slower">METROPOLITAN UNIVERSITY</h1>
            <h2 class="animate__animated animate__bounce animate__slideInRight  animate__slower">&mdash;CAMPUS EVENTS &mdash;</h2>
        </div>

    </div>
    <section class="box">
        <h2 class="animate__animated animate__bounce animate__zoomIn animate__slow 3s">Upcoming Event</h2>
        <div class="animate__animated animate__bounce animate__fadeInLeft animate__slow box-grid">

        <?php  
        include('config/connect.php');

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

<div class="box-item" key="<?php echo $id;?>">
    <a href="https://metrouni.edu.bd/sites/admission/undergraduate" target="_blank">
    <img src="admin_area/image/event/<?php echo $eventPhoto;?>" alt=""/>
        </a>
    <h3><?php echo $eventTItle;?></h3>
    <p>
    <?php echo $description;?>

    </p>
</div>
    <?php
}?>
            <div class="box-item">
                <a href="https://metrouni.edu.bd/sites/admission/undergraduate" target="_blank">
                <img src="image/images.jpg" alt=""/>
                 </a>
                <h3>Admission</h3>
                <p>
                    Admission in Summer Term 2020 is Open in Metropolitan University. 
                    The University offers 80% discounton the admission fee.

                </p>
            </div>


                <div class="box-item">
                    <a href="https://metrouni.edu.bd/sites/university/news/mu-cse-fest-2023-a-resounding-success-celebrating-talent-and-innovation" target="_blank">
                    <img src="photo/download (1).jpg" alt=""/>
                    </a>
                    <h3>CSE Fest</h3>
                    <p>CES FEST organize by CSE Socity.MU CSE Fest 2023: A Resounding Success Celebrating
                         Talent and Innovation. 
                        </p>
                    </div>
                <div class="box-item">
                    <a href="https://m.facebook.com/people/MU-Robotics-Club/100057436959378/" target="_blank">
                    <img src="photo/robofest.jpg" alt=""/>
                    </a>
                    <h3>Robo Fest</h3>
                    <p>Department of Electrical and Electronic Engineering and Metropolitan University Robotics Club arranged Robot.
                </p>
            </div>
            <div class="box-item">
                <a href="https://metrouni.edu.bd/sites/university/news/international-mother-language-day-and-martyrs-day-2022" target="_blank">
                <img src="photo/International-Mothers-Language-Day-22.jpg" alt=""/>
                </a>
                <h3>Mother Language Day</h3>
                <p>Metropolitan University, Sylhet observed International Mother Language Day and Martyrs' Day 2024.
            </p>
        </div>
        <div class="box-item">
            <a href="https://metrouni.edu.bd/sites/university/news/metropolitan-university-commemorates-great-victory-day-with-reflective-discussions-and-cultural-celebrations" target="_blank">
            <img src="photo/Victory-Day-2022.jpeg" alt=""/>
            </a>
            <h3>Victory Day</h3>
            <p>Metropolitan University celebrated the 52nd Victory Day.
        </p>
        </div>
        <div class="box-item">
            <a href="https://metrouni.edu.bd/sites/university/news/national-science-olympiad-2020" target="_blank">
            <img src="photo/National-Science-Olympiad-2020-1024x595.jpg" alt=""/>
            </a>
            <h3>Science Olympiad</h3>
            <p>The volunteers of CSE Society and Software Engineering Innovators Forum of Metropolitan University. 
        </p>
        </div>
        </div>
        <button class="mybtn" onclick="location.href='https://www.facebook.com/metropolitanuniversity?mibextid=rS40aB7S9Ucbxw6v'">SEE MORE</button>
        </div>
    </section>
    <section class="box">
        <h2 class="animate__animated animate__bounce animate__flipInY animate__delay-2s  animate__slower">Latest Event</h2>
        <div class="animate__animated animate__bounce  animate__fadeInRight animate__slow animate__delay-2s box-grid">
            <div class="box-item">
                <a href="https://metrouni.edu.bd/sites/university/news/metropolitan-university-observes-independence-and-national-day-with-reverence#:~:text=On%20March%2026th%2C%20Metropolitan%20University,%2C%20and%20Treasurer%2C%20Professor%20Dr." target="_blank">
                <img src="photo/national day.jpg" alt=""/>
                </a>
                <h3>National Day</h3>
                <p>The Independence and National day 2018 was celebrated on Monday (March 26th) through various programmes.
                </p>
            </div>
                <div class="box-item">
                    <a href="https://metrouni.edu.bd/sites/university/news/robo-fest-2-0" target="_blank">
                    <img src="photo/RoboFest-01.jpg" alt=""/>
                    </a>
                    <h3>Robotic Fest</h3>
                    <p>EEE and Metropolitan University Robotics Club arranged RoboFest 2019 on 4th December 2019.
                        </p>
                    </div>
                <div class="box-item">
                    <a href="https://metrouni.edu.bd/sites/university/news/mumuna-inspires-global-diplomacy-at-mock-mun-2024" target="_blank">
                    <img src="photo/MUMUNA.jpg" alt=""/>
                    </a>
                    <h3>MOCK MUN 2024</h3>
                    <p>Metropolitan University Model United Nations Association (MUMUNA) organized MOCK MUN 2024.
                </p>
            </div>
            <div class="box-item">
                <a href="https://metrouni.edu.bd/sites/university/news/mpl-12th-season-begins-with-grand-inauguration-ceremony" target="_blank">
                <img src="photo/mpl.jpg" alt=""/>
                </a>
                <h3> MPL (12th Season)</h3>
                <p>(MPL) begun its 12th season, organized by the Metropolitan University Sports Club.
            </p>
        </div>
        <div class="box-item">
            <a href="https://metrouni.edu.bd/sites/university/news/the-first-reunion-of-mubaa" target="_blank">
            <img src="photo/Business-Reunion-2019.jpg" alt=""/>
            </a>
            <h3>The First Reunion of MUBAA</h3>
            <p>The first reunion of Metropolitan University Business Administration Alumni was held on 16th?March 2019. 
        </p>
        </div>
        <div class="box-item">
            <a href="https://metrouni.edu.bd/sites/university/news/remarkable-success-at-the-4th-sust-astro-carnival" target="_blank">
            <img src="photo/SUST-Astro-Programme-1024x636.jpeg" alt=""/>
            </a>
            <h3>SUST Astro Carnival</h3>
            <p>4th SUST Astro Carnival, which took place at Shahjalal University of Science and Technology (SUST). 
            </p>
            </div>
        </div>
        <button class="mybtn" onclick="location.href='https://metrouni.edu.bd/sites/university/event-calendar'">SEE MORE</button>
        </div>
        <section class="box">
            <h2 class="animate__animated animate__bounce animate__backInRight animate__delay-3s	animate__slow	3s">Photo Gallery</h2>
            <div class="animate__animated animate__bounce animate__backInLeft  animate__delay-3s	animate__slow	3s  animate__animated animate__bounce box-grid">
                <div class="box-item">
                    <img src="photo/download(100).jpg" alt=""/>
                </div>
                    <div class="box-item">
                        <img src="photo/hq720 (1).jpg" alt=""/>
                        </div>
                    <div class="box-item">
                        <img src="photo/MUPS 3.jpg" alt=""/>
                    </div>
                    <div class="box-item">
                        <img src="photo/MUPS.jpg" alt=""/>
                        </div>
                        <div class="box-item">
                            <img src="photo/Metro.jpeg" alt=""/>
                            </div>
                            <div class="box-item">
                                <img src="photo/MUPS 2.jpg" alt=""/>
                             </div>
                        </div>
                    <button class="mybtn" onclick="location.href='https://www.google.com/search?sca_esv=2b629f2852664d00&q=metropolitan+university+sylhet+image&uds=ADvngMhRtWaXKgnm_3swedhgaWMKPd5yA2BBxFQ8NbeC0A4xMNWT_F_nFG_O-assGL730svZ3NphojkaYFeGU1kve_lPLikkNpem9z4k1W8HYoWj89Aasatzgo7YIOuNP2pjLuuT3Fe9rWs1o3nhYdY9gWL4z_h71NaDFA8XQdGvjjeknBf71sX18KxuLIgYt5kpLU77lF7LfZ3__zEOZ5SCos3Fxr0ULQMA4RTK9jkXxShhWDH2w7fCi2z2CPxjLvCRbFIBUW-AhziXg9fd1MGyxCWZuuHSg2QI7KbVsghMfvOoIzlsRKFVdrxSqOUgRfiiXQc41i9WQIopGDJWDhqBLKlr8_yUq39WH3OkExVMsYEdjnA8Z4u_vX15WN9uHxVc7b-0E8zatbY5r_43Mot1VwkI9AHXUQ&udm=2&prmd=invsmbz&sa=X&ved=2ahUKEwiLy9yzlPKFAxUQaGwGHbylDDMQtKgLegQIDRAB&biw=1366&bih=641&dpr=1'">SEE MORE</button>
                </div>
            </div>
        </section>   

     </body>
</html>