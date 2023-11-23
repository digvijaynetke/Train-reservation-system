<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Train Ticket Reservation System</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">

</head>
<body>
    <section class="header">
        <nav>
            <a href=""><img src="images/logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa-sharp fa-solid fa-xmark" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">ABOUT US</a></li>
                    <li><a href="pass-login.php">Make Reservation</a></li>
					<li><a href="admin/emp-login.php">Admin Login</a></li>
					<li><a href="https://www.viit.ac.in/">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa-solid fa-bars" onclick="showMenu()"></i>
        </nav>
    <div class="text-box">
        <h1>Train Ticket Booking Website</h1>
        <p>Book Your tickets here<br> Enjoying your journey with us.</p>
        <a href="pass-login.php" class="hero-btn">Book Ticket</a>
    </div>    
    </section>
<!---Sevices-->
    <section class="service">
        <h1>SERVICES</h1>
        <p>We offering a best services in the whole world</p>
        <div class="row1">
            <div class="service-col1">
                <h3>Book Ticket</h3>
                <p>Book tickets from to DD/MM/YYYY all classes general..</p>   
            </div>
            <div class="service-col1">
                <h3>E-Catering</h3>
                <p>Get restaurant food deliverd right at your seat</p>   
            </div>
            <div class="service-col1">
                <h3>Hotels</h3>
                <p>Book your nearest hotels with 50% off</p>   
            </div>
        </div>
        <div class="row2">
            <div class="service-col2">
                <h3>Hoildays</h3>
                <p>Get best deals on holidays with return tickets.</p>   
            </div>
            <div class="service-col2">
                <h3>Gallery</h3>
                <p>Upgrade your photo gallery and social media with us</p>   
            </div>
            <div class="service-col2">
                <h3>Charter train</h3>
                <p>Charter our best friends with maximum benefits st lowest cost</p>   
            </div>
        </div>

    </section>
<!--About Us-->
<section class="AboutUs">
    <h1>About Us</h1>
    <p>We, Aditya, Bhagyashri, and Digvijay, are a collaborative team of second-year students from the C division at Vishwakarma Institute of Information Technology. This project, developed as part of our project-based learning initiative, represents a significant milestone in our academic journey. With the invaluable guidance and assistance from our senior mentor, we successfully navigated the intricacies of the project to create a comprehensive and impactful solution. This collaborative effort has not only enriched our technical skills but has also fostered teamwork and problem-solving abilities. We are grateful for the mentorship received and proud of the outcomes achieved through this collective endeavor, showcasing our dedication to continuous learning and growth.</p>

    <div class="row">
        <div class="AboutUs-col"> <!-- Corrected class name -->
            <img src="images/TunnelTrain.jpg">
        </div>
        <div class="AboutUs-col">
            <h3>Welcome to RAILWAY RESERVATION SYSTEM Services</h3>
            <p>At our Train Reservation System, we wholeheartedly welcome you to a world where your journey takes center stage. We are fueled by an unwavering commitment to redefine the way you experience train travel. For us, it's not merely about getting from point A to point B; it's about turning every journey into an unforgettable adventure.<br>Our dedicated team of experts is on a mission to revolutionize train travel. We believe in creating more than just a platform; we're crafting an experience. One that seamlessly blends the practicality of booking, managing, and traveling by train with the excitement of embarking on a new adventure.<br>In a world where punctuality, convenience, and extraordinary service are your expectations, we are here to surpass them. Whether you're a daily commuter, an intrepid explorer seeking new horizons, or a family planning an unforgettable vacation, our promise is clear: to make your journey remarkable.<br>
                Our dedication knows no bounds. We are constantly innovating and striving for excellence, ensuring that you have access to the latest features and technology. We're not just about tickets; we're about crafting experiences that will leave you with a sense of wonder.<br>
                So, come and embark on this thrilling rail adventure with us. We guarantee that you'll reach your destination comfortably, on time, and with a smile. Thank you for choosing our Train Reservation System.</p>
        </div>
   </div>
</section>

<!--STATIONS-->
<section class="station">
    <h1>SOME FAMOUS STATIONS</h1>
    <p>These are the some famous and popular places people book ticket for :).</p>
    <div class="row1">
        <div class="station-col1">
           <img src="images/chennai.jpg">
           <h3>Chennai</h3> 
        </div>
        <div class="station-col1">
            <img src="images/jammu.jpg">
            <h3>Jammu</h3> 
         </div>
         <div class="station-col1">
            <img src="images/Howrah.jpg">
            <h3>Howrah</h3> 
         </div>
         <div class="station-col1">
            <img src="images/surat.jpg">
            <h3>surat</h3> 
         </div>
    </div>
    <div class="row2">
        <div class="station-col2">
            <img src="images/csmt.jpg">
            <h3>Mumbai</h3> 
        </div>
        <div class="station-col2">
            <img src="images/Delhi.jpg">
            <h3>New Delhi</h3> 
         </div>
         <div class="station-col2">
            <img src="images/pune.jpg">
            <h3>Pune Junction</h3> 
         </div>
         <div class="station-col2">
            <img src="images/Hyb.jpg"> 
            <h3>Hyderabad</h3>
         </div>
    </div>

</section>

<!--Team-->
<section class="team">
    <h1>Our Team</h1>
    <p>STDENTS OF VISHWAKARMA INSTITUTE OF INFORMATION TECHNOLOGY.</p>

<div class="row">
    <div class="team-col">
        <img src="images/digya.jpg">
        <h3>DIGVIJAY NETKE</h3>
        <P>SY-C IT Student @VIIT26.</P>
    </div>
    <div class="team-col">
        <img src="images/Bhagyashri.jpg">
        <h3>BHAGYASHRI PHAD</h3>
        <P>SY-C IT Student @VIIT26.</P>
    </div>
    <div class="team-col">
        <img src="images/aditya.jpg">
        <h3>ADITYA PAWAR</h3>
        <P>SY-C IT Student @VIIT26.</P>
    </div>
</div>
</section>

<!--Contact us for more inforamtion-->
<section class="cta">
    <h1>Contact to our team for any query<br>Anywhere from the India</h1>
    <a href="" class="hero-btn">CONTACT US</a>
</section>

<!--FOOTER-->
<section class="footer">
    <h4>FOLLOW FOR MORE</h4>
    <p>.</p>
    <div class="icons">
        <i class="fa fa-instagram" aria-hidden="true"></i>
        <i class="fa fa-linkedin-square" ></i>
        <i class="fa fa-twitter-square" ></i>
        <i class="fa fa-envelope-o" ></i>
        <i class="fa fa-youtube-play" ></i>
        <i class="fa fa-facebook-official" ></i>
    </div>
    <p>Made with <i class="fa fa-heart-o"></i>ADITYA ,BHAGYASHRI AND DIGVIJAY</p>
</section> 


<!-----JavaScript for toggle menu for smaal size screen----->    
<script>
    var navLinks=document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right="0";
    }
    function hideMenu(){
        navLinks.style.right="-200px";
    }
</script>    
</body>
</html>