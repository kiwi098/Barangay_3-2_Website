<?php
ob_start();
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['uName']) && $_SESSION["loggedin"] == "admin") {
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Admin | E-Services | Business Clearance</title>
        <!--<link rel="stylesheet" href="Style.css">-->
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                list-style: none;
                text-decoration: none;
                font-family: sans-serif;
            }

            body{
                background: #f3f5f9;
            }
            .wrapper{
                display: flex;
                position: relative;
            }
            .wrapper .sidebar {
                position: fixed;
                width: 250px;
                height: 100%;
                background: #529889;
                padding: 30px 0px;
            }

            .wrapper .sidebar h2{
                color: #f2ead8;
                text-transform: uppercase;
                text-align: center;
                margin-bottom: 10px;
            }

            .wrapper .sidebar ul h4{
                padding: 15px;
                color: #f2ead8;
                text-transform: uppercase;
                text-align: left;
                margin-top: 15px;
                margin-bottom: 5px;
            }

            .wrapper .sidebar ul li{
                padding-left: 40px;
                padding-top: 15px;
                padding-bottom: 15px;
                border-bottom: 1px solid rgba(0,0,0,0.05);
                border-top: 1px solid rgba(225,225,225,0.05);
            }

            .wrapper .sidebar ul li a{
                color: #f2ead8;
                display: block;
            }

            .wrapper .sidebar ul li .fas{
                width: 25px;
            }

            .wrapper .sidebar ul li:hover{
                background: #ceb173;
            }

            .wrapper .sidebar .adminUser{
                position: absolute;
                bottom: 0;
                background-color: #ceb173;
                width: 100%;
            }

            .wrapper .sidebar .adminUser{
                padding: 15px;
            }

            .wrapper .sidebar .adminUser p{
                color: #f2ead8;
                display: block;
            }

            .wrapper .sidebar .adminUser .fas{
                width: 20px;
                color: #f2ead8;
            }

            .wrapper .mainContent{
                width: 100%;
                margin-left: 250px;
            }

            .wrapper .mainContent .header{
                padding: 30px;
                background: #ceb173;
                color: #ffffff;
                border-bottom: 1px solid #e0e4e8;   
            }

            .wrapper .mainContent .info{
                margin: 20px;
                color: #000000;   
                text-align: center;
            }

            .wrapper .sidebar .logout{
                position: absolute;
                bottom: 6px;
                left: 85%;
            }
            .wrapper .sidebar .logout .fas{
                color: #f2ead8; 
                padding-top: 10px;
                padding-bottom: 10px;
                padding-right: 3px;
                padding-left: 5px;
            }

            .wrapper .sidebar .logout:hover{
                background: #b99f68;
            }
            .container .input{
                border: 0;
                outline: none;
                color: #000000;

            }

            .search{
                width: 500px;
                margin: 30px auto;
            }

            .search .searchBox{
                position: relative;
                width: 500px;
                height: 60px;
                margin-right: 0px;
            }

            .search .searchBox .input{
                position: absolute;
                top: 0;
                right: 0;
                width: 100%;
                height: 100%;
                padding: 10px 20px;
                border-radius: 3px;
                font-size: 18px;
                border-radius: 15px;
            }

            .search .searchBox .btn{
                position: absolute;
                top: 0;
                right: 0px;
                width: 60px;
                height: 100%;
                z-index: 1;
                cursor: pointer;
            }

            .search .searchBox .btn.searchBtn .fas:hover{
                background: #6dac9e;
            }

            .search .searchBox .btn.searchBtn .fas{
                background: #79bfb0;
                padding: 20px;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%,-50%);
                font-size: 20px;
                border-radius: 15px;
            }
            
            .refreshBtn .fas{
                background: #79bfb0;
                padding: 20px;
                font-size: 20px;
                border-radius: 15px;
            }

            .refreshBtn .fas:hover{
                background: #6dac9e;
            }

            .major_sql_table{
                margin:auto;
                border: none;
                width: 900px;
                border-collapse: collapse;
                font-size: 17px;
                border-radius:20px;
            }
            
            table tr:last-child td:first-child {
                border-bottom-left-radius: 10px;
            }
            table tr:last-child td:last-child {
                border-bottom-right-radius: 10px;
            }
            table tr:first-child td:first-child {
                border-top-left-radius: 10px;
            }
            table tr:first-child td:last-child {
                border-top-right-radius: 10px;
            }
            .major_sql_table tr:nth-child(odd) {
                background-color: #e6e6e6;
            }
            .major_sql_table tr:nth-child(even) {
                background-color: #cccccc;
            }
            .major_sql_table tr:hover {
                background-color: #ddd;
            }
            #sql_head{
                text-align: center;
                background-color:  #79bfb0;
                color: black;
            }
            #sql_table_id {
                text-align: center;
                padding-left: 15px;
                padding-right: 15px; 
            }
            #sql_head_id {
                background-color: #79bfb0;
                text-align: center;
                padding-left: 15px;
                padding-right: 15px;
                padding-top: 10px;
                padding-bottom:10px;
            }
            #sql_option{
                padding-top: 5px;
                padding-bottom: 5px;
                padding-left: 5px;
                padding-right: 5px;
                text-align: center;
                width: 17%;                 
            }
            .far.fa-trash-alt{
                background: #d63c3c;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 23px;
                padding-right: 23px;
                font-size: 20px;
                color: white;
                border-radius: 15px;
            }
            .far.fa-trash-alt:hover{
                background: #c13636;
            }

            .far.fa-edit{
                background: #5195cd;
                padding: 20px;
                font-size: 20px;
                color: white;
                border-radius: 15px;
            }

            .far.fa-edit:hover{
                background: #4986b9;
            }

            .fas.fa-user-plus{
                background: #3bc645;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 55px;
                padding-right: 55px;
                font-size: 20px;
                color: white;
                border-radius: 15px;
            }
            .fas.fa-user-check{
                background: #3bc645;
                padding-top: 20px;
                padding-bottom: 20px;
                padding-left: 55px;
                padding-right: 55px;
                font-size: 20px;
                color: white;
                border-radius: 15px;
            }
            .fas.fa-user-plus:hover{
                background: #35b23e;
            }
            .fas.fa-user-check:hover{
                background: #35b23e;
            }
            .top_table {
                width: 585px;
                margin: auto;
            }
            #edit_input {
                width: 100px;
                height: 30px;
                font-size: 15px;
                padding-left: 8px;
            }
            #edit_lbl {
                padding-bottom: 50px;
            }
            input[type = text] {
                border: none;
                border-bottom: 3px solid #5195cd;
            }

            #sql_table_date {
                text-align: center;
            }
            .logo{
                text-align: center;
            }
            img{
                height: 150px;
                width:150px;
            }

            tr.border-bottom {
                border-bottom: 3pt solid #79bfb0;
            }

