<?php ?>

<html>
<head>
    <title>
        Task
    </title>
</head>
<body>
<style>
    body {
        background-size: cover;
    }</style>
<h3><span style="color=#000000">Task</span></h3>
<hr>

<form method="POST" action="update">
    <input style="padding: 5px 25px 5px 5px;margin: 10px 0" type="text" name="task_name" value="<?php echo $task['task_name']?>"><br>
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="id" value="<?= $task['task_id']  ?>">
    <button style="color: white;background: green;">Update</button>
</form>
<form method="POST" action="destroy">
    <input type="hidden" name="_method" value="DELETE">
    <input type="hidden" name="id" value="<?= $task['task_id']  ?>">
    <button style="color: white;background: red;">Delete</button>
</form>

</body>
</html>