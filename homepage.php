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
    <!-- <meta charset="utf-8"> -->
    <title>Barangay 3-2 | Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href = "head_design.css" type = "text/css" rel = "stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

    <!-- FOOTER ICONS -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/35200fcd01.js" crossorigin="anonymous"></script>

    <style>
        .home_content { 
            padding-top: 1px;
            padding-bottom: 1px;
            background-color: #3D677B;
            text-align: center;
        }
        button {
            font-family: 'Merriweather', serif;
        }

        #home_button{
            background-color: #3D677B;
        }

        #home_color {
            color: white;
        }

        #aboutus_color {
            color: black;
        }

        #eservices_color {
            color: black;
        }

        #aboutus_button:hover{
            background-color: #6CC1AB;

        }

        #eservices_button:hover{
            background-color: #cfb578;

        }

        .moving_pictures{
            padding: 0;
            margin: 0;
            background-color: #3D677B;
        }

        .frame{
            overflow: hidden;
            width: 680px;
            height: 600px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        @keyframes slide_animation{
            0% {left: 0px;}
            5% {left: 0px;}
            10% {left: 0px;}
            15% {left: 680px;}
            20% {left: 680px;}
            25% {left: 1360px;}
            30% {left: 1360px;}
            35% {left: 2040px;}
            40% {left: 2040px;}
            45% {left: 2720px;}
            50% {left: 2720px;}
            55% {left: 2720px;}
            60% {left: 2040px;}
            65% {left: 2040px;}
            70% {left: 1360px;}
            75% {left: 1360px;}
            80% {left: 680px;}
            85% {left: 680px;}
            90% {left: 0px;}
            95% {left: 0px;}
            100%{left: 0px;}
        }

        .images{
            width: 3400px;
            height: 800px;
            margin: 0 0 0 -2720;
            position: relative;
            animation: slide_animation;
            animation-duration: 55s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            animation-play-state: running;
        }

        .img_container{
            width: 680px;
            height: 800px;
            position: relative;
            float: left;
        }

        .tagline {
            color: white;
            font-family: 'Merriweather', serif;
            font-size: 45px;
        }
        #home_announcements{
            color: white;
            font-family: 'Merriweather', serif;
        }
        /* TABS FONT STYLE */
        #home_color, #aboutus_color, #eservices_color, #login {
            font-family: 'Merriweather', serif;
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

        /*END DROPDOWN*/

        .intro {
            opacity: 0.8;
            margin-left: 100px;
            margin-right: 100px;
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
            .major_sql_table{
                margin:auto;
                border: none;
                width: 800px;
                border-collapse: collapse;
                font-size: 20px;
                border-radius:20px;
                font-family: 'Open Sans', sans-serif;
            }
            
            table tr:last-child td:first-child {
                border-bottom-left-radius: 10px;
                font-family: 'Open Sans', sans-serif;
            }
            table tr:last-child td:last-child {
                border-bottom-right-radius: 10px;
                font-family: 'Open Sans', sans-serif;
            }
            table tr:first-child td:first-child {
                border-top-left-radius: 10px;
                font-family: 'Open Sans', sans-serif;
            }
            table tr:first-child td:last-child {
                border-top-right-radius: 10px;
                font-family: 'Open Sans', sans-serif;
            }
            .major_sql_table tr:nth-child(odd) {
                background-color: #e6e6e6;
                font-family: 'Open Sans', sans-serif;
            }
            .major_sql_table tr:nth-child(even) {
                background-color: #cccccc;
                font-family: 'Open Sans', sans-serif;
            }
            .major_sql_table tr:hover {
                background-color: #ddd;
            }
            #sql_head{
                text-align: center;
                background-color:  #79bfb0;
                color: black;
                padding:10px;
            }
            #sql_head_date{
                text-align: center;
                background-color:  #79bfb0;
                border-right: 2px solid #569789;
            }
            #sql_date{
                text-align: center;
            }
            .major_sql_table{
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 20px;
                
            }
            #sql_table{
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 20px;
                border-left: 2px solid #569789;
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
        <th id = "home_button"><a id="home_color" href = "homepage.php">HOME</a></th>
        <th id = "aboutus_button"><a id="aboutus_color" href = "aboutus.php">ABOUT US</a></th>
        <th id = "eservices_button"><a id="eservices_color" href = "e-services.php">E-SERVICES</a></th>
        <th id = blank>--------------------------------</th>
        <th id = "login">
            <div class="dropdown">
                <button class="dropbtn">ACCOUNT <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="AdminLoginSystem.php">Admin</a>
                    <a href="ResidentLoginSystem.php">Resident</a>
                </div>
            </div>    
        </th>
    </tr>
</table>


<!--Home Content Code-->
<div class = home_content>
    <!--TagLine Code-->
    <br>
    <h1 class = tagline>SA BARANGAY 3-2, UNA KA RITO!</h1>
    <br>
    <!--Moving Pictures Code-->
    <div class = "moving_pictures">
        <div class="frame">
            <div class="images">
                <div class="img_container">
                    <img src="/img/img4.jpg">
                </div>
                <div class="img_container">
                    <img src="/img/img2.jpg">
                </div>
                <div class="img_container">
                    <img src="/img/img5.jpg">
                </div>
                <div class="img_container">
                    <img src="/img/img3.jpg">
                </div>
                <div class="img_container">
                    <img src="/img/img1.jpg">
                </div>
            </div>
        </div>
    </div> 
    <h1 class = tagline>ANNOUNCEMENTS</h1>
    <br>
    <br>
    <?php
        require ('db_connection.php');
        $query = "SELECT * FROM announcment";
        $result = mysqli_query($con,$query);

        /*=====TABLE START=====*/
        echo "<table class = major_sql_table>";
        echo "<tr>
        <td id = sql_head_date>DATE</td>
        <td id = sql_head>ANNOUNCEMENT</td>
        </tr>";
                    
        while ($row = mysqli_fetch_array($result)){
            $id=mysqli_real_escape_string($con,$row['id']);
            echo "<tr>";
            echo "<td id = sql_date>" . $row['date'] . "</td>";
            echo "<td id = sql_table>" . $row['announce'] . "</td>";
            }
        echo "</table>";
        /*=====TABLE END=====*/
        ?>
    <br>
    <br>
    <br>
    <br>
    <br>
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