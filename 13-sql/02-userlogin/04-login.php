<html>
<head>
    <title>
        Login
    </title>
</head>
<body>
    
    <div>
        <?php
            session_start();       
            if(isset($_SESSION['flagPermission']) && $_SESSION['flagPermission'] == true) {
                echo '<h3>Xin chào ' . $_SESSION['user']['username'] . '</h3>';
                echo '<a href="04-logout.php">Log out</a>';
            } else  {         
        ?>
                <form action="./04-processLogin.php" method="POST">
                    <div>
                        <p>Username:</p>
                        <input type="text" name="username">
                    </div>
                    <div>
                        <p>Password:</p>
                        <input type="password" name="password">
                    </div>
                    <div>
                        <input type="submit" value="Login" name="submit">
                    </div>
                </form>
        <?php 
            }
        ?>
    </div>


</body>
</html>