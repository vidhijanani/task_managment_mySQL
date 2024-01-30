<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Task Storage</title>
</head>

<body>

    <div class="container mt-4">
        <h2 class="text-center display-5">Task Manager</h2>

        <form id="taskForm" method="POST" action="task_process.php" enctype="multipart/form-data">
            <div class="row">
                <!-- First Segment -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="taskTitle">Task Title:</label>
                        <input type="text" class="form-control" id="taskTitle" name="taskTitle" required>
                    </div>

                    <div class="form-group">
                        <label for="taskDescription">Task Description:</label>
                        <textarea class="form-control" id="taskDescription" name="taskDescription" rows="3" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="priority">Priority:</label>
                        <select class="form-control" id="priority" name="priority" required>
                            <option value="high">High</option>
                            <option value="low">Low</option>
                        </select>
                    </div>
                </div>

                <!-- Second Segment -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="dueDate">Due Date:</label>
                        <input type="date" class="form-control" id="dueDate" name="dueDate" required>
                    </div>

                    <div class="form-group">
                        <label for="estimateTime">Estimate Time (Minutes):</label>
                        <input type="number" class="form-control" id="estimateTime" name="estimateTime" required>
                    </div>

                    <div class="form-group">
                        <label for="status">Status:</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="attachments">Attachments:</label>
                        <input type="file" class="form-control-file" id="attachments" name="attachments">
                    </div>
                </div>
            </div>

            <!-- Button for both segments -->
            <div class="row justify-content-center mt-5">
                <div class="col-md-10 text-center">
                    <button type="submit" class="btn btn-lg btn-block btn-primary" name="addTask">Add Task</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
