<html>
    <head>
        <title>LoginSystem</title>
        <style>
            body{
                background:#f2ead8;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100%;
                font-family: sans-serif;
                box-sizing: border-box;
                flex-direction: column;
            }

            .logo{
                text-align: center;
            }
                 
            img{
                height: 150px;
                width: 150px;
            }

            .title{
                text-align: center;
                margin-top: 13px;
                margin-bottom: 3px;
            }

            .ins{
                text-align: center;
                margin-top: 0px;
                margin-bottom: 30px;
            }

            form{
                width: 400px;
                border: 2px solid #ccc;
                padding: 30px;
                background: #fff;
                border-radius: 15px;
            }

            input{
                display: block;
                border: 2px solid #ccc;
                width: 95%;
                padding: 10px;
                margin: 10px auto;
                border-radius: 5px;
            }

            label{
                color: #888;
                font-size: 18px;
                padding: 13px;
            }

            button{
                float: right;
                background:#555;
                padding: 10px 15px;
                color: #fff;
                border-radius: 5px;
                margin-right: 15px;
                border: none;
            }

            button:hover{
                opacity: 0.7;
            }

            .error{
                background: #F2DEDE;
                color: #A94442;
                padding: 10px 14px;
                width: 90%;
                border-radius: 5px;
                margin-top: 10px;
                margin-bottom: 20px;
                margin-left: auto;
                margin-right: auto;
                font-size: 18px;
            }

            .greetings{
                text-align: center;
                color: #fff;
            }

            a {
                float: right;
                background: #555;
                padding: 10px 15px;
                color: #fff;
                border-radius: 5px;
                margin-right: 15px;
                border: none;
                text-decoration: none;
            }

            a:hover{
                opacity: 0.7;
            }
        </style>
    </head>    
    <body>
        <form action="AdminLogin.php" method="post">
            <div class="logo">
                <img src="/img/Logo.png" alt="BarangayLogo">
            </div>
            <h2 class=title>Hello, Agent!</h2>
            <h5 class=ins>Login to start your session</h5> 
            <?php if(isset($_GET['error'])){ ?> 
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

            <label>Username</label>
            <input type="text" name="uName" placeholder="Enter Username"><br>

            <label>Password</label>
            <input type="password" name="pWord" placeholder="Enter Password"><br>

            <button type="submit">Login</button>
        </form>
    </body>
</html>