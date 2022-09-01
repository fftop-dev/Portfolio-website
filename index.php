<?php 
if(isset($_POST['submit'])){
    $name = htmlspecialchars($_POST['Name']);
    $mailFrom = htmlspecialchars($_POST['Email']);
    $message = htmlspecialchars($_POST['Message']);

    if (empty(trim($name))) $error = "empty name";
    if (empty(trim($mailFrom))) $error = "empty mail";
    if (empty(trim($message))) $error = "empty message";

    if (!isset($error)) {
        $mailTo = "fftop-dev.ufedf@simplelogin.com";
        $headers = "From: ".$mailFrom;
        $text = "Du hast eine Email von ".$name." erhalten. \n\n".$message;
        
        mail($mailTo, $message, $headers);
        header("Location: index.php?mailsend");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c294096621.js" crossorigin="anonymous"></script>
</head>
<body>
    <?= isset($error) ? $error : '' ?>
    <div id="header">
        <div class="container">
            <nav>
                <img src="images/logo.png" class="logo">
                <ul id="sidemenu">
                    <li><a href="#header">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <i id="icon2" class="fa-solid fa-arrow-right" onclick="closemenu()"></i>
                </ul>
                <i id="icon1" class="fa-solid fa-bars" onclick="openmenu()"></i>
            </nav>
            <div class="header-text">
                <h1>Hi, I'm <span id="name">fftop</span></h1>
                <p>Student in Zurich</p>
                
            </div>
        </div>
    </div>
    <div id="about">
        <div class="container">
            <div class="row">
                <div class="about-col-1">
                 
                    <i id="portrait-icon" class="fa-solid fa-person"></i>
                </div>
                <div class="about-col-2">
                    <h1 class="subtitle">About Me</h1>
                    <p id="about-me-text">I am a motivated student at the Kantonsschule Hottingen in Zurich. 
                        At the moment, I am in the third year of my apprenticeship as an 
                        application developer EFZ and in the middle of my internship 
                        search. My main interests have been computer science and especially 
                        programming for a long time. In my free time I like to play video games, 
                        or try to learn new things in the world of computer sience.</p>

                        <div class="tab-titles">
                            <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                            <p class="tab-links" onclick="opentab('education')">Education</p>
                            <p class="tab-links" onclick="opentab('experience')">Experience</p>
                        </div>

                        <div class="tab-contents active-tab" id="skills">
                            <ul>
                                <li><span>Main language</span><br>building applications in Java</li>
                                <li><span>Side language</span><br>basic knowledge in JavaScript, php, Python</li>
                                <li><span>Other</span><br>basic knowledge in HTML & CSS, MySQL</li>
                            </ul>
                        </div>

                        <div class="tab-contents" id="education">
                            <ul>
                                <li><span>2020 - Current</span><br>Apprenticeship computer scientist EFZ in Zurich</li>
                                <li><span>2017 - 2020</span><br>secondary school</li>
                                <li><span>2011 - 2017</span><br>primary school</li>
                            </ul>
                    
                        </div>

                        <div class="tab-contents" id="experience">
                            <ul>
                                <ul>
                                    <li><span>2019 - Zurich, Schlieren</span><br>one-week trial apprenticeship in the backup datacenter of zurich insurance</li>
                                    <li><span>‎ </span><br>‎ </li>
                                    <li><span>‎ </span><br>‎ </li>
     
                                </ul>
                            </ul>
                        </div>
                </div>
            </div>

        </div>
    </div>
    <div id="projects">
        <div class="container">
            <h1 class="subtitle">My Projects</h1>
            <div class="work-list">
                <div class="work">
                    <img src="images/project_1.png">
                    <div class="layer">
                        <h3>Chess</h3>
                        <p class="project-text">A fully functional Chess, playable with another Person on the same device.</p>
                        <a href="https://github.com/fftop-dev/Chess"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/project_2.png">
                    <div class="layer">
                        <h3>Tic-Tac-Toe</h3>
                        <p class="project-text">Tic-Tac-Toe, playable with a friend on the same device.</p>
                        <a href="https://github.com/fftop-dev/Tic-Tac-Toe"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/project_3.png">
                    <div class="layer">
                        <h3>Notenrechner</h3>
                        <p class="project-text">Notenrechner, um sämtliche Noten eines Schulsemesters zu verwalten.</p>
                        <a href="https://github.com/fftop-dev/Notenrechner"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
            <div class="work-list">
                <div class="work">
                    <img src="images/project_temp.png">
                    <div class="layer">
                        <h3>coming soon</h3>
                        <p class="project-text"></p>
                        <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/project_temp.png">
                    <div class="layer">
                        <h3>coming soon</h3>
                        <p class="project-text"></p>
                        <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
                <div class="work">
                    <img src="images/project_temp.png">
                    <div class="layer">
                        <h3>coming soon</h3>
                        <p class="project-text"></p>
                        <a href="#"><i class="fa-solid fa-up-right-from-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                    <h1 class="subtitle">Contact Me</h1>
                    <p><i class="fa-solid fa-envelope"></i> fftop-dev.ufedf@simplelogin.com</p>
                </div>
                <div class="contact-right">
                    <form method="POST" action="index.php">
                        <input type="text" name="Name" placeholder="Your Name" required>
                        <input type="email" name="Email" placeholder="Your Email" required>
                        <textarea name="Message" rows="6" placeholder="Your Message"></textarea>
                        <button type="submit" class="btn btn2" name="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        <div id="copyright">
            <p>Copyright © fftop. Made by fftop-dev</p>
        </div>
    </div>

<script>

    var tablinks = document.getElementsByClassName("tab-links");
    var tabcontents = document.getElementsByClassName("tab-contents");

    function opentab(tabname){
        for(tablink of tablinks){
            tablink.classList.remove("active-link");
        }
        for(tabcontent of tabcontents){
            tabcontent.classList.remove("active-tab");
        }
        event.currentTarget.classList.add("active-link");
        document.getElementById(tabname).classList.add("active-tab");
    }

</script>
<script>
    var sidemenu = document.getElementById("sidemenu");

    function openmenu(){
        sidemenu.style.right = "0";
    }
    function closemenu(){
        sidemenu.style.right = "-200px";
    }
</script>


</body>
</html>