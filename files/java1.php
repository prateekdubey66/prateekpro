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
    <title>how to install C</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <link rel="stylesheet" href="../css/java1.css">
    <style>
    #search input{
       position:relative;
        left:500px;
        width:200px;
        height:40px;
    }
    .fa-search{
        position:relative;
        left:510px;
        color:white;
    
    }
    </style>
</head>
<body>
    <div class="container">   
        <div class="header">
            
            <h1 >Study <sub>Point</sub></h1>
            <form action="../php/search.php" method="POST" id="search">
            <input type="search" name="searchcontent" placeholder="Search here">
             <i class="fa fa-search"></i>
            </form>
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
                <li><a href="../index.html"><i class="fa fa-home"><span>home</span></i></a></li>
                <li><a href="#"><i class="fa fa-user"><span>About</span></i></a></li>
                <li><a href="#"><i class="fa fa-tasks"><span>services</span></i></a></li>
                <li><a href="#"><i class="fa fa-rss"><span>Blog</span></i></a></li>
                <li><a href="#"><i class="fa fa-id-card"><span>Contact</span></i></a></li>
            </ul>
           <div class="social" id="social1">
               <a href="#"><i class="fa fa-facebook-square"></i></a>
               <a href="#"><i class="fa fa-youtube-square"></i></a>
               <a href="#"><i class="fa fa-instagram"></i></a>
           </div>
        </div>
    
        <!-- right Side -->
        <div class="rightbar">
            <ul>
                <li><a href="java1.html"><i class="fa fa-tasks"><span> java introduction</span></i></a></li>
                <li><a href="java2.html"><i class="fa fa-tasks"><span> Applicaton of java</span></i></a></li>
                <li><a href="java3.html"><i class="fa fa-tasks"><span> History of java</span></i></a></li>
                <li><a href="java4.html"><i class="fa fa-tasks"><span>Features of Java</span></i></a></li>
                <li><a href="java5.html"><i class="fa fa-tasks"><span>How to set path in java</span></i></a></li>
                <li><a href="java6.html"><i class="fa fa-tasks"><span>First java programm</span></i></a></li>
                <li><a href="java7.html"><i class="fa fa-tasks"><span>Internal Details of Hello Java Program</span></i></a></li>
                <li><a href="java8.html"><i class="fa fa-tasks"><span> JVM (Java Virtual Machine) Architecture</span></i></a></li>
                <li><a href="java9.html"><i class="fa fa-tasks"><span> Java Variables</span></i></a></li>
                <li><a href="../index.html"><i class="fa fa-rss"><span>More</span></i></a></li>
                <li><a href="../php/logout.php"><i class="fa fa-id-card"><span> logout</span></i></a></li>
            </ul>
          
        </div>
        <br>
       
    
    <div class="Ccontent">
    <div style="text-align:justify">
    <h1> Java Introduction</h1>
    <br><br>
    <h1>What is java</h1><br><br>
    Java is a programming language and a platform.
Java is a high level, robust, object-oriented and secure programming language.<br><br>

<b>Platform:</b> Any hardware or software environment in which a program runs, is known as a platform. 
Since Java has a runtime environment (JRE) and API, it is called a platform<br><br>
<h2>Java Example</h2><br><br>
Lets have a quick look at Java programming example. <br><br>
<pre>
    class Simple<br>
    {  <br>
          public static void main(String args[])<br>
        { <br> 
    
         System.out.println("Hello Java"); <br> 
    
        }  <br>
    
    }
</pre> 
    <br>
    <h2>Output :</h2>
    <br>
    Hello Java


       </div>
        <div class="mybut">
            <button class="pre"><a href="../index.html"> previous</button>
            <button class="next"><a href="java2.html"> Next </a> </button>
            </div>
            </div>
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
</html>';
}
else{
    header("Location: ../files/signin.html");
}
?>