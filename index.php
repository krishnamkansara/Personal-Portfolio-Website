<?php
$conn= mysqli_connect('localhost','root','contact_db')or die('connection failed');
if(isset($_POST['send'])){

    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $number = mysqli_real_escape_string($conn,$_POST['number']);
    $message = mysqli_real_escape_string($conn,$_POST['message']);

    $select_message = mysqli_query($conn, "SELECT * FROM 'contact_form' WHERE name='$name' AND email='$email' AND number='$number' AND message='$message'") or die('quer failed');
    if(mysqli_num_rows($select_message) > 0){
        $message[]='Message Sent Already!';
    }
    else{
        mysqli_query($conn, "INSERT INTO 'contact_form'(name, email, number, message) VALUES($name, $email, $number, $message)") or die('query failed')
        $message[]='Message Sent Successfully!';

    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Krishnam Kansara Portfolio</title>
    <!-- providing Font link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fork-awesome/1.2.0/css/fork-awesome.min.css">
    <script src="https://kit.fontawesome.com/88e649d78c.js" crossorigin="anonymous"></script>
        <!-- providing css file -->
    <link rel="stylesheet" href="style.css">


</head>


<body>
    
<?php
    if(isset($$message)){

        foreach($$message as $$message){
            echo'
            <div class="message">
        <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
            </div>';
        }
    }

?>
    <!-- header section start-->
    <header class="header">

        <div id="menu-btn" class="fa fa-bars">


        </div>


        <a href="#home" class="logo">Portfolio</a>
        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">

            <a href="#" class="fa fa-facebook-f" font-size:36px></a>
            <a href="#" class="fa fa-linkedin" font-size:36px></a>
            <a href="#" class="fa fa-github " font-size:36px></a>

        </div>
    </header>

    <!-- header section end-->


    <!-- home section starts  -->

    <section class="home" id="home">
        <div class="img">
            <img src="imgs/profile img.png" alt="">
        </div>

        <div class="content">
            <h3>
                Hello, I am Krishnam Kansara
            </h3>
            <span>Web Designer and Developer</span>
            <p>Passionate software engineer with expertise in Python, Java, Android, and data science, seeking
                challenging opportunities to contribute to innovative projects and make a positive impact.

                With a strong foundation in programming languages, software development methodologies, and data analysis
                techniques, I bring a versatile skillset to the table. I am passionate about creating user-friendly,
                efficient, and scalable software solutions that align with business goals.</p>
            <a href="#about" class="btn">about me</a>
        </div>



    </section>

    <!-- home section ends -->

    <!-- about section starts -->
    <section class="about" id="about">

        <h1 class="heading"> <span>biography</span></h1>

        <div class="biography">
            <p>Results-driven Computer Science student with a strong foundation in web development and Mobile App
                development. Eager to contribute technical prowess, innovative problem-solving, and a passion for
                emerging
                technologies to drive impactful solutions in the field.
            </p>
            <div class="bio">
                <h3><span>Name: </span>Krishnam Kansara </h3>
                <h3><span>E-mail: </span>krishnamkansara@gmail.com </h3>
                <h3><span>Address: </span>Vadodara, Gujarat </h3>
                <h3><span>Phone: </span>9664600087</h3>
                <h3><span>Age: </span>21 </h3>
                <h3><span>Experience: </span>Fresher </h3>
            </div>
            <a href="#" class="btn"> Download Resume</a>
        </div>

        <div class="Skills">
            <h1 class="heading"> <span>Skills</span></h1>
            <div class="progress">
                <div class="bar">
                    <h3><span>HTML</span><span>80%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>CSS</span><span>60%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>JavaScript</span><span>80%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Python</span><span>85%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>C</span><span>80%</span></h3>
                </div>
                <div class="bar">
                    <h3><span>Java</span><span>85%</span></h3>
                </div>
            </div>
        </div>

        </div>


        <!-- about section ends -->

        <!-- Education & Experience starts here -->

        <div class="edu-exp">
            <h1 class="heading"><span>Education & Experience</span></h1>
            <div class="row">

                <div class="box-container">
                    <h3 class="title">education</h3>
                    <div class="box">
                        <span>(2017-2018)</span>
                        <h3>St. Joseph E.T. High School, Bilimora</h3>
                        <p>10th | GSEB | Percentage: 78.16/100</p>
                    </div>

                    <div class="box">
                        <span>(2019-2020)</span>
                        <h3>A.B. Higher Secondary School, Navsari</h3>
                        <p>12th | GSEB | Percentage: 69.80/100</p>
                    </div>

                    <div class="box">
                        <span>(2020-2024)</span>
                        <h3>Navrachana University, Vadodara</h3>
                        <p>B.Tech - Computer Science & Engineering | CGPA:8.16/10.0</p>
                    </div>


                </div>

                <div class="box-container">
                    <h3 class="title">education</h3>
                    <div class="box">
                        <span>(2017-2018)</span>
                        <h3>St. Joseph E.T. High School, Bilimora</h3>
                        <p>10th | GSEB | Percentage: 78.16/100</p>
                    </div>

                    <div class="box">
                        <span>(2019-2020)</span>
                        <h3>A.B. Higher Secondary School, Navsari</h3>
                        <p>12th | GSEB | Percentage: 69.80/100</p>
                    </div>

                    <div class="box">
                        <span>(2020-2024)</span>
                        <h3>Navrachana University, Vadodara</h3>
                        <p>B.Tech - Computer Science & Engineering | CGPA:8.16/10.0</p>
                    </div>


                </div>
            </div>
        </div>


        </div>
        <!-- Education & Experience ends here -->

        <!-- services starts here -->

        <section class="services" id="services">
            <h1 class="heading"><span>Services</span></h1>
            <div class="box-container">
                <div class="box">
                    <i class="fa fa-code"></i>
                    <h3>Web Development</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestias id sit officia. Similique,
                        doloremque?</p>

                </div>

                <div class="box">
                    <i class="fa fa-paint-brush"></i>
                    <h3>Graphic design</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestias id sit officia. Similique,
                        doloremque?</p>

                </div>
                <div class="box">
                    <i class="fa fa-bootstrap"></i>
                    <h3>bootstrap</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestias id sit officia. Similique,
                        doloremque?</p>

                </div>
                <div class="box">
                    <i class="fa fa-line-chart"></i>
                    <h3>seo marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestias id sit officia. Similique,
                        doloremque?</p>

                </div>
                <div class="box">
                    <i class="fa fa-bullhorn"></i>
                    <h3>digital marketing</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestias id sit officia. Similique,
                        doloremque?</p>

                </div>

                <div class="box">
                    <i class="fa fa-wordpress"></i>
                    <h3>wordpress</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed molestias id sit officia. Similique,
                        doloremque?</p>

                </div>
            </div>
        </section>

        <!-- services ends here -->

        <!-- portfolio section starts here -->

        <section class="portfolio" id="portfolio">
            <h1 class="heading"><span>portfolio</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="imgs\logo.png" alt="">
                    <h3>SubBills Application</h3>
                </div>
                <div class="box">
                    <img src="imgs\logo1.jpg" alt="">
                    <h3>Fashion Assistant Application</h3>
                </div>
                <div class="box">
                    <img src="imgs\ps logo.jpg" alt="">
                    <h3>Pet Shop Website</h3>
                </div>
                
            </div>
        </section>
        <!-- portfolio section ends here -->

        <!-- contact section starts here -->
        <section class="contact" id="contact">
            <h1 class="heading"><span>Contact Me</span></h1>
            <form action="" method="post">
                <div class="flex">
                    <input type="text" name="name" placeholder="Enter your name" class="box" required>
                    <input type="email" name="email" placeholder="Enter your email" class="box" required>
                </div>
                <input type="number" name="number" min="0" placeholder="Enter your number" class="box" required>
                <textarea name="message" class="box" placeholder="Enter your message" cols="30" rows="10"></textarea>
                <input type="submit" name="send" value="send message" class="btn">
            </form>

            <div class="box-container">
                <div class="box">
                    <i class="fa fa-phone"></i>
                        <h3>Phone</h3>
                        <p>+91-9664600087</p>
                </div>
                <div class="box">
                    <i class="fa fa-envelope"></i>
                        <h3>E-mail</h3>
                        <p>krishnamkansara@gmail.com</p>
                </div>
                <div class="box">
                    <i class="fas fa-map-marker-alt"></i>
                        <h3>Address</h3>
                        <p>A2-102, Northway By Millenium, Bhayli, Vadodara</p>
                </div>
            </div>

        </section>
        <!-- contact section ends here -->

        <!-- copyright section starts here -->
        <!-- copyright section ends here -->






    </section>
    <div class="credit">&copy; copyright @ <?php echo date('Y'); ?> by <span>Krishnam Kansara</span></div>

    <!-- providing javascript file -->
    <script src="script.js"></script>
</body>

</html>