<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us @Nikhil Naikwade's Portfolio Website</title>
    <link rel="shortcut icon" type="emoji" href="images/logo1.png" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <style>
        #contact{
            padding-top:100px;
        }
    </style>
</head>
<body>
<?php
    include("nav.php");
?>  
    <section id="contact">
        <h1 id="h1-prim">Contact</h1>
        <div id="contact-box">
            <form action="contactus_form.php" method="post">
                <label for="name">Name :-</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your Name">
                <label for="name">Email :-</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email">
                <label for="name">Phone Number :-</label>
                <input type="phone" name="phone" class="form-control" id="phone" placeholder="Enter your Phone number">
                <label for="message">Message :-</label>
                <textarea id="p1" name="message" class="form-control" id="message" cols="3" rows="3"
                    placeholder="Type your message here "></textarea>

                <button class="btn1">Submit Form</button>
            </form>
        </div>
    </section>  
</body>
</html>