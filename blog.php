<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blog</title>
    <link
    rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body{
    background:#f1f1f1;
}
header{
    padding: 30px;
}
header h1{
    text-align: center;
    font-size: 40px;
    color: purple;
    margin: 1.5 0px;
}
.row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
}
.col{
    flex-basis: 50%;
    min-width: 250px;
}
.feature-img{
    width: 83%;
    margin: auto;
    position: relative;
    border-radius: 6px;
    overflow: hidden;
}
.small-img-row{
    display: flex;
    background: #ebd0d0;
    margin: 20px 0;
    align-items: center;
    border-radius: 6;
    overflow: hidden;
    width: 85%;
}
.small-img{
    position: relative;
}
.small-img img{

    width: 150px;
}
.small-img-row p{
    margin-left: 20px;
    color: #532a2a;
    line-height: 22px;
    font-size: 15px;
}
.play-btn{
    width: 60px;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    cursor: pointer;
}
.small-img .play-btn{
    width: 35px;
}
.video-player{
    width: 80%;
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%,-50%);
    display: none;
}
video:focus{
    outline: none;
}
.close-btn{
    position: absolute;
    top: 10px;
    right: 10px;
    width: 30px;
    cursor: pointer;
}
.blog-box-container{
    display: flex;
    grid-auto-columns: 1fr 1fr 1fr ;
    max-width: 1050px;
    width: 90%;
    margin-top: 50px;
}
.blog-box{
    max-width:45%;
    width: 100%;
    height: 100%;
    padding: 10px;
    display: flex;
    flex-direction: column;
    transition: all ease 0.3s;
    margin-left: 30px;
    
}
.blog-box:hover{
    background-color: #e2d7cc;
    box-shadow: 16px 20px 50px rgba;
}
.blog-box-img{
    width: 100%;
    height: 100%;
    max-height: 300px;
    overflow: hidden;
    display: flex;
    position: relative;
}
.blog-box-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: all ease 0.3s;
}
.blog-box:hover .blog-box-img a{
    display: flex;
}
.blog-box:hover .blog-box-img img{
    filter: blur(1px);
}
.blog-box-text{
    display: flex;
    flex-direction: column;
    padding: 30px 10px 20px 10px;
}
.blog-box-text strong,
.blog-box-text p{
    color: #362c2c;
    font-size: 0.9rem;
    font-weight: 400;
}
.blog-author{
    display: flex;
    justify-content: flex-start;
    align-items: center;
    margin-top: 60px;
}
.blog-author-img{
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}
.blog-author-img img{
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}
.blog-author-text{
    display: flex;
    flex-direction: column;
}
.blog-author-text strong{
    color: #252525;
    font-weight: 800;
}
.blog-author-text-span{
    color: #797979;
    font-size: 0.8rem;
    font-weight: 500;
}
</style>
</head>
<body>
   <header>
        <h1 class="animate__animated animate__bounce animate__zoomIn animate__slower " >PERSONAL BLOGS</h1>
        </header>
        <div class="row">
            <div class="animate__animated animate__bounce animate__slideInLeft animate__slow col">
                <div class="feature-img">
                    <img src="image/mu.png" width="100%">
                    <img src="image/118620_play_icon.png" class="play-btn" onclick="playVideo('image/Department of CSE, Metropolitan University.mp4')">
                </div>
            </div>
            <div class="col">
     
                <div class="animate__animated animate__bounce animate__slideInRight animate__slow small-img-row">
                    <div class="small-img">
                        <img src="image/airtal MU.jpg">
                        <img src="image/118620_play_icon.png" class="play-btn"  onclick="playVideo('image/Airtel and Metropolitan University Collaboration Event_Cultural Programme,Sylhet.mp4')">
                    </div>
                    <p>Airtel and Metropolitan University Collaboration Event|Cultural Programme,Sylhet.</p>
                </div>
                    <div class="animate__animated animate__bounce animate__slideInRight animate__delay-2s animate__slow small-img-row">
                        <div class="small-img">
                            <img src="image/pitha.png">
                            <img src="image/118620_play_icon.png" class="play-btn" onclick="playVideo('image/Pitha utsho.Metropolitan University, Sylhet..mp4')" >
                        </div>
                        <p>Pitha Utshob at Metropolitan University,Sylhet 2024. </p>
                    </div>
                        <div class="animate__animated animate__bounce animate__slideInRight animate__delay-3s animate__slow small-img-row">
                            <div class="small-img">
                                <img src="image/rubo vlog.png">
                                <img src="image/118620_play_icon.png" class="play-btn"  onclick="playVideo('image/Priyo campus and sir.mp4')">
                            </div>
                            <p>Robo Fest 2.0 Metropolitan University Sylhet </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-player" id="videoplayer">
                <video width="100%" controls autoplay id="myVideo">
                    <source src="image/Airtel and Metropolitan University Collaboration Event_Cultural Programme,Sylhet.mp4" type="video/mp4">
                </video>
                <img src="image/error-svgrepo-com.png" class="close-btn" onclick="stopVideo()">
            </div>

          
            
        <div class="blog-box-container">
            <div class="blog-box">
                <div class="blog-box-img">
                    <iframe width="800" height="300" src="https://www.youtube.com/embed/8GrSFe2cJTM" title="বসন্ত উৎসব ১৪৩০, Metropolitan University Sylhet #sylhet #follow #subscribe" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    <img src="image/Bosonto.jpg" alt="blog img">
                </iframe>
            </div>
         <div class="blog-box-text">
                <strong>Bosonto Utshob</strong>
                <p>বসন্ত উৎসব ১৪৩০, Metropolitan University Sylhet Celebrate at Metropolitan University.

                </p>
                <div class="blog-author">
                    <div class="blog-author-img">
                        <img src="image/Bosonto.jpg" alt="">
                        </div>
                        <div class="blog-author-text">
                        <strong> RN Mukta BD</strong>
                        <span>Feb 20, 2024</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-box-img">
                <iframe width="800" height="300" src="https://www.youtube.com/embed/5R0uBDIu730" title="Admission Fair 2021/Metropolitan University,sylhet...." frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    <img src="image/hq720.png">
                </iframe>
             </div>
            <div class="blog-box-text">
                <strong>MU Admission Fair</strong>
                <p> The Central Muslim Sahitya Sangshad Dorgah Gate, Sylhet, Bangladesh.  </p>
                <div class="blog-author">
                    <div class="blog-author-img">
                        <img src="image/hq720.png" alt="blog img">
                    </div>
                    <div class="blog-author-text">
                        <strong>Chowdhury Rumman</strong>
                        <span> Dec 12, 2021</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-box">
            <div class="blog-box-img">
                <iframe width="800" height="300" src="https://www.youtube.com/embed/exrCZYO--Xs" title="Science Olympiad 2023 | Sylhet Divisional Contest | Host Metropolitan University" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                    <img src="image/olympaid.jpg">
                </iframe>
             </div>
            <div class="blog-box-text">
                <strong>Science Olympiad</strong>
                <p>Science Olympiad 2023 | Sylhet Divisional Contest | Host Metropolitan University.</p>
                <div class="blog-author">
                    <div class="blog-author-img">
                        <img src="image/olympaid.jpg" alt="blog img">
                    </div>
                    <div class="blog-author-text">
                        <strong>Musharof Musa</strong>
                        <span> Jan 15,2023</span>
                    </div>
                </div>
            </div>
        </div>

        <script>
                var videoplayer = document.getElementById("videoplayer")
                var myVideo = document.getElementById("myVideo")

                function stopVideo(){
                    videoplayer.style.display = "none"
                    myVideo.src= ""

                }
                function playVideo(file){
                    myVideo.src=file;
                    videoplayer.style.display="block";

                }

            </script>
    </body>
</html>