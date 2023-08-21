<?php 
$location="localhost";
$server="root";
$password="";
$con=mysqli_connect($location,$server,$password);
if($con)
{
    //echo "connected";
    $tbl="create database if not exists portfolio";
    $data=mysqli_query($con,$tbl);
    if($data)
    {
        $con=mysqli_connect($location,$server,$password,'portfolio');
        //echo"db created";
        $tbl1="create table if not exists contact(
        id int(100) AUTO_INCREMENT primary key,
        name varchar(50) not null,
        email varchar(50) not null,
        phone varchar(20) not null,
        massege varchar(100) not null 
        )";
       $data1=mysqli_query($con,$tbl1);
        if($data1)
        {
           //echo"tbl created";
        }
        else
        {
            echo"tbl failed to create";
        }
    }
    else
    {
        echo"db failed";
    }
}
else
{
    echo "check again";
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Neelu Chauhan - Frontend Web Developer </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

   <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>

    <div class="containe">
    <!-- Navbar Section -->
    <nav id="navbar" class="flex s-around bg-color">
        <div class="left-nav">

        </div>
        <div class="right-nav">
            <ul class="flex">
                <li><a href="#home" class="t-white " onmouseover="fun_1()">Home</a></li>
                <li><a href="#about" class="t-white  "onmouseover="fun_1()">About Me</a></li>
                <li><a href="#skills" class="t-white "onmouseover="fun_1()">Skills</a></li>
                <li><a href="#projects" class="t-white "onmouseover="fun_1()">Projects</a></li>
                <li><a href="#contact" class="t-white "onmouseover="fun_1()">Contact Me</a></li>
            </ul>
        </div>
    </nav>

    <!-- Bottom Navigator -->
    <section id="bottom">
        <div class="bottom-nav flex s-center items-center">
            <ul class="flex s-around items-center">
                <a href="#home">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-house"></i></li>
                </a>
                <a href="#about">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-user"></i></li>
                </a>
                <a href="#skills">
                    <li class="bottomo-hover flex s-center items-center"><i class="fa-solid fa-code"></i></li>
                </a>
                <a href="#services">
                    <li class="bottomo-hover flex s-center items-center">
                        <i class="fa-solid fa-rocket"></i>
                    </li>
                </a>
            </ul>
        </div>
    </section>

    <!-- Home Section -->
    <section id="home" class="flex s-around sw-80 m-auto">
        <div class="home-left flex items-center">
            <div class="home-content">
                <h6 class="poppinss">Hi, I'm</h6>
                <h1 class="t-white">Neelu Chauhan</h1>
                <h4 class="poppinss">Full Stack Web Developer</h4>
                <a href="cv.pdf" target="_blank"><button
                        class="btn poppins">Resume</button></a>
                <a class="btn live poppins" id="hireme" href="https://www.linkedin.com/in/neelu-k-8a8a6b257"
                    target="_blank">Let's Talk</a>
            </div>
        </div>
        <div class="home-right flex s-center items-center">
            <div class="circle flex s-center items-center" id="mainImage">
                <!-- Here in src replace the given link with your image link -->
                <img src="neelu.jpg" alt="">
            </div>

        </div>
    </section>
    <br>
    <br>
    <br>
    <br>
    <br>
    <!-- <hr class="t-white"> -->

    <!-- About Section -->
    <section id="about">
                <div class="about-content brdr">
                 <center> <h1 class="t-white m-b-1 poppins">I'm Neelu</h1>
                    <p class="t-white poppins">A self-tought Full Stack Web Developer BCA student looking for an opportunity in Web <br>Development.
                        Who is committed to study web development. Mindset to fullfill the life with<br>
                        wonderful memories and knowledge.
                         My preferred tools are PHP, Laravel and Sql.</p>

                </div>
            </div>
        </div>
    </section>
        <br>
    <br>
    <br>

    <!-- Skills Section -->
    <section id="skills">
        <h1 class="t-center my-2 f-2 ">Skills</h1><br>
        <div class="services-container flex s-around h-50">
        <div class=" skills-left flex s-center items-center">
            <img src="/Images/skills.png" alt="">
        </div>

        <div class="skills-right flex items-center">
            <div class="skillss-container">
                <div class="html bar p-relative"><span class="bar-content left t-white">HTML</span><span
                        class="bar-content right-skills t-white">90%</span></div>
                <div class="css bar p-relative"><span class="bar-content left t-white">CSS</span><span
                        class="bar-content right-skills t-white">80%</span></div>
                <div class="php bar p-relative"><span class="bar-content left t-white">PHP</span><span
                        class="bar-content right-skills t-white">75%</span></div>
                <div class="laravel bar p-relative"><span class="bar-content left t-white">LARAVEL</span><span
                        class="bar-content right-skills t-white">70%</span></div>
                <div class="js bar p-relative"><span class="bar-content left t-white">MYSQL</span><span
                        class="bar-content right-skills t-white">65%</span></div>
                <div class="bootstrap bar p-relative"><span class="bar-content left t-white">Bootstrap</span><span
                        class="bar-content right-skills t-white">50%</span></div>


            </div>
        </div>
        </div>
    </section>
        <br>
    <br>
    <br>


    <!-- Projects Section -->
    <section id="projects">
        <h1 class=" t-center my-2 f-2">Projects</h1><br>
        <div class="projects-container flex s-center">
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-one"><br>
                    <img src="quize.png" alt="" width="60%" border="2px solid black">
                </div>
                <h1 class="t-black poppins">Online Quiz System</h1>
                <p class="t-white poppins"> A Quize Sysmtem using HTML, CSS and php. Take the test from the user and store the all responses in the database.</p>
                <div class="buttons flex s-around">
                    <a href="
https://github.com/Neelu-chauhan/Chatbot"
                        target="_blanks" class="btn mx-1 m-top live">GitHub</a>
                   
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-one"><br>
                    <img src="food.png" alt="" width="60%" border="2px solid black">
                </div>
                <h1 class="t-black poppins">Food Website</h1>
                <p class="t-white poppins">A simple Food Website  using HTML,CSS and Php . This webiste is for Food lovers
                    provides all the information of thir services at this landing page.</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/Neelu-chauhan/Food-order-website-using-php-and-mysql" target="_blanks"
                        class="btn mx-1 m-top live">GitHub</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-two"><br>
                    <img src="cat.png" alt="" width="60%" border="2px solid black">
                </div>

                <h1 class="t-black poppins">Cat Adoption Website</h1>
                <p class="t-white poppins">This Website for those who want to adopt cats .Im make this using only HTML,CSS and PHP.</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/Neelu-chauhan/website-page-" target="_blank"
                        class="btn live m-top">GitHub</a>
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-two"><br>
                    <img src="dino.png" width="65%" height alt="" border="2px solid black">
                </div>

                <h1 class="t-black poppins">Dinosaur Game</h1>
                <p class="t-white poppins">This is my collage project Using C,C++ lang.Team size =5</sp>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top live">GitHub</a>
                </div>
            </div>
            

            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-three"><br>
                    <img src="netf.jpg" alt="" width="90%" height="90%" border="2px solid black">
                </div>

                <h1 class="t-black poppins">Logo</h1>
                <p class="t-white poppins">Using HTML and Css  I have had created  NETFLIX, ADIDAS logos.</p>
                <div class="buttons flex s-around">
                    <a href="https://github.com/Neelu-chauhan/netflix-logo" target="_blank"
                        class="btn mx-1 m-top live">GitHub</a>
                    
                </div>
            </div>
            <div class="projects-item flex f-col s-center items-center">
                <div class="image-container p-three"><br>
                    <img src="regi.png" alt="" width="60%" border="2px solid black">
                </div>

                <h1 class="t-black poppins">Registration Form</h1>
                <p class="t-white poppins"> Using HTML,CSS and PHP. </p>
                <div class="buttons flex s-around">
                    <a href="#" target="_blank"
                        class="btn mx-1 m-top live">GitHub</a>
                </div>
            </div>

        </div>
    </section>
        <br>
    <br>
    <br>

    <!-- Contact Me Section -->
    <section id="contact" class="m-b-1">
        <h1 class=" t-center my-2  f-2">Contact Me</h1><br>
        <div class="contact-container flex s-around items-centers">
            <div class="form" id="contactForm">
                <form action="" id="contactFrom" method="POST" enctype="multipart/form-data">
                    <div class="name form-div">
                        <input type="text" name="name" id="name" class="poppins" placeholder="Enter Your Name">
                    </div>
                    <div class="email form-div">
                        <input type="email" name="email" id="email" class="poppins" placeholder="Enter Your Email"
                            required>
                    </div>
                    <div class="phone form-div">
                        <input type="phone" name="phone" id="phone" class="poppins" placeholder="Enter Your Phone"
                            required>
                    </div>
                    <div class="textarea form-div">
                        <textarea name="msg" id="textarea" cols="30" rows="10" class="poppins"
                            placeholder="Enter Messages"></textarea>
                    </div>
                    <button type="submit" class="btn poppins" id="submit" name="submit">Send</button>
                </form>            </div>
        </div>
    </section>
 <?php 
 if(isset($_POST['submit'])) 
 {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['msg'];
$insert="INSERT INTO `contact`(`name`, `email`, `phone`, `massege`)VALUES('$name','$email','$phone','$msg')";
$data=mysqli_query($con,$insert);
if($data)
{
    echo"data inserted";
}
else
{
    echo"data failed to insert";
}
 }
 ?>


    <!-- Footer Section -->
    <footer id="footer">
        <ul class="flex s-center w-80 m-auto my-2 res">
            <li><a href="#home" class="poppinss">Home</a></li>
            <li><a href="#about" class="poppinss">About</a></li>
            <li><a href="#skills" class="poppinss">Skills</a></li>
            <li><a href="#projects" class="poppinss">Projects</a></li>
        </ul>
        <ul class="flex s-center w-80 font-awesome ">
            <a href="https://www.linkedin.com/in/neelu-k-8a8a6b257" target="_blank">
                <li><i class="fa-brands fa-linkedin-in"></i></li>
            </a>
            <a href="https://github.com/Neelu-chauhan" target="_blank">
                <li><i class="fa-brands fa-github"></i></li>
            </a>
            <a href="https://instagram.com/neelu____210?utm_source=qr&igshid=MzNlNGNkZWQ4Mg%3D%3D" target="_blank">
                <li><i class="fa-brands fa-instagram"></i></li>
            </a>
        </ul>
        <p class="t-center my-2 poppins">&copy; All Rights Reserved - <span class="cpy-white poppins">Neelu Chauhan</span></p>

    </footer>

    <div id="scroll-top" onclick="scrolltop()">
        <span><i class="fa-solid fa-arrow-up"></i></span>
    </div>
</div>

</body>
<script src="/script.js">
    function fun_1(){
        document.querySelector(".t-white roboto").style="color:blue;"
    }
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


</html>
