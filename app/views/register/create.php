<?php ?>

<html>
<head>
    <title>
        Registration
    </title>
</head>
<body><style>
    body{
        background-size: cover;
    }</style>
<h3><span style="color=#000000">Registration Form : </span></h3>
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
            if (isset($_SESSION['registerErrors'])) {
                $err = $_SESSION['registerErrors'][0];
                unset($_SESSION['registerErrors']);
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