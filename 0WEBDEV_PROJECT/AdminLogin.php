<?php
session_start();
include "db_connection.php";
    if(isset($_POST['uName']) && isset($_POST['pWord'])){
        function validate($data){
            $data=trim($data);
            $data=stripslashes($data);
            $data=htmlspecialchars($data);
            return $data;
        }

        $uName=validate($_POST['uName']);
        $pWord=validate($_POST['pWord']);

        if(empty($uName)){
            header("Location: AdminLoginSystem.php?error=Username is required.");
            exit();
        }
        else if(empty($pWord)){
            header("Location: AdminLoginSystem.php?error=Password is required.");
            exit();
        }
        else{
            $sql="SELECT * FROM admin WHERE uName='$uName' AND pWord='$pWord'";
            $result=mysqli_query($con, $sql);

            if(mysqli_num_rows($result)===1){
                $row=mysqli_fetch_assoc($result);
                if($row['uName']===$uName && $row['pWord']===$pWord){
                    $_SESSION["loggedin"] = "admin";
                    $_SESSION['uName'] = $row['uName'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['id'] = $row['id'];
                    header("Location: AdminPage.php");
                    exit();
                }
            }
            else{
                header("Location: AdminLoginSystem.php?error=Incorrect username or password.");
                exit();
            }
        }
    }    
    else{
        header("Location: AdminLoginSystem.php");
        exit();
    }
?>