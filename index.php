<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
    <title>Home - Explore Events</title>
    <style>
        body {
            margin: 0;
            font-family: 'Heebo', sans-serif;
            background-image: url("comrawpixel6268875.jpg");
            background-size: cover;
            background-attachment: fixed;
            color: #333;
        }

        header {
            background-color: rgb(57, 60, 231);
            color: antiquewhite;
            font-family: Arial, Helvetica, sans-serif;
        }

        h2 {
            color: aliceblue;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-style: italic;
            text-decoration: overline;
            margin-left: 120px;
            font-size: 30px;
        }

        .container {
            width: 92%;
            margin: auto;
            height: 100%;
        }

        .grid-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            background-color: lavenderblush;
            margin: 30px 0;
            padding: 20px;
            border-radius: 8px;
        }

        .grid-items img {
            float: left;
            margin-right: 20px;
            border-radius: 8px;
        }

        .grid-items {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            background-color: bisque;
            padding: 20px;
            border-radius: 8px;
            flex: 1 1 30%;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s;
        }

        .grid-items:hover {
            transform: translateY(-5px);
        }

        /* tablet view */
        @media only screen and (min-width: 576px) {
            .container {
                width: 540px;
            }
        }

        /* desktop view */
        @media only screen and (min-width: 1200px) {
            .container {
                width: 1140px;
            }
        }

        .tool-bar {
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .tool-bar div:hover {
            color: orangered;
        }

        .tool-bar div {
            cursor: pointer;
            padding: 0 20px;
        }

        .tool-bar a {
            text-decoration: none;
            color: antiquewhite
        }

        .scrollableMenu {
            display: grid;
            gap: var(--size-3);
            grid-auto-flow: column;
            grid-auto-columns: 22%;
            overflow-x: auto;
            margin-left: 120px;
            margin-right: 100px;
            background-color: azure;
            padding: 30px;
            margin-bottom: 30px;
        }

        .scrollableMenu::-webkit-scrollbar {
            width: 0;
        }

        .item {
            display: grid;
            grid-template-rows: min-content;
            gap: var(--size-3);
            padding: var(--size-3);
            background: var(--surface-2);
            border-radius: var(--radius-2);
            margin-right: 10px;
        }

        .item>img {
            inline-size: 100%;
            aspect-ratio: 16 / 9;
            object-fit: cover;
        }

        .item>p {
            color: brown;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }

        .first {
            background-image: url("s.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            color: rgb(214, 230, 245);
            padding: 30px 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
            border-radius: 8px;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }

        .success-message {
            display: none;
            color: green;
            text-align: center;
        }

        footer {
        background-color: rgb(58, 58, 59);
        color: antiquewhite;
        font-family: Arial, sans-serif;
        padding: 40px 0;
        }

        .footer-container {
            display: flex;
            justify-content: space-around;
            align-items: flex-start;
            flex-wrap: wrap;
            max-width: 1140px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-section {
            flex: 1;
            min-width: 200px;
            margin: 20px;
        }

        .footer-section h3 {
            border-bottom: 2px solid antiquewhite;
            padding-bottom: 10px;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .footer-section p {
            line-height: 1.6;
        }

        .social-media {
            margin-top: 10px;
        }

        .social-media a {
            margin: 0 10px;
            display: inline-block;
            transition: transform 0.3s ease;
        }

        .social-media a:hover {
            transform: translateY(-5px);
        }

        .social-media img {
            width: 24px;
            height: 24px;
        }

        .footer-bottom {
            text-align: center;
            padding: 20px 0;
            background-color: rgb(206, 119, 21);
            color: antiquewhite;
            font-size: 14px;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .footer-container {
                flex-direction: column;
                align-items: center;
            }

            .footer-section {
                text-align: center;
            }
        }
    </style>
</head>
<body>
<header>
    <div class="container">
        <section class="tool-bar">
            <div class="logo"><img src="Red and Beige Bold Typography Cosmetic Brand Logo.png" alt="logo" width="90px"></div>
            <div class="ContactUS"><a href="">Register/Login</a></div>
            <div class="Develop"><a href="#">Develop Event</a></div>
            <div class="Preserve"><a href="#">Preserves Venue</a></div>
        </section>
    </div>
</header>

<section class="first">
    <div class="container">
        <div class="first-container">
            <h1>Welcome to Ease<em>Events</em></h1>
            <p>Discover unforgettable moments at our expertly curated events, where every detail is designed to inspire and delight. Join us and experience the magic of perfect gatherings that leave lasting memories</p>
        </div>
    </div>
</section>

<div class="container">
    <div class="grid-container">
        <div class="grid-items"><img src="sukarelawan.webp" width="200px">Join us now in the PPP FSSH Staff Training Program for Volunteerism, Community Service, and Civic Engagement Initiatives!
            <p><button class="join-btn">Join Now!</button></p>
        </div>
        <div class="grid-items"><img src="tarik-1536x1529.jpg" width="200px">Celebrate Aidil Adha with us!!<br>Come join us in a marvelous teh tarik session and make new friends!
            <p><button class="join-btn">Join Now!</button></p>
        </div>
        <div class="grid-items"><img src="caucasus.webp" width="200px">Elevate your knowledge with the peculiarities of Islam in the Caucasus and get involved in spectacular debates!!
            <p><button class="join-btn">Join Now!</button></p>
        </div>
    </div>
</div>

<h2>Popular Events</h2>
<div class="scrollableMenu">
    <?php
    // Define an array of event details
    $events = array(
        array(
            'image' => 'IMG_0934-1-1024x631.jpg.webp',
            'description' => 'UTM Convocation UTM-MOSTI Master of Professional Science Celebrates Second Cohort Graduation'
        ),
        array(
            'image' => 'UTM_0164-1024x683.jpg',
            'description' => 'Conference & Seminar AI Horizons: Decoding Malaysia’s Future with Zack Kass'
        ),
        array(
            'image' => 'Featured-image-1024x576.jpg',
            'description' => 'Kolej Tun Hussein Onn Waste to Wealth Hub: Impacts on the Sustainable Development Goals'
        ),
        array(
            'image' => 'photo_2022-12-16_21-48-14-1024x768.jpg.webp',
            'description' => 'No pain, no gain: KTHO Participated in the UTM Games & Bring Back Trophies!'
        ),
        array(
            'image' => 'IMG_7779-1024x683.jpg.webp',
            'description' => 'AIESEC Johor Bahru Celebrates a Successful Year and Presents Annual Report!!'
        ),
        array(
            'image' => 'ssss.webp',
            'description' => 'Kolej Tun Razak’s Blood Drive: A Gift for Life'
        )
    );

    // Loop through the events array and output HTML for each event
    foreach ($events as $event) {
        echo '<div class="item">';
        echo '<img src="' . $event['image'] . '">';
        echo '<p>' . $event['description'] . '</p>';
        echo '</div>';
    }
    ?>
</div>


<!-- The Modal -->
<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="color: rgb(46, 115, 128);">Register for Event</h2>
        <form id="registrationForm" method="POST" action="">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone" required>
            </div>
            <button type="submit">Submit</button>
        </form>
        <div class="success-message" id="successMessage">You have successfully registered!</div>
    </div>
</div>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = htmlspecialchars($_POST['name']);
    echo "<script>
    document.getElementById('successMessage').innerText = 'Thank you, $name, for registering!';
    document.getElementById('successMessage').style.display = 'block';
    document.getElementById('registrationForm').style.display = 'none';
    </script>";
}
?>

<script>
    // JavaScript code for modal and form handling
    var modal = document.getElementById("myModal");
    var btns = document.querySelectorAll(".join-btn");
    var span = document.getElementsByClassName("close")[0];
    var form = document.getElementById("registrationForm");
    var successMessage = document.getElementById("successMessage");

    btns.forEach(function(btn) {
        btn.onclick = function() {
            modal.style.display = "block";
        }
    });

    span.onclick = function() {
        modal.style.display = "none";
        form.style.display = "block";
        successMessage.style.display = "none";
    }

    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
            form.style.display = "block";
            successMessage.style.display = "none";
        }
    }

    form.onsubmit = function(event) {
        event.preventDefault();
        form.submit(); // This will trigger the PHP script
    }
</script>
</body>
<footer>
    <div class="footer-container">
        <div class="footer-section">
            <h3>About Us</h3>
            <p>We are dedicated to bringing you the best events in town. Stay tuned and join us for unforgettable experiences!</p>
        </div>
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Email: info@easeevents.com</p>
            <p>Phone: +123 456 7890</p>
        </div>
        <div class="footer-section">
            <h3>Follow Us</h3>
            <div class="social-media">
                <a href="#"><img src="Facebook_Logo_2023.png" alt="Facebook"></a>
                <a href="#"><img src="twitter_x_new_logo_x_rounded_icon_256078.png" alt="Twitter"></a>
                <a href="#"><img src="instagram-logo-instagram-icon-transparent-free-png.webp" alt="Instagram"></a>
                <a href="#"><img src="circle-linkedin-512.webp" alt="LinkedIn"></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2024 EaseEvents. All rights reserved.</p>
    </div>
</footer>
</html>