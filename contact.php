
<html lang="en">
<head>

<title>Okagbue Francis</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image" href="images/frank-icon.png">

    <link rel="stylesheet" href="style4.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <script src="https://www.google.com/recaptcha/api.js"></script>
</head>
</head>

<body>

<div class="header">

    <nav>
        <a href="index.html"><img src="images/logo-image2.png" class="logo"></a>

        <div class="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hideMenu()"></i>
            <ul>
                <li><a href="index.html">Home</a> </li>
                <li><a href="about.html">About</a> </li>
                <li><a href="tech-stack.html">Tech Stack</a> </li>
                <li><a href="contact.php">Contact</a> </li>

            </ul>

        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>

    </nav>


<div class="contact-form">
<h2>CONTACT ME</h2>

<form method="post" action="">
    <label>
        <input type="text" name="name" placeholder="Your Name" required>
    </label>
    <label>
        <input type="text" name="phone" placeholder="Your Phone Number" required>
    </label>
    <label>
        <input type="email" name="email" placeholder="Your Email Address" required>
    </label>
    <label>
        <textarea name="message" placeholder="Your Message" required></textarea>
    </label>

    <div class="g-recaptcha" data-sitekey="6Ley0j8eAAAAAJVLz11Ux7okHJKHAObI3_GDgBtt"></div>



    <input type="submit" name="submit" value="Send Message" class="submit-btn">






</form>

    <div class="status">


        <?php

        if(isset($_POST['submit']))
        {
            $User_name = $_POST['name'];
            $phone = $_POST['phone'];
            $user_email = $_POST['email'];
            $user_message = $_POST['message'];

            $email_from = 'francis-okagbue.website';
            $email_subject = "New Form Submission from okagbue francis website";
            $email_body = "Name: $User_name.\n".
                "Phone: $phone.\n".
                "Email Id: $user_email.\n".
                "User Message: $user_message.\n";

            $to_email = "okagbueonyeka20@gmail.com";
            $headers = "From: $email_from \r\n";
            $headers .= "Reply-To: $user_email\r\n";

            $secretKey ="6Ley0j8eAAAAALTVCyP_4zo7jHn-Q8sHqdRXYDwz";
            $responseKey = $_POST['g-recaptcha-response'];
            $UserIP = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$responseKey&remoteip=$UserIP";

            $response = file_get_contents($url);
            $response = json_decode($response);

            if ($response->success)
            {
                mail($to_email, $email_subject, $email_body, $headers);
                echo "Message sent Successfully";

            }
            else

            {
                echo "<span>Invalid Captcha, Please Try Again</span>";
            }
        }
        ?>


    </div>

</div>

</div>


<!-- javascript for the media query to enable toggling the menu bar on lower resolution screen ---->
<script>

    var navLinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }

    function hideMenu(){
        navLinks.style.right = "-200px";}
</script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>




<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




</body>
</html>


