<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Handlee&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Oregano&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comforter&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="images/kailash_photo.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="kailash_photo.png" type="image/x-icon">
    <title>Kailash Solanki Portfolio</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li id="nav-name" onclick="window.location.href='index.html'">Kailash Solanki Portfolio💫</li>
                <li class="nav-title hide" onclick="window.location.href='#f-project'">Projects</li>
                <li class="nav-title hide" onclick="window.location.href='certificates.html'">Certificates</li>
                <li class="nav-title hide" onclick="window.location.href='Kailash Solanki Resume.pdf'">Download my CV
                </li>
                <li class="nav-title hide" onclick="window.location.href='#cnt-contacts'">Contact me</li>
                <li id="menu-navbar" onclick=showSidebar()><img src="images/menu.png" id="nav-img" alt="" srcset="">
                </li>
            </ul>
            <ul class="sidebar">
                <li class="cancel" onclick=hideSidebar()><img src="images/cancel.png" id="nav-img" alt=""></li>
                <li class="nav-title-sidebar" onclick="window.location.href='#f-project'">Projects</li>
                <li class="nav-title-sidebar" onclick="window.location.href='certificates.html'">Certificates</li>
                <li class="nav-title-sidebar" onclick="window.location.href='Kailash Solanki Resume.pdf'">Download my CV</li>
                <li class="nav-title-sidebar" onclick="window.location.href='#cnt-contacts'">Contact me</li>
            </ul>
        </nav>
        <script src="script.js"></script>
    </header>
    <div class="name-photo">
        <img src="images/kailash_photo.png" alt="" srcset="" id="kailash-photo">
        <img src="images/arrow.png" id="arrow1" alt="" srcset="">
        <a href="" id="kailash-name">💚Kailash Solanki💫</a>
    </div><br><br>
    <div class="about">
        <div class="work">
            <strong>I <span class="design">design</span> top</strong> <br>
            <strong>notch websites</strong>
        </div>
        <div class="work-contact">
            "I’ll design and develop your website, ensuring it’s expertly launched <br>and live on the internet, making
            a powerful impact from day one." <br><br>
            <button id="button-style1" onclick="window.location.href='#cnt-contacts';">Hire me </button>
        </div>
    </div><br><br>
    <div class="tech-skill">
        <p id="tech-title"> Technical Skills ?</p>
    </div>
    <div>
        <img src="images/arrow.png" id="arrow2" alt="">
    </div>
    <div class="skills-kailash">
        <div class="skill-web">
            <p id="web-dev">Web & App Development</p>
            <div class="tech-skill-section">
                <img src="images/html.png" id="tech-image1" alt="">
                <img src="images/css.png" id="tech-image2" alt="" srcset="">
                <img src="images/bootstrap.png" id="tech-image1" alt="" srcset="">
            </div>
            <div class="tech-skill-section">
                <img src="images/django1.webp" id="tech-image1" alt="" >
                <img src="images/flutter.png" id="tech-image1" alt="" srcset="" style="height: 80px;width: 100px;">
                
                <!-- add more-->
            </div>
        </div>
        <div class="skill-language">
            <p id="pro-language">Programming Languages</p>
            <div class="tech-skill-section">
                <img src="images/python.png" id="tech-image1" alt="">
                <img src="images/java.svg" id="tech-image1" alt="" srcset="">
                <img src="images/dart.png" id="tech-image2" alt="" srcset="">
            </div>
        </div>
        <div class="skill-dm">
            <p id="dm">Database Management</p>
            <div class="tech-skill-section">
                <img src="images/oracle.png" id="tech-image1" alt="">
            </div>
        </div>
    </div> <br><br><br><br><br><br>
    <div class="projects">
        <div class="projects-detail">
            <div id="f-project">
                Featured Projects
            </div>
            <div id="arrow">
                <img src="images/arrow.png" id="arrow3" alt="" srcset="">
            </div>
            <div id="projects-desc">
                I have designed <br> more than 6 products
            </div>
        </div>
        <div class="project-sections">
            <div class="project-section-div">
                <div class="project-design">
                    <img src="images/news_app.png" alt="" id="project-img">
                    <h1 id="project-title1">Aapka Apna Khabari App Project</h1> <br>
                    <button onclick="window.location.href='https://www.linkedin.com/posts/kailash-solanki_flutter-uidesign-mobileapp-activity-7342474714168143873-ngSb?utm_source=share&utm_medium=member_desktop&rcm=ACoAAExA2bUBqYrBNk17FVeSHyRGvFLi9BSg9P8';"
                        class="live-demo">Video Demo</button>
                    <button onclick="window.location.href='https://kailashsolanki.netlify.app/Aapka Apna Khabari.apk';"
                        class="source-code">Download </button>
                    <button onclick="window.location.href='https://github.com/SOLANKI-KAILASH/NEWS-APP-2025';"
                        class="source-code">Source Code</button>
                </div>
                <div class="project-design">
                    <img src="images/blinkit.png" alt="" id="project-img">
                    <h1 id="project-title1">Blinkit App Project</h1> <br>
                    <button onclick="window.location.href='https://www.linkedin.com/posts/kailash-solanki_flutter-uidesign-mobileapp-activity-7342474714168143873-ngSb?utm_source=share&utm_medium=member_desktop&rcm=ACoAAExA2bUBqYrBNk17FVeSHyRGvFLi9BSg9P8';"
                        class="live-demo">Video Demo</button>
                    <button onclick="window.location.href='https://github.com/SOLANKI-KAILASH/BLINKIT-APP-2025';"
                        class="source-code">Source Code</button>
                </div>
                <div class="project-design">
                    <img src="images/tnlfs-website.png" alt="" id="project-img">
                    <h1 id="project-title2">TNLFS School Website Project</h1><br>
                    <button onclick="window.location.href='https://thenewlittleflowerschool.netlify.app/';" class="live-demo">Live
                        Demo</button>
                    <button
                        onclick="window.location.href='https://github.com/SOLANKI-KAILASH/TNLFS-WEBSITE-2025';"
                        class="source-code">Source Code</button>
                </div>
                 <div class="project-design">
                    <img src="images/school_website.png" alt="" id="project-img">
                    <h1 id="project-title1">School Website Project</h1> <br>
                    <button onclick="window.location.href='https://littleflower-school.netlify.app/';"
                        class="live-demo">Live Demo</button>
                    <button onclick="window.location.href='https://github.com/SOLANKI-KAILASH/SCHOOL-WEBSITE-2024';"
                        class="source-code">Source Code</button>
                </div>
                <div class="project-design">
                    <img src="images/travel_tickets_website.png" alt="" id="project-img">
                    <h1 id="project-title2">Travel Tickets Website Project</h1><br>
                    <button onclick="window.location.href='https://kailash1577.pythonanywhere.com/';" class="live-demo">Live
                        Demo</button>
                    <button
                        onclick="window.location.href='https://github.com/SOLANKI-KAILASH/TRAVELTICKETS-WEBSITE-2024';"
                        class="source-code">Source Code</button>
                </div>
                <div class="project-design">
                    <img src="images/vedicvastra_website.png" alt="" id="project-img">
                    <h1 id="project-title1">Vedic Vastra Website Project</h1><br>
                    <button onclick="window.location.href='https://vedicvastra.pythonanywhere.com/';" class="live-demo">Live
                        Demo</button>
                    <button
                        onclick="window.location.href='https://github.com/SOLANKI-KAILASH/VEDICVASTRA-WEBSITE-2024';"
                        class="source-code">Source Code</button>
                </div>
                <div class="project-design">
                    <img src="images/insta_website.png" alt="" id="project-img">
                    <h1 id="project-title2">Instagram Login Page Project</h1><br>
                    <button onclick="window.location.href='https://instatry.netlify.app/';" class="live-demo">Live
                        Demo</button>
                    <button onclick="window.location.href='https://github.com/SOLANKI-KAILASH/INSTAGRAM-CLONE-2024';"
                        class="source-code">Source Code</button>
                </div>
            </div>
            <div class="project-section-div">
               
            </div>
            <div class="project-section-div">
                
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="experiences">
        <div class="experiences-details">
            <div id="w-experiences">
                Work Experience
            </div>
            <div id="arrow">
                <img src="images/arrow.png" id="arrow4" alt="" srcset="">
            </div>
            <div id="w-desc">
                Have been designing <br> since my past 2 months
            </div>
        </div>
        <div class="experiences-sections">
            <div class="experiences-section-container">
                <div id="experiences-no">1</div>
                <div class="experiences-section-details">
                    <div id="experiences-title">Flutter Intern at <strong>InfoLabz</strong></div>
                    <div id="experiences-desc">Worked on Fundamentals of Flutter, UI design, API Calling</div>
                    <div id="experiences-year"> 27, May 2025 to 11 July 2025 </div>
                </div>
            </div>
            <div class="experiences-section-container">
                <div id="experiences-no">2</div>
                <div class="experiences-section-details">
                    <div id="experiences-title">Python / Django Intern at <strong>InfoLabz</strong></div>
                    <div id="experiences-desc">Worked on Fundamentals of Python, Back-end Web-Development using Django
                        Framework</div>
                    <div id="experiences-year"> 27, June 2024 to 10 July 2024 </div>
                </div>
            </div>
            
        </div>
    </div>
    <br><br><br><br><br><br>
    <div class="educations">
        <div class="educations-details">
            <div id="ed-educations">
                Education
            </div>
            <div id="arrow">
                <img src="images/arrow.png" id="arrow5" alt="" srcset="">
            </div>
            <div id="educations-desc">
                "My educational journey, <br> from the classroom to future <br>aspirations"
            </div>
        </div>
        <div class="educations-section">
            <div class="educations-section-proto">
                <div class="ed-sec-title">
                    | Secondary School Certificate ( Standard X )
                </div>
                <div class="ed-sec-desc">
                    The New Flower Higher Secondary School
                </div>
                <div class="ed-sec-desc">
                    Grade &#8827; &#8827; 84.33%
                </div>
                <div class="ed-sec-year">
                    2023
                </div>
            </div>
            <div class="educations-section-proto">
                <div class="ed-sec-title">
                    | Diploma in Engineering ( Information Technology )
                </div>
                <div class="ed-sec-desc">
                    Government Polytechnic Ahmedabad
                </div>
                <div class="ed-sec-desc">
                    CGPA &#8827; &#8827; 9.29
                </div>
                <div class="ed-sec-year">
                    2023 - 2026
                </div>
            </div>
        </div>
    </div><br><br><br><br>
    <div class="contacts">
        <div class="contacts-details">
            <div id="cnt-contacts">
                Contact here
            </div>
            <div id="arrow">
                <img src="images/arrow.png" id="arrow6" alt="" srcset="">
            </div>
            <div id="contacts-desc">
                Have a project idea? >> just say me <b>Hii.</b>
            </div>
        </div>
        <div class="contacts-sections">
            <form action="" method="post">
                <label for="name" id="name_label">| Name </label>
                <input type="text" name="name" id="name" placeholder="Kailash Solanki" required>
                <br>
                <label for="email" id="email_label">| Email </label>
                <input type="email" name="email" id="email" placeholder="solanki.kailash.3112@gmail.com" required>
                <br>
                <label for="about_project" id="about_project_label">| About Project </label>
                <input type="text" name="about_project" id="about_project"
                    placeholder="I want to discuss you about........" required>
                <button type="submit" id="button-style2">Send Here</button>
            </form>
        </div>
    </div><br><br>
    <hr><br>
    <footer>
        <div class="footer">
            <div class="footer-name" style="cursor:pointer;">
                💚Kailash Solanki💫
            </div>
            <div class="footer-handles">
                <a href="https://www.linkedin.com/in/kailash-solanki" class="social-media"> <img
                        src="images/linkedin.png" alt="" style="height: 30px; width: 30px;"> LinkedIn</a>
                <a href="https://github.com/SOLANKI-KAILASH" class="social-media"> <img src="images/github.png" alt=""
                        style="height: 30px; width: 30px;"> Github</a>
                <a href="https://www.instagram.com/kailash.solanki_/" class="social-media"> <img src="images/ig.webp"
                        alt="" style="height: 30px; width: 30px;"> Instagram</a>
            </div>
        </div>
    </footer><br>
</body>
</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize user input
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $about_project = htmlspecialchars(strip_tags($_POST['about_project']));

    $subject = "Kailash Solanki Portfolio Contact Form";
    $body = "Name : $name \nEmail: $email \nAbout Project: $about_project";

    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';
    require 'PHPMailer/Exception.php';

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->Username = 'solanki.kailash.3112@gmail.com'; // Use environment variable
    $mail->Password = "zeen qbes mgbx llep"; // If not working use different app password

    $mail->setFrom($email, $name);
    $mail->addAddress('solanki.kailash.3112@gmail.com', 'Kailash Solanki');

    $mail->Subject = $subject;
    $mail->Body = $body;

    try {
        $mail->send();
        echo "<script>alert('Thank you, $name. Your message has been sent successfully.');</script>";
    } catch (Exception $e) {
        echo "<script>alert('Sorry, there was a problem sending your message. Please try again.');</script>";
    }
}
?>