</style>
    </head>
    <body>
        <div class=wrapper>
            <div class=sidebar> 
                <h2>Barangay 3-2</h2>
                <div class="logo">
                    <img src="/img/Logo.png" alt="BarangayLogo">
                </div>
                <ul>
                    <h4>CONTENT MANAGEMENT</h4>
                    <li><a href="AdminPage.php"><i class="fas fa-bullhorn"></i>Announcement</a></li>
                    <h4>USER MANAGEMENT</h4>
                    <li><a href="admin_admin.php"><i class="fas fa-users-cog"></i>Admin Database</a></li>
                    <li><a href="admin_resident.php"><i class="fas fa-users"></i>Resident Database</a></li>
                    <h4>E-SERVICES</h4>
                    <li><a href="admin_brgy_clearance.php"><i class="fas fa-address-card"></i>Barangay Clearance</a></li>
                    <li><a href="admin_business_clearance.php"><i class="fas fa-address-card"></i>Business Clearance</a></li>
                    <li><a href="admin_certificate_residency.php"><i class="fas fa-address-card"></i>Certificate of Residency</a></li>

                </ul>
                <div class=adminUser>
                    <p><i class="fas fa-user"></i><?php echo $_SESSION['name']; ?></p>  
                </div>

                <div class=logout>
                    <p><a href="logout.php"><i class="fas fa-sign-out-alt fa-lg"></i></a></p>
                </div>

            </div>
            
            <div class="mainContent">
                <div class="header"> 
                       <h1>BUSINESS CLEARANCE</h1>
                </div>
                <div class="info">
                    <table class = "top_table">
                    <td>
                        <form action = "admin_business_clearance.php" method = "post">
                            <div class="container">
                                <div class="search">
                                    <div class="searchBox">
                                        <div class="btn searchBtn">
                                            <button class="fas fa-search" name="SEARCH" type="submit"></button>
                                        </div>
                                            <input class="input" type="text" name = "Search" placeholder="Search...">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </td>
                    <td>
                        <form action = "admin_business_clearance.php" method = "post">
                            <div class="btn refreshBtn">
                                <button class="fas fa-redo"><a href="admin_business_clearance.php"></a></button>
                            </div>
                        </form>
                    </td>
                    </table>
                    <?php
                    require ('db_connection.php');
                    $query = "SELECT * FROM brgy_business";
                    $result = mysqli_query($con,$query);

                    if(isset($_POST['Search'])) {
                        $searchq = $_POST['Search'];
                    
                        $query = "SELECT * FROM brgy_business 
                        WHERE LName LIKE '%$searchq%' OR FName LIKE '%$searchq%' 
                        OR id LIKE '%$searchq%' OR CTC LIKE '%$searchq%'
                        OR BName LIKE '%$searchq%'";
                        $result = mysqli_query($con,$query);
                    }

                    echo "<form action='' method='POST'>";
                    /*=====TABLE START=====*/
                    echo "<table class = major_sql_table>";
                    echo "<tr>
                    <td id = sql_head_id>ID</td>
                    <td id = sql_head>LASTNAME</td>
                    <td id = sql_head>FIRSTNAME</td>
                    <td id = sql_head>M.I.</td>
                    <td id = sql_head>CTC</td>
                    <td id = sql_head>ISSUEDDATE</td>
                    <td id = sql_head>BUSINESSNAME</td>
                    <td id = sql_head>OPTIONS</td>
                    </tr>";
                    
                    while ($row = mysqli_fetch_array($result)){
                        $id=mysqli_real_escape_string($con,$row['id']);
                        
                        /*=====EDIT START=====*/
                    if (isset($_POST['edit'])&&$id==$_POST['edit']){ 
                        //echo $_POST['edit'];
                        $yun = $_POST['edit'];
                        $id2 = mysqli_real_escape_string($con,$yun);
                        $query=mysqli_query($con,"SELECT * FROM brgy_business WHERE id='$id2'");
                        $row=mysqli_fetch_array($query);
                        
                        //echo "<h2 id = editor_lbl>Editor</h2>";
                        echo "<form action='admin_business_clearance.php' method='POST'>";
                        ?>
                        <tr>
                            <td>
                                
                            </td>
                            <td id = sql_table>
                                <label id = "edit_lbl">LastName: </label>
                                <input id = "edit_input" type="text" value="<?php echo $row['LName']; ?>" name="LN">
                            </td>
                            <td id = sql_table>
                                <label id = "edit_lbl">FirstName: </label>
                                <input id = "edit_input" type="text" value="<?php echo $row['FName']; ?>" name="FN">
                            </td>
                            <td id = sql_table>
                                <label id = "edit_lbl">MiddleInitial: </label>
                                <input id = "edit_input" type="text" value="<?php echo $row['MInitial']; ?>" name="MI">
                            </td>
                            <td id = sql_table>
                                <label id = "edit_lbl">CTC: </label>
                                <input id = "edit_input" type="text" value="<?php echo $row['CTC']; ?>" name="CTC">
                            </td>
                            <td id = sql_table>
                                <label id = "edit_lbl">IssuedDate: </label>
                                <input id = "edit_input" type="date" value="<?php echo $row['Issued']; ?>" name="IS">
                            </td>
                            <td id = sql_table>
                                <label id = "edit_lbl">BusinessName: </label>
                                <input id = "edit_input" type="text" value="<?php echo $row['BName']; ?>" name="BN">
                            </td>
                            <td id = sql_option>
                                <button class="fas fa-user-check" name="submitedit" type="submit" value="<?php echo $row['id'] ?>"></button>
                            </td>
                        </tr>
                        <?php
                        echo "</form>";
                    }
                    /*=====EDIT END=====*/
                    else{
                        echo "<tr>";
                        echo "<td id = sql_table_id>" . $row['id'] . "</td>";
                        echo "<td id = sql_table>" . $row['LName'] . "</td>";
                        echo "<td id = sql_table>" . $row['FName'] . "</td>";
                        echo "<td id = sql_table>" . $row['MInitial'] . "</td>";
                        echo "<td id = sql_table>" . $row['CTC'] . "</td>";
                        echo "<td id = sql_table_date>" . $row['Issued'] . "</td>";
                        echo "<td id = sql_table>" . $row['BName'] . "</td>";
                        ?>

                        <td id = sql_option>
                            <button class="far fa-trash-alt" name="delete" type="submit" value="<?php echo $row['id'] ?>" onclick = "return confirm('Are you sure you want to delete this account?')" > </button>
                            <button class="far fa-edit" name="edit" type="submit" value="<?php echo $row['id'] ?>"></button>
                        </td>
                        <?php
                        echo "</tr>";
                    }
                    }
                    mysqli_free_result($result);
                    
                    echo "</table>";
                    echo "</form>";
                    /*=====TABLE END=====*/
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
}
else{
    header("Location: AdminLoginSystem.php");
    exit();
}
if (isset($_POST['delete'])){ 
    //echo $_POST['delete'];
    $yun = $_POST['delete'];
    $id = mysqli_real_escape_string($con,$yun);
    mysqli_query($con,"DELETE FROM brgy_business WHERE id = '$id'");
    header("location: admin_business_clearance.php");
    ob_end_flush();
}

if (isset($_POST['submitedit'])){
    //echo $_POST['submitedit'];
    $LN=$_POST['LN'];
    $FN=$_POST['FN'];
    $MI=$_POST['MI'];
    $CTC=$_POST['CTC'];
    $IS=$_POST['IS'];
    $BN=$_POST['BN'];

    $yun = $_POST['submitedit'];
    $id3 = mysqli_real_escape_string($con,$yun);

    mysqli_query($con,"UPDATE brgy_business SET 
    FName='$FN', LName='$LN', MInitial='$MI' 
    , CTC='$CTC' ,Issued='$IS' ,BName='$BN'
    WHERE id='$id3'");
    header("location: admin_business_clearance.php");
    ob_end_flush();
}

?>