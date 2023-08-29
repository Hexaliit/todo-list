<?php ?>

<html>
<head>
    <title>
        Tasks
    </title>
</head>
<body>
<style>
    body {
        background-size: cover;
    }</style>
<br>
<h3><span style="color=#000000">Tasks For : <?php echo $_SESSION['user'][1]; ?></span></h3>
<hr>
<br>
<span style="color: green">
    <?php

    if (isset($_SESSION['taskSaved'])) {
        echo $_SESSION['taskSaved'];
        unset($_SESSION['taskSaved']);
    }
    ?>
</span>
<br><br>

<?php if (!$tasks): ?>

    <h2>No Tasks Yet</h2>

<?php else: foreach ($tasks as $task): ?>

<a style="color: black ; text-decoration: none; padding: 5px ; border: none ;" href="/todolist/task?id=<?= $task['task_id'] ?>"><?php echo htmlspecialchars($task['task_name']);  ?></a><br><br>

<?php endforeach; ?>
<?php endif; ?>
<br><br><br>
<a style="color: white ; background: green;text-decoration: none; padding: 5px ; border: none ; border-radius: 5%" href="create">Crate New Task</a>
</body>
</html>