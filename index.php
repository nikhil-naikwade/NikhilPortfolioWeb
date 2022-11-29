<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nikhil Naikwade's Portfolio Website</title>
    <link rel="shortcut icon" type="emoji" href="images/logo1.png" />
    <link rel="stylesheet" href="styles.css">
    <!-- <link rel="stylesheet" media="screen and (max-width: 320px)" href="phone.css"> -->

    <link rel="stylesheet" media="screen and (min-width: 448px) and (max-width: 868px)" href="phone.css">
    <link rel="stylesheet" media = "screen and (min-width: 320px) and (max-width: 447px)" href="smallphn.css">

    <!-- <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <link rel="stylesheet" media = "screen and (min-width: 320px) and (max-width: 786px)" href="smallphn.css"> -->
    <!-- <script type="text/JavaScript" src="script.js"></script> -->
    <link rel="stylesheet" href="contactus_form.php">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include("nav.php");
    ?>
    <div class="hero">
        <div class="detail">
            <h1>I'M Nikhil <span>Naikwade</span></h1>
            <p>This is my official Portfolio website to showcase my
                all works related to <br> Coding And Web Development. </p>
            <a href="Nikhil Naikwade Resume.pdf" target="_blank" class="cv">Download CV</a>
        </div>
        <div class="images">
            <img src="images/shape.png" class="shape">
            <img src="images/Nik.png" class="picture">
        </div>

        <div class="social">
            <a href="https://www.linkedin.com/in/nikhil-naikwade-175107227/" target="_blank"><i
                    class="fab fa-linkedin"></i></a>
            <a href="https://www.hackerrank.com/nikhilnaikwade12" target="_blank"><i class="fab fa-hackerrank"></i></a>
            <a href="https://github.com/nikhil-naikwade" target="_blank"><i class="fab fa-github"></i></a>
            <a href="https://www.instagram.com/nikhiil.n_09/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/NikhilNaikwade1/" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="mailto:nikhilnaikwade12@gmail.com" class="footer__social"><i class="fa fa-envelope"></i></a>
        </div>
    </div>

    <footer id="footer">

        <p id="main"> &copy; Copyright&nbsp;:&nbsp;Created And designed by Nikhil Shriram Naikwade. &nbsp;All Rights Are
            Reserved...!!!</p>

        <div class="social1">
            <h3 id="LinksTitle" style="padding-top: 10px;">Social Links.</h3>
            <a href="https://www.linkedin.com/in/nikhil-naikwade-175107227/" target="_blank"><i class="fab fa-linkedin">
                    LinkedIn</i></a> &nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.hackerrank.com/nikhilnaikwade12" target="_blank"><i class="fab fa-hackerrank">
                    HackerRank</i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://github.com/nikhil-naikwade" target="_blank"><i class="fab fa-github">
                    GitHub</i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://twitter.com/NikhilNaikwade1/" target="_blank"><i class="fab fa-twitter">
                    Twitter</i></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="https://www.instagram.com/nikhiil.n_09/" target="_blank"><i class="fab fa-instagram">
                    Instagram</i></a>&nbsp;&nbsp;&nbsp;&nbsp;


            <div id="directcontact">
                <h3 id="LinksTitle">Direct Contact Details</h3>
                <a href="mailto:nikhilnaikwade12@gmail.com"><i class='fa fa-envelope'> E-mail Me</i>
                </a> &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="tel:9049889137"><i class="fa fa-phone"> Call Me</i> </a>
            </div>
        </div>

    </footer>
    <!-- <a href="#" class="scroll-up"> <i id="top" class="fa fa-arrow-up" aria-hidden="true"></i></a> -->
</body>

</html>