<?php ?>

<html>
<head>
    <title>
        Login
    </title>
</head>
<body><style>
    body{
        background-size: cover;
    }</style>

<h2 style="color: green"><?php echo isset($_SESSION['loginNeeded']) ? $_SESSION['loginNeeded']  : '' ?></h2>
<h3><span style="color=#000000">Login Form : </span></h3>
<hr><fieldset>
    <form method="POST">
        <span style="color=#FFFFFF ">Enter User Name : </span>
        <br>
        <input type="text" name = "user_name" placeholder = "Enter User Name Here..">
        <br>

        <span style="color=#FFFFFF ">Enter Password : </span>
        <br>
        <input type="password" name = "pass" placeholder = "Enter Password Here..">
        <br>

        <span style="color: red">
            <?php
            $err = '';
            if (isset($_SESSION['loginErrors'])) {
                $err = $_SESSION['loginErrors'][0];
                unset($_SESSION['loginErrors']);
            }
            echo $err;

            ?>
        </span>
        <br>

        <input type="submit" name="registerbtn" value="REGISTER">
        <br>
    </form></fieldset>
</body>
</html>