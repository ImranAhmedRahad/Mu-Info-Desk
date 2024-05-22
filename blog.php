
<?php include('NavBar.php')?>

<section class="blog mt-top">
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
                            <img src="image/118620_play_icon.png" class="play-btn" onclick="playVideo('image/Pitha utshob.Mrtropolitan University,Sylhet..mp4)" >
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
    </section>

    <?php include('footer.php')?>
