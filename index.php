<?php
include('connectiondb.php');
session_start();

if (isset($_POST['signup'])) {
    $email = mysqli_real_escape_string($news_conn, $_POST['email']);

    $query = "INSERT INTO `newsletters` (`email`) VALUES ('$email')";
    $res = mysqli_query($news_conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INFOTESS</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/png" href="./Images/favicon.png"/>
</head>
<body>

    <div class="header" style="position:relative;">
        <div class="nav-bar">
           <a href="index.php">
                 <div class="nvtxt-img">
                <img class="logo" src="./assets/IMG-20250327-WA0058.jpg" alt="logo">
              <h3>INFOTESS</h3>
            </div>
           </a>
            <div class="nav">

                <ul class="list-items">
                    <li><a class="list-item active" href="#hero">HOME</a></li>
                    <li><a class="list-item"  href="#about">ABOUT</a></li>
                    <li><a class="list-item"  href="#events">EVENTS</a></li>
                    <li><a class="list-item"  href="#achievements">ACHIEVMENTS </a></li>
                    <li><a class="list-item"  href="#dignitaries">DIGNITARIES</a></li>
                </ul>
                <img class="menu-btn" src="./Images/Hamburger_icon.svg.png" alt="hamburger-menu">
            </div>
            <a target="_blank" href="./login.php"><button class="login-btn">Log in</button></a>
        </div>
    </div>

    <div class="main">
        <div class="conainer">
            
            <div class="hero" id="hero">
                <h1 class="infotess">INFORMATION TECHNOLOGY<br>STUDENTS SOCIETY <br> (INFOTESS)</h1>
            </div>
    
            <div class="abt-sec">
                <div class="abt-info" id="about">
                    <h2 class="sub-h2" style="font-size:20px">INFORMATION TECHNOLOGY DEPARTMENT HISTORY</h2>
                    <article  style="margin-top:10px; font-size:18px" class="inH">The Information Technology Students Society(INFOTESS) 
                        was founded and registered in July 2021. The founders of the
                         society are Mr. Alfred A. Akulbila , Mr. Akoose Daniel who 
                         served as the  president for the society and Mr. Philemon 
                         Nuoseng  the Vice president.The department had their first 
                         election and executives for the 2022/2023 academic year and
                          patron for the society was the late Prof. Abdul- Mumin Salifu 
                          Selanwiah. After his transfer to the Upper West region we had 
                          our second Patron to be Mr. Stato Bayitaa. Fast forward the 
                          constitution of the society was drafted also a letter of request
                           to open a savings account for the department was served to the 
                           GCB Branch manager in navrongo on the 25th January 2022.
                    </article>
                </div>
    
                <div class="abt-img"><img src="./assets/infotess department.jpg" alt="department-pic"></div>
            </div>
    
    
            <div class="news-letter">
                <h3>Sign Up For Our News Letters </h3>
                <div class="email-input">
                    <form method="POST">
                        <input type="email" name="email" required placeholder="Enter your email: example@mail.org">
                        <button type="submit" name="signup">Sign Up</button>
                    </form>
                </div>
            </div>
    
            <div class="events-sec" id="events">
                <h2>EVENTS & UPDATES</h2>
                <div class="events">
                    <div class="event-item">
                        <div class="event-img"><img src="./assets/website dev comp.jpg" alt="event-img"></div>
                        <div class="event-info">
                            <h3> Website Development Competition!</h3>
                            <p>We are thrilled to announce the Website
                               Development Competition! This is a great
                               opportunity to showcase your skills and
                               collaborate with your peers to create a
                               stunning and professional website for INFOTESS.

                            </p>
                          
                        </div>
                          
                    </div>
    
                    <div class="event-item">
                        <div class="event-img"><img src="./assets/welcome.jpeg" alt="event-img"></div>
                        <div class="event-info">
                            <h3> INFOTESS Welcome All Freshers and Continuing Students to Campus!</h3>
                            <p>📚💻 A new session, new opportunities, and endless possibilities await! 
                                Let’s make this year unforgettable. 💪🔥  
                               👉 Tag your squad, share the vibe, and let’s get this 
                               campus buzzing! 🚀 #INFOTESS #WelcomeToCampus #Freshers2025 #CampusLife
                            </p>
                            
                        </div>
                        
                    </div>
    
                    <div class="event-item">
                        <div class="event-img"><img src="./assets/football match.jpeg" alt="event-img"></div>
                        <div class="event-info">
                            <h3>FOOTBALL MATCH</h3>
                            <p>Discription Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Consectetur, reprehenderit aliquam reiciendis aliquid qui 
                                fugiat nostrum est necessitatibus debitis odit!
                            </p>
                             
                        </div>
                        
                    </div>
    
                    <div class="event-item">
                        <div class="event-img"><img src="./assets/eid.jpeg" alt="event-img"></div>
                        <div class="event-info">
                            <h3>EID MUBARAK</h3>
                            <p>Discription Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                Consectetur, reprehenderit aliquam reiciendis aliquid qui 
                                fugiat nostrum est necessitatibus debitis odit!
                            </p>
                            
                        </div>
                         
                    </div>
                </div>
            </div>
    
            <div class="achivements-sec" id="achievements">
                <h2>ACHIEVMENTS</h2>
                <div class="achivements">
    
                    <div class="achievment">
                        <div class="ach-img"><img src="./assets/IMG-20250327-WA0058.jpg" alt="achievment-img"></div>
                        <div class="ach-info">
                        
                            <article style="font-size:20px;">Being a society on our 
                                own is one of our greatest achievements,
                                 as a society we have impacted knowledge 
                                 to our members by organizing educational
                                  activities for them such as the hackathon, 
                                  seminars on basic computing literacy etc
                            </article>
                        </div>
                    </div>
    
                </div>
            </div>
    
            
    
            <div class="dignitries-sec" id="dignitaries">
                <h2>DEPARTMENT DIGNITARIES</h2>
                <div class="dignitries">
    
                    <div class="dignitry-card">
                        <div class="dignitry-img">
                            <img src="./assets/hod.jpeg" alt="dignitry-img">
                            <div class="dig-name"><h3>Prof.Peter Awonatemi Agbedemnab</h3></div>
                        </div>
                        <h4>HEAD OF DEPARTMENT (HOD)</h4>
                    </div>
    
                    <div class="dignitry-card">
                        <div class="dignitry-img">
                            <img src="./assets/patron.jpeg" alt="dignitry-img">
                            <div class="dig-name"><h3>Mr. Iven Aabaah</h3></div>
                        </div>
                        <h4>PATRON</h4>
                    </div>
    
                </div>
    
            </div>
    
            <div class="guide-sec">
                <div class="guide">
                    <div class="guide-info">
                        <h4>UNIVERSITY LIBRARY</h4>
                        <p>The University Library is not just a place for books; it is a hub of knowledge, exploration, and academic growth.  
                            <br>
                            <br>
                            As a student at CKT-UTAS, you have access to a world-class library that serves as a gateway to a wealth of resources, both physical and digital.
                            This page introduces you to some of the invaluable services and resources offered by our university library.
                        </p>
                        <a href="https://cktutas.edu.gh/university-library/"><button >VISIT</button></a>
                    </div>
                    <img class="guide-img" src="./assets/course-outline.jpg" alt="guide-img">
                </div>
    
                <div class="guide">
                    <img class="guide-img" src="./assets/course-material.jpg" alt="guide-img">
                    <div class="guide-info">
                        <h4>COURSE MATERIALS FOR ALL LEVELS</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                             Corporis corrupti eum quidem aliquam aliquid eligendi.
                        </p>
                         <a href="#"><button >VISIT</button></a>
                    </div>
                   
                </div>
            </div>
    
            <div class="cdr-sec">
                <h2>CURRENT DEPARTMENT EXECUTIVES</h2>
                <div class="drs">
                    <div class="dr-card">
                        <img src="./assets/president.jpeg" alt="representative-img">
                        <div class="dr-info">
                            <div class="rep-name">
                              <p class="rank">INFOTESS PRESIDENT</p>
                              <p class="rep">Alhassan Fauwaz</p>
                            </div>
                            
                        </div>
                    </div>
    
                    <div class="dr-card">
                        <img src="./assets/vice-pres.jpeg" alt="representative-img">
                        <div class="dr-info">
                             <div class="rep-name">
                              <p class="rank">VICE PRESIDENT</p>
                              <p class="rep">Alinka Jeffered Atingabasia</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="dr-card">
                        <img src="./assets/secretary.jpg" alt="representative-img">
                        <div class="dr-info">
                             <div class="rep-name">
                              <p class="rank">SECRETARY</p>
                              <p class="rep">Mohammed Saani Wiqayatullahi</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="dr-card">
                        <img src="./assets/treasurer.jpeg" alt="representative-img">
                        <div class="dr-info">
                             <div class="rep-name">
                              <p class="rank">TREASURER</p>
                              <p class="rep">Abubakari Abdul-Kadir</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="dr-card">
                        <img src="./assets/wocom.jpeg" alt="representative-img">
                        <div class="dr-info">
                             <div class="rep-name">
                              <p class="rank">WOCOM</p>
                              <p class="rep">Firdaus Abdullah Kaba</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <div class="qa-sec">
                <h2>QUESIONS AND ANSWERS</h2>
                <div class="qa">
                    <textarea name="" id="" placeholder="Ask your question"></textarea>
                    <a href="#"><button>Submit</button></a>
                </div>
            
            </div>
        </div>
    </div>
   
    <hr style="margin-top:4px; margin-bottom:4px;">

   
   
    <div class="contacts">
        <div class="contact">
        <div class="socials"><a href="https://www.facebook.com/share/14DxQpRGpnP/"><img src="./Images/socials/facebook.png" alt="facebook"></a></div>
        <div class="socials"><a href="https://www.instagram.com/cktutas.infotess?igsh=YzljYTk1ODg3Zg=="><img src="./Images/socials/instagram.png" alt="instagram"></a></div>
        <div class="socials"><a href="https://x.com/CktUtasInfotess?t=MkiAvrXdvg8k7nwIYPvGVQ&s=09"><img src="./Images/socials/x-icon.avif" alt="x"></a></div>
        </div>
         <p style="padding-top: 20px; color:rgb(221, 220, 220);"><b>Email:</b> infotesscktutas25@gmail.com</p>
    </div>

   
       
    <div class="footer">
       <small>Copyright © 2025. @INFOTESS All Rights Reserved.</small>
    </div>

    <script>
        const menuBtn = document.querySelector('.menu-btn');
        const nvlinks = document.querySelector('.list-items');

        menuBtn.addEventListener('click',()=>{
            nvlinks.classList.toggle('mobile-menu')
        });
    </script>
</body>
</html>