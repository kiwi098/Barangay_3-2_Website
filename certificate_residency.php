<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['uName'])) {
?>
<html>
<head>  
    <title> Barangay 3-2 | E-Services</title>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <link href = "head_design.css" type = "text/css" rel = "stylesheet">
    <style>
        #eservices_button {
        background-color: #cfb578;
        }
        .eservices_content {
        background-color: #cfb578;
        }
        #home_color {
        color: black;
        }
        #aboutus_color {
        color: black;
        }
        #eservices_color {
        color: white;
        }
        #home_button:hover{
        background-color: #3D677B;
        }
        #aboutus_button:hover{
        background-color: #6CC1AB;
        }
        .intro_page{
            /*position: absolute;*/
            width: 1224px;
            height: 104px;
            left: 51px;
            top: 390px;
        }
        .intro_text{
            color: #FFFFFF;
        }
        .form_1{
            margin: auto;
        }
        .button {
            display: flex;
            height: 50px;
            width: 250px;
            background: #ffffff;
            border: none;
            outline: none;
            border-radius: 25px;
            overflow: hidden;
            font-family: "Quicksand", sans-serif;
            font-size: 20px;
            font-weight: 500;
            cursor: pointer;
            text-align: center;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 30px;
        }
        .button:hover {
            background: #f0df99;
        }
        
        .button:active {
            background: #74480A;
        }
        .button__text{
            display: inline-flex;
            align-items: center;
            padding: 0 85px;
            color: #74480A;
            height: 100%;
            text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        }
  
        #home_color, #aboutus_color, #eservices_color, #login {
            font-family: 'Merriweather', serif;
        }
        #home_button, #aboutus_button, #eservices_button, #login{
            font-family: 'Merriweather', serif;
        }

        /* FORM DESIGN */
        .form_content {
            background: white;
            margin-left: 150px;
            margin-right: 150px;
            padding-top: 50px;
            padding-bottom: 50px;
            border-radius: 20px 20px 20px 20px;
        }
        .FN_Label {
            margin-left: 100px; 
            font-family: 'Open Sans', sans-serif;
        }
        .Status_Label {
            margin-left: 100px; 
            font-family: 'Open Sans', sans-serif;
        }
        .Age_Label {
            margin-left: 178px;
            font-family: 'Open Sans', sans-serif;
        }
        .Street_Label {
            margin-left: 100px; 
            font-family: 'Open Sans', sans-serif;
        }

        .FN_Input  {
            width: 250px;
            height: 30px;
            margin-left: 100px;
            margin-top: 10px;
            margin-bottom: 20px;
            padding-left: 10px;
        }
        .LN_Input {
            margin-left: 23px;
            width: 250px;
            height: 30px;
            padding-left: 10px;
        }
        .MI_Input  {
            width: 100px;
            margin-left: 23px;
            height: 30px;
            padding-left: 7px;
        }
        .Status_Input {
            margin-left: 100px;
            width: 250px;
            height: 30px;
            padding-left: 10px;
        }
        .Age_Input {
            width: 100px;
            margin-left: 23px;
            height: 30px;
            padding-left: 10px;
        }
        .Street_Input {
            width: 250px;
            height: 30px;
            margin-left: 100px;
            margin-top: 10px;
            padding-left: 10px;
        }
        h1 {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            color: #cfb578;
            letter-spacing: 5px;
        }
        .centered_button {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 300px;
        }

        #submit {
            width: 180px;
            height: 50px;
            background-color: #6CC1AB;
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 20px;
            font-family: 'Open Sans', sans-serif;
            color: white;
            text-decoration: none;
            border: none; 
            border-radius: 30px 30px 30px 30px;
            cursor: pointer;           
        }
        #back_btn {
            padding-left: 60px;
            padding-right: 60px;
            padding-top: 10px;
            padding-bottom: 10px;
            background-color: #6CC1AB;
            font-size: 20px;
            font-family: 'Open Sans', sans-serif;
            color: white;
            text-decoration: none;
            border: none; 
            border-radius: 30px 30px 30px 30px;
            cursor: pointer; 
        }
        .buttons_tbl {
            margin-left: auto;
            margin-right: auto;
            margin-top: 15px;
        }
        #submit:hover {
            background-color: #4c8778;
        }
        #back_btn:hover {
            background-color: #4c8778
        }
        input[placeholder] {
            font-family: 'Open Sans', sans-serif;
        }
        input[type=text], input[type=date], input[type=int], input[type=varchar], select {
           /* border: 2px solid #cfb578; */
            border: none;
            border-bottom: 3px solid #cfb578;
        }
        input[type=text]:focus {
            background-color: #e7e4e3;
        }

        /* END OF FORM DESIGN */

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

