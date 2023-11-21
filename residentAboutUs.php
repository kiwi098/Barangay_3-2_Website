<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['uName'])) {
?>
<html>
<!--
    GROUP 2:
        MORFE, Tristan Michael V. 
        PAULY, Leila Joyce H.
        SAMONTE, Eina Danielle T.
        Villanueva, Blessy Grace D. 
        BSCS 3-2
-->
<head>
    <title>Barangay 3-2 | About Us</title>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link href = "head_design.css" type = "text/css" rel = "stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- FOOTER ICONS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/35200fcd01.js" crossorigin="anonymous"></script>

    <style>
        #aboutus_button {
        background-color: #6CC1AB;
        }

        .aboutus_content {
            background-color: #6CC1AB;
            text-align: center;
            }

        #home_color {
            color: black;
        }

        #aboutus_color {
            color: white;
        }

        #eservices_color {
            color: black;
        }

        #home_button:hover{
            background-color: #3D677B;
        }

        #eservices_button:hover{
            background-color: #cfb578;
        }

        #brgyofficials {
            font-family: Georgia, 'Times New Roman', Times, serif;
            text-align: center;
            color: white;
            font-size: 45px;
        }

        .AboutUs_body{
            margin: 0;
            padding: 20px 0px;
            height: 168%;
            box-sizing: border-box;
            font-family: sans-serif;
        }
        .map{
            margin:0;
            position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            
        }
        .container{
            display: flex;
            align-items: center;
            justify-content: center;
            width: 90%;
            margin: auto;
        }

        .brgy_officials{
            background: #F7F5EC;
            text-align: center;
            overflow: hidden;
            position: relative;
            padding: 30px 30px 40px;
            margin: 0px 20px;
            width: 30%;
        }

        .brgy_officials .pic{
            display: inline-block;
            margin-bottom: 0px;
            z-index: 1;
            position: relative;
        }

        .brgy_officials .pic::before{
            content: "";
            width: 100%;
            height: 0;
            border-radius: 50%;
            background: #122a2b;
            position: absolute;
            bottom: 135%;
            right: 0;
            left: 0;
            opacity: 0.2;
            transform: scale(3);
            transition: all 0.3s linear 0s;
        }

        .brgy_officials:hover .pic::before{
            height:100%;
        }

        .brgy_officials .pic:after{
            content: "";
            width: 100%;
            height: 100%;
            border-radius: 50%;
            background: #122a2b;
            position: absolute;
            top: 0;
            left: 0;
            z-index: -1;
        }

        .brgy_officials .pic img{
            width: 100%;
            height: auto;
            border-radius: 50%;
            transform: scale(1);
            transition: all 0.9s ease 0s;
        }

        .brgy_officials:hover .pic img{
            box-shadow: 0 0 0 14px #F7F5EC;
            transform: scale(0.7);
        }

        .brgy_officials .info{
            margin-bottom: 30px;
            display: block;
            font-size: 15px;
            color: #4E5052;
        }

        .brgy_officials .title{
            font-size: 18px;
            font-weight: 700;
            color: #4E5052;
            letter-spacing: 1px;
            margin-bottom: 5px;
        }

        .brgy_officials .post{
            display: block;
        }

        .brgy_officials .social{
            width: 100%;
            padding: 0;
            margin: 0;
            background: #122a2b;
            position: absolute;
            bottom: -100px;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .brgy_officials:hover .social{
            bottom: 0;
        }

        .brgy_officials .social li{
            display: inline-block;
        }

        .brgy_officials .social li a{
            text-decoration: none;
            display: block;
            padding: 10px;
            font-size: 17px;
            color: #F7F5EC;
            transition: all 0.3s ease 0s;
        }

        .brgy_officials .social li a:hover{
            color: #122a2b;
            background: #F7F5EC;
        }

        @media (max-width: 720px){
            .container{
                flex-direction: column;
            }
            .brgy_officials{
                width: 80%;
                margin-top: 30px;
            }
        }
        #home_button, #aboutus_button, #eservices_button, #login, #brgyofficials{
            font-family: 'Merriweather', serif;
        }

        .title {
            font-family: 'Pacifico', cursive;
        }
        #aboutus_button {
            background-color: #6CC1AB;
         }

        .aboutus_content {
            background-color: #6CC1AB;
             text-align: center;
         }

         #eservices_button:hover{
            background-color: #cfb578;
        }

        /* FOOTER DESIGN */
        
        .footer {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            background-color: #eff1f1;
        }
        .details_lbl {
            padding-left: 135px;
            text-align: left;
            font-size: 25px;
            font-family: 'Open Sans', sans-serif;
            opacity: 0.8;
            letter-spacing: 5px;
        }
        .about_lbl {
            font-size: 25px;
            text-align: right;
            padding-right: 210px;
            opacity: 0.8;
            font-family: 'Open Sans', sans-serif;
            letter-spacing: 5px;
        }
        .location {
            text-align: left;
            padding-left: 100px;
            opacity: 0.8;
            height: 40px;
        }
        .location_lbl {
            padding-left: 20px;
            font-family: 'Open Sans', sans-serif;
            opacity: 0.8;
        }
        .phone {
            text-align: left;
            opacity: 0.8;
            height: 40px;
            padding-left: 100px;
        }
        .phone_lbl {
            padding-left: 10px;
            font-family: 'Open Sans', sans-serif;
            opacity: 0.8;
        }
        .email {
            text-align: left;
            opacity: 0.8;
            height: 40px;
            padding-left: 100px;
        }
        .email_lbl {
            padding-left: 15px;
            font-family: 'Open Sans', sans-serif;
            opacity: 0.8;
        }


        
        .social_media {
            text-align: right;
            /* padding-right: 200px; */
            padding-right: 150px;
            letter-spacing: 15px;
            opacity: 0.8;
        }

        .about_details {
            text-align: right;
            font-family: 'Open Sans', sans-serif;
            opacity: 0.8;
            padding-right: 100px;
        }
        .copyright {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: gray;
            color: black;
            text-align: center;
            opacity: 0.8;
            font-family: 'Open Sans', sans-serif;
        }
        p {
            margin: 0px;
            padding: 0px;
        }


     /* DROPDOWN */
        .dropdown {
            float: right;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: inherit;  
            border: none;
            outline: none;
            color: black;
            padding-top: 14px;
            padding-right: 14px;
            padding-left: 8px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
        }

        .dropbtn:hover{
            background-color: #dad3c2;
        }
        
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #dad3c2;
            min-width: 160px;
            box-shadow: 0px 0px 16px 8px rgba(0,0,0,0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left;
        }
        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .login {
            left: 100px;
            background: #ded8ca;
        }
            
        .fas.fa-user{
            color: black; 
            padding: 8px; 
        }

        .fas.fa-sign-out-alt{
            color: black; 
            padding: 8px; 
            margin-left: 20px;
        }

        .fas.fa-sign-out-alt:hover{
            background: #949086;
        }

    </style>
