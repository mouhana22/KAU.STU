<?php
    
    session_start();
    $conn = mysqli_connect("sql112.infinityfree.com","if0_35511372","Slq9lylQxcLw13","if0_35511372_STU_KAU"); 
    
    if($conn === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    mysqli_set_charset($conn,'utf8');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $faculty = isset($_POST["faculty"] ) ? $_POST["faculty"]: '';
        $messageType = $_POST['feedbackType'];
        $section = implode(',', $_POST['section']);
        $text = $_POST['feedback'];

        $sql = "INSERT INTO `feedback-form` (`username`, `email`, `faculty`, `message-type`, `section`, `text`) 
                VALUES ('$name', '$email', '$faculty', '$messageType', '$section', '$text')";

        $sent = mysqli_query($conn, $sql);
        
        if($sent){
            $_SESSION['status'] = "inserted succesfully";
            header("location: ../HTML/Assignment2/feedback.php");
        }
        else
        {
            $_SESSION['status'] = "Failed";
            header("location: ../HTML/Assignment2/feedback.php");
        } 
    }
    
?>