<body class = "es_background">
<!-- HEADERS -->
<div>
    <img id = "header_img" src = "/img/header.jpg" alt = 'header.jpg'> 
</div>
<!-- TABS -->
<table id = header_table>
    <tr>
        <th id = "home_button"><a id="home_color" href = "homepage.php">HOME</a></th>
        <th id = "aboutus_button"><a id="aboutus_color" href = "residentaboutus.php">ABOUT US</a></th>
        <th id = "eservices_button"><a id="eservices_color" href = "residentE-services.php">E-SERVICES</a></th>
        <th id = blank>----------------</th>
        <th class = "login"><p><i class="fas fa-user">
            <?php echo $_SESSION['name']; ?>
            <a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a></p></th>
    </tr>
</table>
<div class = "eservices_content">
    <br>
    <br>
    <form method = "post" onsubmit = "return confirm ('Are you sure you want to submit the form?');">
    <div class = "form_content">
        <h1>CERTIFICATE OF RESIDENCY</h1>
        <label class = "FN_Label">NAME</label> <br>         

        <input class = "FN_Input" type = "text" name = "FN" placeholder= "First Name"> 
        <input class = "MI_Input" type = "text" name = "MI" placeholder = "Middle Initial">
        <input class = "LN_Input" type = "text" name = "LN" placeholder = "Last Name"> <br><br>

        <label class = "Status_Label">CIVIL STATUS</label> 
        <label class = "Age_Label">AGE</label><br><br>

        <select class = "Status_Input" name = "CStatus">
            <option value = " " disabled selected hidden>Choose</option> 
            <option value = "Married">Married</option>
            <option value = "Widowed">Widowed</option>
            <option value = "Separated">Separated</option>
            <option value = "Divorced">Divorced</option>
            <option value = "Single">Single</option>
        </select>
        <input class = "Age_Input" type = "int" name = "Age" placeholder = "Age"> <br><br><br>

        <label class = "Street_Label">PUROK/STREET </label> <br>
        <input class = "Street_Input" type = "varchar" name = "PStreet" placeholder = "Purok/Street"> <br><br>
    </div>
        <table class = "buttons_tbl">
            <tr>
                <td><a id = "back_btn" href = "residentE-services.php">BACK</a></td>
                <td><button id = "submit" type = "submit" name = "btnSubmit" >CONTINUE</button></td>
            </tr>
        </table>
    </form>
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
require ('db_connection.php');

if(isset($_POST['btnSubmit'])){

    /* Assigning the value of the textfields to its respective variables */
    $FName = $_POST['FN'];
    $LName = $_POST['LN'];
    $MInitial = $_POST['MI'];
    $Age = $_POST['Age'];
    $CStatus = $_POST['CStatus'];
    $PStreet = $_POST['PStreet'];
  
    /* Inserting a record in the database */
    mysqli_query($con, "INSERT into brgy_residency(id, FName, MInitial, LName, Age, CStatus, PStreet) VALUES (null, '$FName', '$MInitial', '$LName', '$Age', '$CStatus', '$PStreet')");
    echo mysqli_affected_rows($con)." Record has been added. <br>"; /* to check if the record is added to the database */
}
?>
<?php
}else{
    header("Location: ResidentLogin.php");
    exit();
}
?>
