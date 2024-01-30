<?php   
    require_once('config.php');
// <!-- get data from fields from add_task process  -->

if(isset($_POST['addTask'])){
    $taskTitle = $_POST['taskTitle'];
    $taskDescription = $_POST['taskDescription'];
    $priority = $_POST['priority'];
    $dueDate = $_POST['dueDate'];
    $estimateTime = $_POST['estimateTime'];
    $status = $_POST['status'];
    
    // get file 
    $folder     = 'uploads/';
    $fileName   = $_FILES['attachments']['name']; 
    $file       = $_FILES['attachments']['tmp_name']; 
    $move       = move_uploaded_file($file, $folder.$fileName);
    if($move){
        $sql = "INSERT INTO tasks (task_title,task_description,priority,due_date,estimate_time,status,attachment) 
                       VALUES ('$taskTitle','$taskDescription','$priority','$dueDate','$estimateTime','$status','$fileName')";
     
       $run = mysqli_query($conn, $sql);
       if ($run) {
        echo 'Entry successful';
    } else {
        echo 'Error occurred: ' . mysqli_error($conn);
    }
    }
}
