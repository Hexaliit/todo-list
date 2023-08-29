<?php ?>

<html>
<head>
    <title>
        Task Creation
    </title>
</head>
<body><style>
    body{
        background-size: cover;
    }</style>
<h3><span style="color=#000000">Task Form : </span></h3>
<hr><fieldset>
    <form method="POST" action="/todolist/store">
        <span style="color=#FFFFFF ">Enter Your Task : </span>
        <br>
        <textarea id="task" name="task" rows="5" placeholder="Tasks to do"></textarea>
        <br>
        <br>
        <input type="submit" name="create" value="Save">
        <br>
        <span style="color: red">
            <?php
            $err = '';
            if (isset($_SESSION['taskErrors'])) {
                $err = $_SESSION['taskErrors'][0];
                unset($_SESSION['taskErrors']);
            }
            echo $err;

            ?>
        </span>

    </form></fieldset>
</body>
</html>