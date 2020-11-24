<?php
session_start();
?>


<?php
$host = "localhost";  
$user = "root";  
$password = '';  
$db_name = "prateekpro";  
  
$con = mysqli_connect($host, $user, $password, $db_name);

if($_SESSION[email]!=""){
echo'

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Python 1</title>
    <!-- <link rel="stylesheet" href="leftsidebar.css"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/python1.css">


</head>
<body>
 
 <div class="container">   
    <div class="header">
        
        <h1>Study <sub>Point</sub></h1>
    </div>
     
    <input type="checkbox" id="chk">
    <label for="chk" class="show-btn">
        <i class="fa fa-bars"></i>
    </label>
   
    <label for="chk" class="hide-btn">
        <i class="fa fa-times"></i>
    </label>
    <div class="sidebar">
        <ul>
            <li><a href="../index.html"><i class="fa fa-home"><span> home</span></i></a></li>
            <li><a href="#"><i class="fa fa-user"><span> About</span></i></a></li>
            <li><a href="#"><i class="fa fa-tasks"><span> services</span></i></a></li>
            <li><a href="#"><i class="fa fa-rss"><span> Blog</span></i></a></li>
            <li><a href="#"><i class="fa fa-id-card"><span> Contact</span></i></a></li>
        </ul>
       <div class="social" id="social1">
           <a href="#"><i class="fa fa-facebook-square"></i></a>
           <a href="#"><i class="fa fa-youtube-square"></i></a>
           <a href="#"><i class="fa fa-instagram"></i></a>
       </div>
    </div>

    
    <div class="rightbar">
        <ul>
            <li><a href="files/python1.html"><i class="fa fa-tasks"><span> 1-Python</span></i></a></li>
            <li><a href="files/python2.html"><i class="fa fa-tasks"><span> 2-Python</span></i></a></li>
            <li><a href="../index.html"><i class="fa fa-rss"><span>More</span></i></a></li>
        </ul>
      
    </div>
    <br>
    


<div class="Pcontent" style ="text-align:justify"> 

    <p>

    <h1>Introduction Of Python</h1>
    <br><br>

    >Python is a widely used general-purpose, high level programming language.<br>

        It was created by Guido van Rossum in 1991 and further developed by the Python Software Foundation.

        It was designed with an emphasis on code readability, and its syntax allows programmers to express their concepts in fewer lines of code.<br>

        Python is a programming language that lets you work quickly and integrate systems more efficiently.<br><br>

    

    <h2>There are two major Python versions:</h2>

    <b>1. Python 2 <br> 2. Python 3</b><br> Both are quite different.<br><br>

         Beginning with Python programming:<br><br>

         <b> Finding an Interpreter:</b><br><br>

         Before we start Python programming, we need to have an interpreter to interpret and run our programs.<br><br>

         <b>Windows:</b> There are many interpreters available freely to run Python scripts like IDLE (Integrated Development Environment) that comes bundled with the Python software downloaded .<br><br>

         <b>Linux:</b> Python comes preinstalled with popular Linux distros such as Ubuntu and Fedora.<br><br>

         To check which version of Python you’re running, type “python” in the terminal emulator.<br>

 

         The interpreter should start and print the version number.<br>

         macOS: Generally, Python 2.7 comes bundled with macOS. You’ll have to manually install Python 3 from Python.org 

   

    <h2>Python Language advantages and applications:</h2>

        

            <ul class="Plist">

                 <li>Python is a high level, interpreted and general purpose dynamic programming language that focuses on code readability.</li>

                 <li>It has fewer steps when compared to Java and C.It was founded in 1991 by developer Guido Van Rossum.</li>

                 <li> It is used in many organizations as it supports multiple programming paradigms.</li>

                 <li>It also performs automatic memory management.</li>  

            </ul>          

        

    
 </div>

<!-- content of C intro programming -->

<!-- footer -->

<div class="footer">
   
    <footer>
        <section class="sec-1">

            <section class="about">
                <h3>About</h3>
                <p style="overflow:hidden;">The physical classroom learning nowadays is no longer 
                    applicable for the current younger generations (Gen Y). In an 
                    era known as the society of technology and knowledge, where 
                    lifelong learning is a way of life, we are developing a website 
                    named as “study point” for goal of finding effective ways of 
                    providing new learning material. The project is a Java based 
                    project developed with the help of Java, HTML and CSS .This 
                    E-learning website includes computer based learning. This E-
                    learning website provide knowledge to the students about 
                    various topics and in an effort to make learning more 
                    efficient, equitable and innovative. It provides efficiency and 
                    effectiveness in providing education to the students .This 
                    website has no registered user, any guest user can take 
                    advantage of it.</p>
            </section>
            <section class="categories">
                <h3>Categories</h3>
                <ul>
                    <li> <a href="#">C</a> </li>
                    <li> <a href="#">UI Design</a> </li>
                    <li> <a href="#">PHP</a> </li>
                    <li> <a href="#">Java</a> </li>
                    <li> <a href="#">Android</a> </li>
                    <li> <a href="#">Templates</a> </li>
                    
                </ul>
            </section>
            <section class="quick-links">
                <h3>Quick-links</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Contribute</a></li>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Sitemap</a></li>
                   
                </ul>
            </section>
            <section class="contact">
                <h3>Contact</h3>
                <ul>
                    <li> <a href="#"> <i class="fa fa-home"></i> <span>GLA University mathura UP,India</span> </a></li>
                    <li> <a href="#"> <i class="fa fa-envelope-o"></i> <span>studyPoint@gmail.com</span></a></li>
                    <li> <a href="#"> <i class="fa fa-mobile"></i> <span>90******35</span></a></li>
                    <li> <a href="#"> <i class="fa fa-facebook"></i><span>StudyPoint</span> </a></li>
                </ul>
            </section>

        </section>
       
        <section class="sec-2">
            <h3>Register for Free</h3>
            <a href="#">Signup!</a>

        </section>

        

        <section class="sec-3">
           <a href="#" class="facebook" ><i class="fa fa-facebook" ></i></a> 
           <a href="#" class="twitter"><i class="fa fa-twitter" ></i></a> 
           <a href="#" class="google" ><i class="fa fa-google" ></i></a> 
           <a href="#" class="linkedin" ><i class="fa fa-linkedin" ></i></a> 
           <a href="#" class="dribbble" ><i class="fa fa-dribbble" ></i></a> 
        </section>
        
        <section class="sec-4">
            <p>Copyright @ 2020 All Rights Reserved by <span> <a href="#">Study Point</a></span> </p>
        </section>
    </footer>
</div> 
      
</body>
</html>
        ';
}
else{

    header("Location: ../files/signin.html");
}
?>