</head>

<body>

    <!-- HEADERS -->
    <div>
        <img id = "header_img" src = "/img/header.jpg" alt = 'header.jpg'> 
    </div>
    <!-- TABS -->
<table id = header_table>
    <tr>
        <th id = "home_button"><a id="home_color" href = "residentHomepage.php">HOME</a></th>
        <th id = "aboutus_button"><a id="aboutus_color" href = "residentAboutUs.php">ABOUT US</a></th>
        <th id = "eservices_button"><a id="eservices_color" href = "residentE-services.php">E-SERVICES</a></th>
        <th id = blank>----------------</th>
        <th class = "login"><p><i class="fas fa-user">
            <?php echo $_SESSION['name']; ?>
            <a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a></p></th>
        </tr>
    </tr>
</table>
<div class = aboutus_content>
    <!--ABOUT US-->
    <div class=AboutUs_body>
        <h1 id="brgyofficials">BARANGAY OFFICIALS</h1>
        <!--Barangay Officials Container-->
        <div class="container">
            <!--Barangay Official 1-->
            <div class="brgy_officials">
                <div class="pic">
                    <img src="/img/brgy_capt.jpg" alt="brgy_capt">
                </div>
                <div class="info">
                    <h3 class="title">Tristan Morfe</h3>
                    <span class="post">Barangay Captain</span><br>
                    <span class="post"><i><b>"Sorry, ganito lang ako #sadboi"</b></i></span>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/kiwi098" class="fab fa-facebook"></a></li>
                    <li><a href="https://twitter.com/m8_tristan" class="fab fa-twitter"></a></li>
                    <li><a href="unavailable" class="fab fa-instagram"></a></li>
                    <li><a href="mailto: tristanmorfe@gmail.com" class="fas fa-envelope"></a></li>
                </ul>
            </div>
            <!--Barangay Official 2-->
            <div class="brgy_officials">
                <div class="pic">
                    <img src="/img/brgy_sec.jpg" alt="brgy_sec">
                </div>
                <div class="info">
                    <h3 class="title">Leila Pauly</h3>
                    <span class="post">Barangay Secretary</span><br><br>
                    <span class="post"><i><b>"Time is Gold."</b></i></span>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/leilajoyce24" class="fab fa-facebook"></a></li>
                    <li><a href="https://twitter.com/leilajoyce24" class="fab fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/leilajoyce24/" class="fab fa-instagram"></a></li>
                    <li><a href="mailto: leilajoycepauly24@gmail.com" class="fas fa-envelope"></a></li>
                </ul>
            </div>
            <!--Barangay Official 3-->
            <div class="brgy_officials">
                <div class="pic">
                    <img src="/img/brgy_treasurer.jpg" alt="brgy_treasurer">
                </div>
                <div class="info">
                    <h3 class="title">Eina Samonte</h3>
                    <span class="post">Barangay Treasurer</span><br>
                    <span class="post"><i><b>"Gusto ko maging dinosaur #RORROR"</b></i></span>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/eina.samonte" class="fab fa-facebook"></a></li>
                    <li><a href="https://twitter.com/danielleeina" class="fab fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/einadanielle/" class="fab fa-instagram"></a></li>
                    <li><a href="mailto: eddanielleeina@gmail.com" class="fas fa-envelope"></a></li>
                </ul>
            </div>
            <!--Barangay Official 4-->
            <div class="brgy_officials">
                <div class="pic">
                    <img src="/img/brgy_coun.jpg" alt="brgy_coun">
                </div>
                <div class="info">
                    <h3 class="title">Blessy Villanueva</h3>
                    <span class="post">Barangay Councilor</span><br>
                    <span class="post"><i><b>"Ang batang makulet, pinapalo sa pwet."</b></i></span>
                </div>
                <ul class="social">
                    <li><a href="https://fb.com/blessygrace21" class="fab fa-facebook"></a></li>
                    <li><a href="https://twitter.com/beigedmdm" class="fab fa-twitter"></a></li>
                    <li><a href="https://instagram.com/blessyindsguise" class="fab fa-instagram"></a></li>
                    <li><a href="mailto: beigedumdum@gmail.com" class="fas fa-envelope"></a></li>
                </ul>
            </div>
        </div>
        <br>
        <br>
        <br>
        <h1 id="brgyofficials">BARANGAY OFFICE</h1>
        <div class = "map">

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8026595.443002988!2d119.0492937485551!3d10.793224083884258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7da1a58133b%3A0x6c79f1301d3d97fe!2sEh%20Di%20Sa%20Puso%20Mo!5e0!3m2!1sen!2sph!4v1626360464220!5m2!1sen!2sph" width=85% height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>


    </div>

    

