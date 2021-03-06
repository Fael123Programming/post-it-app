<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Remind-Me</title>
    <link rel="stylesheet" href="index_style.css">
    <script defer src="index_script.js"></script>
</head>
<body>
    <header id="main-header">
        <h1>Remind-Me</h1>
        <h3>Your best friend when it comes to deadlines!</h3>
        <button data-modal-target="#modal" class="pointer-btn main-buttons" id="new-task-btn">New Task</button>
    </header>
    <div class="modal" id="modal">
        <div class="modal-header">
            <div class="title">Create New Task</div>
            <button data-close-button class="pointer-btn close-button">&times;</button>
        </div>
        <br>
        <div class="modal-body">
            <form id="task-form" action="" method="post">
                <label for="title">Title:</label> <input type="text" name="title" id="title" maxlengh="200" minlength="1" placeholder="Enter a title to the task" required> <br> <br>
                <label for="description">Description:</label> <textarea form="task-form" id="description" name="description" rows="5" cols="50" placeholder="Enter a description to the task" maxlength="300" required></textarea> <br> <br>
                <label for="deadline">Deadline:</label> <input type="date" name="deadline" id="deadline" required> <br> <br>
                <input type="submit" value="Create" class="pointer-btn main-buttons" onclick='saveTask()'>
            </form>
        </div>
    </div>
    <div id="overlay-div"></div>
    <section id="task-section">
        <span id="no-tasks-span">No Tasks Registered</span>
    </section>
    <footer>        
    </footer>
</body>
</html>