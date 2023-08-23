<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <header>
        <div class="logo">
            <p>Logo</p>
        </div>
        <div class="menu">
            <p>Round One: Practical</p>
        </div>
    </header>

    <div class="contact-us">
        <span class="left-d"></span>
        <span class="contact-title">Contact Us Form</span>
        <span class="right-d"></span>
    </div>

    <div class="form-container">
        
        <span id="error"></span>

        <form id="contact-form">
            <div class="input-group">
                <input type="text" id="first_name" name="first_name" placeholder="First Name" >
                <input type="text" id="last_name" name="last_name" placeholder="Last Name" >
            </div>

            <div class="input-group">
                <input type="tel" id="phone_number" name="phone_number" placeholder="Phone Number">
                <input type="email" id="email" name="email" placeholder="Email" >
            </div>

            <textarea id="about" name="about" rows="4" cols="50" placeholder="About Yourself"></textarea><br>

            <input type="submit" value="Submit">

        </form>
        <div class="address">
            <p> <span>Office Address:</span> QUARK ATRIUM, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar,
                Punjab 160072 </p>
        </div>
        <div class="mail">
            <p><span>Mail : </span><a href="mailto:info@codigomantra.com">info@codigomantra.com</a></p>
        </div>
        <div class="contact">
            <p><span>Contact : </span><a href="tel:+919915202212">+91 9915202212</a></p>
        </div>
    </div>

    <div class="contact-detail-mobile">
        <div class="address">
            <p> <span>Office Address:</span> QUARK ATRIUM, Industrial Area, Sector 74, Sahibzada Ajit Singh Nagar,
                Punjab 160072 </p>
        </div>
        <div class="mail">
            <p><span>Mail : </span><a href="mailto:info@codigomantra.com">info@codigomantra.com</a></p>
        </div>
        <div class="contact">
            <p><span>Contact : </span><a href="tel:+919915202212">+91 9915202212</a></p>
        </div>
    </div>

    <footer>
        <p class="assign">Assignment</p>
        <p class="round-one">This is your round one for evaluating your skills</p>
    </footer>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <p>We received your message. Our team will contact you shortly with the solution to your query. </p>
            <button id="modal-okay-button">Okah!!</button>
        </div>
    </div>

    <script src="./script.js"></script>
</body>

</html>