<br>


</div>

<table class = "footer"> 
    <tr>
        <th class = "details_lbl" style = "padding-top: 25px;"> DETAILS </th>
        <th class = "about_lbl" style = "padding-top: 25px;"> ABOUT </th>
    </tr>

    <tr>    
        <td class = "location"><i class="fas fa-map-marker-alt" style="font-size:25px;"></i><a class = "location_lbl">Eh Di Sa Puso Mo</a> </td>
        <td class = "about_details">This is the official website of Barangay 3-2 </td>
    </tr>

    <tr>     
        <td class = "phone"><i class="fas fa-phone-alt" style="font-size:25px;"></i><a class = "phone_lbl"> +63-999-143-9999 </a> </td>
        <td class = "social_media"> <i class="fab fa-facebook-square" style = "font-size: 50px;"></i> <i class="fab fa-twitter-square" style = "font-size: 50px;"></i> <i class="fab fa-instagram-square" style = "font-size: 50px;"></i> </td>
    </tr>

    <tr>    
        <td class = "email" style = "padding-bottom: 25px;"><i class="fas fa-envelope" style="font-size:25px; "></i><a class = "email_lbl">example123@gmail.com</a> </td>
        
    </tr>
</table>
    <p class = "copyright"> Barangay 3-2 | Copyright &copy; 2021</p>



</body>
</html>

<?php
}else{
    header("Location: ResidentLogin.php");
    exit();
}
?>