<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Contact Us Form @Nikhil Naikwade's Portfolio Website</title>
    <link rel="shortcut icon" type="emoji" href="images/logo1.png" />
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="phone.css">
    <style>
      div{
        text-align: center;
        /* margin-top: 111px; */
      }
      .alert{
        text-align: center;
        /* margin-top: 211px; */
        /* padding: 111px 111px; */
      }
    </style>
  </head>
  <body>

  <!-- <div>
            <nav class="navbar">
                <a href="index.php"><img src="images/logo1.png" class="logo"></a>
                <ul class="menu">
                    <li><a href="index.php">HOME</a></li>
                    <li><a href="about.php">ABOUT</a></li>
                    <li><a href="skills.php">SKILLS</a></li>
                    <li><a href="portfolio.php">PORTFOLIO</a></li>
                    <li><a href="project.php">PROJECTS</a></li>
                    <li><a href="contact.php">CONTACT</a></li>
                </ul>
            </nav>
        </div> -->
 
<?php
// include ("nav.php");
?>
<?php

if ($_SERVER['REQUEST_METHOD']== 'POST')
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$severname = "localhost";
   $username = "root";
   $password = "";
   $database = "portfoliowebform";

   $conn = mysqli_connect($severname, $username, $password, $database);

   if(!$conn){
    die("Sorry we failed to connect: ".mysqli_connect_error());
}

$sql = "INSERT INTO `form` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')";
$result = mysqli_query($conn,$sql);


if($result){
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Thank You.!  Your Form has been submitted successfully!
<button type="button" class="close" data-dismiss="alert" aria-label="arrow">
  <span aria-hidden="true">&times;</span>
</button>


</div>';


}

else{
 echo "The Record has not inserted succesfully because of the error -->".mysqli_error($conn);

echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> We are facing some Technical issue And Your Form was not submitted successfully! We regret the Inconvinence caused...!!
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>';
}


echo '<div> <a href="contact.php">Go Back</a> </div>';


?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 

  </body>
</html>