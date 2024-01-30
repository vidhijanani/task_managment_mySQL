<?php 
    try {
        $conn = mysqli_connect("localhost","root","","task_management");
        if (!$conn) {
            die("". mysqli_connect_error());
        }
    } catch (\Throwable $th) {
        //throw $th;
        echo "<pre>",print_r($th->getMessage()),"</pre>";
        die();
    }
?>